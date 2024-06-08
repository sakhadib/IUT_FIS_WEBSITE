@extends('layouts.main')
@section('main')

<div class="main-body">
    <div class="vh-50 df dfc jcc aic ad-main-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 df dfc jcc aic">
                    <h1 class="display-1 text-center text-warning">All News Manager</h1>
                    <p class="lead text-light text-center">
                        From here you can manage all the news that are displayed on the website. You can edit, delete or add new news.
                    </p>
                    <a href="/createnews" class="btn btn-lg btn-outline-light mt-3"><i class="uil uil-pen"></i> Create News</a>
                </div>
            </div>
        </div>
    </div>
    <div class="df dfc jcc aic the-ad-section">
        <div class="container table-holder">
            <div class="row">
                <div class="col-12">
                    <table data-order='[[2, "desc"]]' data-page-length='25' id="stable" class="table table-hover table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $new)
                                <tr>
                                    <td>{{ $new->id }}</td>
                                    <td>{{ $new->title }}</td>
                                    <td>{{ date('j F Y \a\t g:m A', strToTime($new->created_at)) }}</td>
                                    <td>
                                        <a href="/editnews/{{ $new->id }}" class="btn btn-sm btn-outline-primary"><i class="uil uil-edit"></i> Edit</a>
                                        <a href="/deletenews/{{ $new->id }}" class="btn btn-sm btn-outline-danger" id=""><i class="uil uil-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


    <style>
        .main-body{
            background-image: url('/rsx/main-table-bg.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            min-height: 80vh;
        }

        
    </style>
    
@endsection