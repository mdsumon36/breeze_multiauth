<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>TWC - Responsive Admin Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
      <meta content="Coderthemes" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{url('backend/assets/images/favicon.ico')}}">
      <!-- App css -->
      <link href="{{url('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{url('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{url('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
   </head>
   <body class="authentication-bg authentication-bg-pattern">
      <div class="account-pages mt-5 mb-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-pattern">
                     <div class="card-body p-4">
                        @if(Session::has('error'))
                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>{{session::get('error')}}</strong> 
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{route('admin.register.create')}}" method="POST">@csrf
                           <div class="form-group mb-3">
                              <label for="">User Name</label>
                              <input class="form-control" name="name" type="text"placeholder="Enter your Name">
                           </div>
                            <div class="form-group mb-3">
                              <label for="">Email address</label>
                              <input class="form-control" name="email" type="email"placeholder="Enter your email">
                           </div>
                            <div class="form-group mb-3">
                              <label for="">Password</label>
                              <input class="form-control" name="password" type="password"placeholder="Enter your Password">
                           </div>
                           <div class="form-group mb-3">
                              <label for="password">Re Type Password</label>
                              <input class="form-control" name="password_confirmation" type="password"placeholder="Enter your password">
                              <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                           </div>
                           
                           <div class="form-group mb-0 text-center">
                              <button class="btn btn-primary btn-block" type="submit"> Sing Up </button>
                           </div>
                        </form>
                        
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end card -->
                  <div class="row mt-3">
                     <div class="col-12 text-center">
                        
                        <p class="text-white-50">Already account? <a href="{{route('login_from')}}" class="text-white ml-1"><b>Login In</b></a></p>
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end page -->
      <footer class="footer footer-alt">
         2023 - 2025 &copy; TECH WEB CODERS theme by <a href="" class="text-white-50">Coders</a> 
      </footer>
      <!-- Vendor js -->
      <script src="{{url('backend/assets/js/vendor.min.js')}}"></script>
      <!-- App js -->
      <script src="{{url('backend/assets/js/app.min.js')}}"></script>
   </body>
</html>