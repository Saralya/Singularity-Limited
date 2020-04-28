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
          <br>
          <br>
          <br>
          <br>
          <a href="{{route('add.contact')}}" class="btn btn-danger">Add Contact</a>
          <a href="{{route('all.contact')}}" class="btn btn-info">Details</a>
        <hr>
          <table class="table table-responsive">
          
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  
                  
              
              </tr>
              @foreach($contact as $row)
              <tr>
                  <td>{{$row->fname}}</td>
                  <td>{{$row->lname}}</td>
                  <td>{{$row->email}}</td>
                  <td>
                    <a href="{{URL::to('edit/contact/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{URL::to('delete/contact/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    <a href="{{URL::to('address/list/'.$row->id)}}" class="btn btn-sm btn-success">Address List</a>
                    <a href="{{URL::to('phone/list/'.$row->id)}}" class="btn btn-sm btn-success">Phone List</a>
                  
                  </td>
              
              </tr>
          
                @endforeach
          
          </table>
        
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
    
    <!-- toaster -->
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
   
  <!-- sweet alert --> 
    <script src="https:unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
        $(document).on("click","#delete",function(e){
            e.preventDefault();
            var link=$(this).attr("href");
            swal({
                title:"Do you want to delete?",
                text:"once delete, data will be permanently deleted",
                icon:"warning",
                buttons:true,
                dangerMode:true,
            })
            .then((willDelete)=>{
                if(willDelete){
                    window.location.href=link;
                }else{
                    swal("Safe data!");
                }
            });
        });
    
    </script>

</body>

</html>
