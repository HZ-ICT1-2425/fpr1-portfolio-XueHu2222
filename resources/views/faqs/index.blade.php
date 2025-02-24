<x-layout.main>
    <div class="container">
        <div class="columns is-centered">
            <section class="content mt-5 has-text-black">
                <div class="has-text-centered">
                <h1>Frequently Asked Questions (FAQ)</h1>
                    <a href="{{route('faqs.create')}}" class="button is-link">Create A New FAQ</a>
                @foreach($faqs as $faq)
                    <div class="mt-3">
                        <div>
                            <a href="{{route('faqs.show', $faq)}}" class="is-size-4 has-text-black">{{$faq -> question}}</a>
                        </div>
                        <br>
                    </div>
                @endforeach
                </div>
            </section>
            </div>
        </div>
</x-layout.main>
