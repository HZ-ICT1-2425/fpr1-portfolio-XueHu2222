<x-layout.main>
    <div class="container">
        <div class="column has-text-right">
            <a href="{{ route('posts.edit', $post) }}" class="button is-link">Edit</a>
        </div>
        <section class="content mt-5">
            <h1>{{$post->title}}</h1>
            <p>{!! $post -> body !!}</p>
        </section>
        <div class="column has-text-right">
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="button is-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</x-layout.main>
