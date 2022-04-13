@extends('admin.admin_master')
@section('admin')


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

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $item)

                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <img src="{{ (!empty($item->image))? url('upload/images/'.$item->image):url('upload/no_image.jpg') }}"
                                                    width="90px" height="90px" alt="image">
                                            </td>
                                            <td>{{ $item->title}}</td>
                                            <td>{{ $item->description}}</td>


                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image File</th>
                                            <th>Image Title</th>
                                            <th>Description</th>


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



@endsection
