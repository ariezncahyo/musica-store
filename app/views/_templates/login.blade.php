<!DOCTYPE html>
<html lang="en">
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{ HTML::style('css/bootstrap.min.css') }}
{{ HTML::style('css/style.css') }}
</head>
<body>
<!--============================= Page Body =================================-->
<div class="container-fluid" id="container">
  <div class="panel" id="panel-login">
    <header>
      <span>SIGN IN</span>
    </header>
    	@yield('content')
  </div><!-- /.panel -->
  <center> Copyright &copy; {{ date('Y') }} <a href="/">Musica Store</a> | Designed by <a href='http://www.facebook.com/novaymawbowo' target='_blank'>Novay Mawbowo</a> <br/> Some right reserved.</center>
</div><!-- /.container-fluid#container -->
</body>
</html>