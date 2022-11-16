@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

<div class="col-md-9 col-xl-7">
    @foreach ($articles as $article)
                    <!-- Post preview-->
                    <div class="position-relative">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <h3 class="post-subtitle">{{str_limit($article->content,100)}}</h3>
                        </a>
                        <p class="post-meta">
                            <a href="#!">Kategori: {{$article->getCategory->name}}</a>
                            <span class="position-absolute bottom-0 end-0">{{$article->created_at->diffForHumans()}}</span>
                        </p>
                    </div>
                    </div>
@if (!$loop->last)
                    <!-- Divider-->
                    <hr class="my-4" />
@endif

    @endforeach
                    {{-- <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>--}}
                </div> 
                @include('front.widgets.categoryWidget')
@endsection