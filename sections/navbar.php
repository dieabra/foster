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

    <div class="container margintop60">
      <div class="row">
        <div class="col-lg-2">
          <?php include("../partials/_sidebar.php"); ?>
        </div>
        <div class="col-lg-10">
          <h1>Projectstrap v0.1.0-beta</h1>
          <p class="lead">User Interface Design Guide</p>
          <hr>

          <!-- NAVBAR
          ================================================== -->
          <h4 id="navbar">Navbar</h4>
          
          <!-- BASIC NAVBAR -->
          <p class="Roboto300 font14">Basic Navbar</span></p>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Active Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <li class="disabled"><a href="#">Disabled Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Link</a></li>
                  <li>
                    <form class="navbar-form" role="search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button"><i class="pe-7s-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#navbar-1">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="navbar-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Navbar</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="navbar-1-a">
                      &lt;nav class="navbar navbar-default"&gt;
                        &lt;div class="container-fluid"&gt;
                          &lt;div class="navbar-header"&gt;
                            &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
                              &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                          &lt;/div&gt;
                          &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"&gt;
                            &lt;ul class="nav navbar-nav"&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;Active Link &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="dropdown"&gt;
                                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/li&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled Link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;ul class="nav navbar-nav navbar-right"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;
                                &lt;form class="navbar-form" role="search"&gt;
                                  &lt;div class="input-group"&gt;
                                    &lt;input type="text" class="form-control" placeholder="Search"&gt;
                                    &lt;span class="input-group-btn"&gt;
                                      &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="pe-7s-search"&gt;&lt;/i&gt;&lt;/button&gt;
                                    &lt;/span&gt;
                                  &lt;/div&gt;
                                &lt;/form&gt;
                              &lt;/li&gt;
                            &lt;/ul&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/nav&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#navbar-1-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div> 
          
          <hr class="margintop40">

          <!-- NAVBAR INVERSE -->
          <p class="Roboto300 font14">Navbar Inverse</span></p>
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Active Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <li class="disabled"><a href="#">Disabled Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Link</a></li>
                  <li>
                    <form class="navbar-form" role="search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button"><i class="pe-7s-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#navbar-inverse">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="navbar-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Navbar Inverse</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="navbar-inverse-1">
                      &lt;nav class="navbar navbar-inverse"&gt;
                        &lt;div class="container-fluid"&gt;
                          &lt;div class="navbar-header"&gt;
                            &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
                              &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                          &lt;/div&gt;
                          &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"&gt;
                            &lt;ul class="nav navbar-nav"&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;Active Link &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="dropdown"&gt;
                                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/li&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled Link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;ul class="nav navbar-nav navbar-right"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;
                                &lt;form class="navbar-form" role="search"&gt;
                                  &lt;div class="input-group"&gt;
                                    &lt;input type="text" class="form-control" placeholder="Search"&gt;
                                    &lt;span class="input-group-btn"&gt;
                                      &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="pe-7s-search"&gt;&lt;/i&gt;&lt;/button&gt;
                                    &lt;/span&gt;
                                  &lt;/div&gt;
                                &lt;/form&gt;
                              &lt;/li&gt;
                            &lt;/ul&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/nav&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#navbar-inverse-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <p class="Roboto300 font14">Navbar Animation Top</span></p>
          <nav class="navbar navbar-default navbar-fixed-top navbar-animation-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-15">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-15">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Active Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <li class="disabled"><a href="#">Disabled Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Link</a></li>
                  <li>
                    <form class="navbar-form" role="search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button"><i class="pe-7s-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#navbar-15">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="navbar-15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Navbar Animation Top</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="navbar-15-a">
                      &lt;nav class="navbar navbar-default navbar-fixed-top navbar-animation-top"&gt;
                        &lt;div class="container-fluid"&gt;
                          &lt;div class="navbar-header"&gt;
                            &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
                              &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                              &lt;span class="icon-bar"&gt;&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                          &lt;/div&gt;
                          &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"&gt;
                            &lt;ul class="nav navbar-nav"&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;Active Link &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="dropdown"&gt;
                                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/li&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled Link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;ul class="nav navbar-nav navbar-right"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;
                                &lt;form class="navbar-form" role="search"&gt;
                                  &lt;div class="input-group"&gt;
                                    &lt;input type="text" class="form-control" placeholder="Search"&gt;
                                    &lt;span class="input-group-btn"&gt;
                                      &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="pe-7s-search"&gt;&lt;/i&gt;&lt;/button&gt;
                                    &lt;/span&gt;
                                  &lt;/div&gt;
                                &lt;/form&gt;
                              &lt;/li&gt;
                            &lt;/ul&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/nav&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#navbar-15-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>


          <!-- NAVBAR JUSTIFIED -->
          <?php include("navbar/_navbar_justified.php"); ?>


          <!-- NAVBAR MATERIAL DESIGN -->
          <?php include("navbar/_navbar_material_design.php"); ?>          


          <!-- NAVBAR MULTI COLUMNS -->
          <?php include("navbar/_navbar_multi_columns.php"); ?>

          <!-- NAVBAR ANIMATED LINKS -->
          <?php include("navbar/_navbar_animated_links.php"); ?>
          
          <hr class="margintop40">
          
          <p class="Roboto300 font14">Navbar Landing Page</span></p>
          <a href="navbar/navbar-landing-page.php" class="btn btn-primary">Ir al ejemplo</a>

        </div>
      </div>
    </div>  

  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>