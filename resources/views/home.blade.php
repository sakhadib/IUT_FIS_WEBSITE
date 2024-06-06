@extends('layouts.main')
@section('main')
    <div class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 vh-100 home-bg-1 df dfc jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 df dfc jcc aic">
                                <img src="/rsx/logo.svg" alt="" width="200px">
                                <h1 class="display-1 text-light text-center mt-5">#LookUpToWonder</h1>
                                <h1 class="text-center text-light">IUT Al-Fazari Interstellar Society</h1>
                                <a href="#more" class="btn btn-lg btn-outline-light mt-5">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">{{$ann_1_date}}</p>
                                <p class="lead">{{$ann_1_content}}</p>
                                <a href="/announcements/{{$ann_1_id}}" class="link-l">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">{{$ann_2_date}}</p>
                                <p class="lead">{{$ann_2_content}}</p>
                                <a href="/announcements/{{$ann_2_id}}" class="link-l">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">{{$ann_3_date}}</p>
                                <p class="lead">{{$ann_3_content}}</p>
                                <a href="/announcements/{{$ann_3_id}}" class="link-l">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 df jcc aic">
                <a href="/announcement" class="btn btn-outline-dark">Show More Announcements</a>
            </div>
        </div>
    </div>

    <div class="vh-100 df dfc jcc aic" id="more">
        <div class="container">
            <div class="row">
                <div class="col-md-7 df dfc jcc">
                    <h1 class="display-3">Who Are We ?</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan
                    </p>

                    <a href="/about" class="link-l mt-1">More About Us</a>

                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="waw-card-body df dfc jcc aic">
                                    <p style="font-size: 5rem"><i class="uil uil-telescope"></i></p>
                                    <a href="/activity" class="btn btn-outline-dark mb-3">Our Activities</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="waw-card-body df dfc jcc aic">
                                    <p style="font-size: 5rem"><i class="uil uil-meeting-board"></i></p>
                                    <a href="/workshop" class="btn btn-outline-dark mb-3">Workshops</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="waw-card-body df dfc jcc aic">
                                    <p style="font-size: 5rem"><i class="uil uil-trophy"></i></p>
                                    <a href="/achievement" class="btn btn-outline-dark mb-3">Achievements</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="waw-card-body df dfc jcc aic">
                                    <p style="font-size: 5rem"><i class="uil uil-mountains-sun"></i></p>
                                    <a href="/executive" class="btn btn-outline-dark mb-3">Executives</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="vh-70 df dfc jcc aic president_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 df dfc jcc aic mt-5 mt-md-0">
                    <img src="{{$president->image_url}}" class="president_image" alt="">
                    <h1 class="display-6 text-light mt-3">{{$president->name}}</h1>
                    <p class="fs-2 text-light"> president</p>
                </div>
                <div class="col-md-7 df dfc jcc">
                    <h1 class="display-6 text-warning"><i class="uil uil-angle-double-right"></i> From The President ...</h1>
                    <figure>
                        <blockquote class="blockquote">
                          <p class="text-light">
                            {{$president->bio}}
                          </p>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-4">
                          President of <cite title="Source Title">IUT Al-Fazari Interstellar Society</cite>
                        </figcaption>
                      </figure>
                </div>
            </div>
        </div>
    </div>

@if($isThereActivities)
    <div class="vh-60 df dfc jcc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3">Recent Activities</h1>
                    <hr>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$activities[0]->name}}</h5>
                                      <p class="card-text"><strong>{{date('j F Y', strtotime($activities[0]->date)) }} -</strong> {{substr($activities[0]->description, 0, 70)}}...</p>
                                      <a href="/activity/{{$activities[0]->id}}" class="btn btn-outline-dark">Show Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$activities[1]->name}}</h5>
                                      <p class="card-text"><strong>{{date('j F Y', strtotime($activities[1]->date)) }} -</strong> {{ substr($activities[1]->description, 0, 70)}}...</p>
                                      <a href="/activity/{{$activities[1]->id}}" class="btn btn-outline-dark">Show Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$activities[2]->name}}</h5>
                                      <p class="card-text"><strong>{{date('j F Y', strtotime($activities[2]->date)) }} -</strong> {{ substr($activities[2]->description, 0, 70)}}...</p>
                                      <a href="/activity/{{$activities[2]->id}}" class="btn btn-outline-dark">Show Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


    


    <style>
        .home-bg-1 {
            background-image: url('/rsx/home-bg-1.svg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .s-card-body {
            background-color: rgb(234, 234, 234);
            border-radius: 10px;
            min-height: 30vh;
            margin-top: -10vh;
        }

        .president_image {
            border-radius: 50%;
            width: 300px;
            height: 300px;
        }

        .president_bg {
            background-color: rgb(0, 0, 0);
        }

        .waw-card-body{
            background-color: rgb(234, 234, 234);
            border-radius: 10px;
            min-height: 16vh;
        }
    </style>

<style>
    .activities-header {
        font-weight: bold;
        color: #343a40; /* Adjust the color as needed */
        text-transform: uppercase;
    }
    .activities-list {
        list-style-type: none;
        padding-left: 0;
    }
    .activities-list li {
        margin-bottom: 0.75rem;
    }
    .activities-list li:before {
        content: '•';
        color: #007bff; /* Bootstrap primary color */
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
</style>
@endsection