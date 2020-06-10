@if (count($tasks) > 0)
@foreach ($tasks as $task)
        <div class="">
            <table class="table  my-0 col-12 ">
                <tbody>
                    <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                        <td class="text-left">{!! link_to_route('tasks.show', $task->id, ['task' => $task->id] ) !!}</td>
                         {{-- 内容 --}}
                        <td class="text-center col-4">{!! nl2br(e($task->content)) !!}</td>
                         {{-- 状態 --}}
                        <td class="col-4">{!! (e($task->status)) !!}</td>
                    </tr>
                </tbody>
        </div>
        
@endforeach
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
@endif