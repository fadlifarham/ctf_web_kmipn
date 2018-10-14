@extends('ubase')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Soal
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    {{--<div class="nav-tabs-custom">--}}
                        <div class="invoice">

                            @foreach($soal as $item)
                                @php
                                    $i = 0
                                @endphp
                                @foreach($status as $stat)
                                    @if($stat->id_soal == $item->id && $stat->status == true)
                                        @php
                                            $i++
                                        @endphp
                                        <div class="box box-header bg-gray">
                                            <a href="{{ url('soal', $item->id) }}" class="gbs">
                                                <span>{{ $item->pertanyaan }}</span>
                                            </a>
                                            <span></span>
                                        </div>
                                    @endif
                                @endforeach
                                    @if($i == 0)
                                        <div class="box box-header">
                                            <a href="{{ url('soal', $item->id) }}">
                                                <span>{{ $item->pertanyaan }}</span>
                                            </a>
                                        </div>
                                    @endif
                            @endforeach

                        </div>
                    {{--</div>--}}
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection