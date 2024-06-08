@extends('layouts.main')
@section('main')

<div class="vh-60 df dfc jcc news-bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class=" display-3 text-center text-warning">{{$news->title}}</h1>
                <h1 class="fs-5 text-secondary mt-4 text-center">
                    {{date('j F Y \a\t g:i A', strtotime($news->created_at))}} &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="/profile/{{$member->id}}" class="link-unstyled link-secondary">
                        <img src="/storage/{{$member->image_url}}" alt="" class="profile_picture">
                        {{$member->name}} 
                    </a>
                </h1>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-8 df dfc">
            <p class="lead mt-5" style="text-align: justify;">
                {!! nl2br($news->content) !!}
            </p>
            <a href="{{$news->news_link}}" class="btn btn-lg btn-outline-dark mt-3 mb-4 asc">Visit the news source</a>
        </div>
        <div class="col-md-4">
            <div class="container">
                @foreach($top_6_news as $n)
                <div class="row  mt-5">
                    <div class="col-12">
                        <h1 class="fs-5"><mark>{{date('j F Y \a\t g:i A', strtotime($n->created_at))}}</mark></h1>
                        <h1 class="fs-4">{{$n->title}}</h1>
                        <p class="lead text-secondary">
                            {{$n->content ? substr($n->content, 0, 60) : ''}}
                            ... <a href="/news/{{$n->id}}">Read more</a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
        </div>
    </div>
</div>
            </p>
        </div>
    </div>
</div>


<style>
    .news-bg-black {
        background-color: rgba(0, 0, 0, 1);
        transition: background-color ease-in-out 0.3s;
    }

    .profile_picture{
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .link-unstyled{
        text-decoration: none;
    }
</style>

@endsection