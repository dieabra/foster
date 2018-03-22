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

          <!-- BUTTONS
          ================================================== -->
          <h4 class="margintop50">Buttons</h4>
          <ol>
            <li>Basic Buttons</li>
            <li>Disabled Buttons</li>
            <li>Dropdown Buttons</li>
            <li>Dropdown toggle</li>
            <li>Buttons sizes</li>
            <li>Block Level buttons</li>
            <li>Button groups</li>
            <li>Button groups sizes</li>
            <li>Button group vertical</li>
            <li>Outlined Buttons</li>
            <li>Material Design Buttons</li>
            <li>Button circle</li>
            <li>Animated Buttons</li>
            <li>Animated Menu Buttons</li>
          </ol>
            

          <div class="row">
            <div class="col-xs-12">       
              <hr class="margintop40">
              <div class="row margintop50">
                <div class="col-sm-12">
                  
                  <!-- Basic Buttons -->
                  <p class="HelveticaBd font14">Basic Buttons <span class="HelveticaLt gray2">/ Forms </span></p>
                  <button type="button" class="btn btn-default margintop10">Default</button><code class="marginleft05">&lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-primary margintop10">Primary</button><code class="marginleft05">&lt;button type="button" class="btn btn-primary"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-info margintop10">Info</button><code class="marginleft05">&lt;button type="button" class="btn btn-info"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-success margintop10">Success</button><code class="marginleft05">&lt;button type="button" class="btn btn-success"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-warning margintop10">Warning</button><code class="marginleft05">&lt;button type="button" class="btn btn-warning"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-danger margintop10">Danger</button><code class="marginleft05">&lt;button type="button" class="btn btn-danger"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-inverse margintop10">Inverse</button><code class="marginleft05">&lt;button type="button" class="btn btn-inverse"&gt;Default&lt;/button&gt;</code><br>
                  <button type="button" class="btn btn-link margintop10">Link</button><code class="marginleft05">&lt;button type="button" class="btn btn-link"&gt;Default&lt;/button&gt;</code><br>
                  
                  <hr class="margintop40">

                  <!-- Disabled Buttons -->                  
                  <p class="HelveticaBd font14 margintop40">Disabled Buttons <span class="HelveticaLt gray2">/ Buttons </span></p>
                  <a href="#" class="btn btn-default disabled margintop10">Default</a><code class="marginleft05">&lt;a href="#" class="btn btn-default disabled"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-primary disabled margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary disabled"&gt;Primary&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-success disabled margintop10">Success</a><code class="marginleft05">&lt;a href="#" class="btn btn-success disabled"&gt;Success&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-info disabled margintop10">Info</a><code class="marginleft05">&lt;a href="#" class="btn btn-info disabled"&gt;Info&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-warning disabled margintop10">Warning</a><code class="marginleft05">&lt;a href="#" class="btn btn-warning disabled">Warning&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-danger disabled margintop10">Danger</a><code class="marginleft05">&lt;a href="#" class="btn btn-danger disabled"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-inverse disabled margintop10">Inverse</a><code class="marginleft05">&lt;a href="#" class="btn btn-inverse disabled"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-link disabled margintop10">Link</a><code class="marginleft05">&lt;a href="#" class="btn btn-link disabled"&gt;Default&lt;/a&gt;</code>   
                  

                  <hr class="margintop40">
                  
                  <!-- Dropdown Buttons -->
                  <p class="HelveticaBd font14 margintop40">Dropdowns <span class="HelveticaLt gray2">/ Buttons </span></p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-primary" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Primary</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-primary-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-primary-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-info" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Info</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-info-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-info-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-success" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Success</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-success-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-success-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-warning" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Warning</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-warning-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-warning-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-danger" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Danger</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-danger-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-danger-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                
                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-inverse" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Inverse</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-inverse-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-inverse-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                    
                  <hr class="margintop40">
                  
                  <!-- Dropdown Toggle -->
                  <p class="HelveticaBd font14 margintop40">Dropdown Toggle <span class="HelveticaLt gray2">/ Buttons </span></p>
                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>                    

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-primary" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Primary</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-primary-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-primary-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-info" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Info</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-info-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
                                &lt;button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-info-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-success" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Success</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-success-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
                                &lt;button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-success-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-warning" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Warning</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-warning-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
                                &lt;button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-warning-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-danger" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Danger</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-danger-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
                                &lt;button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-danger-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="btn-group margintop10">
                    <button type="button" class="btn btn-inverse">Inverse</button>
                    <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropdown-toggle-inverse" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropdown-toggle-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Inverse</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropdown-toggle-inverse-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-inverse"&gt;Inverse&lt;/button&gt;
                                &lt;button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"&gt;
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropdown-toggle-inverse-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="btn-group dropup margintop10">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#dropup" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="dropup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Dropup</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="dropup-1">
                              &lt;div class="btn-group dropup"&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;
                                &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#dropup-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <hr class="margintop40">


                  <!-- Rounded Buttons -->                  
                  <p class="HelveticaBd font14 margintop40">Rounded Buttons <span class="HelveticaLt gray2">/ Buttons </span></p>
                  <a href="#" class="btn btn-default btn-rounded margintop10">Default</a><code class="marginleft05">&lt;a href="#" class="btn btn-default btn-rounded"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-primary btn-rounded margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary btn-rounded"&gt;Primary&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-success btn-rounded margintop10">Success</a><code class="marginleft05">&lt;a href="#" class="btn btn-success btn-rounded"&gt;Success&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-info btn-rounded margintop10">Info</a><code class="marginleft05">&lt;a href="#" class="btn btn-info btn-rounded"&gt;Info&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-warning btn-rounded margintop10">Warning</a><code class="marginleft05">&lt;a href="#" class="btn btn-warning btn-rounded">Warning&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-danger btn-rounded margintop10">Danger</a><code class="marginleft05">&lt;a href="#" class="btn btn-danger btn-rounded"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-inverse btn-rounded margintop10">Inverse</a><code class="marginleft05">&lt;a href="#" class="btn btn-inverse btn-rounded"&gt;Default&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-link btn-rounded margintop10">Link</a><code class="marginleft05">&lt;a href="#" class="btn btn-link btn-rounded"&gt;Default&lt;/a&gt;</code><br><br>

                  <a href="#" class="btn btn-primary btn-xs btn-rounded margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary btn-xs btn-rounded"&gt;Primary&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-primary btn-sm btn-rounded margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary btn-sm btn-rounded"&gt;Primary&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-primary btn-rounded margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary btn-rounded"&gt;Primary&lt;/a&gt;</code><br>
                  <a href="#" class="btn btn-primary btn-lg btn-rounded margintop10">Primary</a><code class="marginleft05">&lt;a href="#" class="btn btn-primary btn-lg btn-rounded"&gt;Primary&lt;/a&gt;</code><br>
                  

                  <hr class="margintop40">
                  <!-- Buttons Sizes -->
                  <p class="HelveticaBd font14 margintop40">Button Sizes <span class="HelveticaLt gray2">/ Forms </span></p>
                  <button type="button" class="btn btn-primary btn-lg margintop10">Large button</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-lg" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-lg-1">&lt;button type="button" class="btn btn-primary btn-lg"&gt;Large button&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-lg-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-primary margintop10">Default button</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-default" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button default</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="button-default-1">&lt;button type="button" class="btn btn-primary"&gt;Default button&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#button-default-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-primary btn-sm margintop10">Small button</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-sm" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-sm-1">&lt;button type="button" class="btn btn-primary btn-sm"&gt;Small button&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-sm-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <button type="button" class="btn btn-primary btn-xs margintop10">Extra small button</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-xs" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-xs-1">&lt;button type="button" class="btn btn-primary btn-xs"&gt;Extra small button&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-xs-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default btn-lg margintop10"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-icon-lg" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-icon-lg-1">&lt;button type="button" class="btn btn-default btn-lg"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-icon-lg-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default margintop10"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-icon" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-icon-1">&lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-icon-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default btn-sm margintop10"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-icon-sm" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-icon-sm-1">&lt;button type="button" class="btn btn-default btn-sm"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-icon-sm-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default btn-xs margintop10"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" class="marginleft05" data-toggle="modal" data-target="#button-icon-xs" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-icon-xs-1">&lt;button type="button" class="btn btn-default btn-xs"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-icon-xs-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>                               


                  <!-- Block Level Buttons -->
                  <hr class="margintop40">
                  <p class="HelveticaBd font14 margintop40">Block Level Buttons <span class="HelveticaLt gray2">/ Forms </span></p>
                  <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
                  <a href="#" data-toggle="modal" data-target="#button-block" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button block</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-block-1">&lt;button type="button" class="btn btn-default btn-lg btn-block"&gt;Block level button&lt;/button&gt;</code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-block-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <hr class="margintop40">

                  <!-- Button Groups -->
                  <p class="HelveticaBd font14 margintop40">Button Groups <span class="HelveticaLt gray2">/ Forms </span></p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-left"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-justify"></span></button>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#button-group"">Ver código</a>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-1">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-left"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-center"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-right"&gt;&lt;/span&gt;&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-justify"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>
                  

                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Left</button>
                    <button type="button" class="btn btn-default">Middle</button>
                    <button type="button" class="btn btn-default">Right</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-2">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group 2</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-2">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Left&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Middle&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Right&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-2">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>
                  

                  <div class="btn-group">
                    <button type="button" class="btn btn-default">1</button>
                    <button type="button" class="btn btn-default">2</button>
                    <button type="button" class="btn btn-default">3</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-3">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group 3</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-3">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-3">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-default">4</button>
                    <button type="button" class="btn btn-default">5</button>
                    <div class="btn-group">
                      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                       </ul>
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-dropdown">Ver código</button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-dropdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group dropdown</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-dropdown">
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;4&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;5&lt;/button&gt;
                                &lt;div class="btn-group"&gt;
                                  &lt;a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                    Dropdown
                                    &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;/a&gt;
                                  &lt;ul class="dropdown-menu"&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                   &lt;/ul&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-dropdown">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>                

                  <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-default">Left</a>
                    <a href="#" class="btn btn-default">Middle</a>
                    <a href="#" class="btn btn-default">Right</a>
                  </div>
                  <a href="#" data-toggle="modal" data-target="#button-group-block">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group block</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-block">
                              &lt;div class="btn-group btn-group-justified"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Left&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Middle&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Right&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-block">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>
                  
                  <hr class="margintop40">

                  <!-- Button Group Sizes -->
                  <p class="HelveticaBd font14 margintop40">Button Groups Sizes<span class="HelveticaLt gray2">/ Forms </span></p>
                  <p>
                    <div class="btn-group btn-group-lg">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-lg">Ver código</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="button-group-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Button group lg</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="btn-group-lg-1">
                                &lt;div class="btn-group btn-group-lg"&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-lg-1">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix margintop20"></div>
                    

                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-default">Ver código</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="button-group-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Button group default</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="btn-group-default-1">
                                &lt;div class="btn-group"&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-default-1">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix margintop20"></div>

                    <div class="btn-group btn-group-sm">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-sm">Ver código</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="button-group-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Button group sm</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="btn-group-sm-1">
                                &lt;div class="btn-group btn-group-sm"&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-sm-1">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix margintop20"></div>

                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-xs">Ver código</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="button-group-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dixsiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Button group xs</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="btn-group-xs-1">
                                &lt;div class="btn-group btn-group-xs"&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                  &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-xs-1">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix margintop20"></div>
                  </p>
                  
                  <hr class="margintop40">

                  <!-- Button Group Vertical -->
                  <p class="HelveticaBd font14 margintop40">Button Group Vertical<span class="HelveticaLt gray2">/ Forms </span></p>
                  <div class="btn-group-vertical">
                    <button type="button" class="btn btn-default">Button</button>
                    <button type="button" class="btn btn-default">Button</button>
                    <div class="btn-group">
                      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <button type="button" class="btn btn-default">Button</button>
                    <button type="button" class="btn btn-default">Button</button>
                    <div class="btn-group">
                      <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-vertical">Ver código</button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-vertical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group vertical</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code id="btn-group-vertical-1">
                              &lt;div class="btn-group-vertical"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                                &lt;div class="btn-group"&gt;
                                  &lt;button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                    Dropdown
                                    &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;/button&gt;
                                  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                                &lt;div class="btn-group"&gt;
                                  &lt;button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                    Dropdown
                                    &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;/button&gt;
                                  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;div class="btn-group"&gt;
                                  &lt;button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                    Dropdown
                                    &lt;span class="caret"&gt;&lt;/span&gt;
                                  &lt;/button&gt;
                                  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;/ul&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-copy" data-clipboard-target="#btn-group-vertical-1">Copiar código</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Outlined Buttons -->
                  <?php include("buttons/_button_outlined.php"); ?>


                  <!-- Material Design Buttons -->
                  <?php include("buttons/_button_material_design.php"); ?>                  
                  

                  <!-- Button Circle -->
                  <?php include("buttons/_button_circle.php"); ?>


                  <!-- Animated Buttons -->
                  <?php include("buttons/_animated_button.php"); ?>
                  

                  <!-- Labeled Buttons -->
                  <?php include("buttons/_labeled_button.php"); ?>
                  

                  <!-- Animated Menu Buttons -->
                  <?php include("buttons/_animated_menu_button.php"); ?>                  

                </div> 
              </div>
            </div>
          </div>        
        </div>
      </div>
    </div>
  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>