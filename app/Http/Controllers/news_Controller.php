<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\News;
use App\Models\Reporter;
use App\Models\Member;

class news_Controller extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->take(20)->get();
        return view('news',
        [
            'news' => $news,
        ]);
    }

    public function show($id)
    {
        $news = News::find($id);
        $reporter = Reporter::find($news->reporter_id);
        $member = Member::find($reporter->member_id);

        $top_6_news = News::orderBy('created_at', 'desc')->take(6)->get();

        return view('news_show',
        [
            'news' => $news,
            'member' => $member,
            'top_6_news' => $top_6_news,
        ]);
    }

    public function dateFilter(Request $request)
    {
        $date = $request->input('startDate');
        $news = News::where('created_at', '<=', $date)->orderBy('created_at', 'desc')->get();
        $isNewsAvailable = false;
        if($news->count() > 0){
            $isNewsAvailable = true;
        }

        if($isNewsAvailable == false){
            return redirect('/404');
        }

        return view('news',
        [
            'news' => $news,
        ]);
    }

    public function allnews()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news',
        [
            'news' => $news,
        ]);
    }


    public function allnewsadmin()
    {

        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.allnews',
        [
            'news' => $news,
        ]);
    }


    public function create()
    {
        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        return view('admin.newsform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required'
        ]);
         
        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        $news = new News;
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->news_link = $request->input('link');
        $news->reporter_id = session('reporter_id');
        $news->save();

        return redirect('/allnewsadmin');
    }

    public function edit($id)
    {
        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        $news = News::find($id);

        if(!$news){
            return redirect('/404');
        }

        return view('admin.newsedit',
        [
            'news' => $news,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required'
        ]);

        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        $news = News::find($id);
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->news_link = $request->input('link');
        $news->save();

        return redirect('/allnewsadmin');
    }

    public function destroy($id)
    {
        if(session('is_logged_in') == false){
            return redirect('/login');
        }

        $news = News::find($id);

        if(!$news){
            return redirect('/404');
        }

        $news->delete();

        return redirect('/allnewsadmin');
    }
}
