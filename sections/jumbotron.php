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

          <!-- JUMBOTRON
          ================================================== -->
          <p class="HelveticaBd font14">Default Jumbotron</p>

          <div class="jumbotron margintop20">
            <h1>Jumbotron</h1>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jumbotron-1">Ver código</a></p>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="jumbotron-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Jumbotron</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="jumbotron-a">
                      &lt;div class="jumbotron"&gt;
                        &lt;h1&gt;Jumbotron&lt;/h1&gt;
                        &lt;p&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
                        &lt;p&gt;&lt;a class="btn btn-primary btn-lg"&gt;Learn more&lt;/a&gt;&lt;/p&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#jumbotron-a">Copiar código</button>
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