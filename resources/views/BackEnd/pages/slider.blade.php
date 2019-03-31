@extends('Backend.master')

@section('title')
	Slider
@endsection

@section('slider')
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
                            <h1>Slider</h1>
                            <p class="text-danger"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class='list-group gallery'>
                                            @foreach($image as $images)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="fancybox thumbnail example-image-link image" data-lightbox="example-1"><img class="example-image" src=" {{ asset('BackEnd/slider_image/'.$images->filename) }} " alt="image" /></a>
                                                <a href=" {{ url('/delete-slider/'.$images->id) }} " class="btn btn-danger image-bt" onclick="return confirm('Are you sure to delete this?')" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
