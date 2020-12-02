@extends('bron.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Broń</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bron.index') }}">Powrót</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nazwa:</strong>
                {{ $bron->nazwa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numer:</strong>
                {{ $bron->numer }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rok produkcji:</strong>
                    {{ $bron->rokprodukcji }}
                </div>

        </div>
    </div>
@endsection
