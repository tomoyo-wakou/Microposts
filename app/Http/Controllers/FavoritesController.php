<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りにする
        \Auth::user()->favorite($id);
        return back();
    }
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りから外す
        \Auth::user()->unfavorite($id);
        return back();
    }
}
