@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja osoby</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
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

    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stopień:</strong>
                    <input type="text" name="stopien" value="{{ $blog->stopien}}" class="form-control" placeholder="stopien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię:</strong>
                    <textarea class="form-control" style="height:150px" name="imie" placeholder="Description">{{ $blog->imie }}</textarea>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nazwisko:</strong>
                     <textarea class="form-control" style="height:150px" name="nazwisko" placeholder="Description">{{ $blog->nazwisko }}</textarea>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Imię ojca:</strong>
                     <textarea class="form-control" style="height:150px" name="imieojca" placeholder="Description">{{ $blog->imieojca }}</textarea>
                 </div>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
