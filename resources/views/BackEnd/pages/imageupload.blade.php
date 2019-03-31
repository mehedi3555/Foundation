@extends('Backend.master')

@section('title')
	Projects
@endsection

@section('imgupload')
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
                            <h1>Image / Upload</h1>
                            <p class="text-success"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-image-up">
                                    <div class="card-content">
                                        <form class="form-horizontal" action=" {{ url('/save-project-image') }} " method="POST" enctype="multipart/form-data">

                                            @csrf

                                            <div style="margin:3px 1px" class="form-group">
                                                <div class="col-md-4">
                                                    <div class="input-field">
                                                        <textarea rows="5" name="caption" placeholder="Caption" required></textarea>
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

                                            <div style="margin-top: 100px; margin-bottom: 5px" class="img">
                                                <input class="img-up" type="file" id="files" name="filename" required />
                                                <output id="list"></output>
                                                <br>
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
     function handleFileSelect(evt) {
     var files = evt.target.files;
     for (var i = 0, f; f = files[i]; i++) {

     if (!f.type.match('image.*')) {
     continue;
     }
     var reader = new FileReader();

     reader.onload = (function(theFile) {
     return function(e) {
     var span = document.createElement('span');
     span.innerHTML = ['<img style="width:150px; height:130px; border-width:2px; border-style:solid; border-color:#26A69A; margin:10px;" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
    document.getElementById('list').insertBefore(span, null);
                 };
             })(f);

             reader.readAsDataURL(f);
         }
     }
     document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>

    <script> 
            $(function () {
                $('select').material_select();  
            });
    </script>
@endpush