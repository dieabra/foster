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

          <!-- FRAMES
          ================================================== -->
          <h4 class="margintop50">Frames</h4>

          <div class="relative" style="height: 200px;">            
            <div class="frame frame-top frame-50">
              <h2>Frame Top</h2>
            </div>
            <div class="frame frame-bottom frame-50">
              <h2>Frame Bottom</h2>
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#frame">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="frame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Frame Top-Bottom</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="frame-1">
                      &lt;div class="frame frame-top frame-50"&gt;
                        &lt;h2&gt;Frame Top&lt;/h2&gt;
                      &lt;/div&gt;
                      &lt;div class="frame frame-bottom frame-50"&gt;
                        &lt;h2&gt;Frame Bottom&lt;/h2&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#frame-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr>

          <div class="relative margintop50" style="height: 200px;">            
            <div class="frame frame-left frame-50">
              <h2>Frame Left</h2>
            </div>
            <div class="frame frame-right frame-50">
              <h2>Frame Right</h2>
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#frame-a">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="frame-a" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Frame Left-Right</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="frame-1a">
                      &lt;div class="frame frame-left frame-50"&gt;
                        &lt;h2&gt;Frame Left&lt;/h2&gt;
                      &lt;/div&gt;
                      &lt;div class="frame frame-right frame-50"&gt;
                        &lt;h2&gt;Frame Right&lt;/h2&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#frame-1a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop50">
          
          <div class="row">
            <div class="middle-div">
              <div class="col-sm-6">
                <h1></h1>
                  <h1>HOLA</h1>
                  <h1>HOLA</h1>
                  <h1>HOLA</h1>
                  <h1>HOLA</h1>
                  <h1>HOLA</h1>  
              </div>
              <div class="col-sm-6">
                <div class="text-right-left">
                  <a href="#" class="btn btn-primary btn-lg">HOLA</a>
                </div>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#frame-c">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="frame-c" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Frame Center Div</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="frame-1c">
                      &lt;div class="row"&gt;
                        &lt;div class="middle-div"&gt;
                          &lt;div class="col-sm-6"&gt;
                            &lt;h1&gt;&lt;/h1&gt;
                              &lt;h1&gt;HOLA&lt;/h1&gt;
                              &lt;h1&gt;HOLA&lt;/h1&gt;
                              &lt;h1&gt;HOLA&lt;/h1&gt;
                              &lt;h1&gt;HOLA&lt;/h1&gt;
                              &lt;h1&gt;HOLA&lt;/h1&gt;  
                          &lt;/div&gt;
                          &lt;div class="col-sm-6"&gt;
                            &lt;div class="text-right-left"&gt;
                              &lt;a href="#" class="btn btn-primary btn-lg"&gt;HOLA&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#frame-1c">Copiar código</button>
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