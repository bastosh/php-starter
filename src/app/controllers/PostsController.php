<?php

class PostsController
{
    public function show()
    {
        $title = 'Blog Page';
        return view('blog', [
            'title' => $title
        ]);
    }
}