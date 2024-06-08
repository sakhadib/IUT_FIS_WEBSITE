@extends('layouts.main')
@section('main')

<div class="db-bg  df dfc jcc">
    <div class="vh-10"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 full-closure">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="up-card">
                        <h1 class="display-1 text-light text-center">Reporting Center</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="stat-card">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-8 df jcfs aic">
                                    <h4 class="d">Announcements</h4>
                                </div>
                                <div class="col-4 df jcfs aic">
                                        <a href="/createannouncement" class="btn btn-outline-dark"><i class="uil uil-edit-alt"></i> New</a>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td>{{$TotalNumberOfAnnouncements}}</td>
                                </tr>
                                <tr>
                                    <td>Today</td>
                                    <td>{{$TotalAnnCreated_atToday}}</td>
                                </tr>
                                <tr>
                                    <td>This Month</td>
                                    <td>{{$TotalAnnCreated_atThisMonth}}</td>
                                </tr>
                                <tr>
                                    <td>Last</td>
                                    <td><a href="/announcements/{{$LastCreatedAnnouncement->id}}" class="link-l">View</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="/allann" class="btn btn-dark" style="width: 100%;">All Announcements</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="stat-card">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-8 df jcfs aic">
                                    <h4 class="d">News</h4>
                                </div>
                                <div class="col-4 df jcfs aic">
                                        <a href="/createnews" class="btn btn-outline-dark"><i class="uil uil-edit-alt"></i> New</a>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td>{{$TotalNumberOfNews}}</td>
                                </tr>
                                <tr>
                                    <td>Today</td>
                                    <td>{{$TotalNewsCreated_atToday}}</td>
                                </tr>
                                <tr>
                                    <td>This Month</td>
                                    <td>{{$TotalNewsCreated_atThisMonth}}</td>
                                </tr>
                                <tr>
                                    <td>Last</td>
                                    <td><a href="/news/{{$LastCreatedNews->id}}" class="link-l">View</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="/allnewsadmin" class="btn btn-dark" style="width: 100%;">All News</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="stat-card">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-8 df jcfs aic">
                                    <h4 class="d">Activities</h4>
                                </div>
                                <div class="col-4 df jcfs aic">
                                        <a href="/createactivity" class="btn btn-outline-dark"><i class="uil uil-edit-alt"></i> New</a>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td>{{$TotalNumberOfActivity}}</td>
                                </tr>
                                <tr>
                                    <td>Today</td>
                                    <td>{{$TotalActivityCreated_atToday}}</td>
                                </tr>
                                <tr>
                                    <td>This Month</td>
                                    <td>{{$TotalActivityCreated_atThisMonth}}</td>
                                </tr>
                                <tr>
                                    <td>Last</td>
                                    <td><a href="/activity/{{$LastCreatedActivity->id}}" class="link-l">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/allactivity" class="btn btn-dark" style="width: 100%;">All Activities</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="vh-10"></div>
</div>



<style>
    .stat-card{
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .db-bg{
        background-image: url('/rsx/db-bg.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }

    .up-card{
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(14px);
    }

    .full-closure{
        border: 1px solid rgba(185, 185, 185, 0.315);
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(2px);
    }
</style>
@endsection