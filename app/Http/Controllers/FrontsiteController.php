<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Article;
class FrontsiteController extends Controller
{
    public function index(){
        $data['books']=Book::latest()->take(4)->get();
        $data['books_count']=Book::latest()->count();
        $data['articles']=Article::latest()->take(4)->get();
        $data['articles_count']=Article::latest()->count();
        return view('frontsite.pages.dashboard',$data);
    }
    public function allBooks(){
        $data['books']=Book::get();
        return view('frontsite.pages.all_books',$data);
    }
    public function allArticles(){
        $data['articles']=Article::get();
        return view('frontsite.pages.all_articles',$data);
    }
    public function contactUs(){
        return view('frontsite.pages.contact_us',);
    }
    public function aboutUs(){
        $data['articles']=Article::latest()->get();
        return view('frontsite.pages.about_us');
    }
    public function myFamily(){
        $data['title']='My Family';
        return view('frontsite.pages.my_family');
    }
    public function morDetail($id){
        $data['book'] = Book::find($id);
        $data['title']='More Detail';
        return view('frontsite.pages.more-details',$data);
    }
    public function articleMorDetail($id){
        $data['article'] = Article::find($id);
        $data['title']='Article More Detail';
        return view('frontsite.pages.article-more-details',$data);
    }
}
