@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <form action="{{ route('createNewSong')}}" method="post">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <label for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="artist">{{__('Artist')}}</label>
                            <input type="text" class="form-control" id="artist" name="artist" />
                        </div>
                        <div class="form-group">
                            <label for="album">{{__('Album')}}</label>
                            <input type="text" class="form-control" id="album" name="album" />
                        </div>
                        <div class="form-group">
                            <label for="year">{{__('Year')}}</label>
                            <input type="text" class="form-control" id="year" name="year" />
                        </div>
                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
