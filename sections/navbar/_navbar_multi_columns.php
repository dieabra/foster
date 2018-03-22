<hr class="margintop40">
<p class="Roboto300 font14">Navbar Multi Columns</span></p>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
      </div>
      <div class="col-sm-11">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Active Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="#">Link</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Two Column <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-2">
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="multi-column-dropdown">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here that's extra long so we can see how it looks</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul class="multi-column-dropdown">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </div>
                </div>
              </ul>
            </li>
          </ul>     
        </div>
      </div>
    </div>
  </div>  
</nav>
<a href="" class="btn btn-primary" data-toggle="modal" data-target="#navbar-multi-columns">Ver código</a>
<!-- Modal -->
<div class="modal fade" id="navbar-multi-columns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Navbar Multi Columns</h4>
      </div>
      <div class="modal-body">
        <pre>
          <code id="navbar-multi-columns-1">
            &lt;nav class="navbar navbar-default"&gt;
              &lt;div class="container-fluid"&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-sm-1"&gt;
                    &lt;div class="navbar-header"&gt;
                      &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5"&gt;
                        &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                        &lt;span class="icon-bar"&gt;&lt;/span&gt;
                        &lt;span class="icon-bar"&gt;&lt;/span&gt;
                        &lt;span class="icon-bar"&gt;&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="col-sm-11"&gt;
                    &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5"&gt;
                      &lt;ul class="nav navbar-nav"&gt;
                        &lt;li class="active"&gt;&lt;a href="#"&gt;Active Link &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="dropdown"&gt;
                          &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                          &lt;ul class="dropdown-menu" role="menu"&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="divider"&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="divider"&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                        
                        &lt;li class="dropdown"&gt;
                          &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;Two Column &lt;b class="caret"&gt;&lt;/b&gt;&lt;/a&gt;
                          &lt;ul class="dropdown-menu multi-column columns-2"&gt;
                            &lt;div class="row"&gt;
                              &lt;div class="col-sm-6"&gt;
                                &lt;ul class="multi-column-dropdown"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here that's extra long so we can see how it looks&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                              &lt;div class="col-sm-6"&gt;
                                &lt;ul class="multi-column-dropdown"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li class="divider"&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/ul&gt;
                        &lt;/li&gt;
                      &lt;/ul&gt;     
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;  
            &lt;/nav&gt;
          </code>
        </pre>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-copy" data-clipboard-target="#navbar-multi-columns-1">Copiar código</button>
      </div>
    </div>
  </div>
</div>