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
          <hr>
          <table class="table table-responsive">
          
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Address Line 1</th>
                  <th>Address Line 2</th>
                  <th>Address Line 3</th>
                  <th>Contact (Land)</th>
                  <th>Contact (Mobile)</th>
                  <th>Contact (Office)</th>
                  
              
              </tr>
              @foreach($contact as $row)
              <tr>
                  <td>{{$row->fname}}</td>
                  <td>{{$row->lname}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->address1}}</td>
                  <td>{{$row->address2}}</td>
                  <td>{{$row->address3}}</td>
                  <td>{{$row->land}}</td>
                  <td>{{$row->mobile}}</td>
                  <td>{{$row->office}}</td>
              
              </tr>
          
                @endforeach
          
          </table>
      
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

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/clean-blog.min.js')}}"></script>

</body>

</html>
