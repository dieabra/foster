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

          <!-- TOOLTIP
          ================================================== -->
          <p class="Roboto300 font14 margintop40">Tooltips <span class="gray2">/ Dialogs</span></p>
          <button type="button" class="btn btn-default margintop10" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
          <a href="#" class="marginleft05" data-toggle="modal" data-target="#tooltip-left">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="tooltip-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Tooltip left</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>
                        &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"&gt;Left&lt;/button&gt;
                    </code>
                  </pre>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-default margintop10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>
          <a href="#" class="marginleft05" data-toggle="modal" data-target="#tooltip-top">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="tooltip-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Tooltip top</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>
                        &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"&gt;Top&lt;/button&gt;
                    </code>
                  </pre>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-default margintop10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
          <a href="#" class="marginleft05" data-toggle="modal" data-target="#tooltip-bottom">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="tooltip-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Tooltip bottom</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>
                        &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"&gt;Bottom&lt;/button&gt;
                    </code>
                  </pre>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-default margintop10" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
          <a href="#" class="marginleft05" data-toggle="modal" data-target="#tooltip-right">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="tooltip-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Tooltip right</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>
                        &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"&gt;Right&lt;/button&gt;
                    </code>
                  </pre>
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