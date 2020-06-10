@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <div class="mt-5">
                @include('form.form')
                <div>
                    <table class="table mt-3 mb-0 table table-bordered">
                        <tr>
                            <th>id</th>
                            <th class="text-center">タスク一覧</th>
                            <th class="text-center">状態</th>
                        </tr>
                </div>
                {{-- 投稿一覧 --}}
                @include('tasklists.tasklists')
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1 class="mb-5">WELCOME to TASKLISTS</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'サインインはこちら', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection