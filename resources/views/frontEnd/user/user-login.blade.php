@extends('frontEnd.master')
@section('title')
    Login

@endsection
@section('content')

    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Login Form</h1>
                    <h1 class="page-title">{{Session::get('message')}}</h1>
                </div>
            </div>



            <div class="form mt-5">
                <form action="{{route('user.login')}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="userName" class="form-control"  placeholder="Your email or phone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="password"  placeholder="Your password" required>
                        </div>

                    </div>


                    <div class="text-center"><button type="submit">Login</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>

@endsection


