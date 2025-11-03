@extends('layouts.frontend')
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
            <h1 class="fw-bold">About Us</h1>
            <p class="lead text-muted">Learn more about who we are and what we do.</p>
        </div>

        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://via.placeholder.com/600x400" class="img-fluid rounded-3 shadow-sm" alt="About Image">
            </div>
            <div class="col-lg-6">
                <h2 class="fs-3 fw-bold mb-3">We build modern, scalable web solutions</h2>
                <p class="text-muted mb-3">
                    Our mission is to create user-friendly and robust web applications that help businesses grow.
                    We specialize in Laravel, Bootstrap, and other modern web technologies to deliver high-quality
                    results.
                </p>
                <p class="text-muted">
                    Since our founding, we’ve worked with clients across industries to build custom digital solutions
                    that empower innovation and growth.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

@endsection