

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sign IN</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/fonts/remixicon.css')}}">  </head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>

      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                              <div class="p-3">
                                 <h2 class="mb-2">Sign In</h2>

                                 <form action="{{ route('login') }}" method="POST">
                                @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class=" form-group">
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="Email">
                                             <label>Email</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class=" form-group">
                                            <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
                                             <label>Password</label>
                                          </div>
                                       </div>


                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>

                                 </form>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    </script>
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset('assets/js/table-treeview.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('assets/js/chart-custom.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>
