@extends('layouts.app')

@section('content')

    {{ Auth::user()->name }}    
    @include('form.form')
    <table class="table mt-5 mb-0">
            <thead>
                <tr>
                    <th>id</th>
                    <th class="text-center">タスク一覧</th>
                    <th class="text-center">状態</th>
                </tr>
            </thead>
    @include('tasklists.tasklists')

@endsection