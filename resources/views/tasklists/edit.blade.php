@extends('layouts.app')

@section('content')

    <h1 class="mb-5">id: {{ $tasklist->id }} のタスク編集ページ</h1>

    <div class="">
        {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
            
                {!! Form::label('content', 'タスク:',) !!}
            <div class="form-group row">
                {!! Form::text('content', null, ['class' => 'col-10 mr-2 form-control']) !!}
            </div>
                {!! Form::label('status', '状態:',) !!}
            <div class="form-group row">
                {!! Form::text('status', null, ['class' => 'col-10 mr-2 form-control']) !!}
                {!! Form::submit('更新', ['class' => 'col-1 btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection