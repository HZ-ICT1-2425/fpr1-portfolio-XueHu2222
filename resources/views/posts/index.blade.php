<x-layout.main>
    @foreach($posts as $post)
        <div>
            <a href="{{route('posts.show', ['id' => $post['id']])}}">{{$post['title']}}</a>
        </div>
    @endforeach
    </x-layout.main>
