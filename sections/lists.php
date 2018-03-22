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

          <!-- LISTS
          ================================================== -->
          <h4 class="margintop50">Lists</h4>
          <ol>
            <li>Unorderer List</li>
            <li>Orderer List</li>
            <li>List Unstyled</li>
            <li>List Inline</li>
            <li>List Icons</li>

          </ol>

          <hr class="margintop40">
          
          <!-- UNORDERER LIST -->
          <p class="Roboto300 font14 margintop50" id="list">Unorderer List </span></p>
          <ul class="margintop20">
            <li><strong>This is an Unorderer List Item</strong></li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
            <ul>
              <li>Phasellus iaculis neque</li>
              <li>Purus sodales ultricies</li>
              <li>Vestibulum laoreet porttitor sem</li>
              <li>Ac tristique libero volutpat at</li>
            </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ul>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#unorderer-list">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="unorderer-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Unorderer List</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="ul-1">
                      &lt;ul class="margintop20"&gt;
                        &lt;li&gt;&lt;strong&gt;This is an Unorderer List Item&lt;/strong&gt;&lt;/li&gt;
                        &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
                        &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
                        &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
                        &lt;li&gt;Nulla volutpat aliquam velit
                        &lt;ul&gt;
                          &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
                          &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
                          &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
                          &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
                        &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
                        &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
                      &lt;/ul&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#ul-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- ORDERER LIST -->
          <p class="Roboto300 font14 margintop50" id="list">Orderer List </span></p>
          <ol class="margintop20">
            <li><strong>This is an Orderer List Item</strong></li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
            <ol>
              <li>Phasellus iaculis neque</li>
              <li>Purus sodales ultricies</li>
              <li>Vestibulum laoreet porttitor sem</li>
              <li>Ac tristique libero volutpat at</li>
            </ol>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ol>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#orderer-list">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="orderer-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Orderer List</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="ol-1">
                      &lt;ol class="margintop20"&gt;
                        &lt;li&gt;&lt;strong&gt;This is an Orderer List Item&lt;/strong&gt;&lt;/li&gt;
                        &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
                        &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
                        &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
                        &lt;li&gt;Nulla volutpat aliquam velit
                        &lt;ul&gt;
                          &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
                          &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
                          &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
                          &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
                        &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
                        &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
                      &lt;/ul&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#ol-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- LIST UNSTYLED -->
          <p class="Roboto300 font14 margintop50" id="list">List Unstyled</span></p>
          <ul class="list-unstyled margintop20">
            <li><strong>This is an Unstyled List Item</strong></li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
            <ul>
              <li>Phasellus iaculis neque</li>
              <li>Purus sodales ultricies</li>
              <li>Vestibulum laoreet porttitor sem</li>
              <li>Ac tristique libero volutpat at</li>
            </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ul>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#list-unstyled">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="list-unstyled" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">List unstyled</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="unstyled-1">
                      &lt;ul class="list-unstyled margintop20"&gt;
                        &lt;li&gt;&lt;strong&gt;This is an Unorderer List Item&lt;/strong&gt;&lt;/li&gt;
                        &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
                        &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
                        &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
                        &lt;li&gt;Nulla volutpat aliquam velit
                        &lt;ul&gt;
                          &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
                          &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
                          &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
                          &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
                        &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
                        &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
                      &lt;/ul&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#unstyled-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- LIST INLINE -->
          <p class="Roboto300 font14 margintop50" id="list">List Inline</span></p>
          <ul class="list-inline margintop20">
            <li><strong>This is an Inline List Item</strong></li>
            <li>Phasellus iaculis</li>
            <li>Nulla volutpat</li>
          </ul>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#list-inline">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="list-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">List Inline    </h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="inline-1">
                      &lt;ul class="list-inline margintop20"&gt;
                        &lt;li&gt;&lt;strong&gt;This is an Inline List Item&lt;/strong&gt;&lt;/li&gt;
                        &lt;li&gt;Phasellus iaculis&lt;/li&gt;
                        &lt;li&gt;Nulla volutpat&lt;/li&gt;
                      &lt;/ul&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#inline-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- LIST ICONS -->
          <p class="Roboto300 font14 margintop50" id="list">List Icons</span></p>
          <ul class="list-unstyled margintop20">
            <li><i class="fa fa-send"></i><span class="inline-block marginleft10">This is a List Item</span></li>
            <li><i class="fa fa-star"></i><span class="inline-block marginleft10">This is a List Item</span></li>
            <li><i class="fa fa-home"></i><span class="inline-block marginleft10">This is a List Item</span></li>
          </ul>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#list-icons">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="list-icons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">List Icons</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="icons-1">
                      &lt;ul class="list-unstyled margintop20"&gt;
                        &lt;li&gt;&lt;i class="fa fa-send"&gt;&lt;/i&gt;&lt;span class="inline-block marginleft10"&gt;This is a List Item&lt;/span&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;span class="inline-block marginleft10"&gt;This is a List Item&lt;/span&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;i class="fa fa-home"&gt;&lt;/i&gt;&lt;span class="inline-block marginleft10"&gt;This is a List Item&lt;/span&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#icons-1">Copiar código</button>
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