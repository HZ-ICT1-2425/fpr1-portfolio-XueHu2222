<x-layout.main>
    <div class="container">
        <div class="column has-text-right">
            <a href="{{ route('faqs.edit', $faq) }}" class="button is-link">Edit</a>

        </div>
        <section class="content mt-5">
            <div class="has-text-centered">
            <h1>{{$faq -> question}}</h1>
            </div>
            <div class="has-text-centered">
            <h3>{!! $faq -> answer !!}</h3>
            @if(!empty($faq -> link))
                <a href="{{ Str::startsWith($faq->link, ['http://', 'https://']) ? $faq->link : 'http://' . $faq->link }}" target="_blank">{!! $faq->link !!}</a>
            @endif
            </div>
        </section>
        <div class="column has-text-right">

        <form action="{{route('faqs.destroy', $faq)}}" method ='POST' class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        </div>
    </div>
</x-layout.main>
