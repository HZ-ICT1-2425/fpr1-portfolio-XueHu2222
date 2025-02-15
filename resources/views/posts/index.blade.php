<x-layout.main>
    <div class="container">
        <div class="media-content">
            <section class="content mt-5">
                <h1>Posts</h1>
                <div>Welcome to posts!</div>
                <a href="{{route('posts.create')}}" class="button is-primary">Create A New Post</a>
                @foreach($posts as $post)
                    <div class="mt-3">
                        <h3>
                            <a href="{{route('posts.show', $post)}}">{{$post -> title}}</a>
                        </h3>
                        <div>
                            {!! $post -> excerpt !!}
                        </div>
                        <br>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</x-layout.main>
