@include('layout.header')

<div class="container" style="padding-left: 75px; padding-right: 75px">
    <div class="blog-post">
        @forelse($posts as $post)
            <h2 class="blog-post-title"> {{ $post->title }} </h2>
            <p class="blog-post-meta"> {{ $post->posted_at }} </p>
            <p>
            <ul class="breadcrumb"> Tags :
                <li> <a href="#"> {{ $post->tags }} </a> </li>
            </ul>
            </p>
            <img style="width: 100%" src={{ $post->image }}>
            <p> {!! $post->content !!} </p>
        @empty
        @endforelse
    </div>
</div>

@include('layout.footer')
