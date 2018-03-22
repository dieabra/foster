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

          <!-- PANELS
          ================================================== -->
          <h4 class="margintop50">Panel</h4>
          <ol>
            <li>Basic Panel</li>
            <li>Panel with heading</li>
            <li>Panel with footer</li>
            <li>Panel colors</li>
          </ol>

          <hr class="margintop40">
          
          <!-- BASIC PANEL -->
          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14" id="panels">Basic Panel</span></p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="bs-component">
                <div class="panel panel-default">
                  <div class="panel-body">
                    Basic panel
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#basic-panel">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="basic-panel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Basic Panel</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="basic-panel-a">
                            &lt;div class="panel panel-default"&gt;
                              &lt;div class="panel-body"&gt;
                                Basic panel
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-panel-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr class="margintop40">
                
                <!-- PANEL WITH HEADING -->
                <p class="Roboto300 font14" id="panels">Panel with heading</span></p>
                <div class="panel panel-default">
                  <div class="panel-heading">Panel heading</div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-default">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel default with heading</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="panel-heading-a">
                            &lt;div class="panel panel-default"&gt;
                              &lt;div class="panel-heading"&gt;Panel heading&lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-heading-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr class="margintop40">
                
                <!-- PANEL WITH FOOTER -->
                <p class="Roboto300 font14" id="panels">Panel with footer</span></p>
                <div class="panel panel-default margintop20">
                  <div class="panel-body">
                    Panel content
                  </div>
                  <div class="panel-footer">Panel footer</div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-default-footer">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-default-footer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel default with footer</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="panel-footer-a">
                            &lt;div class="panel panel-default"&gt; 
                              &lt;div class="panel-body"&gt;  
                                Panel content
                              &lt;/div&gt;  
                              &lt;div class="panel-footer"&gt;  Panel footer&lt;/div&gt;  
                            &lt;/div&gt;  
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-footer-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- PANEL COLORS -->
            <div class="col-lg-12">
              <hr class="margintop40">
              <p class="Roboto300 font14" id="panels">Panel Colors</span></p>
              <div class="bs-component">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">Panel primary</h3>
                      </div>
                      <div class="panel-body">
                        Panel content
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-primary">Ver código</a>
                    <!-- Modal -->
                    <div class="modal fade" id="panel-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Panel primary</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="panel-primary-a">
                                &lt;div class="panel panel-primary"&gt;
                                  &lt;div class="panel-heading"&gt;
                                    &lt;h3 class="panel-title"&gt;Panel primary&lt;/h3&gt;
                                  &lt;/div&gt;
                                  &lt;div class="panel-body"&gt;
                                    Panel content
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-primary-a">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    

                    <div class="panel panel-success margintop20">
                      <div class="panel-heading">
                        <h3 class="panel-title">Panel success</h3>
                      </div>
                      <div class="panel-body">
                        Panel content
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-success">Ver código</a>
                    <!-- Modal -->
                    <div class="modal fade" id="panel-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Panel success</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="panel-success-a">
                                &lt;div class="panel panel-success"&gt;
                                  &lt;div class="panel-heading"&gt;
                                    &lt;h3 class="panel-title"&gt;Panel Success&lt;/h3&gt;
                                  &lt;/div&gt;
                                  &lt;div class="panel-body"&gt;
                                    Panel content
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-success-a">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="panel panel-warning margintop20">
                      <div class="panel-heading">
                        <h3 class="panel-title">Panel warning</h3>
                      </div>
                      <div class="panel-body">
                        Panel content
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-warning">Ver código</a>
                    <!-- Modal -->
                    <div class="modal fade" id="panel-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Panel warning</h4>
                          </div>
                          <div class="modal-body">
                            <pre>
                              <code id="panel-warning-a">
                                &lt;div class="panel panel-warning"&gt;
                                  &lt;div class="panel-heading"&gt;
                                    &lt;h3 class="panel-title"&gt;Panel warning&lt;/h3&gt;
                                  &lt;/div&gt;
                                  &lt;div class="panel-body"&gt;
                                    Panel content
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              </code>
                            </pre>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-warning-a">Copiar código</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="bs-component">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Panel danger</h3>
                        </div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-danger">Ver código</a>
                      <!-- Modal -->
                      <div class="modal fade" id="panel-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="gridSystemModalLabel">Panel danger</h4>
                            </div>
                            <div class="modal-body">
                              <pre>
                                <code id="panel-danger-a">
                                  &lt;div class="panel panel-danger"&gt;
                                    &lt;div class="panel-heading"&gt;
                                      &lt;h3 class="panel-title"&gt;Panel danger&lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="panel-body"&gt;
                                      Panel content
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                </code>
                              </pre>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-danger-a">Copiar código</button>
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-info margintop20">
                        <div class="panel-heading">
                          <h3 class="panel-title">Panel info</h3>
                        </div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-info">Ver código</a>
                      <!-- Modal -->
                      <div class="modal fade" id="panel-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="gridSystemModalLabel">Panel info</h4>
                            </div>
                            <div class="modal-body">
                              <pre>
                                <code id="panel-info-a">
                                  &lt;div class="panel panel-info"&gt;
                                    &lt;div class="panel-heading"&gt;
                                      &lt;h3 class="panel-title"&gt;Panel info&lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="panel-body"&gt;
                                      Panel content
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                </code>
                              </pre>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-primary btn-copy" data-clipboard-target="#panel-info-a">Copiar código</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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