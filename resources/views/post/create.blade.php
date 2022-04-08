@extends('layouts.app')

@section('content')
<div class="col-md-8 bg-white">
    <h1 class="my-4 text-center">انشاء منشور جديد</h1>
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
           <select name='category_id' class="form-control">
            @include('lists.categories')
           </select>
        </div>
        <div class="form-group my-3">
            <input type="text" class='form-control' name="title" placeholder="حدد عنوان المقال" value="">
        </div>

        <div class="form-group my-3">
            <textarea class="form-control" name="body" rows="3" value="محتوى المقال"></textarea>
        </div>

        <div class="form-group my-3">
            <label for="details">اختر صورة تتعلق بالموضوع</label>
            <input type="file" class='form-control' name="image" placeholder="حدد عنوان المقال" value="">
        </div>
        <button class="btn btn-outline-success my-2">ارسل </button>
     
    </form>
</div>

@endsection