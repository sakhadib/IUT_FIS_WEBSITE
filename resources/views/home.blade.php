@extends('layouts.main')
@section('main')
    <div class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 vh-100 home-bg-1 df dfc jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 df dfc jcc aic">
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
            <div class="col-md-4">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">4 June 2024</p>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">1 June 2024</p>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="s-card-body df jcc aic">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 5rem" class="text-secondary"><i class="uil uil-megaphone"></i></p>
                            </div>
                            <div class="col-8">
                                <p class="fs-5">25 May 2024</p>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra felis in nisi tincidunt accumsan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 df jcc aic">
                <a href="" class="btn btn-outline-dark">Show More Announcements</a>
            </div>
        </div>
    </div>

    


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="" alt="">
            </div>
        </div>
    </div>
    


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
    </style>
@endsection