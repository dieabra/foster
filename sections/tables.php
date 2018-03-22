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

          <!-- TABLES
          ================================================== -->
          <h4 class="margintop50">Tables</h4>
          <ol>
            <li>Basic Table</li>
            <li>Table Striped</li>
            <li>Table Bordered</li>
            <li>Table Hover</li>
            <li>Table Condensed</li>
            <li>Basic Table Colors</li>
            <li>Table Bordered Color</li>
            <li>Table Responsive</li>
            <li>Table Bordered Responsive</li>
          </ol>

          <hr class="margintop40">
          
          <!-- BASIC TABLE -->
          <p class="HelveticaBd font14">Basic Table</p>
          <table class="table">
            <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="basic-table-a">
                      &lt;table class="table margintop40"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Username&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Mark&lt;/td&gt;
                            &lt;td&gt;Otto&lt;/td&gt;
                            &lt;td&gt;@mdo&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Jacob&lt;/td&gt;
                            &lt;td&gt;Thornton&lt;/td&gt;
                            &lt;td&gt;@fat&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Larry&lt;/td&gt;
                            &lt;td&gt;the Bird&lt;/td&gt;
                            &lt;td&gt;@twitter&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      </table>
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-table-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- TABLE STRIPED -->
          <p class="HelveticaBd font14">Table Striped</p>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-striped">Ver código</a>
          <div class="modal fade" id="table-striped" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table striped</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-striped-a">
                      &lt;table class="table table-striped"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Username&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Mark&lt;/td&gt;
                            &lt;td&gt;Otto&lt;/td&gt;
                            &lt;td&gt;@mdo&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Jacob&lt;/td&gt;
                            &lt;td&gt;Thornton&lt;/td&gt;
                            &lt;td&gt;@fat&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Larry&lt;/td&gt;
                            &lt;td&gt;the Bird&lt;/td&gt;
                            &lt;td&gt;@twitter&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      &lt;/table&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-striped-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- TABLE BORDERED -->
          <p class="HelveticaBd font14">Table Bordered</p>
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td rowspan="2">1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
              <td>@TwBootstrap</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-bordered">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="table-bordered" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table bordered</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-bordered-a">
                      &lt;table class="table table-bordered"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Username&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Mark&lt;/td&gt;
                            &lt;td&gt;Otto&lt;/td&gt;
                            &lt;td&gt;@mdo&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Jacob&lt;/td&gt;
                            &lt;td&gt;Thornton&lt;/td&gt;
                            &lt;td&gt;@fat&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Larry&lt;/td&gt;
                            &lt;td&gt;the Bird&lt;/td&gt;
                            &lt;td&gt;@twitter&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      </table>
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-bordered-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- TABLE HOVER -->
          <p class="HelveticaBd font14">Table Hover</p>
          <table class="table table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-hover">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="table-hover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table hover</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-hover-a">
                      &lt;table class="table table-hover"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Username&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Mark&lt;/td&gt;
                            &lt;td&gt;Otto&lt;/td&gt;
                            &lt;td&gt;@mdo&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Jacob&lt;/td&gt;
                            &lt;td&gt;Thornton&lt;/td&gt;
                            &lt;td&gt;@fat&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Larry&lt;/td&gt;
                            &lt;td&gt;the Bird&lt;/td&gt;
                            &lt;td&gt;@twitter&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      </table>
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-hover-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- TABLE CONDENSED -->
          <p class="HelveticaBd font14">Table Condensed</p>
          <table class="table table-condensed">
            <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-condensed">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="table-condensed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table condensed</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-condensed-a">
                      &lt;table class="table table-condensed"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Username&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Mark&lt;/td&gt;
                            &lt;td&gt;Otto&lt;/td&gt;
                            &lt;td&gt;@mdo&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Jacob&lt;/td&gt;
                            &lt;td&gt;Thornton&lt;/td&gt;
                            &lt;td&gt;@fat&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Larry&lt;/td&gt;
                            &lt;td&gt;the Bird&lt;/td&gt;
                            &lt;td&gt;@twitter&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      </table>
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-condensed-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- BASIC TABLE COLORS -->
          <p class="HelveticaBd font14">Basic Table Colors</p>
          <table class="table">
            <thead>
            <tr>
              <th>#</th>
              <th>Column heading</th>
              <th>Column heading</th>
              <th>Column heading</th>
            </tr>
            </thead>
            <tbody>
              <tr class="">
              <td>1</td>
              <td>Default content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="active">
              <td>2</td>
              <td>Active content</td>
              <td>class="active"</td>
              <td>Column content</td>
            </tr>
            <tr class="primary">
              <td>3</td>
              <td>Primary content</td>
              <td>class="primary"</td>
              <td>Column content</td>
            </tr>
            <tr class="success">
              <td>4</td>
              <td>Success content</td>
              <td>class="success"</td>
              <td>Column content</td>
            </tr>
            <tr class="info">
              <td>5</td>
              <td>Info content</td>
              <td>class="info"</td>
              <td>Column content</td>
            </tr>
            <tr class="warning">
              <td>6</td>
              <td>Warning content</td>
              <td>class="warning"</td>
              <td>Column content</td>
            </tr>
            <tr class="danger">
              <td>7</td>
              <td>Danger content</td>
              <td>class="danger"</td>
              <td>Column content</td>
            </tr>
            <tr class="">
              <td>8</td>
              <td>Default content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr>
              <td class="">9</td>
              <td class="">Default</td>
              <td class="active">Active</td>
              <td class="primary">Primary</td>
            </tr>
            <tr>
              <td class="">10</td>
              <td class="success">Success</td>
              <td class="warning">Warning</td>
              <td class="danger">Danger</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-multiple">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="table-multiple" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table colors</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="basic-table-colors-a">
                      &lt;table class="table"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr class=""&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Default content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="active"&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Active content&lt;/td&gt;
                            &lt;td&gt;class="active"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="primary"&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Primary content&lt;/td&gt;
                            &lt;td&gt;class="primary"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="success"&gt;
                            &lt;td&gt;4&lt;/td&gt;
                            &lt;td&gt;Success content&lt;/td&gt;
                            &lt;td&gt;class="success"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="info"&gt;
                            &lt;td&gt;5&lt;/td&gt;
                            &lt;td&gt;Info content&lt;/td&gt;
                            &lt;td&gt;class="info"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="warning"&gt;
                            &lt;td&gt;6&lt;/td&gt;
                            &lt;td&gt;Warning content&lt;/td&gt;
                            &lt;td&gt;class="warning"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="danger"&gt;
                            &lt;td&gt;7&lt;/td&gt;
                            &lt;td&gt;Danger content&lt;/td&gt;
                            &lt;td&gt;class="danger"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class=""&gt;
                            &lt;td&gt;8&lt;/td&gt;
                            &lt;td&gt;Default content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td class=""&gt;9&lt;/td&gt;
                            &lt;td class=""&gt;Default&lt;/td&gt;
                            &lt;td class="active"&gt;Active&lt;/td&gt;
                            &lt;td class="primary"&gt;Primary&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td class=""&gt;10&lt;/td&gt;
                            &lt;td class="success"&gt;Success&lt;/td&gt;
                            &lt;td class="warning"&gt;Warning&lt;/td&gt;
                            &lt;td class="danger"&gt;Danger&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      &lt;/table&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-table-colors-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          
          <!-- TABLE BORDERED COLORS -->
          <p class="HelveticaBD font14">Table Bordered Colors</p>
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Column heading</th>
              <th>Column heading</th>
              <th>Column heading</th>
            </tr>
            </thead>
            <tbody>
            <tr class="">
              <td>1</td>
              <td>Default content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="active">
              <td>2</td>
              <td>Active content</td>
              <td>class="active"</td>
              <td>Column content</td>
            </tr>
            <tr class="primary">
              <td>3</td>
              <td>Primary content</td>
              <td>class="primary"</td>
              <td>Column content</td>
            </tr>
            <tr class="success">
              <td>4</td>
              <td>Success content</td>
              <td>class="success"</td>
              <td>Column content</td>
            </tr>
            <tr class="info">
              <td>5</td>
              <td>Info content</td>
              <td>class="info"</td>
              <td>Column content</td>
            </tr>
            <tr class="warning">
              <td>6</td>
              <td>Warning content</td>
              <td>class="warning"</td>
              <td>Column content</td>
            </tr>
            <tr class="danger">
              <td>7</td>
              <td>Danger content</td>
              <td>class="danger"</td>
              <td>Column content</td>
            </tr>
            <tr class="">
              <td>8</td>
              <td>Default content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr>
              <td class="">9</td>
              <td class="">Default</td>
              <td class="active">Active</td>
              <td class="primary">Primary</td>
            </tr>
            <tr>
              <td class="">10</td>
              <td class="success">Success</td>
              <td class="warning">Warning</td>
              <td class="danger">Danger</td>
            </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-multiple-2">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="table-multiple-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table bordered colors</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="basic-table-colors-2-a">
                      &lt;table class="table table-bordered table-hover"&gt;
                        &lt;thead&gt;
                          &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                            &lt;th&gt;Column heading&lt;/th&gt;
                          &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                          &lt;tr class=""&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Default content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="active"&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Active content&lt;/td&gt;
                            &lt;td&gt;class="active"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="primary"&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Primary content&lt;/td&gt;
                            &lt;td&gt;class="primary"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="success"&gt;
                            &lt;td&gt;4&lt;/td&gt;
                            &lt;td&gt;Success content&lt;/td&gt;
                            &lt;td&gt;class="success"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="info"&gt;
                            &lt;td&gt;5&lt;/td&gt;
                            &lt;td&gt;Info content&lt;/td&gt;
                            &lt;td&gt;class="info"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="warning"&gt;
                            &lt;td&gt;6&lt;/td&gt;
                            &lt;td&gt;Warning content&lt;/td&gt;
                            &lt;td&gt;class="warning"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class="danger"&gt;
                            &lt;td&gt;7&lt;/td&gt;
                            &lt;td&gt;Danger content&lt;/td&gt;
                            &lt;td&gt;class="danger"&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr class=""&gt;
                            &lt;td&gt;8&lt;/td&gt;
                            &lt;td&gt;Default content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                            &lt;td&gt;Column content&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td class=""&gt;9&lt;/td&gt;
                            &lt;td class=""&gt;Default&lt;/td&gt;
                            &lt;td class="active"&gt;Active&lt;/td&gt;
                            &lt;td class="primary"&gt;Primary&lt;/td&gt;
                          &lt;/tr&gt;
                          &lt;tr&gt;
                            &lt;td class=""&gt;10&lt;/td&gt;
                            &lt;td class="success"&gt;Success&lt;/td&gt;
                            &lt;td class="warning"&gt;Warning&lt;/td&gt;
                            &lt;td class="danger"&gt;Danger&lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      &lt;/table&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#basic-table-colors-2-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>  
          
          
          <hr class="margintop40">
          
          <!-- TABLE RESPONSIVE -->
          <p class="HelveticaBD font14">Table Responsive</p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                <th>#</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>1</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td> 
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-responsive">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="table-responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table responsive</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-responsive-a">
                      &lt;div class="table-responsive"&gt;
                        &lt;table class="table"&gt;
                          &lt;thead&gt;
                            &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-responsive-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>  
          
          <hr class="margintop40">
          
          <!-- TABLE RESPONSIVE BORDERED -->
          <p class="HelveticaBD font14">Table Responsive Bordered</p>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                <th>#</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>1</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#table-responsive-2">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="table-responsive-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Table responsive bordered</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="table-responsive-2-a">
                      &lt;div class="table-responsive"&gt;
                        &lt;table class="table table-bordered"&gt;
                          &lt;thead&gt;
                            &lt;tr&gt;
                            &lt;th&gt;#&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;th&gt;Table heading&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                            &lt;td&gt;1&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                            &lt;td&gt;2&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                            &lt;td&gt;3&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;td&gt;Table cell&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#table-responsive-2-a">Copiar código</button>
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