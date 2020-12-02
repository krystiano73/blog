@extends('bron.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Dodaj broń</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('bron.index') }}">Powrót</a>
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

<form action="{{ route('bron.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <select class="form-control" name="nazwa">
                option value="">--- Wybierz broń ---</option>

                        <option>WIST 94</option>
                        <option>P-83</option>
                        <option>P-64</option>
                        <option>BERYL C</option>
                        <option>kbk AKMS</option>

                    </select>
            </div>
        </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Numer broni:</strong>
                 <input type="text" name="numer" class="form-control" placeholder="">
             </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Rok produkcji:</strong>
                 <input type="text" name="rokprodukcji" class="form-control" placeholder="">
             </div>
         </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
    </div>

</form>
@endsection
