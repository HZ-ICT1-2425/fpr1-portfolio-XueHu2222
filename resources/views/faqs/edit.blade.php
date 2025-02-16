<x-layout.main>
    <div class="box">
        <div class="content">
            <form action="{{ route('faqs.update', $faq) }}" method="POST">
                @csrf
                @method('PUT')
                <h1>Create a New FAQ</h1>
                <br>
                <h2 class="subtitle is-6">
                    Please fill out required the form fields and click 'Save'
                </h2>

                {{-- Here are all the form fields --}}
                <div class="field">
                    <label for="question" class="label">Question</label>
                    <div class="control has-icons-right">
                    <textarea name="question" placeholder="Enter a question..."
                              class="textarea @error('question') is-danger @enderror" autocomplete="question">{{ old('question', $faq->question) }}</textarea>
                        @error('question')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
                    @error('question')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="answer" class="label">Answer</label>
                    <div class="control has-icons-right">
                    <textarea name="answer" placeholder="Enter a answer..."
                              class="textarea @error('answer') is-danger @enderror" autocomplete="answer">{{ old('answer', $faq->answer) }}</textarea>
                        @error('answer')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
                    @error('answer')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="link" class="label">Link</label>
                    <div class="control has-icons-right">
                        <input type="text" name="link" placeholder="Enter the link..."
                               class="input @error('link') is-danger @enderror"
                               value="{{ old('link', $faq->link) }}" autocomplete="link" autofocus>
                        @error('link')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
                    @error('link')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout.main>
