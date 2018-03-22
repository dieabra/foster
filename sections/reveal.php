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

          <!-- ICONS
          ================================================== -->
          <h4 class="margintop50">Reveal</h4>
          
          <p class="HelveticaBd font14">Reveal Fade</p>
          <div class="reveal reveal-fade">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-fade">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Fade</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-fade-1">
                      &lt;div class="reveal reveal-fade"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-fade-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <p class="HelveticaBd font14">Reveal Move Left</p>
          <div class="reveal reveal-move">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-move">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-move" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Move Left</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-move-1">
                      &lt;div class="reveal reveal-move"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-move-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <p class="HelveticaBd font14">Reveal Move Right</p>
          <div class="reveal reveal-move-right">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-move-right">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-move-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Move Right</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-move-right-1">
                      &lt;div class="reveal reveal-move-right"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-move-right-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <p class="HelveticaBd font14">Reveal Move Top</p>
          <div class="reveal reveal-move-top">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-move-top">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-move-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Move Top</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-move-top-1">
                      &lt;div class="reveal reveal-move-top"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-move-top-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <p class="HelveticaBd font14">Reveal Move Bottom</p>
          <div class="reveal reveal-move-bottom">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-move-bottom">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-move-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Move Bottom</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-move-bottom-1">
                      &lt;div class="reveal reveal-move-bottom"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-move-bottom-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <p class="HelveticaBd font14">Reveal Rotate</p>
          <div class="reveal reveal-rotate">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-rotate">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-rotate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Rotate</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-rotate-1">
                      &lt;div class="reveal reveal-rotate"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-rotate-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <p class="HelveticaBd font14">Reveal Rotate Right</p>
          <div class="reveal reveal-rotate-right">
            <div class="visible-content"></div>
            <div class="hidden-content">
              <img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt="">
            </div>
          </div>
          <a href="" class="btn btn-primary margintop10" data-toggle="modal" data-target="#reveal-rotate-right">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="reveal-rotate-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Reveal Rotate Right</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="reveal-rotate-right-1">
                      &lt;div class="reveal reveal-rotate-right"&gt;
                        &lt;div class="visible-content"&gt;&lt;/div&gt;
                        &lt;div class="hidden-content"&gt;
                          &lt;img src="http://www.telegraph.co.uk/content/dam/Travel/Cruise/Ocean/rsse-venice-xlarge.jpg" class="img-responsive" alt=""&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#reveal-rotate-right-1">Copiar código</button>
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