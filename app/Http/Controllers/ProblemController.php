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

class ProblemController extends Controller
{

// CRUD

        // hapus sementara
        public function hapus($id)
        {
            $problem= Problem::find($id);
            $problem->delete();

            return redirect('/problem');
        }

        public function editproblem($id)
        {
            $problem = DB::table('problem')->where('id',$id)->get();
            return view('editproblem',['problem' => $problem]);
     
        }

        public function update(Request $request)
        {
        $solution = explode(",",$request->solution);
        DB::table('problem')->where('id',$request->id)->update([

            'code' => $request->code,
            'name' => $request->name,
            'notes' => $request->notes,
            'solution' => $solution,
        ]);
        return redirect('/problem');
        }



}