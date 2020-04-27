@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}<span class="float-right"> <a href="/dashboard" class="btn btn-primary btn-xs">Back</a> </span></div>

                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">Address: {{$listing->address}}</li>
                        <li class="list-group-item">Webiste: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                        <li class="list-group-item">Email: {{$listing->email}}</li>
                        <li class="list-group-item">Phone: {{$listing->phone}}</li>

                    </ul>  
                    <div class="card card-body">
                    {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
