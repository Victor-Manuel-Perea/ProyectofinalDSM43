<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemController extends Controller {
    public function about(){
        return view('about');
    }
    public function agent(){
        return view('agent-single');
    }
    public function egents(){
        return view('agents-grid');
    }
    public function blogGrid(){
        return view('blog-grid');
    }
    public function blogSingle(){
        return view('blog-single');
    }
    public function contact(){
        return view('contact');
    }
    public function index(){
        return view('index');
    }
    public function propertyGrid(){
        return view('property-grid');
    }
    public function propertySingle(){
        return view('property-single');
    }
    public function header(){
        return view('header');
    }
    public function footer(){
        return view('footer');
    }
     public function headerU(){
        return view('headerU');
    }
    public function cliente(){
        return view('cliente');
    }
    public function indexU(){
        return view('indexU');
    }
    public function contactU(){
        return view('contactU');
    }
    public function indexA(){
        return view('indexA');
    }
    public function headerA(){
        return view('headerA');
    }
}
