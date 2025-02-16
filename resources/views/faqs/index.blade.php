<x-layout.main>
    <div class="container">
        <div class="media-content">
            <section class="content mt-5">
                <h1>FAQs</h1>
                <div>Welcome to FAQs!</div>
                <a href="{{route('faqs.create')}}" class="button is-primary">Create A New FAQ</a>
                @foreach($faqs as $faq)
                    <div class="mt-3">
                        <div>
                            <a href="{{route('faqs.show', $faq)}}" class="is-size-4">{{$faq -> question}}</a>
                            <div>
                                {!! $faq -> answer !!}
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</x-layout.main>
