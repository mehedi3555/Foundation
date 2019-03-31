@extends('Backend.master')

@section('title')
	Projects
@endsection

@section('viewproject')
    active-link
@endsection

@section('for_project')
    active
@endsection

@push('style')
    <link href=" {{ asset('BackEnd/plugins/datatables/dataTables.min.css') }} " rel="stylesheet" type="text/css" />
@endpush


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">extension</i>
                        </div>
                        <div class="header-title">
                            <h1>Projects / View</h1>
                            <p class="text-success"> <b> {{ Session::get('message') }} </b> </p>
                            <p class="text-danger"> <b> {{ Session::get('d_message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                             <table id="table_info" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>SL.</th>
                                                        <th>Project Title</th>
                                                        <th>Date </th>
                                                        <th>Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $i=0 ?>
                                                    
                                                    @foreach($projects as $data)
                                                    <tr>
                                                        <?php $i++ ?>

                                                        <td> {{ $i }} </td>
                                                        <td> {{ $data->name }} </td>

                                                        <?php
                                                            $oldDate = $data->date;
                                                            $newDate = date("d-M-Y", strtotime($oldDate));
                                                        ?>

                                                        <td> {{ $newDate }} </td>
                                                        <td>
                                                            <a href=" {{ url('/view-project-info/'.$data->id) }} " class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                            <a href=" {{ url('/update-project-info/'.$data->id) }} " class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('script')
    <script src=" {{ asset('BackEnd/plugins/datatables/dataTables.min.js') }} " type="text/javascript"></script>
    <script>
             "use strict";
            $(document).ready(function () {
                function dtable() {
                    $('#table_info').DataTable({
                        "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                        "lengthMenu": [
                            [6, 25, 50, -1],
                            [6, 25, 50, "All"]
                        ],
                        "iDisplayLength": 6
                    });
                }
                return (dtable());
            });
        </script>
@endpush
