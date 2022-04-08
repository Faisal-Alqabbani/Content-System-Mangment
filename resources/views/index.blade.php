@extends('layouts.app')
@section('content')
<div class="col-md-8 bg-white">
    <h2 class="my-4 text-center">
      المنشورات           
    </h2>
    {{-- I used includewhen instead of if statment !count  --}}
    {{-- @if(!count($posts))
      @include('alerts.empty')
    @endif --}}
    @includewhen(!count($posts),'alerts.empty', ['msg' => 'لاتوجد منشورات'])
    @foreach($posts as $post)
    <div class="card mb-4">
       
          <img class="card-img-top" src="{{$post->image_path}}" alt="">
          <div class="card-body">
              <h3 class="card-title">{{$post->title}}</h3>
              <p class="card-text">{{Str::limit($post->body,200) }}</p>
              <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary"> المزيد</a>
          </div>
          <div class='card-footer text-muted'>
            {{$post->created_at->diffForHumans()}}
            <a href="">{{$post->user->name}}</a>
          </div>
      </div>
  @endforeach   
  {{-- pagination --}}
      <div class="pagination justify-content-center mb-4">
        {{$posts->links()}}
      </div>
</div>

 @include('partials.sidebar')

@endsection