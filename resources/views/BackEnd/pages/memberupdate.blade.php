@extends('Backend.master')

@section('title')
	Team
@endsection

@section('add')
    active-link
@endsection

@section('team')
    active
@endsection

@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="header-title">
                            <h1>Executive Team / Update</h1>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <form class="form-horizontal" method="POST" action=" {{ url('/update-team') }} ">

                                            @csrf

                                            <input type="hidden" name="memberid" value="{{$member->id}}">

                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Name:</label>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                            <input name="name" value="{{$member->name}}" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Designation:</label>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                            <input name="designation" value="{{$member->designation}}" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <input type="submit" class="btn btn-my" value="Submit">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection