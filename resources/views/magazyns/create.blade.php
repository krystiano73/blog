@extends('magazyns.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Dodaj</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('magazyns.index') }}">Powrót</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Błąd!</strong>Coś poszło nie tak<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('magazyns.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select class="form-control" name="blogs_id">
                option value="">--- Wybierz osobę ---</option>
                    @foreach ( $magazyns_blogs as $b )
                        <option value="{{ $b->id }}">{{$b->stopien }} {{$b->imie }} {{$b->nazwisko }} </option>
                    @endforeach
                    </select>

            </div>
        </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <select class="form-control" name="brons_id">
                     option value="">--- Wybierz broń ---</option>
                     @foreach ( $magazyns_brons as $x )
                         <option value="{{ $x->id }}">{{$x->nazwa }} {{$x->numer }} </option>
                     @endforeach
                 </select>
             </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Numer Szafy:</strong>
                 <input type="text" name="numerszafy" class="form-control" placeholder="">
             </div>
         </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numer Stanowiska:</strong>
            <input type="text" name="numerstanowiska" class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rozkaz przydział:</strong>
            <input type="text" name="rozkazprzydzial" class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Obsługa:</strong>
            <input type="text" name="obsluga" class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Uwagi:</strong>
            <input type="text" name="uwagi" class="form-control" placeholder="">
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
    </div>

</form>
@endsection
