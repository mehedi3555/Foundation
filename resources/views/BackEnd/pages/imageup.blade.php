@extends('Backend.master')

@section('title')
	Slider
@endsection

@section('sliderup')
    active-link
@endsection

@section('for_slider')
    active
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">image</i>
                        </div>
                        <div class="header-title">
                            <h1>Slider / Upload</h1>
                            <p class="text-success"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-image-up">
                                    <div class="card-content">
                                        <form action=" {{ url('/save-slider') }} " method="POST" enctype="multipart/form-data">

                                            @csrf

                                            <input class="img-up" type="file" id="files" name="filename[]" multiple  required />

                                            <output id="list"></output>
                                            <input type="submit" class="btn btn-my marg-left" value="Upload">
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
@endpush