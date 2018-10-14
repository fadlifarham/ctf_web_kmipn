@extends('ubase')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Score Board
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">

                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama Tim</th>
                                            <th>Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $sc)
                                            <tr>
                                                <td>{{ $sc->username }}</td>
                                                <td>{{ $sc->score }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection