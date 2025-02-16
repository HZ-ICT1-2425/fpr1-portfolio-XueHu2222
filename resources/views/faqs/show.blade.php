<x-layout.main>
    <div class="container">
        <section class="content mt-5">
            <h1>{{$faq -> question}}</h1>
            <h3>{!! $faq -> answer !!}</h3>
            @if(!empty($faq -> link))
                <a href="{{ Str::startsWith($faq->link, ['http://', 'https://']) ? $faq->link : 'http://' . $faq->link }}" target="_blank">{!! $faq->link !!}</a>
            @endif
        </section>
    </div>
</x-layout.main>
