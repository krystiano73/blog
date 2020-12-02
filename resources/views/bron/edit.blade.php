@extends('bron.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja broni</h2>
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

    <form action="{{ route('bron.update',$bron->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rodzaj broni:</strong>
                    <input type="text" name="nazwa_id" value="{{ $bron->nazwa }}" class="form-control" placeholder="Nazwa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer broni</strong>
                    <textarea class="form-control" style="height:150px" name="numer" placeholder="numer">{{ $bron->numer }}</textarea>
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Rok produkcji</strong>
                     <textarea class="form-control" style="height:150px" name="rokprodukcji" placeholder="numer">{{ $bron->rokprodukcji }}</textarea>
                 </div>
             </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Wyślij</button>
            </div>
        </div>

    </form>
@endsection
