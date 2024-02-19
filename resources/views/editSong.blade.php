@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <form
                        @if(isset($song))
                            action="{{ route('saveSongChanges')}}"
                        @else
                            action="{{ route('createNewSong')}}"
                        @endif
                        method="post">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <label for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   @if(isset($song))
                                       value="{{$song->name}}"
                                @endif
                            />
                        </div>
                        <div class="form-group">
                            <label for="artist_id">{{__('Artist')}}</label><br/>
                            <select class="form-select" name="artist_id" id="artist_id">
                                @foreach ($artist as $item)
                                    <option value="{{ $item->id }}"
                                            @if (isset($song) && ($item->id == $song->artist_id))
                                                selected="selected"
                                        @endif
                                    >{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="album">{{__('Album')}}</label>
                            <input type="text" class="form-control" id="album" name="album"
                               @if(isset($song))
                                   value="{{$song->album}}"
                               @endif
                            />
                        </div>
                        <div class="form-group">
                            <label for="year">{{__('Year')}}</label>
                            <input type="number" min="0" max="2200" class="form-control" id="year" name="year"
                               @if(isset($song))
                                   value="{{$song->year}}"
                                @endif
                            />
                        </div>
                        @if(isset($song))
                            <input type="hidden" id="id" name="id" value="{{$song->id}}">
                        @endif
                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
