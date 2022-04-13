@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Image</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5>Image Title <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="title" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Category <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="image_category" id="select" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select Category
                                    </option>
                                    <option value="1">Nature</option>
                                    <option value="2">Portrait</option>
                                    <option value="5">People</option>
                                    <option value="6">Architecture</option>
                                    <option value="7">Animals</option>
                                    <option value="8">Sports</option>
                                    <option value="9">Travel</option>
                                    <option value="10">Food</option>
                                    <option value="11">Life Style</option>

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Image Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                {{-- <input type="text" name="description"   class="form-control" required=""> --}}
                                <textarea name="description" class="form-control" required=""></textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <h5> Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage"
                                    src="{{ (!empty($alldata->image))? url('upload/images/'.$alldata->image):url('upload/no_image.png') }}"
                                    alt="" style="hight:100px;width:100px;border:1px solid #000000;">
                            </div>

                        </div>


                </div>
                <div class="text-xs-right">
                    {{-- <button type="submit" class="btn btn-rounded btn-info">Submit</button> --}}
                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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
