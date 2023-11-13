<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Http\Requests\Site\NewsFormRequest;

class CommentController extends Controller
{
    public function create(NewsFormRequest $request)
    {
        $input = $request->all();
        Comment::create([
            'commentable_id'=>$input['commentable_id'],
            'commentable_type'=>$input['commentable_type'],
            'name'=>$input['name'],
            'email'=>$input['email'],
            'comment'=>$input['comment'],
        ]);
        return redirect()->back();
    }
}
