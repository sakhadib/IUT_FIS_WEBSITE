@extends('layouts.main')
@section('main')

<div class="df dfc jcc aic activity-header-dark">
    <div class="container">
        <div class="row vh-20">

        </div>
        <div class="row">
            <div class="col-12 df dfc aic jcc">
                <h1 class="display-2 text-danger">{{$activity->name}}</h1>
                <h1 class="display-6 text-light mt-3">{{date('j F Y', strtotime($activity->date))}}</h1>
                <a href="{{$activity->social_media_link}}" class="btn btn-lg btn-outline-light mt-3">Visit Event</a>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <p class="fs-5 text-secondary" style="text-align: justify">
                    {!! nl2br($activity->description) !!}
                </p>
            </div>
            <div class="col-md-12 df jcfe">
                <p class="fs-6 text-secondary">- Created At {{date('j F Y \a\t g:i A', strtotime($activity->created_at))}}</p>
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