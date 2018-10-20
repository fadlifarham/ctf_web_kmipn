@extends('ubase')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h2 class="username">Selamat Datang Tim {{ $user->nama_tim }}</h2>
                        </div>
                        <div class="box-body">
                            <div class="col-md-5">
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>{{ $user->score }}</h3>
                                        <p>Score Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>* Jika mengalami masalah bisa mengubungi email kmipn2018@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection