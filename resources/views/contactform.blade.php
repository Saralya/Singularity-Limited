<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sample Project</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!-- Custom fonts for this template -->
  <link href="{{('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  

 
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          
         
      
        
        <form action="{{route('store.contact')}}" method="post">
            @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>First Name</label>
              <input type="text" class="form-control" placeholder="First Name" id="name" name="fname" required>
              <p class="help-block text-danger"></p>
            </div>
          </div>
            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name" id="name" name="lname" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
             <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Address Line 1</label>
              <input type="text" class="form-control" placeholder="Address Line 1" id="email" name="address1" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
             <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Address Line 2</label>
              <input type="text" class="form-control" placeholder="Address Line 2 (optional)" id="email" name="address2"  >
              <p class="help-block text-danger"></p>
            </div>
          </div>
             <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Address Line 3</label>
              <input type="text" class="form-control" placeholder="Address Line 3 (optional)" id="email" name="address3">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Contact Number (Land)</label>
              <input type="tel" class="form-control" placeholder="Contact Number (Land)" id="phone" name="land">
              <p class="help-block text-danger"></p>
            </div>
          </div>
            <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Contact Number (Mobile)</label>
              <input type="tel" class="form-control" placeholder="Contact Number (Mobile)" id="phone" name="mobile" required>
              <p class="help-block text-danger"></p>
            </div>
          </div>
            <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Contact Number (Office)</label>
              <input type="tel" class="form-control" placeholder="Contact Number (Office)" id="phone" name="office" required>
              <p class="help-block text-danger"></p>
            </div>
          </div>
         
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
          </div>
        </form>
          <a href="{{route('write.contact')}}" class="btn btn-info">Back</a>
      </div>
    </div>
  </div>

  <hr>

  

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('js/contact_me.js')}}"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    
  </script>
    
     <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
        }
      @endif
  </script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/clean-blog.min.js')}}"></script>

</body>

</html>
