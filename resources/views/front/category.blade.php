@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi |' .count($articles). ' yazı bulundu.')
@section('content')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        
<div class="col-md-9 col-xl-7">
    @if (count($articles)>0)
    @foreach ($articles as $article)
                    <!-- Post preview-->
                    <div class="position-relative">
                    <div class="post-preview">
                        <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <img src="{{$article->image}}" alt="">
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
    @else
      <div class="alert alert-danger">
        Bu kategoriye ait yazı bulunamadı.
      </div>
    @endif
                    {{-- <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>--}}
                </div>

                @include('front.widgets.categoryWidget')
            </div>
        </div>
@endsection
