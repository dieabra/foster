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

          <!-- PROGRESS BARS
          ================================================== -->
          <h4 id="progress-bars">Progress bars</h4>
          <ol>
            <li>Basic Progress Bar</li>
            <li>Contextual Alternative Bars</li>
            <li>Striped Bars</li>
            <li>Animated Bars</li>
            <li>Stacked Bars</li>
          </ol>

          <hr class="margintop40">
          
          <!-- Basic Progress Bar -->
          <p class="Roboto300 font14 margintop40">Basic <span class="gray2">/ Progress bars </span></p>
          <div class="bs-component">
            <div class="progress">
              <div class="progress-bar" style="width: 60%;"></div>
            </div>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="progress-bar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="basic-progress-bar">
                        &lt;div class="progress"&gt;
                          &lt;div class="progress-bar" style="width: 60%;"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-progress-bar">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- Contextual Alternative Progress Bar -->
          <p class="Roboto300 font14 margintop40">Contextual alternatives <span class="gray2">/ Progress bars </span></p>
          <div class="bs-component">
            <div class="progress">
              <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-info">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="progress-bar-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar Info</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="progress-bar-info-a">
                        &lt;div class="progress"&gt;
                          &lt;div class="progress-bar progress-bar-info" style="width: 20%"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#progress-bar-info-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="progress margintop20">
              <div class="progress-bar progress-bar-success" style="width: 20%"></div>
            </div>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-success">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="progress-bar-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar success</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="progress-bar-success-a">
                        &lt;div class="progress"&gt;
                          &lt;div class="progress-bar progress-bar-success" style="width: 20%"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#progress-bar-success-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="progress margintop20">
              <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
            </div>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-warning">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="progress-bar-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar warning</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="progress-bar-warning-a">
                        &lt;div class="progress"&gt;
                          &lt;div class="progress-bar progress-bar-warning" style="width: 20%"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#progress-bar-warning-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="progress margintop20">
              <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
            </div>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-danger">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="progress-bar-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar danger</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="progress-bar-danger-a">
                        &lt;div class="progress"&gt;
                          &lt;div class="progress-bar progress-bar-danger" style="width: 20%"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#progress-bar-danger-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Striped Progress Bar -->
          <?php include("progress-bar/_striped_progress_bars.php"); ?>        
          
          <!-- Animated Progress Bar -->
          <?php include("progress-bar/_animated_progress_bars.php"); ?>          
          
          <!-- Stacked Progress Bar -->
          <?php include("progress-bar/_stacked_progress_bars.php"); ?>

        </div>
      </div>
    </div>  

  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>