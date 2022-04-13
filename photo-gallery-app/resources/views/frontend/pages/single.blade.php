@extends('frontend.layouts.app')
@section('content')

<div class="site-section" data-aos="fade">
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-7">
                <div class="row mb-5">
                    <div class="col-12 ">
                        <h2 class="site-section-heading text-center">Photo Gallery</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" id="lightgallery">
            @foreach ($allData as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade"
            data-src="images/big-images/nature_big_1.jpg"
            data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">

            <h1> Title: {{ $item->title }}</h1>
            <img src="{{ url('upload/images/'.$item->image) }}" alt="IMage" class="img-fluid">

            
            
            <span> Description: {{ $item->description }}</span>
        </div>
                
            @endforeach
          
            

        </div>
    </div>
</div>

@endsection
