@extends('FrontEnd.master')
@section('title')
    Project One
@endsection

@section('project')
    active
@endsection

@push('css')
    <link rel="stylesheet"  href=" {{ asset('FrontEnd/css/flexslider.css') }} "/>
    <link rel='stylesheet' href=" {{ asset('FrontEnd/font-awesome/css/font-awesome.css') }} ">
    <link rel="stylesheet"  href=" {{ asset('FrontEnd/css/slider_style.css') }} "/>
@endpush
@section('main-content')
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="project">
                    <h4 class="text-center">Projrct</h4>
                    <p class="col-md-2 offset-md-5"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="project_name">
                    <h5 class="text-center"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> {{ $project->name }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="project_des">
                    <?php
                    $oldDate = $project->date;
                    $newDate = date("d-M-Y", strtotime($oldDate));
                    ?>
                    <h6><i class="fa fa-calendar" aria-hidden="true"></i> {{ $newDate }} </h6>
                    <p class="text-justify"><i class="fas fa-hand-point-right"></i> {{ $project->description }} </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="project_slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($images as $proImage)
                            <li>
                                <img src=" {{ asset('BackEnd/project_image/'.$proImage->photo) }} " />
                                <div class="flex-caption">
                                    <p class="text-justify">{{$proImage->caption}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="project">
                    <h4 class="text-center">Projrct Video</h4>
                    <p class="col-md-2 offset-md-5"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-ms-6 offset-md-3">
                <div class="video">
                    @foreach($videos as $video)
                        <p><i class="fas fa-hand-point-right"></i> {{ $video->title }}</p>
                        <iframe src="{{$video->url}}"></iframe>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
    <script src=" {{ asset('FrontEnd/js/jquery.flexslider.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/slider.js') }} "></script>
@endpush