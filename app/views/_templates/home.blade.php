<!DOCTYPE HTML>
<html>
  <head>
  	<title>@yield('title')Musica Store</title>
  	{{ HTML::style('home/bootstrap.css') }}  
  	{{ HTML::style('home/bootstrap-responsive.css') }}  
  </head>

  <body data-twttr-rendered="true" data-target=".bs-docs-sidebar" data-spy="scroll">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#" id="proses">Produk</a></li>
              <li><a href="#">Kategori</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>

            <ul class="nav pull-right">
              <li><a href="login"><i class="icon-cog icon-white"></i></a></li>
            </ul>
          </div>

          </div>
      </div>
    </div>

    <div class="container">
      <br/><br/><br/>
      <div class="span4 pull-left">
       {{ HTML::image('home/logo.png'); }}
      </div>

      <div class="span4">
        <blockquote>
          <p><span class="label label-important">PERHATIAN</span></p>
          <small>Mohon maaf atas ketidaksempurnaan sistem yang ada.</small>
          <small>Saat ini, pemesanan hanya dapat dilakukan melalui via SMS.</small>
          <small>Sekian.</small>
        </blockquote>
      </div>

      <div class="span3 pull-right">
        <address>
          <strong class="pull-right">Future, Inc.</strong><br/>
          <a class="black pull-right ">Universitas Mulawarman - Samarinda</a><br/>
          <a class="pull-right">Contact Person Order :</a><br/>
          <a class="pull-right">(+62) 852-47830XXX</a>
        </address>
      </div>
      <br/><br/><br/><br/><br/>
      
      <hr>

      <section id="carousel">
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="home/bootstrap-mdo-sfmoma-01.jpg" alt="">
              <div class="carousel-caption">
                <h4><a href="http://id.wikipedia.org/wiki/Steve_Vai" class="muted" target="_blank">Steve Vai - Peace, Love, Good Happiness Stuff</a></h4>
                <p>Steve Vai (lahir: Carle Place, New York, 6 Juni 1960) adalah gitaris, penulis lagu, penyanyi dan produser yang berasal dari Amerika Serikat.</p>
              </div>
            </div>
            <div class="item">
              <img src="home/bootstrap-mdo-sfmoma-02.jpg" alt="">
              <div class="carousel-caption">
                <h4><a href="http://id.wikipedia.org/wiki/Joe_Satriani" class="muted" target="_blank">Joe Satriani - The Extremist</a></h4>
                <p>Joe "Satch" Satriani (lahir di Westbury, New York, Amerika Serikat, 15 Juli 1956; umur 56 tahun) adalah seorang gitaris dan guru gitar. Ia memulai kariernya ...</p>
              </div>
            </div>
            <div class="item">
              <img src="home/bootstrap-mdo-sfmoma-03.jpg" alt="">
              <div class="carousel-caption">
                <h4><a href="http://id.wikipedia.org/wiki/Paul_Gilbert‎" class="muted" target="_blank">Paul Gilbert - Online School Of Rock Guitar</a></h4>
                <p>Paul Brandon Gilbert (lahir di Carbondale, Illinois, USA, 6 November 1966; umur 46 tahun) dikenal sebagai gitaris dari grup musik Mr. Big dan Racer X ...</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </section>

      <hr>

      @yield('produk')

    </div>
    
    <div class="container">
      <hr>
      <div class="row-fluid">
        <li class="span2">
          <img src="../home/1.png">
        </li>
        <li class="span2">
          <img src="../home/2.png">
        </li>
        <li class="span2">
          <img src="../home/3.png">
        </li>
        <li class="span2">
          <img src="../home/4.png">
        </li>
        <li class="span2">
          <img src="../home/5.png">
        </li>
        <li class="span2">
          <img src="../home/6.png">
        </li>
      </div>
    

    <hr>
    <center>Copyright &copy; {{ date('Y') }} Musica Store | Some right reserved.</center> 
    
    <hr>
    </div>

  @yield('modal')

  	<!-- Javascript
  	================================================== -->
  	<!-- Saran dari beberapa forum sih katanya diletakkan diakhir halaman biar ngerendernya kenceng -->
    {{ HTML::script('home/jquery.js') }}
    {{ HTML::script('home/bootstrap.js') }}
  </body>
</html>