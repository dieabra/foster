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

          <!-- MODALS
          ================================================== -->
          <p class="Roboto300 font14 margintop40" id="modals">Modals <span class="gray2">/ Dialogs</span></p>

          <div class="bs-component">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-1">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-1">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          

          <!-- Modal Material Design -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Materia Design</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
              Launch demo modal material
            </button>
            <div class="modal fade modal-material" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Modal Material Design</h5>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-2">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-material" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h5 class="modal-title" id="myModalLabel"&gt;Title&lt;/h5&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-link" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-link"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-link btn-copy" data-clipboard-target="#modal-2">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          
          <!-- Modal Bounce -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Bounce</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
              Launch demo modal material
            </button>
            <div class="modal fade bounce" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Bounce</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-3">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade bounce" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-3">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal From Bottom -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal From Bottom</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
              Launch demo modal material
            </button>
            <div class="modal fade modal-bottom" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal From Bottom</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-4">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-bottom" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-4">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          
          <!-- Modal From Left -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal From Left</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
              Launch demo modal material
            </button>
            <div class="modal fade modal-left" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal From Left</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-5">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-5">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          

          <!-- Modal From Right -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal From Right</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
              Launch demo modal material
            </button>
            <div class="modal fade modal-right" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal From Right</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-6">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-6">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Fall -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Fall</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">
              Launch demo modal material
            </button>
            <div class="modal fade modal-fall" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Fall</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-7">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-fall" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-7">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Side Fall -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Side Fall</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">
              Launch demo modal material
            </button>
            <div class="modal fade modal-side-fall" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Side Fall</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-8">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-side-fall" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-8">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Newspaper -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal NewsPaper</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">
              Launch demo modal material
            </button>
            <div class="modal fade modal-newspaper" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Newspaper</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-9">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-newspaper" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-9">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Flip Horizontal -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Flip Horizontal</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal10">
              Launch demo modal material
            </button>
            <div class="modal fade modal-flip-h" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Flip Horizontal</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-10">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-flip-h" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-10">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Flip Vertical -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Flip Vertical</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal11">
              Launch demo modal material
            </button>
            <div class="modal fade modal-flip-v" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Flip Vertical</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-11">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-flip-v" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-11">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal 3D Sign -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal 3D Sign</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal12">
              Launch demo modal material
            </button>
            <div class="modal fade modal-3d-sign" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal 3D Sign</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-12">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-3d-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-12">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal 3D Slit -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal 3D Slit</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal13">
              Launch demo modal material
            </button>
            <div class="modal fade modal-3d-slit" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal 3D Slit</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-13">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-3d-slit" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-13">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal 3D Rotate Bottom -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal 3D Rotate Bottom</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal14">
              Launch demo modal material
            </button>
            <div class="modal fade modal-3d-rotate-bottom" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal 3D Rotate Bottom</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-14">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-3d-rotate-bottom" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-14">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Modal Black -->
          <div class="bs-component margintop40">
            <p class="Roboto300 font14 margintop40" id="modals">Modal Black</span></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal15">
              Launch demo modal material
            </button>
            <div class="modal fade modal-black" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-material">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Black</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="modal-15">
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"&gt;
                          Launch demo modal
                        &lt;/button&gt;
                        &lt;div class="modal fade modal-black" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"&gt;
                          &lt;div class="modal-dialog" role="document"&gt;
                            &lt;div class="modal-content modal-material"&gt;
                              &lt;div class="modal-header"&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;/button&gt;
                                &lt;h4 class="modal-title" id="myModalLabel"&gt;Title&lt;/h4&gt;
                              &lt;/div&gt;
                              &lt;div class="modal-body"&gt;
                                ...
                              &lt;/div&gt;
                              &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#modal-15">Copiar código</button>
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