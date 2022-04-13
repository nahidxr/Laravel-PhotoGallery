 @extends('frontend.layouts.app')
 @section('content')


 <div class="container-fluid" data-aos="fade" data-aos-delay="500">
     <div class="row">



        @foreach ($allData as $item)

        <div class="col-lg-4">

            <div class="image-wrap-2">
                <div class="image-info">
                    <h2 class="mb-3">{{$item->category_name}}</h2>
                  
                    <a href="{{ route('more.image',$item->id) }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{ url('/frontend/images/'.$item->category_image) }}" alt="Image" class="img-fluid">

            </div>

        </div>
            
        @endforeach
        




     </div>
 </div>

 @endsection
