@includewhen(!count($contents->posts), 'alerts.empty',['msg' => 'لا توجد اي مشاركات بعد'])
@foreach($contents->posts as $post)
    <div class="col-lg-3 col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="">{{$post->title}}</a></h5>
            </div>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle link" data-toggle="dropdown">
                <span>المزيد</span>
            </a>
            <div class="dropdown-menu">
                @can('edit-post', $post)
                <a href="" class="dropdown">تعديل</a>
                @endcan
                @can('delete-post', $post)
                <a href="" class="dropdown">حذف</a>
                @endcan
            </div>
        </div>
    </div>
@endforeach