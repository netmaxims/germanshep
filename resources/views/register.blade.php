@extends('include.master')
@section('content')
<section class="headinner" style="background: url({{asset('images_1/80.jpg')}});background-size:cover;">
    <div class="container">
        <h3>Register</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Register</a>
        </div>
    </div>
</section>

<div class="text-center text-danger">
    {{session('msg')}}
</div>
<style>
    .form-container{
        background:#fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow:0px 0px 10px 0px #000;
    }
</style>
<div class="row">
    <div class="container mt-5 mb-5 col-md-6 col-md-offset-4">
        <h1 class="text-center">Register Now</h1>
        <form action="{{route('signup.create')}}"  method="POST" class="form-container" >
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">First Name <code>*</code> </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="f_name" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="l_name" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone no <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Zip Code <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="zip" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Country <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="country" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Username <code>*</code></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password <code>*</code></label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>
                <div class="form-group">
                    <label for="imageUpload" class="btn btn-primary btn-block btn-outlined">Upload Profile Image</label>
                    <input type="file" id="imageUpload" accept="image/*" style="display: none" name="image">
                </div>
            <h5>Terms of Use: <br>
                By checking the box below, you are agreeing to the Pedigree Database Pedigree terms of use.</h5>
                <div class="form-group form-check pt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the terms</label>
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>


@include('include.newsletter-form')
@endsection
