@extends('layouts.main')
@section('main')

<div class="df dfc jcfe aic ann-header" style="min-height: 150vh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 df dfc aic">
                <h1 class=" display-1 text-center text-light">announcements</h1>
                <button class="btn btn-lg btn-light mt-2" id="date-form-activator">Jump to a date</button>
                <div class="date-picker"  hidden id="date-form">
                    <form action="/announcements" method="post">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="startDate" name="startDate" required>
                                    </div>
                                </div>
                                <div class="col-4 df aife">
                                    <button type="submit" class="btn btn-outline-light"> Go <i class="uil uil-angle-double-right"></i></button>
                                </div>
                            </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="ann-conten-bg mt-5  vh-100">
                    <div class="container">
                        @if(!$isAnnAvailable)
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="display-4 text-center text-light">No announcements yet!</h1>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            @foreach($announcements as $announcement)
                            <div class="col-md-4 mt-4">
                                <div class="card">
                                    <div class="card-body df dfc">
                                        <h5 class="card-title">{{date('j F Y', strtotime($announcement->created_at))}}</h5>
                                        <p class="card-text">{{ substr($announcement->content, 0, 80) }} ...</p>
                                        <a href="/announcements/{{$announcement->id}}" class="btn btn-outline-dark asfe">Show Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<style>
    .ann-header{
        background-image: url('rsx/ann.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .ann-conten-bg{
        background-color: rgba(0, 14, 24, 0.7);
    }

    .date-picker{
        background-color: rgba(0, 14, 24, 0.9);
        border-radius: 10px;
        padding: 20px;
        border-bottom: 3px solid rgb(134, 134, 134);
        border-top: 3px solid rgb(134, 134, 134);
    }
</style>


<script>
    document.getElementById('date-form-activator').addEventListener('click', function() {
      document.getElementById('date-form').hidden = false;
      this.hidden = true;
    });
</script>
@endsection