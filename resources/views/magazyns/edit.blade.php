@extends('magazyns.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja</h2>
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

    <form action="{{ route('magazyns.update',$magazyn->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stopień:</strong>
                    <input type="text" name="stopien" value="{{ $magazyn->blog->stopien}}" class="form-control" placeholder="stopien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię</strong>
                    <textarea class="form-control" style="height:150px" name="blogs_id" placeholder="">{{ $magazyn->blog->imie }}</textarea>
                </div>
            </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nazwisko</strong>
                     <textarea class="form-control" style="height:150px" name="blogs_id" placeholder="">{{ $magazyn->blog->nazwisko }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Typ broni</strong>
                     <textarea class="form-control" style="height:150px" name="brons_id" placeholder="numer">{{  $magazyn->brons->nazwa }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nr broni</strong>
                     <textarea class="form-control" style="height:150px" name="nazwa" placeholder="numer">{{  $magazyn->brons->numer }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nr szafy</strong>
                     <textarea class="form-control" style="height:150px" name="numerszafy" placeholder="numer">{{  $magazyn->numerszafy }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nr stanowiska</strong>
                     <textarea class="form-control" style="height:150px" name="numerstanowiska" placeholder="numer">{{  $magazyn->numerstanowiska }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>R-z</strong>
                     <textarea class="form-control" style="height:150px" name="rozkaz" placeholder="rozkaz">{{  $magazyn->rozkaz }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Obsługa</strong>
                     <textarea class="form-control" style="height:150px" name="obsługa" placeholder="obsługa">{{  $magazyn->obsluga }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Uwagi</strong>
                     <textarea class="form-control" style="height:150px" name="uwagi" placeholder="uwagi">{{  $magazyn->uwagi }}</textarea>
                 </div>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Wyślij</button>
            </div>
        </div>

    </form>
@endsection
