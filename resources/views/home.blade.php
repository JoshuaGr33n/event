         @extends('layout')
        @section('title', 'Home')
        @section('content') 

@php
        use App\RegisterUsers;
       
        @endphp
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	background: #47c9a2;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	border-radius: 5px 5px 0 0;
	padding: 35px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
	color: #fff;
	text-shadow: none;
	opacity: 0.5;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
	margin: -4px 0 0 -4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #eeb711 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #eda645 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

     <!-- About start here -->
     <section id="about" class="dark-overlay-right about about-six padding-120">
			<div class="container">
				

			</div><!-- container -->
		</section>
		<!-- About end here -->


		<!-- Schedules start here -->
		<section id="schedules" class="dark-overlay-left schedules schedules-uhv">
			<div class="overlay padding-120">
				<div class="container">
					<div class="section-header text-center">
						<h3>Register for the Event</h3>
						<p><em>Book a seat</em></p>
					</div>

					<div class="schedule-tabs" style="width:80%;margin:auto">

						

                       
						<div class="tab-content" id="myTabContent">
							<div role="tabpanel" class="tab-pane active" id="day-one" style="padding-left:120px; padding-top:100px; padding-bottom:100px">
							 <!-- comment -->
                              <div class="comment-form">
                            
                              <!-- <div class="alert alert-success" id="success-message">  </div> -->

                             
                             <form id="register_users" method="post" action="reg-users">
                             {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-xs-12">
                                        <input type="text" name="fname" id="fname" placeholder="First Name*" class="comment-input" style="border:1px solid #65ac4c;width:90%;">
                                        <span class="text-danger" id="fname-error"></span>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-lg-10 col-md-10 col-xs-12">
                                        <input type="text" name="lname" id="lname" placeholder="Last Name*" class="comment-input" style="border:1px solid #65ac4c;width:90%;">
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-lg-10 col-md-10 col-xs-12">
                                        <input type="email" name="email" id="email" placeholder="Email*" class="comment-input" style="border:1px solid #65ac4c;width:90%;">
                                    </div>
                                </div>    
                                <div class="row">    
                                    <div class="col-lg-10 col-md-10 col-xs-12">
                                        <input type="text" name="phone" id="phone" placeholder="Phone*" class="comment-input" style="border:1px solid #65ac4c;width:90%;">
                                    </div>
                                </div>
                                <!-- <div class="row">
                                <textarea rows="6" name="comment" class="comment-input" placeholder="Comment..." style="width:70%;margin-left:100px"></textarea>
                                </div> -->
                                
                                <button type="submit" class="comment-submit" style="width:50%;margin-right:100px">Register</button>
                             </form>
                             </div>
                              <!-- comment-form -->
							</div>
							
							

							
						</div>
					</div>
				</div><!-- container -->
			</div>
		</section><!-- schedules -->
		<!-- Schedules end here -->

       
        @if(Session::has('success2'))                               
        <?php $user_info = RegisterUsers::find(Session::has('success2'));
        
      
          ?>
       
       
 <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Success!</h4>	
				<p>Hello {{ $user_info->fname }} your Registration is successful.  Your Registration Number is {{ $user_info->id }}</p>
				<button class="btn btn-success" data-dismiss="modal"><span>Share</span> <i class="material-icons">&#xE5C8;</i></button>


                <p>
                    <ul class="event-social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>

                   </p> 
			</div>
		</div>
	</div>
</div>     
<script type="text/javascript">
        $(document).ready(function() {
            $('#myModal').modal('show');

        });
    </script>  
@elseif(Session::has('success'))                               
        <?php $user_info = RegisterUsers::find(Session::has('success'));
        
      
          ?>
       
       
 <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Success!</h4>	
				<p>Hello {{ $user_info->fname }} your Registration is successful.  Your Registration Number is {{ $user_info->id }}</p>
				<button class="btn btn-success" data-dismiss="modal"><span>Share</span> <i class="material-icons">&#xE5C8;</i></button>


                <p>
                    <ul class="event-social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>

                   </p> 
			</div>
		</div>
	</div>
</div>     
<script type="text/javascript">
        $(document).ready(function() {
            $('#myModal').modal('show');

        });
    </script>  
    @endif 
    
    
         
         
                                   
                                     
	@endsection
   @section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
 $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });

 $('#register_users').on('submit', function(event){
     event.preventDefault();
     $('#fname-error').text('');
     $('#lname-error').text('');
     $('#phone-error').text('');
     $('#email-error').text('');
     
     
     fname = $('#fname').val();
     lname = $('#lname').val();
     phone = $('#phone').val();
     email = $('#email').val();
    

     $.ajax({
       url: "reg-users",
       type: "POST",
       data:{
          
           fname:fname,
           lname:lname,
           phone:phone,
           email:email,
       },
       success:function(response){
         console.log(response);
         if (response) {
           $('#success-message').text(response.success);
          
           $("#register_users")[0].reset();
   
         }

        

             
                 
               
       },
       error: function(response) {
           $('#fname-error').text(response.responseJSON.errors.fname);
           $('#lname-error').text(response.responseJSON.errors.lname);
           $('#phone-error').text(response.responseJSON.errors.phone);
           $('#email-error').text(response.responseJSON.errors.email);
        
       }
      });
     });
   </script>	



		


		

		
        @stop
