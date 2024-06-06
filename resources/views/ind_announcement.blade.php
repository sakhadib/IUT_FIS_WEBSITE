@extends('layouts.main')
@section('main')

<div class="vh-50">
    <div class="container">
        <div class="row vh-10">

        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1">
                    {{date('j F Y',strToTime($announcement->created_at))}}
                </h1>
                <p class="fs-3">From <span class="l">{{$member->name}}</span>, {{$executive->position}} ({{$executive->panel_range}})
                    at <code>{{date('g:i a',strToTime($announcement->created_at))}}</code> 
                </p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    {{$announcement->content}}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection