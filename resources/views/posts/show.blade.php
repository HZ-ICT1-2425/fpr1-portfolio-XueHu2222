<x-layout.main>
    <div class="container">
        <section class="content mt-5">
            <h1>{{$post->title}}</h1>
            <div class="column has-text-right">
                <a href="{{ route('posts.edit', $post) }}" class="button is-primary">Edit</a>
            </div>
            <p>{!! $post -> body !!}</p>
        </section>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</x-layout.main>
