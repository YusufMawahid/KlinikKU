<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KlinikKU | Login </title>


  <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('/css/custom.css')}}" rel="stylesheet">
  <link href="{{url('/css/icheck/flat/green.css')}}" rel="stylesheet">

  <script src="/js/jquery.min.js"></script>

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="login" method="POST" role="form">
         {{ csrf_field() }}
            <h1>KlinikKU | Login </h1>
            <div>
              <input type="text" name="username" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <button class="btn btn-default submit">Log in</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div>
                <h1><i class="fa fa-hospital-o" style="font-size: 26px;"></i>    &nbsp; Welcome!</h1>

                <p>©2016 All Rights Reserved. KlinikKU! is a Application. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
