<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = \Auth::user();
        // お気に入り登録を行うためのメソッドを実行、引数にお気に入り対象のマイクロポストのidを指定
        $user->favorite($id);
        return back();
    }

    public function destroy($id)
    {
        $user = \Auth::user();
        // お気に入りを解除するためのメソッドを実行、引数にお気に入り対象のマイクロポストのidを指定
        $user->unfavorite($id);
        return back();
    }
}
