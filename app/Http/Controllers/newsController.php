<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Events\PostHasViewed;

class newsController extends Controller{
    public function submit(NewsRequest $req){
        $new = new News();
        $new->paragraph = $req->input('paragraph');
        $new->author = $req->input('author');
        $new->text = $req->input('text');

        $new->save();

        return redirect()->route('home')->with('success', 'Пост успешно добавлен');
    }

     public function allNews(){
        $news = new News;
        return view('home', ['news' => $news->orderBy('id', 'desc')->get()]);
     }

     public function PostShow($postid){
        $news = new News;
        return view('post', ['news' => $news->find($postid)]);
     }

     public function NewsEdit($postid){
        $news = new News;
        return view('edit', ['news' => $news->find($postid)]);
     }

     public function editNews($postid, NewsRequest $req){
         $new = News::find($postid);
         $new->paragraph = $req->input('paragraph');
         $new->text = $req->input('text');

         $new->save();
 
         return redirect()->route('PostShower', $postid)->with('success', 'Пост успешно редактирован');
     }
     public function PostDelete($postid){
        $new = News::find($postid)->delete();
        return redirect()->route('home')->with('success', 'Пост c ID-' . $postid . ' успешно удален');
     }
}