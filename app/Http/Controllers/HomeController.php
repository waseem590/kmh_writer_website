<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Article;
use Session;
class HomeController extends Controller
{
    public function dashboard(){
        $data['books'] = Book::get();
        $data['articles'] = Article::get();
        return view('pages.dashboard',$data);
    }
    public function booksList(){
        $data['books'] = Book::get();
        return view('pages.books.list',$data);
    }
    public function newBooks(){
        return view('pages.books.add_book');
    }
    public function saveBook(Request $request){
        $input = $request->all();
        if ($request->cover_image) {
            $file = $request->cover_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('cover_image')->storeAs('public/book', $file_name);
            $input['cover_image'] = 'storage/app/public/book/' . $file_name;
        }
        if ($request->book_url) {
            $file = $request->book_url;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('book_url')->storeAs('public/book/file/', $file_name);
            $input['book_url'] = 'storage/app/public/book/file/' . $file_name;
        }
        $book = new Book;
        $book->create($input);
        Session::flash('success',"Book add successfully");
        return redirect()->back();
    }
    public function editBook($id){
        $data['book'] = Book::find($id);
        return view('pages.books.edit_book',$data);
    }
    public function updateBook(Request $request){
        $input = $request->all();
        if ($request->cover_image) {
            $file = $request->cover_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('cover_image')->storeAs('public/book', $file_name);
            $input['cover_image'] = 'storage/book/' . $file_name;
        }
        if ($request->book_url) {
            $file = $request->book_url;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('book_url')->storeAs('public/book/file/', $file_name);
            $input['book_url'] = 'storage/book/file/' . $file_name;
        }
        $book = Book::find($request->id);
        $book->update($input);
        Session::flash('success',"Book update successfully");
        return redirect()->route('books.lists');
    }
    public function deleteBook($id){
        Book::find($id)->delete();
        return redirect()->route('books.lists');
    }
    public function articlesList(){
        $data['articles'] = Article::get();
        return view('pages.articles.list',$data);
    }
    public function newArticles(){
        return view('pages.articles.add_article');
    }
    public function saveArticle(Request $request){
        $input = $request->all();
        if ($request->cover_image) {
            $file = $request->cover_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('cover_image')->storeAs('public/article', $file_name);
            $input['cover_image'] = 'storage/app/public/article/' . $file_name;
        }
        if ($request->letter_image) {
            $file = $request->letter_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('letter_image')->storeAs('public/article/letters', $file_name);
            $input['letter_image'] = 'storage/app/public/article/letters' . $file_name;
        }
        if ($request->letter_image_1) {
            $file = $request->letter_image_1;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('letter_image_1')->storeAs('public/article/letters', $file_name);
            $input['letter_image_1'] = 'storage/app/public/article/letters' . $file_name;
        }
        $book = new Article;
        $book->create($input);
        Session::flash('success',"Article add successfully");
        return redirect()->back();
    }
    public function editArticle($id){
        $data['article'] = Article::find($id);
        return view('pages.articles.edit_article',$data);
    }
    public function updateArticle(Request $request){
        $input = $request->all();
        if ($request->cover_image) {
            $file = $request->cover_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('cover_image')->storeAs('public/article', $file_name);
            $input['cover_image'] = 'storage/app/public/article/' . $file_name;
        }
        
        $book = Article::find($request->id);
        if ($request->letter_image) {
            $file = $request->letter_image;
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file('letter_image')->storeAs('public/article', $file_name);
            $input['letter_image'] = 'storage/app/public/article/' . $file_name;
        }
        if ($request->letter_image_1) {
            $file = $request->letter_image_1;
            $file_name = time() . '.1' . $file->getClientOriginalExtension();
            $request->file('letter_image_1')->storeAs('public/article', $file_name);
            $input['letter_image_1'] = 'storage/app/public/article/' . $file_name;
        }
        $book->update($input);
        Session::flash('success',"Article update successfully");
        return redirect()->route('articles.lists');
    }
    public function deleteArticle($id){
        Article::find($id)->delete();
        return redirect()->route('articles.lists');
    }
}
