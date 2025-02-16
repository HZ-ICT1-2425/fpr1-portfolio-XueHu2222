<x-layout.main>
    <div class="container">
        <section class="content mt-5">
            <h1>{{$post->title}}</h1>
            <div class="column has-text-right">
                <a href="{{ route('posts.edit', $post) }}" class="button is-primary">Edit</a>
            </div>
            <p>{!! $post -> body !!}</p>
        </section>
    </div>
</x-layout.main>
