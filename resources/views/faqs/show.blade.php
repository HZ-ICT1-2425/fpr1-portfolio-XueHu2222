<x-layout.main>
    <div class="container">
        <section class="content mt-5">
            <h1>{{$faq -> question}}</h1>
            <div class="column has-text-right">
                <a href="{{ route('faqs.edit', $faq) }}" class="button is-primary">Edit</a>
            </div>
            <h3>{!! $faq -> answer !!}</h3>
            @if(!empty($faq -> link))
                <a href="{{ Str::startsWith($faq->link, ['http://', 'https://']) ? $faq->link : 'http://' . $faq->link }}" target="_blank">{!! $faq->link !!}</a>
            @endif
        </section>
        <form action="{{route('faqs.destroy', $faq)}}" method ='POST'>
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</x-layout.main>
