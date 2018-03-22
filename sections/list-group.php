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

          <!-- LIST GROUP
          ================================================== -->
          <h4 class="margintop50">List group</h4>
          <ol>
            <li>List Groups With Badge</li>
            <li>Listo Group</li>
            <li>List Group Item Heading</li>
          </ol>
          
          <hr class="margintop40">

          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop40" id="list-group">List Groups With Badge</p>
            </div>
          </div>
          <div class="row margintop20">
            <div class="col-lg-4">
              <div class="bs-component">
                <ul class="list-group">
                  <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                  </li>
                  <li class="list-group-item">
                    <span class="badge">2</span>
                    Dapibus ac facilisis in
                  </li>
                  <li class="list-group-item">
                    <span class="badge">1</span>
                    Morbi leo risus
                  </li>
                  <li class="list-group-item">
                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#list-group-badge">Ver código</a>
                  </li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="list-group-badge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">List group with badge</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="list-badge">
                            &lt;ul class="list-group"&gt;
                              &lt;li class="list-group-item"&gt;
                                &lt;span class="badge"&gt;14&lt;/span&gt;
                                Cras justo odio
                              &lt;/li&gt;
                              &lt;li class="list-group-item"&gt;
                                &lt;span class="badge"&gt;2&lt;/span&gt;
                                Dapibus ac facilisis in
                              &lt;/li&gt;
                              &lt;li class="list-group-item"&gt;
                                &lt;span class="badge"&gt;1&lt;/span&gt;
                                Morbi leo risus
                              &lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#list-badge">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bs-component">
                <div class="list-group">
                  <a href="#" class="list-group-item active">Cras justo odio</a>
                  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                  <a href="#" class="list-group-item">Morbi leo risus</a>
                  <a class="btn btn-primary btn-lg list-group-item" data-toggle="modal" data-target="#list-group-1">Ver código</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="list-group-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">List group</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="list-group-a">
                            &lt;div class="list-group"&gt;
                              &lt;a href="#" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;
                              &lt;a href="#" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
                              &lt;a href="#" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#list-group-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a href="#" class="list-group-item" data-toggle="modal" data-target="#list-group-2">
                    <h4 class="list-group-item-heading">Ver código</h4>
                    <p class="list-group-item-text">Haga click aquí para ver el código</p>
                  </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="list-group-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">List group with heading</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="list-heading">
                            &lt;div class="list-group"&gt;
                              &lt;a href="#" class="list-group-item"&gt;
                                &lt;h4 class="list-group-item-heading"&gt;List group item heading&lt;/h4&gt;
                                &lt;p class="list-group-item-text"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                              &lt;/a&gt;
                              &lt;a href="#" class="list-group-item"&gt;
                                &lt;h4 class="list-group-item-heading"&gt;List group item heading&lt;/h4&gt;
                                &lt;p class="list-group-item-text"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                              &lt;/a&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#list-heading">Copiar código</button>
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