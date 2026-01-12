@extends('layout.app')
@section ('content')
<div class="container text-center py-5">
    <h1 class="display-4">🚧 Coming Soon</h1>

    <p class="lead mt-3">
        The <strong>{{ ucfirst(str_replace('-', ' ', $page ?? 'feature')) }}</strong>
        page is under development.
    </p>

    <p class="text-muted">
        We’re working hard to launch it soon.
    </p>

    <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">
        Go Back
    </a>
</div>
@endsection
