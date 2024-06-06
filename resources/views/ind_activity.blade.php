@extends('layouts.main')
@section('main')

<div class="vh-50 df dfc jcc aic activity-header-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 df dfc aic jcc">
                <h1 class="display-2 text-danger">{{$activity->name}}</h1>
                <h1 class="display-6 text-light mt-3">{{date('j F Y', strtotime($activity->date))}}</h1>
                <a href="{{$activity->social_media_link}}" class="btn btn-outline-light mt-3">Visit Event on Social Media</a>
            </div>
        </div>
    </div>
</div>



<style>
    .activity-header-dark{
        background-color: black;
    }
</style>

@endsection