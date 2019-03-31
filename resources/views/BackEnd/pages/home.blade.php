@extends('Backend.master')

@section('title')
	Dashboard
@endsection

@section('dashboard')
    active-link
@endsection

@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="header-title">
                            <h1>Dashboard</h1>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-success">
                                    <div class="panel-body card-item panel-refresh">
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="{{$project}}" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">extension</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Projects</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-my">
                                    <div class="panel-body card-item panel-refresh">
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="{{$need}}" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">people_outline</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Need Help</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-info">
                                    <div class="panel-body card-item panel-refresh">
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="{{$want}}" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">people</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Want to Help</h4>
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
    <script src=" {{ asset('BackEnd/dist/js/main.js') }} " type="text/javascript"></script>
@endpush