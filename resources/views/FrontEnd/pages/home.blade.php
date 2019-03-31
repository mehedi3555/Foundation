@extends('FrontEnd.master')
@section('title')
Home
@endsection
@section('class1')
active
@endsection
@section('welcome')
Welcome to <span>Roya Foundation</span>
@endsection
@push('css')
<link rel="stylesheet"  href=" {{ asset('FrontEnd/css/lightslider.css') }} "/>
@endpush
@section('main-content')
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="demo">
                    <div class="item">
                        <div class="clearfix">
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                @foreach($slider as $sliderImage)
                                  <li data-thumb=" {{ asset('BackEnd/slider_image/'.$sliderImage->filename) }} ">
                                      <img src=" {{ asset('BackEnd/slider_image/'.$sliderImage->filename) }} " />
                                  </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="choose-main">
                    <h4 class="text-center">Roya Foundation</h4>
                    <p class="col-md-2 offset-md-5 foundation"></p>
                    <p class="text-justify">Roya Foundation fosters charitable giving to alleviate the needs of poor communities and to establish long-term projects that transforms lives. We primarily focus on charitable assistance in the field of education, healthcare, emergency relief and other social welfare services to alleviate the poverty of underprivileged people in Bangladesh. Every penny contributed by our supporters is used as efficiently as possible to maximize the impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src=" {{ asset('FrontEnd/js/lightslider.js') }} "></script>
<script>
    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });
        $('#image-gallery').lightSlider({
            gallery:true,
            item:1,
            thumbItem:12,
            slideMargin: 0,
            speed:3000,
            auto:true,
            loop:true,
        onSliderLoad: function() {
        $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>
@endpush