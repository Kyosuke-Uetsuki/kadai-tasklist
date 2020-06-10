@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {!! link_to_route("tasks.create", "新規タスクの投稿",[],['class' => 'mb-2 btn btn-primary']) !!}
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>id</th>
                    <th class="text-center">タスク一覧</th>
                    <th class="text-center">状態</th>
                </tr>
            </thead>
    @include('tasklists.tasklists')
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