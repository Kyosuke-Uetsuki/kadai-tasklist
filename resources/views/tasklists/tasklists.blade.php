@if (count($tasklists) > 0)
@foreach ($tasklists as $tasklist)
        <div class="">
            <table class="table  my-0 col-12 ">
                <tr>
                {{-- メッセージ詳細ページへのリンク --}}
                <td class="text-left">{!! link_to_route('tasklists.show', $tasklist->id, ['tasklist' => $tasklist->id] ) !!}</td>
                 {{-- 内容 --}}
                <td class="text-center">{!! nl2br(e($tasklist->content)) !!}</td>
                 {{-- 状態 --}}
                <td class="text-right">{!! (e($tasklist->status)) !!}</td>
            </tr>
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