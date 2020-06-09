@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <div class="">
                @include('form.form')
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