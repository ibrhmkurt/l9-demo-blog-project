<div class="col-md-3">
    <ul class="list-group list-group-flush">
        @foreach ($categories as $category)
        <li class="list-group-item"><span class="badge bg-danger rounded-pill">14</span> {{$category->name}}</li>
        @endforeach
    </ul>
</div>