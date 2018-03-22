<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projectstrap v0.1.0-beta</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="/styles/projectstrap.css">

    <style>
      .box-height60 {
        height: 60px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-toggle-block">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    
    <div class="container margintop60">
      <div class="row">
        <div class="col-lg-2">
          <?php include("../partials/_sidebar.php"); ?>
        </div>
        <div class="col-lg-10">
          <h1>Projectstrap v0.1.0-beta</h1>
          <p class="lead">User Interface Design Guide</p>
          <hr>

          <!-- HAMBURGER 
          ================================================== -->
          <p class="Roboto300 font14">Hamburger</p>          

          <div class="fullscreen-menu">
            <div class="icon-close">
              <a href="#" id="close-nav">
                <i class="pe-7s-close pe-4x"></i>
              </a>
            </div>
            <ul class="menu-inner">
              <li><a href="#" class="fullscreen-menu-items">Home</a></li>
              <li><a href="#" class="fullscreen-menu-items">Nosotros</a></li>
              <li><a href="#" class="fullscreen-menu-items">Menu</a></li>
              <li><a href="#" class="fullscreen-menu-items">Contacto</a></li>
            </ul>           
          </div>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#hamburger-1">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="hamburger-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Menu hamburger</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="hamburger-1a">
                      &lt;nav class="navbar navbar-default navbar-toggle-block"&gt;
                        &lt;div class="container-fluid"&gt;
                          &lt;!-- Brand and toggle get grouped for better mobile display --&gt;
                          &lt;div class="navbar-header"&gt;
                            &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"&gt;
                              &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                            &lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;&lt;!-- /.container-fluid --&gt;
                      &lt;/nav&gt;

                      &lt;div class="fullscreen-menu"&gt;
                        &lt;div class="icon-close"&gt;
                          &lt;a href="#" id="close-nav"&gt;
                            &lt;i class="pe-7s-close pe-4x"&gt;&lt;/i&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;ul class="menu-inner"&gt;
                          &lt;li&gt;&lt;a href="#" class="fullscreen-menu-items"&gt;Home&lt;/a&gt;&lt;/li&gt;
                          &lt;li&gt;&lt;a href="#" class="fullscreen-menu-items"&gt;Nosotros&lt;/a&gt;&lt;/li&gt;
                          &lt;li&gt;&lt;a href="#" class="fullscreen-menu-items"&gt;Menu&lt;/a&gt;&lt;/li&gt;
                          &lt;li&gt;&lt;a href="#" class="fullscreen-menu-items"&gt;Contacto&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;           
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#hamburger-1a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>    

        </div>
      </div>
    </div>  
    
  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
    <script>
      jQuery(function(){
        $('.navbar-toggle-block .navbar-toggle').click(function(){
          $('body').addClass('open-nav');
          setTimeout(function () {
              $('.navbar').css('z-index', '-2');
            }, 0);
        });

        $('#close-nav').click(function(){
          $('body').removeClass('open-nav');
          setTimeout(function () {
                $('.navbar').css('z-index', '1000');
            }, 1100);
        });    

        
      });
    </script>
  </body>
</html>