<?php

namespace App;



class Post extends Model
{

    public function comments()

    {

        return $this->hasMany(Comment::class);

    }

    public function addComment($body)

    {       //one way
//        Comment::create([
//            'body' => $body,
//            'p/**/ost_id' => $this->id
//        ]);
        //cleaner way
        $this->comments()->create(compact('body'));

    }
}
