@extends('bron.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

                <h2>Broń w systemie: {{ $bron->total() }}</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bron.create') }}"> Dodaj broń</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered yajra-datatable">
        <tr>
            <th>L.p</th>

            <th>Nazwa broni</th>
            <th>Numer broni</th>
            <th>Rok Produkcji</th>
            <th width="250px">Akcje</th>
        </tr>
        @foreach ($bron as $bron)
        <tr>
            <td>{{ ++$i }}</td>


                        <td>{{ $bron->nazwa }}</td>



            <td>{{ $bron->numer }}</td>

            <td>{{ $bron->rokprodukcji }}</td>

            <td>
                <form action="{{ route('bron.destroy',$bron->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('bron.show',$bron->id) }}">Pokaż</a>

                    <a class="btn btn-primary" href="{{ route('bron.edit',$bron->id) }}">Edytuj</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Usuń</button>


                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
