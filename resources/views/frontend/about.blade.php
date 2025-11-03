@extends('layouts.frontend')
@section('title', 'About')
@section('content')

<header class="py-5">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold">A warm welcome!</h1>
                <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component
                    has been removed from the framework. Why create custom CSS when you can use utilities?</p>
            </div>
        </div>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container px-lg-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Messages Received</h1>
            <p class="lead text-muted">Here are the latest messages sent through the contact form.</p>
        </div>

        @if($messages->count())
        <div class="row g-4">
            @foreach($messages as $message)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-primary mb-2">
                            {{ $message->name }}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{ $message->email }}
                        </h6>
                        <p class="card-text text-secondary flex-grow-1">
                            {{ Str::limit($message->message, 150, '...') }}
                        </p>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                Sent {{ $message->created_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <div class="alert alert-info shadow-sm d-inline-block">
                <strong>No messages yet.</strong> Messages will appear here when someone contacts you.
                <a href="{{ route('contact') }}" class="btn btn-info">Contact Now</a>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection