<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
     @include('inc.links'){{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/customlogin.css')?>" type="text/css">
        
        <title>{{config('app.name','PBO Global')}}</title>
    
</head>

<body>
  <div class="section"></div>
  <main>
    <center><div class="container">
      

       <div class="section"></div>

      
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 65px 0px 65px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s1'>
			  <img src="img/pbobig.png" width="65px" height="65px">
     		   </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Email Address</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
				<input class='validate' type='password' name='password' id='password' />
                <label for='password'>Password</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
     
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  </body>

    </hmtl>