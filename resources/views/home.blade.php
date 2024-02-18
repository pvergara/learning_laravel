@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <h1>{{__('All songs')}}</h1>

                        <table class="table">
                            <thead class="card-header-tabs">
                            <tr>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Artist')}}</th>
                                <th>{{__('Album')}}</th>
                                <th>{{__('Year')}}</th>
                                @if (!Auth::guest())
                                    <th>{{__('Edit')}}</th>
                                    <th>{{__('Delete')}}</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody class="body">
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{ $song->name }}</td>
                                    <td>{{ $song->artist }}</td>
                                    <td>{{ $song->album }}</td>
                                    <td>{{ $song->year }}</td>
                                    @if (!Auth::guest())
                                        <td>
                                            <a href="{{ route('editSong', ['id' => $song->id])}}">{{__('Edit')}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('removeSong', ['id' => $song->id])}}">{{__('Delete')}}</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br/>
                        <br/>
                        @if (!Auth::guest())
                            <a href="{{route('addSong')}}">{{__('Add new song')}}</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
