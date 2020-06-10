{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group row mt-2">
        <label class="col-2 col-form-label">タスク:</label>
        {!! Form::textarea('content', old('content'), ['class' => 'col-10 form-control', 'rows' => '2']) !!}
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">状態:</label>
        {!! Form::textarea('status', old('status'), ['class' => 'col-10 form-control', 'rows' => '1']) !!}
    </div>
    <div class="d-flex justify-content-end">
        {!! Form::submit('タスクを追加する', ['class' =>'col-2 btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}