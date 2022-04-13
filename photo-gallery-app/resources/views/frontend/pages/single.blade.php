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
                data-src="{{ url('upload/images/'.$item->image) }}"
                data-sub-html="<h4>{{ $item->title }}</h4><p>{{ $item->description }}</p>">
                <img src="{{ url('upload/images/'.$item->image) }}" alt="IMage" class="img-fluid">
            </div>

            @endforeach



        </div>
        {{ $allData->links() }}

    </div>
</div>

@endsection
