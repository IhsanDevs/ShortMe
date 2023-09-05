@extends('layouts.bootstrap')

@section('content')
<form action="{{ route('generate.shorten.link.post') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="url">URL</label>
        <input class="form-control @error('link') is-invalid @enderror" type="text" id="url" name="link"
               placeholder="https://example.com">
        @error('link')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-dark mt-3" type="submit">create</button>
</form>
@endsection
