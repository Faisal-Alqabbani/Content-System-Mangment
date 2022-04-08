@extends('layouts.app')

@section('content')
<div class="col-md-8 bg-white">
    <h1 class="my-4 text-center">تعديل</h1>
    <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('patch')
        <div class="form-group">
           <select name='category_id' class="form-control">
            @include('lists.categories')
           </select>
        </div>
        <div class="form-group my-3">
            <input type="text" class='form-control' name="title" placeholder="حدد عنوان المقال" value="{{$post->title}}">
        </div>

        <div class="form-group my-3">
            <textarea class="form-control" name="body" rows="3" value="محتوى المقال">{{$post->body}} </textarea>
        </div>

        <div class="form-group my-3">
            <label for="details">اختر صورة تتعلق بالموضوع</label>
            <img src="{{$post->image_path}}" alt="" class="form-control w-25 h-25 my-2" />
            <input type="file" class='form-control' name="image" placeholder="حدد عنوان المقال" value="">
        </div>
        <button class="btn btn-outline-success my-2">ارسل </button>
     
    </form>
</div>

@endsection