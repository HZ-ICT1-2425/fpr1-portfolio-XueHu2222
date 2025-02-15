<x-layout.main>
    <div class="container">
        <section class="content mt-5">
            <h1>{{$post -> title}}</h1>
            <h3>{!! $post -> excerpt !!}</h3>
            <p>{!! $post -> body !!}</p>
        </section>
    </div>
</x-layout.main>
