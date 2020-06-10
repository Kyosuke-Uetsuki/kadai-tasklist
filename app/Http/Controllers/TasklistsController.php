<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasklistsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を作成日時の降順で取得
            $tasklists = $user->tasklists()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'tasklists' => $tasklists,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->tasklists()->create([
            'content' => $request->content,
            'status' => $request->status,
            ]);

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $tasklist = \App\Tasklist::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $tasklist->user_id) {
            $tasklist->delete();
        }

        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
    public function show($id)
    {
        // idの値でメッセージを検索して取得
        $tasklist = \App\Tasklist::findOrFail($id);
        
        if (\Auth::id() === $tasklist->user_id) {
            
            return view('tasklists.show', [
                'tasklist' => $tasklist,
            ]);
        }
    }
    
    public function edit($id)
    {
        // idの値でメッセージを検索して取得
        $tasklist = \App\Tasklist::findOrFail($id);

        if (\Auth::id() === $tasklist->user_id) {
            
            return view('tasklists.edit', [
                'tasklist' => $tasklist,
            ]);
        
        }
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);
        
        $tasklist = \App\Tasklist::findOrFail($id);
        $tasklist->status = $request->status;
        $tasklist->content = $request->content;
        $tasklist->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

}
