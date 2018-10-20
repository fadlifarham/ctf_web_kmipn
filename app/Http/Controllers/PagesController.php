<?php
/**
 * Created by PhpStorm.
 * User: fadli
 * Date: 14/10/2018
 * Time: 10:25
 */

namespace App\Http\Controllers;


use App\ModelPilihan;
use App\ModelSoal;
use App\ModelStatus;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PagesController
{
    public function soal() {
        $data['user'] = ModelUser::where('email', Session::get('email'))->first();
        $user = ModelUser::where('email', Session::get('email'))->first();
        $id = (int) $user->id;
        $data['soal'] = ModelSoal::all();
        $data['pilihan'] = ModelPilihan::all();
        $data['status'] = ModelStatus::where('id_user', $id)->get();

        return view('soal', $data);
    }

    public function viewSoal($id_soal) {
        $user = ModelUser::where('email', Session::get('email'))->first();
        $id_user = $user->id;
        $data['soal'] = ModelSoal::where('id', $id_soal)->first();
        $data['pilihan'] = ModelPilihan::where('id', $id_soal)->first();
        $data['status'] = ModelStatus::where([
            ['id_user', $id_user],
            ['id_soal', $id_soal]
        ])->first();

        return view('soaliterasi', $data);
    }

    public function submit(Request $request) {
        $pilihan_user = (string) $request->pilihan;
        $id_soal = (int) $request->id;


        $user = ModelUser::where('email', Session::get('email'))->first();
        $id_user = $user->id;
        $soal = ModelSoal::where('id', $id_soal)->first();
        $benar = (string) $soal->benar;

        $status = ModelStatus::where([
           ['id_user', $id_user],
           ['id_soal', $id_soal]
        ])->first();



        $score = (int) $user->score;
        if (strcmp($benar, $pilihan_user) == 0) {
            $score += 2;
            $user->update(['score' => $score]);
        }

        $status->update(['status' => true]);

        return redirect('soal/'.$id_soal+=1);
    }

    public function score() {
        $data['user'] = ModelUser::orderBy('score', 'desc')->get();

        return view('score', $data);
    }
}