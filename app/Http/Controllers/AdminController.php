<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Alert;
use Carbon\Carbon;
use App\Evidence;
use App\Problem;
use App\Pasien;
use App\Charts\AdminChart;

class AdminController extends Controller
{


    public function beranda()
    {
        $pasien = Pasien::all()->count();
        $evidence = Evidence::all()->count();
        $problem = Problem::all()->count();
        // $evidence = Evidence::where('status', 'Pasif')->count();
        // $aktif = Pegawai::where('status', 'Aktif')->count();
                    
        return view('beranda', ['pasien' => $pasien, 'evidence' => $evidence, 'problem' => $problem]);
    }
    
    // public function chart()
    // {
    //     $pasien = new AdminChart;
    //     // $pasien->(['Perempuan', 'Laki Laki']);
    //     // $pasien->dataset('Users by trimester', 'line', [10, 25, 13]);
    //     return view('beranda', [ 'pasien' => $pasien ] );
    // }

    public function evidence()
    {
        $evidence = Evidence::all();

        return view('evidence', ['evidence' => $evidence]);
    }


    public function rule()
    {
    	$problem = Problem::get();
    	return view('rule', ['problem' => $problem]);
    }

    public function coba()
    {
    	$problem = Problem::get();
    	return view('rule', ['problem' => $problem]);
    }

    public function problem()
    {
        $problem = Problem::all();

        return view('problem', ['problem' => $problem]);
    }

    public function pasien(Request $request)
    {
        $pasien = Pasien::All();
        $i = 0;
        foreach($pasien as $t){
            
            $evidence = DB::table('evidence')
                        ->select('name')
                        ->whereIn('evidence.id', json_decode($t->evidence))
                        ->get()->toArray();
            $problem = DB::table('problem')
                        ->select('name')
                        ->whereIn('problem.id', json_decode($t->problem))
                        ->get()->toArray();

            $pasien[$i]->setAttribute('evidence_name', $evidence);
            $pasien[$i++]->setAttribute('problem_name', $problem);
            
        }

        // dd($pasien);
        // dd($pasien);
        // dd($pasien);

        return view('pasien', ['pasien' => $pasien]);
    }


    public function login()
    {
        return view('login');
    }

    public function proses()
    {
        return view('proses');
    }

    // -- CRUD PROBLEM --



    // -- CRUD EVIDENCE --


    public function lihat($id) {
		$pasien = Pasien::find($id);
		return view('lihat',['pasien' => $pasien]);
	}


    public function edit($id)
    {
        $evidence = DB::table('evidence')->where('id',$id)->get();
        return view('edit',['evidence' => $evidence]);
     
    }

    public function update(Request $request)
    {
	DB::table('evidence')->where('id',$request->id)->update([
		'code' => $request->code,
		'name' => $request->name,
	]);
	return redirect('/evidence');
    }

    // hapus sementara
    public function hapus($id)
    {
            $evidence= Evidence::find($id);
            $evidence->delete();
    
            return redirect('/evidence');
    }

    public function evidencetrash()
    {
    	// mengampil data guru yang sudah dihapus
    	$evidence = Evidence::onlyTrashed()->paginate(10);
    	return view('evidencetrash', ['evidence' => $evidence]);
    }
    
                 //  INPUT
    public function store(Request $request)
    {
        $messages = [
			'required' => ' Kolom :attribute wajib diisi',

		];
        $this->validate(request(), [
            'code' => 'required',
			'name' => 'required',
        ],$messages);

        Evidence :: create([
			'code' => $request->code,
			'name' => $request->name,
        ]);
        
        return redirect('/evidence');
        
    }
    

    // -- END CRUD--

   public function datagejala()
    {
        return view('datagejala');
    }

    public function tambahevidence()
    {
        return view('tambahevidence');
    }
    
    
}
