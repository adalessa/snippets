@component('layout')
    <h1 class="title">New Snippet</h1>
    <form action="/snippets" method="POST">

        {{ csrf_field() }}

        @if ($snippet->id)
            <input type="hidden" name="forked_id" value="{{ $snippet->id }}">
        @endif

        <div class="control">
            <label for="title" class="label">Title:</label>
            <input type="text" name="title" id="title" class="input" value="{{ $snippet->title }}">
        </div>
        <div class="control">
            <label for="Body" class="label">Body:</label>

            <textarea id="body" name="body" class="textarea">{{ $snippet->body }}</textarea>
        </div>
        <div class="control">
            <button type="submit" class="button is-primary">Publish Snippet</button>
        </div>
    </form>
@endcomponent
