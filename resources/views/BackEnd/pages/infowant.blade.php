@extends('Backend.master')

@section('title')
	Want to Help
@endsection

@section('title')
    Want to Help
@endsection

@section('wanthelp')
    active-link
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="header-title">
                            <h1>Want to Help / Info</h1>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="info">
                                            <h3><i class="fa fa-user" aria-hidden="true"></i> {{ $want->firstname }} {{ $want->lastname }}</h3>
                                            <h5><i class="fa fa-phone" aria-hidden="true"></i> {{ $want->phone }} </h5>
                                            <h5><i class="fa fa-envelope" aria-hidden="true"></i> {{ $want->email }} </h5>

                                            <p style="margin-top: 30px;" class="text-justify"><i class="fa fa-clone" aria-hidden="true"></i> {{ $want->message }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
