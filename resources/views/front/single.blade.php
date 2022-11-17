@extends('front.layouts.master')
@section('title',$article->title)
@section('bg-image', $article->image)
@section('content')
      <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-9 col-lg-8 col-xl-7">
                       {{$article->content}}
                    </div>
                    @include('front.widgets.categoryWidget')
                    <span class="text-primary">Okunma Sayısı : <b>{{$article->hit}}</b></span>
                </div>
            </div>
        </article>
@endsection