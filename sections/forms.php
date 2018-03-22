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

          <!-- FORMS
          ================================================== -->
         
          <h4 id="forms" class="margintop50">Forms</h4>
          <ol>
            <li>Basic Example</li>
            <li>Inline Form</li>
            <li>Horizontal Form</li>
            <li>Input types</li>
            <li>Input groups</li>
            <li>Radio buttons & Checkboxes</li>
            <li>Select</li>
            <li>Form sizing</li>
            <li>Form a 2 columnas</li>
            <li>Form a 3 columnas</li>
          </ol>

          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-sm-12">
              <p class="Roboto300 font14">Basic Example <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
              <form role="form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-form-1">
                          &lt;form role="form"&gt;
                            &lt;div class="form-group"&gt;
                              &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                              &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"&gt;
                            &lt;/div&gt;
                            &lt;div class="form-group"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                            &lt;/div&gt;
                            &lt;div class="form-group"&gt;
                              &lt;label for="exampleInputFile"&gt;File input&lt;/label&gt;
                              &lt;input type="file" id="exampleInputFile"&gt;
                              &lt;p class="help-block"&gt;Example block-level help text here.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="checkbox"&gt;
                              &lt;label&gt;
                                &lt;input type="checkbox"&gt; Check me out
                              &lt;/label&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-form-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="margintop40">

              <p class="Roboto300 font14">Material Design Style</p>
              <div class="margintop30"></div>

              <form class="form-material">
                <div class="form-group label-static is-empty">
                  <label for="exampleInputEmail1">Label Static</label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-static">Ver código</a>
              </form>  
              <!-- Modal -->
              <div class="modal fade" id="label-static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Label Static</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="label-static-1">
                          &lt;form role="form" class="form-material"&gt;
                            &lt;div class="form-group label-static is-empty"&gt;
                              &lt;label for="exampleInputEmail1"&gt;Label Static&lt;/label&gt;
                              &lt;input type="email" class="form-control" id="exampleInputEmail1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#label-static-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <form class="form-material">
                <div class="form-group label-floating is-empty">
                  <label for="exampleInputPassword1">Label Floating</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-floating">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="label-floating" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Label Floating</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="label-floating-1">
                          &lt;form role="form" class="form-material"&gt;
                            &lt;div class="form-group label-floating is-empty"&gt;
                              &lt;label for="exampleInputEmail1"&gt;Label Floating&lt;/label&gt;
                              &lt;input type="email" class="form-control" id="exampleInputEmail1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#label-floating-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <form class="form-material">
                <div class="form-group label-placeholder is-empty">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Label Placeholder">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-placeholder">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="label-placeholder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Label Placeholder</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="label-placeholder-1">
                          &lt;form role="form" class="form-material"&gt;
                            &lt;div class="form-group label-placeholder is-empty"&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Label Placeholder"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#label-placeholder-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <form class="form-material">
                <div class="form-group label-column is-empty">
                  <label class="control-label col-sm-2" for="exampleInputPassword1">Label Column</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Label Placeholder">
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-columns">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="label-columns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Label Column</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="label-columns-1">
                          &lt;form role="form" class="form-material"&gt;
                            &lt;div class="form-group label-column is-empty"&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Label Placeholder"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#label-columns-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>


              <form class="form-material">
                <div class="form-group form-group-sm label-floating is-empty">
                  <label for="exampleInputPassword1">Form group sm</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-form-group-sm">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="label-form-group-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group sm</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="label-form-group-sm-1">
                          &lt;form role="form" class="form-material"&gt;
                            &lt;div class="form-group form-group-sm label-floating is-empty"&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#label-form-group-sm-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <form class="form-material">
                <div class="form-group label-floating is-empty">
                  <label for="exampleInputPassword1">Form group default</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-group-default">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-group-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group Default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-group-basic-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group label-floating is-empty"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Form group default&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-group-basic-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>



              <form class="form-material">
                <div class="form-group form-group-lg label-floating is-empty">
                  <label for="exampleInputPassword1">Form group lg</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-group-lg">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-group-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group lg</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-group-lg-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group form-group-lg label-floating is-empty"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Form group lg&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-group-lg-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>


              <form class="form-material">
                <div class="form-group form-group-sm label-static is-empty">
                  <label for="exampleInputPassword1">Form group sm</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-group-sm-label-static">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-group-sm-label-static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group sm - Label Static</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-group-sm-static-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group form-group-sm label-static is-empty"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Form group sm&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-group-sm-static-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>


              <form class="form-material">
                <div class="form-group label-static is-empty">
                  <label for="exampleInputPassword1">Form Group Default</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-group-default-label-static">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-group-default-label-static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group Default - Label Static</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-group-default-static-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group label-static is-empty"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Form Group Default&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-group-default-static-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <form class="form-material">
                <div class="form-group form-group-lg label-static is-empty">
                  <label for="exampleInputPassword1">Form group lg</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-group-lg-label-static">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-group-lg-label-static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form Group lg - Label Static</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-group-lg-static-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group form-group-lg label-static is-empty"&gt;
                              &lt;label for="exampleInputPassword1"&gt;Form group lg&lt;/label&gt;
                              &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-group-lg-static-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <form class="form-material">
                <div class="form-group label-floating is-empty">
                  <label for="" class="control-label">TextArea</label>
                  <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#textarea-material">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="textarea-material" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Textarea Material</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="textarea-material-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group label-floating is-empty"&gt;
                              &lt;label for="" class="control-label"&gt;TextArea&lt;/label&gt;
                              &lt;textarea class="form-control" name="" id="" cols="30" rows="3"&gt;&lt;/textarea&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#textarea-material-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
                  
              <form class="form-material">
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                  </select>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select-material">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="select-material" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select Material</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="select-material-1">
                          &lt;form class="form-material"&gt;
                            &lt;div class="form-group"&gt;
                              &lt;select name="" id="" class="form-control"&gt;
                                &lt;option value=""&gt;1&lt;/option&gt;
                                &lt;option value=""&gt;2&lt;/option&gt;
                                &lt;option value=""&gt;3&lt;/option&gt;
                              &lt;/select&gt;
                            &lt;/div&gt;
                          &lt;/form&gt; 
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#select-material-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>






              <hr class="margintop40">

              <p class="Roboto300 font14 margintop40">Inline Form <span class="gray2">/ Forms</span></p>
              <form class="form-inline margintop30" role="form">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Search</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-inline">Ver código</a><br>
              </form> 
              <!-- Modal -->
              <div class="modal fade" id="form-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Inline form</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="inline-form-1">
                          &lt;form class="form-inline margintop30" role="form"&gt;
                            &lt;div class="form-group"&gt;
                              &lt;label class="sr-only" for="exampleInputEmail2"&gt;Search&lt;/label&gt;
                              &lt;input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
                          &lt;/form&gt; 
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#inline-form-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <form class="form-inline margintop20">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                    <div class="input-group-addon">.00</div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Transfer cash</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-inline-addon">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-inline-addon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Inline Form Addon</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="inline-form-2">
                          &lt;form class="form-inline margintop20"&gt;
                            &lt;div class="form-group"&gt;
                              &lt;label class="sr-only" for="exampleInputAmount"&gt;Amount (in dollars)&lt;/label&gt;
                              &lt;div class="input-group"&gt;
                                &lt;div class="input-group-addon"&gt;$&lt;/div&gt;
                                &lt;input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount"&gt;
                                &lt;div class="input-group-addon"&gt;.00&lt;/div&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="btn btn-primary"&gt;Transfer cash&lt;/button&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#inline-form-2">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-sm-12">
              <hr class="margintop40">
              <p class="Roboto300 font14 margintop40">Horizontal Form <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
              <div class="well">
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Legend</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Checkbox
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Static</label>
                      <div class="col-sm-10">
                        <p class="form-control-static">email@example.com</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Radios</label>
                      <div class="col-lg-10">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            Option one is this
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="select" class="col-lg-2 control-label">Selects</label>
                      <div class="col-lg-10">
                        <select class="form-control" id="select">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                        <br>
                        <select multiple="" class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#legend">Ver código</a><br>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="legend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Legend</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="horizontal-form-1">
                          &lt;div class="well"&gt;
                            &lt;form class="form-horizontal"&gt;
                              &lt;fieldset&gt;
                                &lt;legend&gt;Legend&lt;/legend&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="inputEmail" class="col-lg-2 control-label"&gt;Email&lt;/label&gt;
                                  &lt;div class="col-lg-10"&gt;
                                    &lt;input type="text" class="form-control" id="inputEmail" placeholder="Email"&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="inputPassword" class="col-lg-2 control-label"&gt;Password&lt;/label&gt;
                                  &lt;div class="col-lg-10"&gt;
                                    &lt;input type="password" class="form-control" id="inputPassword" placeholder="Password"&gt;
                                    &lt;div class="checkbox"&gt;
                                      &lt;label&gt;
                                        &lt;input type="checkbox"&gt; Checkbox
                                      &lt;/label&gt;
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label class="col-sm-2 control-label"&gt;Static&lt;/label&gt;
                                  &lt;div class="col-sm-10"&gt;
                                    &lt;p class="form-control-static"&gt;email@example.com&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="textArea" class="col-lg-2 control-label"&gt;Textarea&lt;/label&gt;
                                  &lt;div class="col-lg-10"&gt;
                                    &lt;textarea class="form-control" rows="3" id="textArea"&gt;&lt;/textarea&gt;
                                    &lt;span class="help-block"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label class="col-lg-2 control-label"&gt;Radios&lt;/label&gt;
                                  &lt;div class="col-lg-10"&gt;
                                    &lt;div class="radio"&gt;
                                      &lt;label&gt;
                                        &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""&gt;
                                        Option one is this
                                      &lt;/label&gt;
                                    &lt;/div&gt;
                                    &lt;div class="radio"&gt;
                                      &lt;label&gt;
                                        &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
                                        Option two can be something else
                                      &lt;/label&gt;
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="select" class="col-lg-2 control-label"&gt;Selects&lt;/label&gt;
                                  &lt;div class="col-lg-10"&gt;
                                    &lt;select class="form-control" id="select"&gt;
                                      &lt;option&gt;1&lt;/option&gt;
                                      &lt;option&gt;2&lt;/option&gt;
                                      &lt;option&gt;3&lt;/option&gt;
                                      &lt;option&gt;4&lt;/option&gt;
                                      &lt;option&gt;5&lt;/option&gt;
                                    &lt;/select&gt;
                                    &lt;br&gt;
                                    &lt;select multiple="" class="form-control"&gt;
                                      &lt;option&gt;1&lt;/option&gt;
                                      &lt;option&gt;2&lt;/option&gt;
                                      &lt;option&gt;3&lt;/option&gt;
                                      &lt;option&gt;4&lt;/option&gt;
                                      &lt;option&gt;5&lt;/option&gt;
                                    &lt;/select&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;div class="col-lg-10 col-lg-offset-2"&gt;
                                    &lt;button type="reset" class="btn btn-default"&gt;Cancel&lt;/button&gt;
                                    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/fieldset&gt;
                            &lt;/form&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#horizontal-form-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Input Types <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input type="text" class="form-control pull-left" placeholder="Text input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#input">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input text</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-text-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="text" class="form-control" placeholder="Text input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-text-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control pull-left" placeholder="Password input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#password">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input password</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-pass-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="password" class="form-control" placeholder="Pasword input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-pass-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="datetime" class="form-control pull-left" placeholder="datetime input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#datetime">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="datetime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input datetime</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-datetime-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="datetime" class="form-control" placeholder="datetime input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-datetime-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="datetime-local" class="form-control pull-left" placeholder="datetime-local input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#datetime-local">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="datetime-local" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input datetime-local</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-datetime-local-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="datetime-local" class="form-control" placeholder="datetime-local input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-datetime-local-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="date" class="form-control pull-left" placeholder="date input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#date">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="date" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input date</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-date-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="date" class="form-control" placeholder="date input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-date-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="month" class="form-control pull-left" placeholder="month input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#month">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="month" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input month</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-month-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="month" class="form-control" placeholder="month input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-month-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="time" class="form-control pull-left" placeholder="time input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#time">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="time" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input time</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-time-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="time" class="form-control" placeholder="time input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-time-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input class="form-control pull-left" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#disabled">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="disabled" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input disabled</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-disabled-1">
                          &lt;div class="form-group"&gt;
                            &lt;input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-disabled-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <input type="week" class="form-control pull-left" placeholder="week input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#week">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="week" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input week</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-week-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="week" class="form-control" placeholder="week input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-week-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="number" class="form-control pull-left" placeholder="number input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#number">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="number" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input number</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-number-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="number" class="form-control" placeholder="number input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-number-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="email" class="form-control pull-left" placeholder="email input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#email">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input email</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-email-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="email" class="form-control" placeholder="email input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-email-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="url" class="form-control pull-left" placeholder="url input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#url">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="url" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input URL</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-url-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="url" class="form-control" placeholder="url input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-url-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="search" class="form-control pull-left" placeholder="search input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#search">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input search</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-search-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="search" class="form-control" placeholder="search input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-search-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="tel" class="form-control pull-left" placeholder="tel input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#tel">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="tel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input TEL</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-tel-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="tel" class="form-control" placeholder="tel input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-tel-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="color" class="form-control pull-left" placeholder="color input">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#color">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="color" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input color</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-type-color-1">
                          &lt;div class="form-group"&gt;
                            &lt;input type="color" class="form-control" placeholder="color input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-type-color-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess1">Input with success</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputSuccess1">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#success">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input success</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-success-1">
                          &lt;div class="form-group has-success"&gt;
                            &lt;label class="control-label" for="inputSuccess1"&gt;Input with success&lt;/label&gt;
                            &lt;input class="form-control" id="inputSuccess1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-success-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group has-warning">
                <label class="control-label" for="inputwarning1">Input with warning</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputwarning1">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#warning">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input warning</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-warning-1">
                          &lt;div class="form-group has-warning"&gt;
                            &lt;label class="control-label" for="inputWarning1"&gt;Input with warning&lt;/label&gt;
                            &lt;input class="form-control" id="inputWarning1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-warning-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="form-group has-error">
                <label class="control-label" for="inputerror1">Input with error</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputerror1">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#error">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input error</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-error-1">
                          &lt;div class="form-group has-error"&gt;
                            &lt;label class="control-label" for="inputerror1"&gt;Input with error&lt;/label&gt;
                            &lt;input class="form-control" id="inputerror1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-error-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 

             
              <div class="form-group has-success has-feedback">
                <label class="control-label" for="inputsuccess1">Input with success feedback</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputsuccess1">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#success-feedback">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="success-feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input success feedback</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-has-success-1">
                          &lt;div class="form-group has-success has-feedback"&gt;
                            &lt;label class="control-label" for="inputSuccess2"&gt;Input with success&lt;/label&gt;
                            &lt;input class="form-control" id="inputSuccess2" type="text"&gt;
                            &lt;span class="glyphicon glyphicon-ok form-control-feedback"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-has-success-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group has-error has-feedback">
                <label class="control-label" for="inputError2">Input with error</label>
                <input type="text" class="form-control" id="inputError2">
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#error-feedback">Ver código</a><br>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="error-feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input error feedback</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-has-error-1">
                          &lt;div class="form-group has-error has-feedback"&gt;
                            &lt;label class="control-label" for="inputerror2"&gt;Input with error&lt;/label&gt;
                            &lt;input class="form-control" id="inputerror2" type="text"&gt;
                            &lt;span class="glyphicon glyphicon-remove form-control-feedback"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-has-error-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Text Area"></textarea>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#textarea">Ver código</a>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="textarea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Textarea</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="textarea-1">
                          &lt;div class="form-group"&gt;
                            &lt;textarea class="form-control" rows="6" placeholder="Text Area"&gt;&lt;/textarea&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#textarea-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Input Groups <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-xs-6">
            
              <div class="input-group">
                <span class="input-group-btn">
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group">Ver código</a>
                </span>
                <input type="text" class="form-control">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="input-group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-1">
                          &lt;div class="input-group"&gt;
                            &lt;span class="input-group-btn"&gt;
                              &lt;a href="#" class="btn btn-primary"&gt;Ver código&lt;/a&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>              

              <div class="input-group margintop10">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-right">Ver código</a>
                </span>
              </div>
  
              <!-- Modal -->
              <div class="modal fade" id="input-group-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group right</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-right-1">
                          &lt;div class="input-group"&gt;
                            &lt;input type="text" class="form-control"&gt;
                            &lt;span class="input-group-btn"&gt;
                              &lt;a href="#" class="btn btn-primary"&gt;Ver código&lt;/a&gt;
                            &lt;/span&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-right-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-group margintop10 pull-left">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown">Ver código</a>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-group-dropdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group dropdown</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-dropdown-1">
                          &lt;div class="input-group margintop5"&gt;
                            &lt;div class="input-group-btn"&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;Action &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-dropdown-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-group margintop10 pull-left">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-right">Ver código</a>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-group-dropdown-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group dropdown right</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-dropdown-right-1">
                          &lt;div class="input-group margintop5"&gt;
                            &lt;input type="text" class="form-control"&gt;
                            &lt;div class="input-group-btn"&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;Action &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-dropdown-right-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-group pull-left margintop10">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-2">Ver código</a>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-group-dropdown-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group dropdown 2</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-dropdown-2">
                          &lt;div class="input-group"&gt;
                            &lt;div class="input-group-btn"&gt;
                              &lt;button type="button" class="btn btn-default" tabindex="-1"&gt;Action&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1"&gt;
                                &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                              &lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-dropdown-2">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="input-group pull-left margintop10">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-3">Ver código</a>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-group-dropdown-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input group dropdown 3</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="input-group-dropdown-3">
                          &lt;div class="input-group"&gt;
                            &lt;input type="text" class="form-control"&gt;
                            &lt;div class="input-group-btn"&gt;
                              &lt;button type="button" class="btn btn-default" tabindex="-1"&gt;Action&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1"&gt;
                                &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
                              &lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-group-dropdown-3">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Radio Buttons &amp; Checkboxes <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-sm-6">

              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  Option two can be something else and selecting it will deselect option one
                </label>
              </div>
              <div class="radio disabled">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                  Option three is disabled
                </label>
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#radio-buttons">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="radio-buttons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Radio buttons</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="radio-buttons-1">
                          &lt;div class="radio"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                          &lt;/div&gt;
                          &lt;div class="radio"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
                              Option two can be something else and selecting it will deselect option one
                            &lt;/label&gt;
                          &lt;/div&gt;
                          &lt;div class="radio disabled"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled&gt;
                              Option three is disabled
                            &lt;/label&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#radio-buttons-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>              

              <form action="" class="margintop20">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Inline Form Option 1
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Inline Form Option 2
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled> Inline Form Option 3
                </label>
              </form>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#radio-buttons-inline">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="radio-buttons-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Radio buttons inline</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="radio-buttons-inline-1">
                          &lt;form action="" class="margintop20"&gt;
                            &lt;label class="radio-inline"&gt;
                              &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"&gt; Inline Form Option 1
                            &lt;/label&gt;
                            &lt;label class="radio-inline"&gt;
                              &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"&gt; Inline Form Option 2
                            &lt;/label&gt;
                            &lt;label class="radio-inline"&gt;
                              &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled&gt; Inline Form Option 3
                            &lt;/label&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#radio-buttons-inline-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 
              

              <div class="has-success margintop20">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
              </div>
              <div class="has-warning">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
              </div>
              <div class="has-error">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#radio-buttons-color">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="radio-buttons-color" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Radio buttons color</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="radio-buttons-color">
                          &lt;div class="has-success margintop20"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="has-warning"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="has-error"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label&gt;
                              &lt;input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#radio-buttons-color">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 
              
              <div class="input-group margintop30">
                <span class="input-group-addon">
                  <input type="radio">
                </span>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#radio-buttons-addon">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="radio-buttons-addon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Radio buttons addon</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="radio-buttons-addon">
                          &lt;div class="input-group margintop30"&gt;
                            &lt;span class="input-group-addon"&gt;
                              &lt;input type="radio"&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#radio-buttons-addon">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 
            </div>

            <div class="col-sm-6">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="">
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="">
                  Option two can be something else and selecting it will add it too
                </label>
              </div>
              <div class="checkbox disabled">
                <label>
                  <input type="checkbox" value="" disabled>
                  Option three is disabled
                </label>
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#checkbox">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="checkbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Checkbox</h4>
                    </div>
                    <div class="modal-body">
                     <pre>
                        <code id="checkbox-1">
                          &lt;div class="checkbox"&gt;
                            &lt;label&gt;
                              &lt;input type="checkbox" value=""&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                          &lt;/div&gt;
                          &lt;div class="checkbox"&gt;
                            &lt;label&gt;
                              &lt;input type="checkbox" value=""&gt;
                              Option two can be something else and selecting it will add it too
                            &lt;/label&gt;
                          &lt;/div&gt;
                          &lt;div class="checkbox disabled"&gt;
                            &lt;label&gt;
                              &lt;input type="checkbox" value="" disabled&gt;
                              Option three is disabled
                            &lt;/label&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#checkbox-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>              
              
              <form action="" class="margintop20">
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> Inline Form Option 1
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> Inline Form Option 2
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3" disabled> Inline Form Option 3
                </label>
              </form>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#checkbox-inline">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="checkbox-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Checkbox-inline</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="checkbox-inline-1">
                          &lt;form action="" class="margintop20"&gt;
                            &lt;label class="checkbox-inline"&gt;
                              &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; Inline Form Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox-inline"&gt;
                              &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; Inline Form Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox-inline"&gt;
                              &lt;input type="checkbox" id="inlineCheckbox3" value="option3" disabled&gt; Inline Form Option 3
                            &lt;/label&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#checkbox-inline-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>              

              <div class="has-success margintop20">
                <div class="radio">
                <label class="checkbox">
                  <input type="checkbox" id="checkboxError" value="option1">
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
                </div>
              </div>
              <div class="has-warning">
                <div class="radio">
                <label class="checkbox">
                  <input type="checkbox" id="checkboxError" value="option1">
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
                </div>
              </div>
              <div class="has-error">
                <div class="radio">
                <label class="checkbox">
                  <input type="checkbox" id="checkboxError" value="option1">
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
                </div>
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#checkbox-colors">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="checkbox-colors" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Checkbox-colors</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="checkbox-colors-1">
                          &lt;div class="has-success margintop20"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label class="checkbox"&gt;
                              &lt;input type="checkbox" id="checkboxError" value="option1"&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="has-warning"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label class="checkbox"&gt;
                              &lt;input type="checkbox" id="checkboxError" value="option1"&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="has-error"&gt;
                            &lt;div class="radio"&gt;
                            &lt;label class="checkbox"&gt;
                              &lt;input type="checkbox" id="checkboxError" value="option1"&gt;
                              Option one is this and that&mdash;be sure to include why it's great
                            &lt;/label&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#checkbox-colors-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="input-group margintop30">
                <span class="input-group-addon">
                <input type="checkbox">
                </span>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#checkbox-addon">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="checkbox-addon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Checkbox-addon</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="checkbox-addon-1">
                          &lt;div class="input-group margintop30"&gt;
                            &lt;span class="input-group-addon"&gt;
                              &lt;input type="checkbox"&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#checkbox-addon-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Selects <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-sm-6">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#select1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="select1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="basic-select">
                          &lt;select class="form-control"&gt;
                            &lt;option&gt;1&lt;/option&gt;
                            &lt;option&gt;2&lt;/option&gt;
                            &lt;option&gt;3&lt;/option&gt;
                            &lt;option&gt;4&lt;/option&gt;
                            &lt;option&gt;5&lt;/option&gt;
                          &lt;/select&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-select">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <select multiple class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#select-multiple">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="select-multiple" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select multiple</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="select-multiple-1">
                          &lt;select multiple class="form-control"&gt;
                            &lt;option&gt;1&lt;/option&gt;
                            &lt;option&gt;2&lt;/option&gt;
                            &lt;option&gt;3&lt;/option&gt;
                            &lt;option&gt;4&lt;/option&gt;
                            &lt;option&gt;5&lt;/option&gt;
                          &lt;/select&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#select-multiple-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Forms Sizing <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control input-lg pull-left" type="text" placeholder=".input-lg">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#input-lg">Ver código</a>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input lg</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-lg-1">&lt;input class="form-control input-lg" type="text" placeholder=".input-lg"&gt;</code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-lg-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div> 
              
              <div class="form-group">
                <input class="form-control pull-left" type="text" placeholder="input default">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#input-default">Ver código</a>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="input-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-default-1">&lt;input class="form-control" type="text" placeholder="Input default"&gt;</code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-default-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input class="form-control input-sm pull-left" type="text" placeholder=".input-sm">
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#input-sm">Ver código</a>
              </div>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="input-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Input sm</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="input-sm-1">&lt;input class="form-control input-sm" type="text" placeholder=".input-sm"&gt;</code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#input-sm-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <select class="form-control input-lg pull-left">...</select>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#select-lg">Ver código</a>
              </div>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="select-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select lg</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="select-lg-1">&lt;select class="form-control input-lg" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#select-lg-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <select class="form-control pull-left">...</select>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#select-default">Ver código</a>
              </div>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="select-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select default</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="select-default-2">&lt;select class="form-control" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#select-default-2">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <select class="form-control input-sm pull-left">...</select>
                <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#select-sm">Ver código</a>
              </div>
              <div class="clearfix"></div>
              <!-- Modal -->
              <div class="modal fade" id="select-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Select sm</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="select-sm-1">&lt;select class="form-control input-sm" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#select-sm-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>

              <form class="form-horizontal" role="form">
                <div class="form-group form-group-lg">
                  <label class="col-sm-4 control-label" for="formGroupInputLarge">Large label</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <input class="form-control pull-left" type="text" id="formGroupInputLarge" placeholder="Large label">
                      <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#label-lg">Ver código</a>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="label-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Label-lg</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="large-label-1">
                            &lt;form class="form-horizontal" role="form"&gt;
                              &lt;div class="form-group form-group-lg"&gt;
                                &lt;label class="col-sm-4 control-label" for="formGroupInputLarge"&gt;Large label&lt;/label&gt;
                                &lt;div class="col-sm-8"&gt;
                                  &lt;input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                            &lt;/form&gt;  
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#large-label-1">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label" for="formGroupInputLarge">Small label</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <input class="form-control pull-left" type="text" id="formGroupInputLarge" placeholder="Small label">
                      <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#label-sm">Ver código</a>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="label-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Label-sm</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="small-label-1">
                            &lt;form class="form-horizontal" role="form"&gt;
                              &lt;div class="form-group form-group-sm"&gt;
                                &lt;label class="col-sm-4 control-label" for="formGroupInputSmall"&gt;Small label&lt;/label&gt;
                                &lt;div class="col-sm-8"&gt;
                                  &lt;input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input"&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                            &lt;/form&gt;  
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#small-label-1">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-lg-12">
              <p class="Roboto300 font14">Form a 2 columnas <span class="gray2">/ Forms</span></p>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>                    
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>  
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-2-columns">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-2-columns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form 2 columns</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-2-columns-1">
                          &lt;form&gt;
                            &lt;div class="row"&gt;
                              &lt;div class="col-lg-6"&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                  &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                  &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                &lt;/div&gt;                    
                              &lt;/div&gt;
                              &lt;div class="col-lg-6"&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                  &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                  &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                &lt;/div&gt;  
                              &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="checkbox"&gt;
                              &lt;label&gt;
                                &lt;input type="checkbox"&gt; Check me out
                              &lt;/label&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-2-columns-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <div class="row margintop40">
            <div class="col-lg-12">
              <p class="Roboto300 font14">Form a 3 columnas <span class="gray2">/ Forms</span></p>
              <form>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>                    
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>  
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>  
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-3-columns">Ver código</a>
              </form>
              <!-- Modal -->
              <div class="modal fade" id="form-3-columns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Form 3 columns</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="form-3-columns-1">
                          &lt;form&gt;
                            &lt;div class="row"&gt;
                              &lt;div class="col-lg-4"&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                  &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                  &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                &lt;/div&gt;                    
                              &lt;/div&gt;
                              &lt;div class="col-lg-4"&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                  &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                  &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                &lt;/div&gt;  
                              &lt;/div&gt;
                              &lt;div class="col-lg-4"&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                  &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                                &lt;/div&gt;
                                &lt;div class="form-group"&gt;
                                  &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                  &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                &lt;/div&gt;  
                              &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="checkbox"&gt;
                              &lt;label&gt;
                                &lt;input type="checkbox"&gt; Check me out
                              &lt;/label&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
                          &lt;/form&gt;  
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#form-3-columns-1">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">

          <p class="Roboto300 font14">Form Border-bottom <span class="gray2">/ Forms</span></p>
          <form class="form-underline">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>                    
            <div class="form-group">
              <select class="form-control">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
              </select>
            </div>
            <textarea class="form-control"></textarea>  
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-underline">Ver código</a>
          </form>
          <!-- Modal -->
          <div class="modal fade" id="form-underline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Form Underline</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="form-underline">
                      &lt;form class="form-underline"&gt;
                        &lt;div class="form-group"&gt;
                          &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                          &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                          &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                          &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                        &lt;/div&gt;                    
                        &lt;div class="form-group"&gt;
                          &lt;select class="form-control"&gt;
                            &lt;option value=""&gt;1&lt;/option&gt;
                            &lt;option value=""&gt;2&lt;/option&gt;
                            &lt;option value=""&gt;3&lt;/option&gt;
                            &lt;option value=""&gt;4&lt;/option&gt;
                            &lt;option value=""&gt;5&lt;/option&gt;
                          &lt;/select&gt;
                        &lt;/div&gt;
                        &lt;textarea class="form-control"&gt;&lt;/textarea&gt;  
                        &lt;div class="checkbox"&gt;
                          &lt;label&gt;
                            &lt;input type="checkbox"&gt; Check me out
                          &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
                        &lt;a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-underline"&gt;Ver código&lt;/a&gt;
                      &lt;/form&gt;  
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#form-underline">Copiar código</button>
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