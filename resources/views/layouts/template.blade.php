<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Retina Photo</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">RETINA PHOTO</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li>
              <a href="{{ route('paket.create')}}"><i class="fa fa-cube"></i> <span>PROFIL</span> <i class="fa fa-angle-down pull-right"></i></a>
              <ul>
                <li><a href="">Merk</a></li>
                <li><a href="">Kategori</a></li>
                <li><a href="">Produk</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-basket"></i> <span>PAKET</span></a></li>
          </ul>
        </menu>
      </aside>
      @yield('content')
    </div>
  </body>
  <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js”></script>
<!– Include all compiled plugins (below), or include individual files as needed –>
<!– Latest compiled and minified JavaScript –>
<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js” integrity=”sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa” crossorigin=”anonymous”></script>
<script>
$(“menu li > a”).click(function(e){
$(“menu ul ul”).slideUp(),$(this).next().is(“:visible”) || $(this).next().slideDown(),e.stopPropagation()
});
</script>
</html>