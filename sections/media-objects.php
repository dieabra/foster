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

          <!-- MEDIA OBJECTS
          ================================================== -->
          <h4 class="margintop50">Media Objects</h4>
          <ol>
            <li>Media Left</li>
            <li>Media Right</li>
            <li>Media Both</li>
            <li>Media Top</li>
            <li>Media Middle</li>
            <li>Media Bottom</li>
            <li>Media Circle</li>
            <li>Media Circle with heading center</li>
          </ol>

          <hr class="margintop40">

          <!-- Media Left -->
          <p class="Roboto300 font14" id="media">Media Left</span></p>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-left">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media left</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-left-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-left-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- Media Right -->
          <p class="Roboto300 font14" id="media">Media Right</span></p>
          <div class="media">
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolore ipsa dolorem sint laborum quam quia beatae, placeat! Provident nulla atque consequatur ullam inventore dolore sed harum excepturi. Voluptas, aliquam.</p>
            </div>
            <div class="media-right">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-right">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media right</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-right-1">
                      &lt;div class="media margintop30"&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolore ipsa dolorem sint laborum quam quia beatae, placeat! Provident nulla atque consequatur ullam inventore dolore sed harum excepturi. Voluptas, aliquam.
                        &lt;/div&gt;
                        &lt;div class="media-right"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-right-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- Media Both -->
          <p class="Roboto300 font14" id="media">Media Both</span></p>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
            </div>
            <div class="media-right">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-both">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-both" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media both</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-both-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
                        &lt;/div&gt;
                        &lt;div class="media-right"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-both-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- Media Top -->
          <p class="Roboto300 font14" id="media">Media Top</span></p>
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit aliquam ratione, iusto quidem harum tenetur. Temporibus pariatur aliquam voluptates tempore non, tempora in, esse, veritatis quisquam magni repellat eaque quo.
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-top">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media top</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-top-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left media-top"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit aliquam ratione, iusto quidem harum tenetur. Temporibus pariatur aliquam voluptates tempore non, tempora in, esse, veritatis quisquam magni repellat eaque quo.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-top-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- Media Center -->
          <p class="Roboto300 font14" id="media">Media Center</span></p>
          <div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum reprehenderit explicabo autem maxime dicta ea suscipit ipsum quo repudiandae eveniet quas odit, ex in beatae accusantium ipsam rem dolorem.
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-center">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media center</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-middle-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left media-middle"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum reprehenderit explicabo autem maxime dicta ea suscipit ipsum quo repudiandae eveniet quas odit, ex in beatae accusantium ipsam rem dolorem.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-middle-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
            
          <hr class="margintop40">
          
          <!-- Media Bottom -->
          <p class="Roboto300 font14" id="media">Media Bottom</span></p>
          <div class="media">
            <div class="media-left media-bottom">
              <a href="#">
                <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id error quibusdam blanditiis doloremque tempore quis sunt enim omnis quam totam ad iusto quo, beatae et inventore distinctio. Illo, debitis, minus.
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-bottom">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media bottom</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-bottom-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left media-bottom"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id error quibusdam blanditiis doloremque tempore quis sunt enim omnis quam totam ad iusto quo, beatae et inventore distinctio. Illo, debitis, minus.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-bottom-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- Media Circle -->
          <p class="Roboto300 font14" id="media">Media Circle</span></p>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-circle">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-circle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media circle</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-circle-1">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-circle-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <!-- Media Circle With Heading Center -->
          <p class="Roboto300 font14" id="media">Media Circle With Heading Center</span></p>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="...">
              </a>
            </div>
            <div class="media-body media-middle">
              <h4 class="media-heading">Media heading</h4>
            </div>
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#media-circle">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="media-circle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Media circle</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="media-circle-1-line">
                      &lt;div class="media"&gt;
                        &lt;div class="media-left"&gt;
                          &lt;a href="#"&gt;
                            &lt;img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" style="height: 64px; width: 64px;" alt="..."&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class="media-body"&gt;
                          &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
                        &lt;/div&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#media-circle-1">Copiar código</button>
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