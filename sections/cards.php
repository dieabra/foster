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

          <!-- CARDS
          ================================================== -->
          <div class="row">
            <div class="col-lg-6">
              <p class="HelveticaBd font14">Default Card</p>

              <!-- Default Card -->
              <div class="card">
                <div class="card-image">
                  <img src="https://imanesdeviaje.com/wp-content/uploads/2016/03/pueblos-m%C3%A1s-bonitos-de-Alsacia-1.jpg" class="img-responsive" alt="">
                  <div class="card-text">
                    <h3 class="card-title">Card Title</h3>
                    <p class="truncate">Description title</p>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="card" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-1">
                          &lt;div class="card"&gt;
                            &lt;div class="card-image"&gt;
                              &lt;img src="https://imanesdeviaje.com/wp-content/uploads/2016/03/pueblos-m%C3%A1s-bonitos-de-Alsacia-1.jpg" class="img-responsive" alt=""&gt;
                              &lt;div class="card-text"&gt;
                                &lt;h3 class="card-title"&gt;Card Title&lt;/h3&gt;
                                &lt;p class="truncate"&gt;Description title&lt;/p&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

            <!-- Default card with background text -->
            <div class="col-lg-6">
              <p class="HelveticaBd font14">Default Card With Background Text</p>              
              <div class="card">
                <div class="card-image">
                  <img src="https://imanesdeviaje.com/wp-content/uploads/2016/03/pueblos-m%C3%A1s-bonitos-de-Alsacia-1.jpg" class="img-responsive" alt="">
                  <div class="card-text background-text">
                    <h3 class="card-title">Card Title</h3>
                    <p class="truncate">Description title</p>
                  </div>
                </div>
              </div>                        
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-text">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="card-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card with background text</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-text-1">
                          &lt;div class="card"&gt;
                            &lt;div class="card-image"&gt;
                              &lt;img src="https://imanesdeviaje.com/wp-content/uploads/2016/03/pueblos-m%C3%A1s-bonitos-de-Alsacia-1.jpg" class="img-responsive" alt=""&gt;
                              &lt;div class="card-text background-text"&gt;
                                &lt;h3 class="card-title"&gt;Card Title&lt;/h3&gt;
                                &lt;p class="truncate"&gt;Description title&lt;/p&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-text-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr>

          
          <!-- Card Material -->

          <div class="row margintop50">
            <div class="col-sm-4">
              <div class="card card-material">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-material" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card material</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-material-1">
                          &lt;div class="card card-material"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-material-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material text-center">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-text-center">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-material-text-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Material Text Center</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="card-material-text-center-1">
                          &lt;div class="card card-material text-center"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#card-material-text-center-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material text-right">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-material-img-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Material Text Right</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="card-material-img-bottom-1">
                          &lt;div class="card card-material text-right"&gt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&gt;
                            &lt;div class="card-block"&gt;
                              &lt;h4 class="card-title"&gt;Card title&lt;/h4&gt;
                              &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                              &lt;a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom"&gt;Ver código&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#card-material-img-bottom-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material margintop30">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-card-img-bottom">Ver código</a>
                </div>
                <img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-card-img-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Material Img Bottom</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="card-img-bottom-1">
                          &lt;div class="card card-material"&gt;
                            &lt;div class="card-block"&gt;
                              &lt;h4 class="card-title"&gt;Card title&lt;/h4&gt;
                              &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                              &lt;a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-card-img-bottom"&gt;Ver código&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#card-img-bottom-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material text-center margintop30">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom-center">Ver código</a>
                </div>
                <img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-material-img-bottom-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Material Img Bottom - Text Center</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="card-material-img-bottom-center-1">
                          &lt;div class="card card-material text-center"&gt;
                            &lt;div class="card-block"&gt;
                              &lt;h4 class="card-title"&gt;Card title&lt;/h4&gt;
                              &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                              &lt;a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom-center"&gt;Ver código&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#card-material-img-bottom-center-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material text-right margintop30">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom-right">Ver código</a>
                </div>
                <img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-material-img-bottom-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Material Img Bottom - Text Right</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="card-material-img-bottom-right1">
                          &lt;div class="card card-material text-right"&gt;
                            &lt;div class="card-block"&gt;
                              &lt;h4 class="card-title"&gt;Card title&lt;/h4&gt;
                              &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                              &lt;a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-material-img-bottom-right"&gt;Ver código&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;img class="card-img-bot img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#card-material-img-bottom-right1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop50">
          
          <p>Card With Background</p>
          <div class="row margintop30">
            <div class="col-sm-4">
              <div class="card card-material card-primary">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-primary">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Primary</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-primary-1">
                          &lt;div class="card card-material card-primary"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-primary-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4">
              <div class="card card-material card-info">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-info">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Info</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-info-1">
                          &lt;div class="card card-material card-info"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-info-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-success">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-success">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-success-1">
                          &lt;div class="card card-material card-success"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-success-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-warning margintop30">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-warning">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Warning</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-warning-1">
                          &lt;div class="card card-material card-warning"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-warning-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-danger margintop30">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-danger">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Danger</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-danger-1">
                          &lt;div class="card card-material card-danger"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-danger-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <hr class="margintop50">
          <p>Card Outlined</p>
          <div class="row margintop20">
            <div class="col-sm-4">
              <div class="card card-material card-outlined-primary">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-outlined-primary">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-outlined-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Outlined Primary</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-outlined-primary-1">
                          &lt;div class="card card-material card-outlined-primary"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-outlined-primary-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4">
              <div class="card card-material card-outlined-info">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-outlined-info">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-outlined-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Outlined Info</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-outlined-info-1">
                          &lt;div class="card card-material card-outlined-info"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-outlined-info-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-outlined-success">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-outlined-success">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-outlined-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Outlined Success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-outlined-success-1">
                          &lt;div class="card card-material card-outlined-success"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-outlined-success-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-outlined-warning margintop30">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-outlined-warning">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-outlined-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Outlined Warning</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-outlined-warning-1">
                          &lt;div class="card card-material card-outlined-warning"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-outlined-warning-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card card-material card-outlined-danger margintop30">
                <img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#card-outlined-danger">Ver código</a>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="card-outlined-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Card Outlined Danger</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-card-outlined-danger-1">
                          &lt;div class="card card-material card-outlined-danger"&lt;
                            &lt;img class="card-img-top img-responsive" src="http://www.france-voyage.com/visuals/photos/chamonix-mont-blanc-31853_w600.jpg" alt="Card image cap"&lt;
                            &lt;div class="card-block"&lt;
                              &lt;h4 class="card-title"&lt;Card title&lt;/h4&lt;
                              &lt;p class="card-text"&lt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&lt;
                              &lt;a href="#" class="btn btn-primary"&lt;Go somewhere&lt;/a&lt;
                            &lt;/div&lt;
                          &lt;/div&lt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-card-outlined-danger-1">Copiar código</button>
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