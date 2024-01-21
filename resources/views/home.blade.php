@extends("main")
@section("title", "Todas las canciones")
@section("contain")
    <h1>Todas las canciones</h1>
    @if(session("message"))
        <h3 style="color: blue;">{{ session("message") }}</h3>
    @endif
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Artista</th>
            <th>Álbum</th>
            <th>Año</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($songs as $song)
            <tr>
                <td>{{ $song->name }}</td>
                <td>{{ $song->artist }}</td>
                <td>{{ $song->album }}</td>
                <td>{{ $song->year }}</td>
                <td>
                    <a href="{{ route('editSong', ['id' => $song->id])}}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('removeSong', ['id' => $song->id])}}">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
