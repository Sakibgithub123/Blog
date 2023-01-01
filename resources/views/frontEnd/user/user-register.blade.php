@extends('frontEnd.master')
@section('title')
    Registration

@endsection
@section('content')

    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Registration Form</h1>
                </div>
            </div>



            <div class="form mt-5">
                <form action="{{route('user.register')}}" method="post"  >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" id="subject" placeholder="Password" required>
                    </div>


                    <div class="text-center"><button type="submit">Submit</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>

@endsection

