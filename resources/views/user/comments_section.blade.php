@includewhen(!count($contents->comments), 'alerts.empty',['msg' => 'لا توجد اي تعليقات بعد'])
@foreach($contents->comments as $comment)
<div class="row bg-white p-3">
    <div class="col-lg-12 border-bottom p-2 text-wrap">
        <a href="{{route('posts.show', $comment->post)}}#comments">
            <p class="card-text">{{Str::limit($comment->body, 60)}}</p>
        </a>
    </div>
</div>
@endforeach