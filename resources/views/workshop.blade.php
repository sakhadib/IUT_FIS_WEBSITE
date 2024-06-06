@extends('layouts.main')
@section('main')

<div class="vh-55 df dfc jcc aic ws-header-black">
    <div class="container">
        <div class="row">
            <div class="col-12 df dfc jcc aic">
                <h1 class="display-1 text-success text-center">
                    @if($menuID == 'all')
                        All Workshops
                    @elseif($menuID == 'iut')
                        Upcoming In IUT Workshops
                    @elseif($menuID == 'out')
                        Upcoming Outside Workshops
                    @elseif($menuID == 'iutprev')
                        Previous In IUT Workshops
                    @elseif($menuID == 'outprev')
                        Previous Outside Workshops
                    @else
                        Upcoming Workshops
                    @endif
                </h1>
                <p class="fs-4 text-secondary text-center">
                    We have a variety of workshops coming up. Check them out below.
                </p>
            </div>
        </div>
        <div class="row mt-4 d-none d-md-block">
            <div class="col-md-12 df jcc aic">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a id="iut" href="/workshops/iut" class="btn btn-outline-light" >Upcoming In IUT Workshops</a>
                    <a id="out" href="/workshops/out" class="btn btn-outline-light">Upcoming Outside Workshops</a>
                    <a id="iutprev" href="/workshops/iut/prev" class="btn btn-outline-light">Previous In IUT Workshops</a>
                    <a id="outprev" href="/workshops/out/prev" class="btn btn-outline-light">Previous Outside Workshops</a>
                    <a id="all" href="/workshops/all" class="btn btn-outline-light">All Workshops</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-5 mt-5">
        @foreach($workshops as $workshop)
        <div class="col-md-6 mt-4">
            <div class="ws-card">
                <div class="container">
                    <div class="row">
                        <div class="col-5 ws-date-sec df dfc jcc aic">
                            <h1 class="text-success display-1" style="margin: 0">{{ date('d', strtotime($workshop->date)) }}</h1>
                            <h1 class="text-light fs-4">{{ date('F', strtotime($workshop->date)) }}</h1>
                            <div class="ws-time-card mb-2 df dfc jcc aic">
                                <h1 class="text-light fs-6 text-center" style="margin: 0">{{ date('h:i A', strtotime($workshop->start_time)) }}</h1>
                            </div>
                        </div>
                        <div class="col-7">
                            <h1 class="fs-3 mt-3">{{ $workshop->topic }}</h1>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-2 df jcc aic">
                                        <p class="lead"><i class="uil uil-map-marker"></i></p>
                                    </div>
                                    <div class="col-10 df aic">
                                        @if($workshop->inIUT)
                                        <p class="lead">{{$workshop->location}}, IUT</p>
                                        @else
                                        <p class="lead">{{$workshop->location}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 df jcc aic">
                                        <p class="lead"><i class="uil uil-calendar-alt"></i></p>
                                    </div>
                                    <div class="col-10 df aic">
                                        <p class="lead">{{ date('l, F d, Y', strtotime($workshop->date)) }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 df jcc aic">
                                        <p class="lead"><i class="uil uil-clock"></i></p>
                                    </div>
                                    <div class="col-10 df aic">
                                        <p class="lead">{{ date('h:i A', strtotime($workshop->start_time)) }} - {{ date('h:i A', strtotime($workshop->end_time)) }}</p>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-4">
                                    <div class="col-12 df jcc aic">
                                        <a href="/workshop/{{$workshop->id}}" class="btn btn-outline-success" style="width: 100%">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<style>
    .ws-header-black{
        background-color: black;
    }

    .ws-card{
        background-color: white;
        border-radius: 10px;
        /* border: 1px solid #bababa; */
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        /* min-height: 20vh */
    }

    .ws-date-sec{
        background-color: #272727;
        border-radius: 10px 0 0 10px;
        min-height: inherit;
    }

    .ws-time-card{
        background-color: #00ac6d5c;
        border-radius: 5px;
        padding: 7px;
    }
</style>

<script>
    let menuID = "{{$menuID}}"; // Ensure menuID is a string
    let item = document.getElementById(menuID);

    if (item) { // Check if the element exists
        item.classList.remove('btn-outline-light');
        item.classList.add('btn-light');
    } else {
        console.error('Element with ID ' + menuID + ' not found.');
    }
</script>
@endsection