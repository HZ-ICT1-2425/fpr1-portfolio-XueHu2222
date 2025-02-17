<x-layout.main>
    <div class="container">
        <div class="columns is-centered">
            <section class="content mt-5">
                <div class="has-text-centered">
                    <h1>Posts</h1>
                    <a href="{{route('posts.create')}}" class="button is-link">Create A New Post</a>
                </div>
                @foreach($posts as $post)
                    <div class="has-text-centered">


                        <div class="mt-3">
                            <div>
                                <div class="is-size-4 has-text-black">{{$post -> title}}</div>

                                <div>
                                    {!! $post -> summary !!}
                                </div>
                                <div>
                                    <a href="{{route('posts.show', $post)}}" class="is-underlined">Read More</a>
                                </div>
                            </div>
                            <br>
                        </div>
                        @endforeach
                    </div>
            </section>
        </div>
    </div>
</x-layout.main>
