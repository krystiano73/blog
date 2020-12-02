@extends('magazyns.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Broń</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('magazyns.index') }}">Powrót</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nazwisko:</strong>
               {{ $magazyn->blog->nazwisko }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Broń:</strong>
                {{ $magazyn->brons->nazwa }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer broni:</strong>
                    {{ $magazyn->brons->numer }}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Numer szafy:</strong>
                        {{ $magazyn->numerszafy }}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Numer stanowiska:</strong>
                            {{ $magazyn->numerstanowiska }}
                        </div>

        </div>
    </div>
@endsection
