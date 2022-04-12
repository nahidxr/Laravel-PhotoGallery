 @extends('frontend.layouts.app')
 @section('content')


 <div class="container-fluid" data-aos="fade" data-aos-delay="500">
     <div class="row">
         <div class="col-lg-4">

             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Nature</h2>
                     <a href="{{ route('more.image') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
             </div>

         </div>
         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Portrait</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_2.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>
         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">People</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Architecture</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_4.jpg') }}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Animals</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_5.jpg') }}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Sports</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_6.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Travel</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_7.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">People</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_4.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>

         <div class="col-lg-4">
             <div class="image-wrap-2">
                 <div class="image-info">
                     <h2 class="mb-3">Architecture</h2>
                     <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                 </div>
                 <img src="{{ asset('/frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
             </div>
         </div>

     </div>
 </div>

 @endsection
