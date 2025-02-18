<x-layout.main>
    <div class="box">
        <div class="content">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h1>Create a New Post</h1>
            <br>
            <h2 class="subtitle is-6">
                Please fill out the required form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="title" placeholder="Enter the post's title..."
                           class="input @error('title') is-danger @enderror"
                           value="{{ old('title') }}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="summary" class="label">Summary</label>
                <div class="control has-icons-right">
                    <textarea name="summary" placeholder="Enter a summary of the post content..."
                              class="textarea @error('summary') is-danger @enderror" autocomplete="summary">{{ old('summary') }}</textarea>
                    @error('summary')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('summary')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control has-icons-right">
                    <textarea name="body" placeholder="Enter the post's content here..."
                              class="textarea @error('body') is-danger @enderror" autocomplete="body">{{ old('body') }}</textarea>
                    @error('body')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                    <a href="{{ url()->previous() }}" class="button is-link">Cancel</a>
                </div>
            </div>
        </form>
        </div>
    </div>
</x-layout.main>
