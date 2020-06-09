{!! Form::open(['route' => 'tasklists.store']) !!}
    <div class="form-group row mt-3">
        {!! Form::textarea('content', old('content'), ['class' => 'col-9 form-control', 'rows' => '1']) !!}
        {!! Form::submit('タスクを追加する', ['class' =>'ml-3 col-2 btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}