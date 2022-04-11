@extends('admin.admin_master')
@section('admin')

<div id="image_data">
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Image List</h3>
                            <a href=" {{ route('image.add') }}" style="float: right;"
                                class="btn btn-rounded btn-success mb-5">Add Image</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image File</th>
                                            <th>Image Title</th>
                                            <th>Description</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $item)

                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                {{-- <img src="{{ asset('upload/images/'.$item->image) }}" width="70px"
                                                height="70px" alt="image"> --}}
                                                <img src="{{ (!empty($item->image))? url('upload/images/'.$item->image):url('upload/no_image.jpg') }}"
                                                    width="70px" height="70px" alt="image">
                                            </td>
                                            <td>{{ $item->title}}</td>
                                            <td>{{ $item->description}}</td>
                                            <td><a href="{{ route('image.edit',$item->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('image.delete',$item->id) }}" class="btn btn-danger"
                                                    id="delete">Delete</a>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image File</th>
                                            <th>Image Title</th>
                                            <th>Description</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                </table>
                                {{ $allData->links() }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>
</div>


@endsection

@push('scripts')

<script>
    $(document).ready(function () {

        // alert('123');
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            alert(page);

        });


    });
    function ImageView(page){
        $.ajax({
            type:"Get",
            url:"{{route(image.view)}}",
            success:function(data){
                $('#image_data').html(data);
            }

        })

    }

</script>

@endpush
