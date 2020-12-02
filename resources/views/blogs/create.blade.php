@extends('blogs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Dodawanie osoby</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('blogs.index') }}">Powrót</a>
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

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stopień:</strong>
                <input type="text" name="stopien" class="form-control" placeholder="stopien">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Imię:</strong>
                 <input type="text" name="imie" class="form-control" placeholder="imie">
             </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Imię ojca:</strong>
                 <input type="text" name="imieojca" class="form-control" placeholder="imieojca">
             </div>
         </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nazwisko:</strong>
                <input type="text" name="nazwisko" class="form-control" placeholder="nazwisko">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
