@extends("layout")
@section("content")
        <div class="p-2 mb-2 pb-2 bd-highlight" style="background-image: url({{ Voyager::image( $post->image ) }});">
            <div class="content">
                <h3>{{ $post->title }}</h3>
                <p>Content</p>
            </div>
        </div>
@endsection
