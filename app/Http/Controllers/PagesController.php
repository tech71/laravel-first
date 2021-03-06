<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = 'welcome to laravel';
        return view('pages.index')->with('title', $title);
    }

    public function fiction() {
        return view('pages.fiction');
    }

    public function services () {
        // $data = array(
        //     'title' => 'Services',
        //     'services' => ['Web design', 'programming', 'SEO']
        // );
        // return view('pages.services')->with($data);
        return view('pages.nonfiction');
    }
}
