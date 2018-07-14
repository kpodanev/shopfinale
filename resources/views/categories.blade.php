@foreach(App\Categories::all() as $category)
    <p>
        <a href="/categories/{{$category->latin_url}}">
        {{$category->name}}
        </a>
    </p>
@endforeach