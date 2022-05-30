<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    // public function konsultasi()
    // {

    //     $evidence = Evidence::all();

    //     return view('konsultasi', ['evidence' => $evidence]);
    // }


    public function store(Request $request)
    {
        // ambil gejala
        $tt = DB::table('rule')
            ->select('rule.cf', DB::raw('GROUP_CONCAT(problem.code) as problem_code'))
            ->join('problem', 'rule.id_problem', '=', 'problem.id')
            ->whereIn('rule.id_evidence', $request->evidence)
            ->groupByRaw('rule.cf')
            ->get();

        $evidence = array();
        $gejalaTemp = array();
        $count = 0;
        foreach ($tt as $t) {

            $evidence[$count][0] = $t->problem_code;
            $evidence[$count][1] = $t->cf;
            $gejalaTemp[$count] = $t->problem_code;
            $count++;
        }

        // environment
        // $fod = Problem::pluck('code');
        $fod = 'SD1,SD2,SD3,SD4';



        //--- menentukan nilai densitas
        $densitas_baru = array();
        while (!empty($evidence)) {
            $densitas1[0] = array_shift($evidence);
            $densitas1[1] = array($fod, 1 - $densitas1[0][1]);
            $densitas2 = array();
            if (empty($densitas_baru)) {
                $densitas2[0] = array_shift($evidence);
            } else {
                foreach ($densitas_baru as $k => $r) {
                    if ($k != "&theta;") {
                        $densitas2[] = array($k, $r);
                    }
                }
            }
            $theta = 1;
            foreach ($densitas2 as $d) $theta -= $d[1];
            $densitas2[] = array($fod, $theta);
            $m = count($densitas2);
            $densitas_baru = array();
            for ($y = 0; $y < $m; $y++) {
                for ($x = 0; $x < 2; $x++) {
                    if (!($y == $m - 1 && $x == 1)) {
                        $v = explode(',', $densitas1[$x][0]);
                        $w = explode(',', $densitas2[$y][0]);
                        sort($v);
                        sort($w);
                        $vw = array_intersect($v, $w);
                        if (empty($vw)) {
                            $k = "&theta;";
                        } else {
                            $k = implode(',', $vw);
                        }
                        if (!isset($densitas_baru[$k])) {
                            $densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
                        } else {
                            $densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
                        }
                    }
                }
            }
            foreach ($densitas_baru as $k => $d) {
                if ($k != "&theta;") {
                    $densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
                }
            }
            // echo "<pre>";
            // print_r($densitas_baru);
            // echo "<pre>";
        }

        //--- perangkingan
        unset($densitas_baru["&theta;"]);
        arsort($densitas_baru);
        // echo "----------------";
        // echo "<pre>";
        // print_r($densitas_baru);
        // echo "<pre>";


        // echo ">>>>>>>>>>>>>>>>>>>>>>";


        $codes = array_keys($densitas_baru);
        
        // echo "<pre>";
        // print_r($codes);
        // echo "<pre>";
        $arrCode = explode(',', $codes[0]);
        $tt = DB::table('problem')
            ->select(DB::raw('group_concat(name) as name'))
            ->whereIn('code', $arrCode)
            ->groupByRaw('name')
            ->get();
        
        $percent = round($densitas_baru[$codes[0]] * 100, 2);
        // dd($percent);
        // $sql = "SELECT GROUP_CONCAT(name) 
	    // FROM ds_problems 
	    // WHERE code IN('{$codes[0]}')";
        // $result = $db->query($sql);
        // $row = $result->fetch_row();
        // echo "Terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan " . round($densitas_baru[$codes[0]] * 100, 2) . "%";
        
    	return view('pp', compact('percent', 'tt'));
    }
}
