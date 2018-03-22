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

          <!-- NAVS
          ================================================== -->
          <h4 class="margintop50">Navs</h4>
          <ol>
            <li>Nav tabs</li>
            <li>Nav tabs justified</li>
            <li>Nav pills</li>
            <li>Nav pills justified</li>
            <li>Nav stacked</li>
            <li>Breadcrumb</li>
            <li>Pagination</li>
            <li>Pager</li>
            <li>Nav Effects</li>
          </ol>

          <hr class="margintop40">     
            
          <div class="row">

            <div class="col-sm-12">

              <!-- Nav Tabs -->
              <p class="Roboto300 font14 margintop30">Nav Tabs</p>
              <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li class="disabled"><a>Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                    <li class="divider"></li>
                    <li class="disabled"><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="" data-toggle="modal" data-target="#nav-tab">Ver código</a></li>
              </ul>
              <div id="myTabContent" class="tab-content margintop20">
                <div class="tab-pane fade active in" id="home">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="nav-tab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Nav tab</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="nav-tabs-a">
                          &lt;ul class="nav nav-tabs"&gt;
                            &lt;li class="active"&gt;&lt;a href="#home" data-toggle="tab"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#profile" data-toggle="tab"&gt;Profile&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="disabled"&gt;&lt;a&gt;Disabled&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="dropdown"&gt;
                              &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;
                                Dropdown &lt;span class="caret"&gt;&lt;/span&gt;
                              &lt;/a&gt;
                              &lt;ul class="dropdown-menu"&gt;
                                &lt;li&gt;&lt;a href="#dropdown1" data-toggle="tab"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#dropdown2" data-toggle="tab"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li class="disabled"&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                          &lt;div id="myTabContent" class="tab-content margintop20"&gt;
                            &lt;div class="tab-pane fade active in" id="home"&gt;
                              &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="profile"&gt;
                              &lt;p&gt;Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="dropdown1"&gt;
                              &lt;p&gt;Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="dropdown2"&gt;
                              &lt;p&gt;Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#nav-tabs-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">
              
              <!-- Nav Tabs Justified -->
              <p class="Roboto300 font14">Nav Tabs Justified</p>
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#home2" data-toggle="tab">Home</a></li>
                <li><a href="#profile2" data-toggle="tab">Profile</a></li>
                <li class="disabled"><a>Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#dropdown3" data-toggle="tab">Action</a></li>
                    <li><a href="#dropdown4" data-toggle="tab">Another action</a></li>
                    <li class="divider"></li>
                    <li class="disabled"><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="" data-toggle="modal" data-target="#nav-tab-justified">Ver código</a></li>
              </ul>
              <div id="myTabContent" class="tab-content margintop20">
                <div class="tab-pane fade active in" id="home2">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile2">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                </div>
                <div class="tab-pane fade" id="dropdown3">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown4">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="nav-tab-justified" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Nav tab justified</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="nav-tabs-justified-a">
                          &lt;ul class="nav nav-tabs nav-justified" role="tablist"&gt;
                            &lt;li class="active"&gt;&lt;a href="#home2" data-toggle="tab"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#profile2" data-toggle="tab"&gt;Profile&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="disabled"&gt;&lt;a&gt;Disabled&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="dropdown"&gt;
                              &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;
                                Dropdown &lt;span class="caret"&gt;&lt;/span&gt;
                              &lt;/a&gt;
                              &lt;ul class="dropdown-menu"&gt;
                                &lt;li&gt;&lt;a href="#dropdown3" data-toggle="tab"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#dropdown4" data-toggle="tab"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="divider"&gt;&lt;/li&gt;
                                &lt;li class="disabled"&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                          &lt;div id="myTabContent" class="tab-content margintop20"&gt;
                            &lt;div class="tab-pane fade active in" id="home2"&gt;
                              &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="profile2"&gt;
                              &lt;p&gt;Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="dropdown3"&gt;
                              &lt;p&gt;Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="tab-pane fade" id="dropdown4"&gt;
                              &lt;p&gt;Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#nav-tabs-justified-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">
              
              <!-- Nav Pills -->
              <p class="Roboto300 font14">Nav Pills</p>
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="" data-toggle="modal" data-target="#nav-pills">Ver código</a></li>
              </ul>
              <!-- Modal -->
              <div class="modal fade" id="nav-pills" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Nav pills</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="nav-pills-a">
                          &lt;ul class="nav nav-pills"&gt;
                            &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="dropdown"&gt;
                            &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;
                              Dropdown &lt;span class="caret"&gt;&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#nav-pills-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">

              <!-- Nav Pills Justified -->
              <p class="Roboto300 font14">Nav Pills Justified</p>
              <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="" data-toggle="modal" data-target="#nav-pills-justified">Ver código</a></li>
              </ul>
              <!-- Modal -->
              <div class="modal fade" id="nav-pills-justified" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Nav pills justified</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="nav-pills-justified-a">
                          &lt;ul class="nav nav-pills nav-justified"&gt;
                            &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="dropdown"&gt;
                            &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;
                              Dropdown &lt;span class="caret"&gt;&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#nav-pills-justified-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <hr class="margintop40">

              <!-- Nav Stacked -->
              <p class="Roboto300 font14">Nav Stacked</p>
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="" data-toggle="modal" data-target="#nav-stacked">Ver código</a></li>
              </ul>
              <!-- Modal -->
              <div class="modal fade" id="nav-stacked" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Nav stacked</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="nav-pills-vertical">
                          &lt;ul class="nav nav-pills nav-stacked margintop20"&gt;
                            &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="dropdown"&gt;
                            &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;
                              Dropdown &lt;span class="caret"&gt;&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#nav-pills-vertical">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">

              <!-- Breadcrumb -->
              <p class="Roboto300 font14">Breadcrumb</p>
              <ul class="breadcrumb margintop20">
                <li class="active">Home</li>
                <li><a href="" class="btn btn-primary" data-toggle="modal" data-target="#breadcrumb">Ver código</a></li>
              </ul>
              <!-- Modal -->
              <div class="modal fade" id="breadcrumb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Breadcrumb</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="breadcrumb-a">
                          &lt;ul class="breadcrumb margintop20"&gt;
                            &lt;li class="active"&gt;Home&lt;/li&gt;
                          &lt;/ul&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#breadcrumb-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Library</li>
                <li><a href="" data-toggle="modal" data-target="#breadcrumb-2">Ver código</a></li>
              </ul>
              <!-- Modal -->
              <div class="modal fade" id="breadcrumb-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Breadcrumb 2</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code id="breadcrumb-2-a">
                          &lt;ul class="breadcrumb margintop20"&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Home&lt;/li&gt;
                            &lt;li class="active"&gt;Library&lt;/li&gt;
                          &lt;/ul&gt;
                        </code>
                      </pre>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary btn-copy" data-clipboard-target="#breadcrumb-2-a">Copiar código</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">

              <!-- Pagination -->
              <p class="Roboto300 font14">Pagination</p>
              <div class="bs-component">
                <ul class="pagination">
                  <li class="disabled"><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                  <li><a href="" data-toggle="modal" data-target="#pagination">Ver código</a></li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="pagination" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Pagination</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="pagination-a">
                            &lt;ul class="pagination"&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#pagination-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                

                <ul class="pagination pagination-lg">
                  <li class="disabled"><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                  <li><a href="" data-toggle="modal" data-target="#pagination-lg">Ver código</a></li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="pagination-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Pagination lg</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="pagination-lg-a">
                            &lt;ul class="pagination pagination-lg"&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#pagination-lg-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <ul class="pagination pagination-sm">
                  <li class="disabled"><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                  <li><a href="" data-toggle="modal" data-target="#pagination-sm">Ver código</a></li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="pagination-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Pagination sm</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="pagination-sm-a">
                            &lt;ul class="pagination pagination-sm"&gt;
                              &lt;li class="disabled"&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#pagination-sm-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="margintop40">

              <p class="Roboto300 font14 margintop40">Pager <span class="gray2">/ Navs </span></p>
              <div class="bs-component">
                <ul class="pager">
                  <li><a href="#">Previous</a></li>
                  <li><a href="#">Next</a></li>
                  <li><a href="" data-toggle="modal" data-target="#pager">Ver código</a></li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="pager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Pager</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="pager-a">
                            &lt;ul class="pager"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#pager-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>                  

                <ul class="pager margintop30">
                  <li class="previous disabled"><a href="#">&larr; Older</a></li>
                  <li class="next"><a href="#">Newer &rarr;</a></li>
                  <li><a href="" data-toggle="modal" data-target="#pager-2">Ver código</a></li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="pager-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Pager 2</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code id="pager-2-a">
                            &lt;ul class="pager"&gt;
                              &lt;li class="previous disabled"&gt;&lt;a href="#"&gt;&larr; Older&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="next"&gt;&lt;a href="#"&gt;Newer &rarr;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-copy" data-clipboard-target="#pager-2-a">Copiar código</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            
            <div class="col-sm-12">
              <hr class="margintop40">
              
              <!-- Nav Effect 1 -->
              <?php include("nav-effects/_nav_effect_1.php"); ?>
              
              <!-- Nav Effect 1 A -->
              <?php include("nav-effects/_nav_effect_1a.php"); ?>

              <!-- Nav Effect 1 B -->
              <?php include("nav-effects/_nav_effect_1b.php"); ?>

              <!-- Nav Effect 1 C -->
              <?php include("nav-effects/_nav_effect_1c.php"); ?>

              <!-- Nav Effect 2 -->
              <?php include("nav-effects/_nav_effect_2.php"); ?>

              <!-- Nav Effect 2 A -->
              <?php include("nav-effects/_nav_effect_2a.php"); ?>

              <!-- Nav Effect 2 B -->
              <?php include("nav-effects/_nav_effect_2b.php"); ?>

              <!-- Nav Effect 2 C -->
              <?php include("nav-effects/_nav_effect_2c.php"); ?>

            </div>
          </div>  
        </div>
      </div>
    </div>

  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>