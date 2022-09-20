@extends('layouts.template_siswa')
@section('contents')
<x-alert/>
<div>
    <div class="card card-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                          
                                <div class="table-responsive mt-4">    

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div>
                                                            
        <?php $i = 1; ?>
        <?php $cocote = 0; ?>
                                                           <form action="{{ route('siswa_soal_store') }}" method="post">
                                                                @csrf
                                                                @foreach($soal as $p)
                                                                <input type="hidden" value="{{ $p->jawaban }}" name="soal{{ $cocote }}[]"/>
                                                                <input type="hidden" value="{{ $p->soal_idid }}" name="soal{{ $cocote }}[]"/>
                                                                {{-- {{ $p->total }} --}}
                                                                    <div>
                                                                        <div class="form-group">
                                                                                    {{ $loop->iteration }}. {{ $p->soal }}
                                                                        <div class="question">
                                                                            <br>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="soal{{ $cocote }}[]" class="optradio" value="{{ $p->opsi_a }}"> {{ $p->opsi_a }}
                                                                            </label>
                                                                            <br>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="soal{{ $cocote }}[]" class="optradio" value="{{ $p->opsi_b }}"> {{ $p->opsi_b }}
                                                                            </label>
                                                                            <br>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="soal{{ $cocote }}[]" class="optradio" value="{{ $p->opsi_c }}"> {{ $p->opsi_c }}
                                                                            </label>
                                                                            <br>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="soal{{ $cocote }}[]" class="optradio" value="{{ $p->opsi_d }}"> {{ $p->opsi_d }}
                                                                            </label>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                    <?php $cocote++; ?>
                                                                @endforeach
                                                                <input type="submit" class="btn btn-primary" value="submit"> 
                                                            </form>
                                                            {{-- {{ $soal }} --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>


        <?php $i++; ?>
    </div>
        @endsection