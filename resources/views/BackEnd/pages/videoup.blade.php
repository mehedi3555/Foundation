@extends('Backend.master')

@section('title')
    Projects
@endsection

@section('videoupload')
    active-link
@endsection

@section('for_project')
    active
@endsection


@section('main_content')
            <div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">extension</i>
                        </div>
                        <div class="header-title">
                            <h1>Video / Upload</h1>
                            <p class="text-success"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-image-up">
                                    <div class="card-content">
                                        <form class="form-horizontal" action=" {{ url('/save-video') }} " method="POST">

                                            @csrf

                                            <div style="margin:3px 1px" class="form-group">
                                                <div class="col-md-4">
                                                    <div class="input-field">
                                                        <input name="title" type="text" placeholder="Video Title" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="margin:3px 1px" class="form-group">
                                                <div class="col-md-4">
                                                    <div class="input-field">
                                                        <textarea rows="3" name="url" placeholder="Video Url" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-field form-input form-input-select col s4">
                                                <select class="icons" name="p_id" required>
                                                    <option value="" disabled selected>Select One Project</option>
                                                    @foreach($project as $data)
                                                        <option value="{{$data->id}}">{{$data->name}}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br><br>

                                            <div style="margin-top: 40px; margin-bottom: 5px">
                                                <input type="submit" class="btn btn-my marg-left" value="Upload">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('script')
    <script> 
            $(function () {
                $('select').material_select();  
            });
    </script>
@endpush