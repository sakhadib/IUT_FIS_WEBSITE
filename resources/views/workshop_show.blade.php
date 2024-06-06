@extends('layouts.main')
@section('main')

<div class="vh-70 df dfc jcc aic ws-bg-black">
    <div class="conatainer">
        <div class="row">
            <div class="col-12">
                <h1 class="display-6 text-secondary text-center">Workshop On</h1>
                <h1 class="display-1 text-light text-center">{{$workshop->topic}}</h1>
            </div>
            @if(\Carbon\Carbon::now() < \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $workshop->date . ' ' . $workshop->start_time))
            <div class="row mt-5">
                <div class="col-8 offset-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <h1 id="wsday" class="display-2 text-warning text-center">00</h1>
                            </div>
                            <div class="col-3">
                                <h1 id="wshr" class="display-2 text-warning text-center">00</h1>
                            </div>
                            <div class="col-3">
                                <h1 id="wsmin" class="display-2 text-warning text-center">00</h1>
                            </div>
                            <div class="col-3">
                                <h1 id="wssec" class="display-2 text-warning text-center">00</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h1 class="display-5 text-secondary text-center">Day</h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-5 text-secondary text-center">Hour</h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-5 text-secondary text-center">Minute</h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-5 text-secondary text-center">Second</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row mt-5">
                <div class="col-8 offset-2">
                    <h1 class="fs-5 text-secondary text-center">Finished ! Organized By <br><i>IUT Al-Fazari Interstellar Society</i></h1>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-7">
            <h1 class="display-5">Introduction</h1>
            <hr>
            <p class="lead" style="text-align: justify">
                {!! nl2br($workshop->description) !!}
            </p>
        </div>
        <div class="col-md-4 offset-md-1">
            <h1 class="display-5">Speakers</h1>
            <hr>
            @foreach($speakers as $speaker)
            <div class="container">
                <div class="row">
                    <div class="col-8 df aic">
                        <h1 class="fs-5">{{$speaker->name}}</h1>
                        {{-- <p class="lead">{{$speaker->designation}}</p> --}}
                    </div>
                    <div class="col-4">
                        <a href="{{$speaker->profile_link}}" class="btn btn-outline-dark">Profile</a>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach

            <h1 class="display-5 mt-5">Time and Place</h1>
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
            </div>
        </div>
    </div>
</div>


@if(\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $workshop->date . ' ' . $workshop->start_time) && count($images) > 0)
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-5">Workshop Moments</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 mt-3">
            <a href="/{{$image->image_address}}" target="_blank">
                <img src="/{{$image->image_address}}" alt="" class="rounded ws-img" style="width: 100%">
            </a>
        </div>
        @endforeach
    </div>
</div>


@endif

<style>
    .ws-bg-black{
        background-color: black;
    }

    .ws-img{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
    }

    .ws-img:hover{
        transform: scale(2);
    }
</style>


<script>
    // Set the target date and time
    const wsTargetDate = "@php echo date('Y-m-d', strtotime($workshop->date)) @endphp";
    const wsTargetTime = "@php echo date('H:i:s', strtotime($workshop->start_time)) @endphp";
    const targetDateTime = new Date(`${wsTargetDate}T${wsTargetTime}`).getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDateTime - now;

        if (distance < 0) {
            document.getElementById("wsday").innerHTML = "00";
            document.getElementById("wshr").innerHTML = "00";
            document.getElementById("wsmin").innerHTML = "00";
            document.getElementById("wssec").innerHTML = "00";
            clearInterval(countdownInterval);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("wsday").innerHTML = String(days).padStart(2, '0');
        document.getElementById("wshr").innerHTML = String(hours).padStart(2, '0');
        document.getElementById("wsmin").innerHTML = String(minutes).padStart(2, '0');
        document.getElementById("wssec").innerHTML = String(seconds).padStart(2, '0');
    }

    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown();  // initial call to display countdown immediately
</script>

@endsection