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

          <!-- WELLS
          ================================================== -->
          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop40" id="wells">Wells <span class="gray2">/ Containers</span></p>
            </div>
          </div>
          <div class="row margintop20">
            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well">Look, I'm in a well!</div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="well-a">
                            &lt;div class="well"&gt;
                              Look, I'm in a well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#well-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well well-sm">
                  Look, I'm in a small well!
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well-sm">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well sm</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="well-sm-a">
                            &lt;div class="well well-sm"&gt;
                              Look, I'm in a small well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#well-sm-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well well-lg">
                  Look, I'm in a large well!
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well-lg">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well lg</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="well-lg-a">
                            &lt;div class="well well-lg"&gt;
                              Look, I'm in a large well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#well-lg-a">Copiar código</button>
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