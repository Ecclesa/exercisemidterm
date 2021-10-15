<div class="row" style="padding-left: 75px; padding-right: 75px;">
    @forelse ($posts as $post)
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{ $post->category }}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/post/{{ $post->id }}">{{ $post->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $post->posted_at }}</div>
                    <p class="card-text mb-auto">{{ $post->leading }}</p>
                    <a href="/post/{{ $post->id }}">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src={{ $post->image }}
                    data-holder-rendered="true">
            </div>
        </div>
    @empty
        <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
    @endforelse
</div>
