@isset($categories)
<div class="col-md-3">
    <ul class="list-group list-group-flush">
        @foreach ($categories as $category)
        <li class="list-group-item @if (Request::segment(2)==$category->slug)
            active
        @endif" >
            <span class="badge bg-danger rounded-pill">{{$category->articleCount()}}</span> 
                <a href="{{route('category', $category->slug)}}"> {{$category->name}} </a>       
        </li>
        @endforeach
    </ul>
</div>
@endisset
