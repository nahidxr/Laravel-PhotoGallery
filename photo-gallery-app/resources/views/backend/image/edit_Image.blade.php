@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Image</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{-- <form method="post" action="{{ route('image.update',$editData->id) }}"
                    enctype="multipart/form-data"> --}}
                    <form method="post" action="{{ route('image.update',$editData->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5>Image Title <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="title" value="{{ $editData->title }}" class="form-control"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="image_category" id="select" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select Image Category
                                    </option>
                                    <option value="1" {{ ($editData->image_category == "1" ? "selected": "") }}>
                                        Nature</option>
                                    <option value="2" {{ ($editData->image_category == "2" ? "selected": "") }}>
                                        Portrait</option>
                                    <option value="5" {{ ($editData->image_category == "5" ? "selected": "") }}>
                                        People</option>
                                    <option value="6" {{ ($editData->image_category == "6" ? "selected": "") }}>
                                        Architecture</option>
                                    <option value="7" {{ ($editData->image_category == "7" ? "selected": "") }}>
                                        Animals</option>
                                    <option value="8" {{ ($editData->image_category == "8" ? "selected": "") }}>
                                        Sports</option>
                                    <option value="9" {{ ($editData->image_category == "9" ? "selected": "") }}>
                                        Travel</option>
                                    <option value="10" {{ ($editData->image_category == "10" ? "selected": "") }}>
                                        Food</option>
                                    <option value="11" {{ ($editData->image_category == "11" ? "selected": "") }}>
                                        Life Style</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                {{-- <input type="text" name="description"   class="form-control" required=""> --}}
                                <textarea name="description" value="" class="form-control"
                                    required="">{{ $editData->description}}</textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <h5> Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control" id="image">
                                {{-- <img src="{{ asset('upload/images/'.$editData->image) }}" width="70px"
                                height="70px" alt="image"> --}}
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage"
                                    src="{{ (!empty($editData->image))? url('upload/images/'.$editData->image):url('upload/no_image.png') }}"
                                    alt="" style="hight:100px;width:100px;border:1px solid #000000;">
                            </div>

                        </div>


                </div>
                <div class="text-xs-right">
                    {{-- <button type="submit" class="btn btn-rounded btn-info">Submit</button> --}}
                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                </div>
            </div>


            </form>

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

</section>

</div>
</div>

<script>
    $(document).ready(function () {
        $('#image').change(function (e) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });



    });

</script>



@endsection
