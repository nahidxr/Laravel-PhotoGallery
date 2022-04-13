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

                        <div id="aaa" class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Image List</h3>
                                <a href=" {{ route('image.add') }}" style="float: right;"
                                    class="btn btn-rounded btn-success mb-5">Add Image</a>
                            </div>


                            <div class="form-control">
                                <label for="">
                                    <h2 class="center">Sort By</h2>
                                </label>
                                <select name="sort" id="sort" class="form-control sortby">
                                    <option value="" selected="" disabled="">Select your Sort</option>
                                    <option value="1">sorted by title</option>
                                    <option value="2">sorted by date</option>
                                </select>
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
                                                <th>Inserted Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as $key => $item)

                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>

                                                    <img src="{{ (!empty($item->image))? url('upload/images/'.$item->image):url('upload/no_image.jpg') }}"
                                                        width="70px" height="70px" alt="image">
                                                </td>
                                                <td>{{ $item->title}}</td>
                                                <td>{{ $item->description}}</td>
                                                <td>{{ $item->created_at}}</td>
                                                <td><a href="{{ route('image.edit',$item->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('image.delete',$item->id) }}"
                                                        class="btn btn-danger" id="delete">Delete</a>
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
                                                <th>Inserted Date</th>
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

        //alert('123');
        $(document).on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            // alert(page);

            $.ajax({
                type: 'get',
                url: "{{ route('image.fetch') }}",
                success: function (data)

                {
                    console.log(data);
                    $('#image_data').html(data);
                }
            });

        });

    });

</script>


@endpush

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function () {
        $("select.sortby").change(function () {

            var sort = $(this).children("option:selected").val();

            $.ajax({
                type: 'get',
                url: 'sort/' + sort,

                success: function (data) {
                    // console.log(data);
                    var res = '';
                    $.each(data, function (key, value) {


                        res += '<tr>\
                                <td>' + value.id + '</td>\
                                <td><img src="/upload/images/' + value.image + '" width = "70px" height = "70px" alt = "image"></td>\
                                <td>' + value.title + '</td>\
                                <td>' + value.description + '</td>\
                                <td>' + value.created_at + '</td>\
                                <td><a href="{{ route("image.edit",' + value.id +') }}"class="btn btn-info">Edit</a> <a href="{{ route("image.delete",'+value.id +') }}"class="btn btn-danger">Delete</a></td>\</tr>';


                    });

                    $('tbody').html(res);



                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    });

</script>
