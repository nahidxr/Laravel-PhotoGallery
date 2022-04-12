@extends('frontend.layouts.app')
@section('content')

<div class="site-section"  data-aos="fade">
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Contact</h2>
            </div>
          </div>
        </div>

      </div>
      
      <div class="row">
        <div class="col-lg-8 mb-5">
          <form action="#">


            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-white" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-white" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-white" for="email">Email</label> 
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-white" for="subject">Subject</label> 
                <input type="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-white" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-lg-3 ml-auto">
          <div class="mb-3">
            <p class="mb-0 font-weight-bold text-white">Address</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold text-white">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold text-white">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

          </div>

        </div>
      </div>
    </div>
  </div>
  @endsection