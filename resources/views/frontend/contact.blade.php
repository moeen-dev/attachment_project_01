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

<section class="py-5">
    <div class="container px-lg-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="lead text-muted">We’d love to hear from you. Send us a message below!</p>
        </div>

        <div class="row gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection