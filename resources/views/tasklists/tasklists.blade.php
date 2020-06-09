@if (count($tasklists) > 0)
@foreach ($tasklists as $tasklist)
        <div>
            <table class="table mt-3 mb-0">
                <tr>
                    <th>id</th>
                    <th class="text-center">タスク一覧</th>
                </tr>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <table class="table">
                    <tr>
                         {{-- 投稿内容 --}}
                        <td class="text-left">{!! link_to_route('tasklists.show', $tasklist->id, ['tasklist' => $tasklist->id] ) !!}</th>
                        {{-- メッセージ詳細ページへのリンク --}}
                        <td class="mb-0 text-center">{!! nl2br(e($tasklist->content)) !!}</th>
                    </tr>
            </div>
            <!--<div class="">-->
            <!--    @if (Auth::id() == $tasklist->user_id)-->
            <!--        {{-- 投稿削除ボタンのフォーム --}}-->
            <!--        {!! Form::open(['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}-->
            <!--            {!! Form::submit('削除', ['class' => 'col-2 btn btn-dark btn-sm']) !!}-->
            <!--        {!! Form::close() !!}-->
            <!--    @endif-->
            <!--</div>-->
        </div>
        
@endforeach
    {{-- ページネーションのリンク --}}
    {{ $tasklists->links() }}
@endif