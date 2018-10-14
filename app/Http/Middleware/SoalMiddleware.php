<?php
/**
 * Created by PhpStorm.
 * User: fadli
 * Date: 14/10/2018
 * Time: 18:09
 */

namespace App\Http\Middleware;


use App\ModelSoal;
use App\ModelStatus;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Closure;

class SoalMiddleware
{
    public function handle($request, Closure $next) {
        $id_soal = $request->route('id_soal');

        $user = ModelUser::where('email', Session::get('email'))->first();
        $id_user = $user->id;

        $soal = ModelSoal::all();
        $total = count($soal);

        $status = ModelStatus::where([
            ['id_user', $id_user],
            ['id_soal', $id_soal]
        ])->first();

        if ($status->status == true) {
            return redirect('soal');
        }

        if ($id_soal > $total) {
            return redirect('/');
        }
        return $next($request);

    }
}