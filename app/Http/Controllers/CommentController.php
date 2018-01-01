<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Food;

class CommentController extends Controller
{
   	public function getComment(){
   		$comment = Comment::with('food')->get();
   		return view('admin.page.comment.danhsach', compact('comment'));
   	}
   	public function xoaComment($id){
   		$comment = Comment::find($id);
   		$comment->delete();
   		return redirect()->back()->with('success', 'Xóa bình luận thành công.');
   	}
}
