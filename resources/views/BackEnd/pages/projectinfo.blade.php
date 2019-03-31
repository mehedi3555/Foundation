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


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">extension</i>
                        </div>
                        <div class="header-title">
                            <h1>Project / Info</h1>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12">
                                                <div class="text cyan lighten-4 z-depth-1">
                                                    <div class="content-text">
                                                        <h3 class="lead">
                                                            {{ $project->name }}
                                                        </h3>
                                                        <p class="text-justify">
                                                            {{ $project->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <div class='list-group gallery'>
                                            @foreach($images as $image)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="fancybox thumbnail example-image-link image" data-lightbox="example-1"><img class="example-image" src=" {{ asset('BackEnd/project_image/'.$image->filename) }} " alt="image" /><p class="text-justify"><b>{{$image->caption}}</b></p></a>

                                                <a href=" {{ url('/delete-proimage/'.$image->id) }} " class="btn btn-danger image-bt" onclick="return confirm('Are you sure to delete this?')" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <div class='list-group gallery video'>
                                            @foreach($videos as $video)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="fancybox thumbnail example-image-link image" data-lightbox="example-1"><iframe src="{{$video->url}}"></iframe><p class="text-justify"><b>{{$video->title}}</b></p></a>

                                                <a href=" {{ url('/delete-video/'.$video->id) }} " class="btn btn-danger image-bt" onclick="return confirm('Are you sure to delete this?')" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
