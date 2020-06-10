@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>状態</th>
            <td>{{ $task->status}}</td>
        </tr>
    </table>
    <div class="d-flex flex-row">
    {{-- タスク編集ページへのリンク --}}
    <div class="mr-2">{!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-success']) !!}</div>

    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-dark']) !!}
    {!! Form::close() !!}
    </div>


@endsection