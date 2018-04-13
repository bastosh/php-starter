<?php

class PagesController
{
    public function home()
    {
        $title = 'Homepage';
        return view('index', [
            'title' => $title
        ]);
    }

    public function contact()
    {
        $title = 'Contact Page';
        return view('contact', [
            'title' => $title
        ]);
    }

    public function about()
    {
        $title = 'About Page';
        return view('about', [
            'title' => $title
        ]);
    }

}