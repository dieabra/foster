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

          <!-- BADGES
          ================================================== -->
          <span class="badge">3</span>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#badge-basic">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="badge-basic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Badge</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="badge-basic-1">
                      &lt;span class="badge"&gt;3&lt;/span&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#badge-basic-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr>
          <div class="bs-component margintop20">
            <ul class="nav nav-pills">
              <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
              <li><a href="#">Profile <span class="badge"></span></a></li>
              <li><a href="#">Messages <span class="badge">3</span></a></li>
              <li><a href="" class="btn btn-primary" data-toggle="modal" data-target="#badge">Ver código</a></li>
            </ul>
            <!-- Modal -->
            <div class="modal fade" id="badge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Badge</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code id="badge-1">
                        &lt;ul class="nav nav-pills"&gt;
                          &lt;li class="active"&gt;&lt;a href="#"&gt;Home &lt;span class="badge"&gt;42&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                          &lt;li&gt;&lt;a href="#"&gt;Profile &lt;span class="badge"&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                          &lt;li&gt;&lt;a href="#"&gt;Messages &lt;span class="badge"&gt;3&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                      </code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#badge-1">Copiar código</button>
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