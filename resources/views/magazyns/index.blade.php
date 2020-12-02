@extends('magazyns.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Magazyn</h2>

                {{ $magazyns->total() }}

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('magazyns.create') }}"> Dodaj pozycję</a>
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

            <th>Stop.</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Typ broni</th>
            <th>Numer broni</th>
            <th>Rok prod.</th>
            <th>Nr szafy</th>
            <th>Nr stan.</th>
            <th>R-z</th>

            <th>Obsługa</th>
            <th>Uwagi</th>
            <th width="250px">Akcje</th>
        </tr>
        @foreach ($magazyns as $magazyn)
        <tr>
            <td>{{ ++$i }}</td>

            <td>{{ $magazyn->blog->stopien }}</td>
            <td>{{ $magazyn->blog->imie }}</td>
            <td>{{ $magazyn->blog->nazwisko }}</td>
            <td>{{ $magazyn->brons->nazwa }}</td>
            <td>{{ $magazyn->brons->numer }}</td>
            <td>{{ $magazyn->brons->rokprodukcji }}</td>

            <td>{{ $magazyn->numerszafy }}</td>
            <td>{{ $magazyn->numerstanowiska }}</td>
            <td>{{ $magazyn->rozkazprzydzial}}</td>

            <td>{{ $magazyn->obsluga}}</td>
            <td>{{ $magazyn->uwagi}}</td>

            <td>
                <form action="{{ route('magazyns.destroy',$magazyn->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('magazyns.show',$magazyn->id) }}">Pokaż</a>

                    <a class="btn btn-primary" href="{{ route('magazyns.edit',$magazyn->id) }}">Edytuj</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Usuń</button>


                </form>
            </td>
        </tr>
        @endforeach
    </table>





@endsection
