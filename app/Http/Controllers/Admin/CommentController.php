<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function getList()
  {
    $comment = Comment::orderBy('id', 'DESC')->get();
    return view('admin.comment.list')
      ->with('comments', $comment);
  }

  public function getUpdate(Request $request)
  {
    $input = $request->all();

    $comment = Comment::findOrfail($input['id']);
    if ($comment->status == 0) {
      $comment->update([
        'status' => 1
      ]);
    } else {
      $comment->update(['status' => 0]);
    }
    return redirect()->back();
  }
  public function getDelete($id)
  {
    Comment::find($id)->delete();
    return Redirect::action([CommentController::class, 'getList'])->with('success','Removed successfully');
  }
}
