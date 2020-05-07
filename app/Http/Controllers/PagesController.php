<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function index (){
        $title = 'Welcome To Site';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array (
            'title' => 'Services',
            'services' => ['Action','Sport','Arcade']
        );
        return view('pages.services')->with($data);
    }
    public function Home1(){
            return view('home1');
    }
    public function test(string $date)
    {
        return view('home1',['text'=>$date]);
    }
}
