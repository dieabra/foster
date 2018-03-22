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

          <!-- ALERTS
          ================================================== -->
          <h4 class="margintop50">Alerts</h4>
          <ol>
            <li>Basic Alerts</li>
            <li>Alerts with link</li>
            <li>Alerts Outlined</li>
            <li>Alerts dismissible</li>
          </ol>

          <hr class="margintop40">
          
          <!-- Basic Alerts -->
          <h3 class="margintop50">Basic Alerts</h3>          
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-default" role="alert">Ejem! This is the default alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-default-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-default-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-default-1a">
                          &lt;div class="alert alert-default" role="alert"&gt;
                            Ejem! This is the default alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-default-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-warning" role="alert">Ejem! This is the warning alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-warning-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-warning-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert warning</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-warning-1a">
                          &lt;div class="alert alert-warning" role="alert"&gt;
                            Ejem! This is the warning alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-warning-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-danger" role="alert">Ejem! This is the danger alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-danger-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-danger-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert danger</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-danger-1a">
                          &lt;div class="alert alert-danger" role="alert"&gt;
                            Ejem! This is the danger alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-danger-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-success" role="alert">Ejem! This is the success alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-success-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-success-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-success-1a">
                          &lt;div class="alert alert-success" role="alert"&gt;
                            Ejem! This is the success alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-success-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-info" role="alert">Ejem! This is the info alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-info-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-info-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert info</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-info-1a">
                          &lt;div class="alert alert-info" role="alert"&gt;
                            Ejem! This is the info alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-info-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-inverse" role="alert">Ejem! This is the default alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-inverse-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-inverse-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Inverse</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-default-1a">
                          &lt;div class="alert alert-inverse" role="alert"&gt;
                            Ejem! This is the inverse alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-default-1a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- Alerts with links -->
          <h3 class="margintop40">Alerts with link</h3>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-default" role="alert">
                <strong>Ejem!</strong> This is the default alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-default">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-default">
                          &lt;div class="alert alert-default" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the default alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-default">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-warning" role="alert">
                <strong>Ejem!</strong> This is the warning alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-warning">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-warning">
                          &lt;div class="alert alert-warning" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the warning alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-warning">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-danger" role="alert">
                <strong>Ejem!</strong> This is the danger alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-danger">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-danger">
                          &lt;div class="alert alert-danger" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the danger alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-danger">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-success" role="alert">
                <strong>Ejem!</strong> This is the success alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-success">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-success">
                          &lt;div class="alert alert-success" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the success alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-success">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-info" role="alert">
                <strong>Ejem!</strong> This is the info alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-info">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-info">
                          &lt;div class="alert alert-info" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the info alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-info">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-inverse" role="alert">
                <strong>Ejem!</strong> This is the info alert message. <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-inverse">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Inverse</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-inverse-2">
                          &lt;div class="alert alert-inverse" role="alert"&gt;
                            &lt;strong&gt;Ejem!&lt;/strong&gt; This is the inverse alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-inverse-2">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- Outlines Alerts -->
          <h3 class="margintop50">Outlined Alerts</h3>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-default alert-outlined" role="alert">Ejem! This is the default alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-default">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-default-1a">
                          &lt;div class="alert alert-default alert-outlined" role="alert"&gt;
                            Ejem! This is the default alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-default">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-warning alert-outlined" role="alert">Ejem! This is the warning alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert warning</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-outlined-warning">
                          &lt;div class="alert alert-warning alert-outlined" role="alert"&gt;
                            Ejem! This is the warning alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-warning">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-danger alert-outlined" role="alert">Ejem! This is the danger alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert danger</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-outlined-danger">
                          &lt;div class="alert alert-danger alert-outlined" role="alert"&gt;
                            Ejem! This is the danger alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-danger">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-success alert-outlined" role="alert">Ejem! This is the success alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-success-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-success-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-outlined-success">
                          &lt;div class="alert alert-success alert-outlined" role="alert"&gt;
                            Ejem! This is the success alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-success">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-info alert-outlined" role="alert">Ejem! This is the info alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-info-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-info-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert info</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-outlined-info">
                          &lt;div class="alert alert-info alert-outlined" role="alert"&gt;
                            Ejem! This is the info alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-info">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="alert alert-inverse alert-outlined" role="alert">Ejem! This is the inverse alert message. Vel scelerisque nisl consectetur et</div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-outlined-inverse-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-outlined-inverse-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert inverse</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-outlined-inverse">
                          &lt;div class="alert alert-inverse alert-outlined" role="alert"&gt;
                            Ejem! This is the inverse alert message. Vel scelerisque nisl consectetur et
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-outlined-inverse">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <hr class="margintop40">
          
          <!-- Alerts Dismissible -->
          <h3 class="margintop40">Alerts Dismissible</h3>
          <div class="row">
            <div class="col-lg-10">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-default">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-default">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-dismissible-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-dismissible-default-1">
                          &lt;div class="alert alert-dismissible alert-default"&gt;
                            &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                            &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-dismissible-default-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-warning">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4>Warning!</h4>
                  <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-dismissible" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-dismissible-1">
                          &lt;div class="alert alert-dismissible alert-warning"&gt;
                            &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                            &lt;h4&gt;Warning!&lt;/h4&gt;
                            &lt;p&gt;Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;.&lt;/p&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-dismissible-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-danger">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-danger">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-dismissible-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible Danger</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-dismissible-danger-1">
                          &lt;div class="alert alert-dismissible alert-danger"&gt;
                            &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                            &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-dismissible-danger-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-success">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-dismissible-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-dismissible-sucess-1">
                          &lt;div class="alert alert-dismissible alert-success"&gt;
                            &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                            &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-dismissible-sucess-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-info">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-info">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="alert-dismissible-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible info</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="alert-dismissible-info-1">
                          &lt;div class="alert alert-dismissible alert-info"&gt;
                            &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                            &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#alert-dismissible-info-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
         
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>