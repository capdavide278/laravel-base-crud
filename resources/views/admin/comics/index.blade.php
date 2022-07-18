@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table>
            <thead>
                <th>
                    <td>id</td>
                    <td>autore</td>
                    <td>descrizione</td>
                    <td>genere</td>
                    <td>price</td>
                </th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->autore }}</td>
                        <td>{{ $comic->descrizione }}</td>
                        <td>{{ $comic->genere }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection