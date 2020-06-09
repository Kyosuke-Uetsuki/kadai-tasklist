@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスク詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
    <div class="d-flex flex-row">
    {{-- タスク編集ページへのリンク --}}
    <div class="mr-2">{!! link_to_route('tasklists.edit', 'このタスクを編集', ['tasklist' => $tasklist->id], ['class' => 'btn btn-success']) !!}</div>

    {{-- タスク削除フォーム --}}
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-dark']) !!}
    {!! Form::close() !!}
    </div>


@endsection