@extends('layouts.main')
@section('main')
 
<div class="vh-50 df dfc jcc aic activities-header">
    <div class="container">
        <div class="row">
        <div class="col-md-12 df dfc jcc aic">
            <h1 class="text-center display-1 text-danger">FIS Activities</h1>
            <p class="fs-4 text-secondary text-center">
                Here are the regular activities of IUT Al-Fazari Interstellar Society. You can look at the details of each activity by clicking on the activity.
            </p>
        </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
    @foreach($activities as $n)
    <div class="row mt-5">
        <div class="col-12">
        <h1 class="fs-4"><span style="background-color: rgba(255, 46, 46, 0.279)"> &nbsp;{{date('j F Y', strtotime($n->date))}}&nbsp; </span></h1>
            <h1 class="display-5"><a href="/activity/{{$n->id}}" class="link-dark link-unstyled">{{$n->name}}</a></h1>
            <p class="lead text-secondary">
                {{$n->description ? substr($n->description, 0, 250) : ''}}
                ... <a href="/activity/{{$n->id}}">Read more</a>
            </p>
        </div>
    </div>
    <hr>
    @endforeach
    
</div>



<style>
    .activities-header{
        background-color: black;
    }

    .link-unstyled{
        text-decoration: none;
    }
</style>

@endsection