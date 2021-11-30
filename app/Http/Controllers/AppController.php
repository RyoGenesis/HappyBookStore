<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

//AppController disini berfungsi untuk mendapatkan komponen yang akan dikembalikan ke view
class AppController extends Controller
{
    public function viewHome() {
        $param['categories'] = Category::all();
        $param['books'] = Book::simplePaginate(5);
        return view('home')->with('param', $param);
    }

    public function viewCategory($id){
        $param['categories'] = Category::all();
        $param['categ'] = Category::find($id);
        $param['books']= Book::where('category_id', $id)->simplePaginate(5);
        return view('category')->with('param', $param);
    }

    public function viewDetailBook($id){
        $param['categories'] = Category::all();
        $param['book'] = Book::find($id);
        return view('detail')->with('param', $param);
    }

    public function viewContact() {
        $param['categories'] = Category::all();
        return view('contact')->with('param',$param);
    }
}
