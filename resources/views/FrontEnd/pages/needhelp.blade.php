@extends('FrontEnd.master')

@section('title')
	Need Help
@endsection

@section('class3')
  active
@endsection

@push('css')
<style type="text/css">
    label.error {
    color: #CC0000;
    font-weight: 300;
    }
    label span{
    	color: red;
    }
</style>
@endpush

@section('main-content')
	<section class="need-help">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="project">
                    <h4 class="text-center">Need Help</h4>
                    <p class="col-md-2 offset-md-5"></p>
                </div>
            </div>
        </div>
    </div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 offset-md-2 help">
					<div class="vision">
						<p class="text-center"><i class="fas fa-hand-point-right"></i> Those who need help, please contact us using the form below.</p>
            <p class="text-success text-center"> <b> {{ Session::get('message') }} </b> </p>
					</div>

					<div class="help-form">
						<form id="need-help-form" method="post" action=" {{ url('/save-need-help') }} " role="form">
                  @csrf

        					<div class="controls">
          						<div class="row">
            						<div class="col-md-6">
              							<div class="form-group">
                							<label for="form_name">Firstname <span>*</span></label>
                							<input id="form_name" type="text" name="firstname" class="form-control">
              							</div>
            						</div>
            						<div class="col-md-6">
              							<div class="form-group">
                							<label for="form_lastname">Lastname <span>*</span></label>
                							<input id="form_lastname" type="text" name="lastname" class="form-control">
              							</div>
            						</div>
          						</div>
          						<div class="row">
            						<div class="col-md-6">
              							<div class="form-group">
                							<label for="form_email">Email <span>*</span></label>
                							<input id="form_email" type="text" name="email" class="form-control">
                							<div class="help-block with-errors"></div>
              							</div>
            						</div>
            						<div class="col-md-6">
              							<div class="form-group">
                							<label for="form_phone">Phone <span>*</span></label>
                							<input id="form_phone" type="text" name="phone" class="form-control">
                							<div class="help-block with-errors"></div>
              							</div>
            						</div>
          						</div>
          						<div class="row">
            						<div class="col-md-12">
              							<div class="form-group">
                							<label for="form_message">Message <span>*</span></label>
                							<textarea id="form_message" name="message" class="form-control" rows="3"></textarea>
                							<div class="help-block with-errors"></div>
              							</div>
            						</div>
            						<div class="col-md-12">
              							<input type="submit" class="btn btn-my" value="Submit">
            						</div>
          						</div>
        					</div>
        				</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('script')
<script src=" {{ asset('FrontEnd/js/jquery.validate.js') }} "></script>
<script type="text/javascript">

    $.validator.addMethod("alphabet", function(value, element) {
        return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*$/.test(value);
    });
    
    $().ready(function() {

        $("#need-help-form").validate({
            rules: {
                firstname:{
                    required:true,
                    alphabet:true,
                    minlength:3
                },
                lastname:{
                    required:true,
                    alphabet:true,
                    minlength:3
                },
                email:{
                    required:true,
                    email:true
                },
                phone:{
                    required:true,
                    number:true
                },
                message:"required"
                
            },
            messages: {
              firstname:{
                required:"Enter first name",
                alphabet:"Name must be alphabetic",
                minlength:"Enter at least three(3) character"
              },
              lastname:{
                required:"Enter last name",
                alphabet:"Name must be alphabetic",
                minlength:"Enter at least three(3) character"
              },
              email:{
                    required:"Enter email address",
                    email:"Enter valid email address"
                },
            phone:{
                required:"Enter phone number",
                number:"Enter valid phone number"
              },
              message:"Enter your message"
            }
        });

        
        });
</script>
@endpush

