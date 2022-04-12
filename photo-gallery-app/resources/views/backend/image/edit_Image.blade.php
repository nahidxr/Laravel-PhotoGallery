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
                    {{-- <form method="post" action="{{ route('image.update',$editData->id) }}" enctype="multipart/form-data"> --}}
                        <form method="post" action="{{ route('image.update',$editData->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5>Image Title <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="title" value="{{ $editData->title }}" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="image_category" id="select" required=""
                                    class="form-control">
                                    <option value="" selected="" disabled="">Select Image Category
                                    </option>
                                    <option value="Nature"
                                        {{ ($editData->image_category == "Nature" ? "selected": "") }}>
                                        Nature</option>
                                        <option value="Portrait"
                                        {{ ($editData->image_category == "Portrait" ? "selected": "") }}>
                                        Portrait</option>
                                        <option value="People"
                                        {{ ($editData->image_category == "People" ? "selected": "") }}>
                                        People</option>
                                        <option value="Architecture"
                                        {{ ($editData->image_category == "Architecture" ? "selected": "") }}>
                                        Architecture</option>
                                        <option value="Animals"
                                        {{ ($editData->image_category == "Animals" ? "selected": "") }}>
                                        Animals</option>
                                        <option value="Sports"
                                        {{ ($editData->image_category == "Sports" ? "selected": "") }}>
                                        Sports</option>
                                        <option value="Travel"
                                        {{ ($editData->image_category == "Travel" ? "selected": "") }}>
                                        Travel</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                {{-- <input type="text" name="description"   class="form-control" required=""> --}}
                                <textarea name="description" value="" class="form-control" required="">{{ $editData->description}}</textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <h5> Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control" id="image">
                                {{-- <img src="{{ asset('upload/images/'.$editData->image) }}" width="70px"
                                                height="70px" alt="image">  --}}
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
