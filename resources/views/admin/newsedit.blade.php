@extends('layouts.main')
@section('main')
<div class="main-body df dfc jcc aic">
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="form-holder">
                    <h1 class="fs-2 text-center">Edit News - {{$news->id}}</h1>
                    <hr>
                    <form action="/editnews/{{$news->id}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" value="{{$news->title}}" class="form-control custom_form_title" required id="title" name="title" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="{{$news->news_link}}" class="form-control custom_form_normal" required id="source_link" name="link" placeholder="Source Link eg. example.com">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control custom_form_content" required id="content" name="content" rows="10" placeholder="Content">{{$news->content}}</textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark custom_form_btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="form-holder">
                    <h1 class="display-6" id="the_title">{{$news->title}}</h1>
                    <hr>
                    <p id="the_content" class="math" style="font-family: 'Times New Roman', Times, serif; font-size: 25px; text-align: justify"></p>
                    <h1 class="display-6 text-center text-secondary" id="preview_consent">
                        POST WILL BE PREVIEWED HERE <hr>
                        <span class="badge bg-secondary"><i class="uil uil-lightbulb-alt"></i> Tips</span><br>
                        <span class="fs-5">type <mark>\\[ latex \\]</mark> to render math equations in block and <mark>\\( latex \\)</mark> to render math equations inline. 
                            For example: \\( x^2 \\) to render \(x^2\) and \\[ x^2 \\] to render \[x^2\] in a complete new separate line</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main-body {
        background-image: url('/rsx/main-table-bg.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        min-height: 80vh;
    }
</style>

<script>
    
</script>

<script>
    // Get form elements
    const titleInput = document.getElementById('title');
    const contentInput = document.getElementById('content');

    // Get preview elements
    const previewTitle = document.getElementById('the_title');
    const previewContent = document.getElementById('the_content');

    // Add event listeners to update preview
    titleInput.addEventListener('input', () => {
        previewTitle.textContent = titleInput.value;
    });

    contentInput.addEventListener('input', () => {
        previewContent.innerHTML = contentInput.value;
    });

    const prev_consent = document.getElementById('preview_consent');

    // Hide the preview consent text when something is inputted in title or content
    titleInput.addEventListener('input', () => {
        if (titleInput.value === '' && contentInput.value === '') {
            prev_consent.style.display = 'block';
        } else {
            prev_consent.style.display = 'none';
        }
    });

    contentInput.addEventListener('input', () => {
        if (titleInput.value === '' && contentInput.value === '') {
            prev_consent.style.display = 'block';
        } else {
            prev_consent.style.display = 'none';
        }
    });
</script>

@endsection
