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

          <!-- POPOVER
          ================================================== -->
          <p class="Roboto300 font14 margintop40">Popovers <span class="gray2">/ Dialogs</span></p>
          <div class="bs-component">
            <button type="button" class="btn btn-default margintop10" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>
            <a href="#"  data-toggle="modal" data-target="#popover-left">Ver código</a><br>
            <!-- Modal -->
            <div class="modal fade" id="popover-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Popover left</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                          &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Left&lt;/button&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-default margintop10" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>
            <a href="#"  data-toggle="modal" data-target="#popover-top">Ver código</a><br>
            <!-- Modal -->
            <div class="modal fade" id="popover-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Popover top</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                          &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Top&lt;/button&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-default margintop10" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>
            <a href="#"  data-toggle="modal" data-target="#popover-bottom">Ver código</a><br>
            <!-- Modal -->
            <div class="modal fade" id="popover-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Popover bottom</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                          &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Bottom&lt;/button&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-default margintop10" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
            <a href="#"  data-toggle="modal" data-target="#popover-right">Ver código</a><br>
            <!-- Modal -->
            <div class="modal fade" id="popover-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Popover right</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                          &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Right&lt;/button&gt;
                      </code>
                    </pre>
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