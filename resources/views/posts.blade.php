@extends("layout")
@section("content")
    @foreach($posts as $post)
        <div class="p-2 mb-2 pb-2 bd-highlight" style="background-image: url({{ Voyager::image( $post->image ) }});">
            <div class="content">
                <h3>{{ $post->title }}</h3>
                <p> {!! Str::words($post->body,10) !!}</p>
                <p> {{ $post->created_at->format("d M Y") }}</p>
            </div>
        </div>
    @endforeach
@endsection
