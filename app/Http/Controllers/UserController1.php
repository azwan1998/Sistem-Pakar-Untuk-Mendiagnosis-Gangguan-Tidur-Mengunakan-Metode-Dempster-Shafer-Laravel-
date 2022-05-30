<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Alert;
use App\Evidence;
use App\Problem;

class UserController extends Controller
{


    // public function adminHome()
    // {
    //     $seluruh = Pegawai::all()->count();
    //     $pasif = Pegawai::where('status', 'Pasif')->count();
    //     $aktif = Pegawai::where('status', 'Aktif')->count();
                    
    //     return view('adminHome', ['seluruh' => $seluruh, 'pasif' => $pasif, 'aktif' => $aktif]);
    // }

    public function userhome()
    {
        $evidence = Evidence::all();

        return view('userhome', ['evidence' => $evidence]);
    }

    public function hasildiagnosa()
    {
        return view('hasildiagnosa');
    }

 
    public function store(Request $request)
    {
	// insert data ke table pegawai
    // dd($request);
    //logika perhitungan
    // $densitas_baru = array();
    // while (!empty($request)){

    // }

    //ambil gejala

    $evidence = DB::table('evidence_problem')
                ->select('evidence_problem.evidence_id','evidence_problem.cf', DB::raw('GROUP_CONCAT(problem.code) as problem_code'))
                ->join('problem', 'evidence_problem.problem_id', '=', 'problem.id')
                ->whereIn('evidence_problem.evidence_id', $request->evidence)
                ->groupByRaw('evidence_problem.evidence_id, evidence_problem.cf')
                ->get();
    

    dd($evidence);

    // environment
    $fod = Problem::pluck('code');

    

    // $fod = DB::table('problem')
    //         ->select('problem.code', DB::raw('GROUP_CONCAT(problem.code) as code'))
    //         ->groupByRaw('code')
    //         ->get();
        

        // dd($evidence);

	// DB::table('pasien')->insert([
	// 	'nama' => $request->nama,
	// 	'usia' => $request->usia,
	// 	'jeniskel' => $request->jeniskel,
    //     'evidence' => implode ($request->evidence),
        
	// ]);

//     $stack = array("0.6", "11", "0.7", "1.1");
// $fruit = array_shift($stack); // Here you give the parameter
// // print_r($fruit);

// dd($fruit);

    //perhitungan
    // --- menentukan nilai densitas
//     $densitas_baru=array(); 
//             while(!empty($evidence)){
//             $densitas1[0]=array_shift($evidence); 
//             $densitas1[1]=array($fod,1-$densitas1[0][1]);
// 	        $densitas2=array(); 
//             if(empty($densitas_baru)){
//                 $densitas2[0]=array_shift($fod);
//             }else{
//                 foreach($densitas_baru as $k=>$r){
//                     if($k!="&theta;"){
//                         $densitas2[]=array($k,$r);
//                     }
//                 }
//             }
//             $theta=1;
//             foreach($densitas2 as $d) $theta-=$d[1];
//             $densitas2[]=array($fod,$theta);
//             $m=count($densitas2);
//             $densitas_baru=array();
//             for($y=0;$y<$m;$y++){
//                 for($x=0;$x<2;$x++){
//                     if(!($y==$m-1 && $x==1)){
//                         $v=explode(',',$densitas1[$x][0]);
//                         $w=explode(',',$densitas2[$y][0]);
//                         sort($v);
//                         sort($w);
//                         $vw=array_intersect($v,$w);
//                         if(empty($vw)){
//                             $k="&theta;";
//                         }else{
//                             $k=implode(',',$vw);
//                         }
//                         if(!isset($densitas_baru[$k])){
//                             $densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
//                         }else{
//                             $densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
//                         }
//                     }
//                 }
//             }
//             foreach($densitas_baru as $k=>$d){
//                 if($k!="&theta;"){
//                     $densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
//                 }
//             }
//             print_r($densitas_baru);

           
// //--- perangkingan
// unset($densitas_baru["&theta;"]);
// arsort($densitas_baru);
// print_r($densitas_baru);


       



	return redirect('/userhome');
    
 
}
}
// }