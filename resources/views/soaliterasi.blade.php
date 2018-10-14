@if($status->status == true)
    {{ redirect('/') }}
@endif

@extends('ubase')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Soal
            </h1>
            <small>{{ $soal->id }} / 50</small>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">


                            <form action="{{ url('submit') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        {{ $soal->pertanyaan }}
                                    </div>
                                    <div class="box-body">
                                        <input type="radio" name="pilihan" value="{{ $pilihan->pilihan1 }}" />
                                        {{ $pilihan->pilihan1  }} <br><br>
                                        <input type="radio" name="pilihan" value="{{ $pilihan->pilihan2 }}" />
                                        {{ $pilihan->pilihan2  }} <br><br>
                                        <input type="radio" name="pilihan" value="{{ $pilihan->pilihan3 }}" />
                                        {{ $pilihan->pilihan3  }} <br><br>
                                        <input type="radio" name="pilihan" value="{{ $pilihan->pilihan4 }}" />
                                        {{ $pilihan->pilihan4  }} <br><br>
                                        <input type="radio" name="pilihan" value="{{ $pilihan->pilihan5 }}" />
                                        {{ $pilihan->pilihan5  }} <br><br>

                                        <input type="hidden" name="id" value="{{ $soal->id }}">
                                    </div>
                                </div>
                                <div>
                                    <input class="btn btn-info" type="submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection