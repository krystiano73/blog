@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Osoby w systemie:  <p style="color:#ff0000">{{ $blogs ->total() }} </h3></p>
           Andrzej:     {{ $osoba ?? '' }}
                PŁK:     {{ $users ?? '' }}
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Dodaj osobę</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>L.p</th>
            <th>Stopień</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Imię Ojca</th>
            <th width="250px">Akcje</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->stopien }}</td>
            <td>{{ $blog->imie }}</td>
            <td>{{ $blog->nazwisko }}</td>
            <td>{{ $blog->imieojca }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Pokaż</a>

                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edytuj</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Usuń</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $blogs->links() !!}

@endsection
