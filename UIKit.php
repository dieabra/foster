<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projectstrap v0.1.0-beta</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="styles/projectstrap.css">

    <style>
      .box-height60 {
        height: 60px;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid margintop60">
      <div class="row">
        <div class="col-lg-2">
          <?php include("partials/_sidebar-index.php"); ?>
        </div>
        <div class="col-lg-10">
          <h1>Projectstrap v0.1.0-beta</h1>
          <p class="lead">User Interface Design Guide</p>
          <hr>

      <!-- COLOR
      ================================================== -->
          <h4 id="colors">Color</h4>
          <p class="Roboto300 font14 margintop20">Color Swatches <span class="gray2">/ Color </span></p>
          <div class="row margintop20">
 
            <div class="col-xs-2">
              <div class="box-height60 bg-primary"></div>
              <div class="font12 HelveticaMd margintop5">Primary <code>.primary</code> <code>.bg-primary</code></div>
            </div>
            <div class="col-xs-2">
              <div class="box-height60 bg-success"></div>
              <div class="font12 HelveticaMd margintop5">Success <code>.success</code> <code>.bg-success</code></div>
            </div>
            <div class="col-xs-2">
              <div class="box-height60 bg-info"></div>
              <div class="font12 HelveticaMd margintop5">Info <code>.info</code> <code>.bg-info</code></div>
            </div>
            <div class="col-xs-2">
              <div class="box-height60 bg-warning"></div>
              <div class="font12 HelveticaMd margintop5">Warning <code>.warning</code> <code>.bg-warning</code></div>
            </div>
            <div class="col-xs-2">
              <div class="box-height60 bg-danger"></div>
              <div class="font12 HelveticaMd margintop5">Danger <code id="copyTarget">.danger</code> <code>.bg-danger</code></div>
            </div>
          </div>

          <hr class="margintop80">
            
         
      <!-- TYPOGRAPHY
      ================================================== -->
        <h4 id="typography" class="margintop50">Typography</h4>
        <p class="lead">Typefaces, Headings and Font-Size Classes</p>
        <p class="Roboto300 font14 margintop40">Roboto Typeface - by Christian Robertson - Apache License, version 2.0 - <a href="https://www.google.com/fonts#UsePlace:use/Collection:Roboto">Google Fonts</a></p>
        <h2 class="Roboto100">Roboto Thin 100 <code class="font12">class="Roboto100"</code></h2>
        <h2 class="Roboto300">Roboto Light 300 <code class="font12">class="Roboto300"</code></h2>
        <h2 class="Roboto400">Roboto Normal 400 <code class="font12">class="Roboto400"</code></h2>
        <h2 class="Roboto500">Roboto Medium 500 <code class="font12">class="Roboto500"</code></h2>
        <h2 class="Roboto700">Roboto Bold 700 <code class="font12">class="Roboto700"</code></h2>
        <p class="Roboto300 font14 margintop60">Headings</p>
        <h1 class="margintop20">h1. Bootstrap heading, Bold 36px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h1>
        <h2 class="margintop10">h2. Bootstrap heading, Bold 30px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h2>
        <h3 class="margintop10">h3. Bootstrap heading, Bold 24px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h3>
        <h4 class="margintop10">h4. Bootstrap heading, Bold 18px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h4>
        <h5 class="margintop10">h5. Bootstrap heading, Bold 14px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h5>
        <h6 class="margintop10">h6. Bootstrap heading, Bold 12px <small>Secondary text</small><br><span class="Roboto300">Second Heading Line</span></h6>
        <figure class="highlight">
          <pre>
            <code class="language-html" data-lang="html">
              <span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
              <span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
              <span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
              <span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
              <span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
              <span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
            </code>
          </pre>
        </figure>
        
        <p class="Roboto300 margintop60">Font-Size Classes</p>
        <p class="font72 Roboto700 margintop20">font72. <span class="Roboto300">Font-Size Class <code class="font12">class="font72"</code><br>Second Paragraph Line</span></p>
        <p class="font60 Roboto700">font60. <span class="Roboto300">Font-Size Class <code class="font12">class="font60"</code><br>Second Paragraph Line</span></p>
        <p class="font48 Roboto700">font48. <span class="Roboto300">Font-Size Class <code class="font12">class="font48"</code><br>Second Paragraph Line</span></p>
        <p class="font42 Roboto700">font42. <span class="Roboto300">Font-Size Class <code class="font12">class="font42"</code><br>Second Paragraph Line</span></p>
        <p class="font36 Roboto700">font36. <span class="Roboto300">Font-Size Class <code class="font12">class="font36"</code><br>Second Paragraph Line</span></p>
        <p class="font32 Roboto700">font32. <span class="Roboto300">Font-Size Class <code class="font12">class="font32"</code><br>Second Paragraph Line</span></p>
        <p class="font28 Roboto700">font28. <span class="Roboto300">Font-Size Class <code class="font12">class="font28"</code><br>Second Paragraph Line</span></p>
        <p class="font26 Roboto700">font26. <span class="Roboto300">Font-Size Class <code class="font12">class="font26"</code><br>Second Paragraph Line</span></p>
        <p class="font24 Roboto700">font24. <span class="Roboto300">Font-Size Class <code class="font12">class="font24"</code><br>Second Paragraph Line</span></p>
        <p class="font20 Roboto700">font20. <span class="Roboto300">Font-Size Class <code class="font12">class="font20"</code><br>Second Paragraph Line</span></p>
        <p class="font18 Roboto700">font18. <span class="Roboto300">Font-Size Class <code class="font12">class="font18"</code><br>Second Paragraph Line</span></p>
        <p class="font16 Roboto700">font16. <span class="Roboto300">Font-Size Class <code class="font12">class="font16"</code><br>Second Paragraph Line</span></p>
        <p class="font15 Roboto700">font15. <span class="Roboto300">Font-Size Class <code class="font12">class="font15"</code><br>Second Paragraph Line</span></p>
        <p class="font14 Roboto700">font14. <span class="Roboto300">Font-Size Class <code class="font12">class="font14"</code><br>Second Paragraph Line</span></p>
        <p class="font13 Roboto700">font13. <span class="Roboto300">Font-Size Class <code class="font12">class="font13"</code><br>Second Paragraph Line</span></p>
        <p class="font12 Roboto700">font12. <span class="Roboto300">Font-Size Class <code class="font12">class="font12"</code><br>Second Paragraph Line</span></p>
        <p class="font11 Roboto700">font11. <span class="Roboto300">Font-Size Class <code class="font12">class="font11"</code><br>Second Paragraph Line</span></p>
        <p class="font10 Roboto700">font10. <span class="Roboto300">Font-Size Class <code class="font12">class="font10"</code><br>Second Paragraph Line</span></p>
        <p class="font9 Roboto700">font9. <span class="Roboto300">Font-Size Class <code class="font12">class="font9"</code><br>Second Paragraph Line</span></p>
    
        <p class="Roboto300 font14 margintop80">Inline Text Elements <span class="gray2">/ Typography </span></p>
        <h1 class="margintop40">Main Title</h1>
        <p class="lead"><span class="GothamMd orange">Lead</span> Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Lead">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="Lead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Lead</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                      &lt;p class="lead"&gt;&lt;span class="GothamMd orange"&gt;Lead&lt;/span&gt; Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>
        
        <p>
          <strong>Paragraphs</strong> Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
          Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#paragraph">Ver código</a>
        </p>
        <!-- Modal -->
        <div class="modal fade" id="paragraph" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Paragraph</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p&gt;
                      &lt;strong&gt;Paragraphs&lt;/strong&gt; Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
                      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
                      Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    &lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>          

        <p class="text-left"><strong>Left aligned text.</strong> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-left">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="text-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Text-left</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p class="text-left"&gt;
                      &lt;strong&gt;Left aligned text.&lt;/strong&gt; Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>  

        <p class="text-center"><strong>Center aligned text.</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-center">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="text-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Text-center</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p class="text-center"&gt;
                      &lt;strong&gt;Left aligned text.&lt;/strong&gt; Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>
        

        <p class="text-right"><strong>Right aligned text.</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-right">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="text-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Text-right</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p class="text-right"&gt;
                      &lt;strong&gt;Right aligned text.&lt;/strong&gt; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <p class="text-justify"><strong>Justified text.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-justify">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="text-justify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Text-justify</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p class="text-justify"&gt;
                      &lt;strong&gt;Justified text.&lt;/strong&gt; Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <p class="subtitle">Subtitle example <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subtitle">Ver código</a></p>
        <!-- Modal -->
        <div class="modal fade" id="subtitle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Subtitle</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;p class="subtitle"&gt;
                      Subtitle example&lt;/p&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>
        
        <blockquote>
          <p><span class="Roboto500">Blockquote</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#blockquote">Ver código</a>
        
        <!-- Modal -->
        <div class="modal fade" id="blockquote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Blockquote</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;blockquote&gt;
                      &lt;p&gt;&lt;span class="Roboto500"&gt;Blockquote&lt;/span&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.&lt;/p&gt;
                      &lt;footer&gt;Someone famouse in &lt;cite title="Source Title"&gt;&lt;/cite&gt;&lt;/footer&gt;
                    &lt;/blockquote&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>
        

        <blockquote class="blockquote-reverse">
          <p><span class="Roboto500">"Blockquote Reverse</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat."</p>
          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote><a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#blockquote-reverse">Ver código</a>
        
        <!-- Modal -->
        <div class="modal fade" id="blockquote-reverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Blockquote Reverse</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;blockquote class="blockquote-reverse"&gt;
                      &lt;p&gt;&lt;span class="Roboto500"&gt;"Blockquote Reverse&lt;/span&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat."&lt;/p&gt;
                      &lt;footer&gt;Someone famouse in &lt;cite title="Source Title"&gt;&lt;/cite&gt;&lt;/footer&gt;
                    &lt;/blockquote&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <p class="">
          <span class="text-muted">This line of text is styled with a "text-muted" class - </span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-muted">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-muted" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-muted</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-muted"&gt;This line of text is styled with a "text-muted" class&lt;/span&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          
          <span class="text-primary">This line of text is styled with a "text-primary" class</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-primary">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-primary</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-primary"&gt;This line of text is styled with a "text-primary" class&lt;/span&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <span class="text-warning">This line of text is styled with a "text-warning" class</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-warning">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-warning</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-warning"&gt;This line of text is styled with a "text-warning" class&lt;/span&gt;</code> 
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>           
          
          <span class="text-danger">This line of text is styled with a "text-danger" class</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-danger">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-danger</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-danger"&gt;This line of text is styled with a "text-danger" class&lt;/span&gt;</code> 
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br> 

          <span class="text-success">This line of text is styled with a "text-success" class</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-success">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-success</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-success"&gt;This line of text is styled with a "text-success" class&lt;/span&gt;</code> 
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br> 

          <span class="text-info">This line of text is styled with a "text-info" class</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-info">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-info</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-info"&gt;This line of text is styled with a "text-info" class&lt;/span&gt;</code> 
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br> 

          You can use the mark tag to <mark>highlight</mark> text.<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#highlight">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="highlight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Mark</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.</code><br>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <del>This line of text is meant to be treated as deleted text.</del><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#delete">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Del</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <ins>This line of text is meant to be treated as an addition to the document.</ins><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ins">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="ins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Ins</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <u>This line of text will render as underlined</u><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#underline">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="underline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Underline</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;u&gt;This line of text will render as underlined&lt;/u&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <small>This line of text is meant to be treated as fine print.</small><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#small">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Small</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <strong>This line is a rendered as bold text</strong><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#strong">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="strong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Strong</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;strong&gt;This line is a rendered as bold text&lt;/strong&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <em>This line is a rendered as italicized text</em><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#em">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="em" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Emphasis</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;em&gt;This line is a rendered as italicized text&lt;/em&gt;</code><br>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <span class="text-lowercase">This line is a Lowercased text.</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-lowercase">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-lowercase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-lowercase</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-lowercase"&gt;This line is a Lowercased text.&lt;/span&gt;</code><br>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <span class="text-uppercase">This line is a uppercased text.</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-uppercase">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-uppercase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-uppercase</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-uppercase"&gt;This line is a uppercased text.&lt;/span&gt;</code><br>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <span class="text-capitalize">This line is a Capitalized text.</span><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#text-capitalize">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="text-capitalize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Text-capitalize</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span class="text-capitalize"&gt;This line is a Capitalized text.&lt;/span&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
          <br>

          <span>An abbreviation of the word attribute is </span><abbr title="attribute">attr</abbr><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#abbr">Ver código</a>
          <!-- Modal -->
          <div class="modal fade" id="abbr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Abbreviation</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code>&lt;span&gt;An abbreviation of the word attribute is &lt;/span&gt;&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;</code>
                  </pre>
                </div>
              </div>
            </div>
          </div>
        </p>
        
        <address class="margintop40">
          <strong>Address, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          <abbr title="Phone">P:</abbr> (123) 456-7890
        </address>
        <address>
          <strong>Full Name</strong><br>
          <a href="mailto:#">first.last@example.com</a>
        </address>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#address">Ver código</a>
        <!-- Modal -->
        <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Address</h4>
              </div>
              <div class="modal-body">
                <pre>
                  <code>
                    &lt;address class="margintop40"&gt;
                      &lt;strong&gt;Address, Inc.&lt;/strong&gt;&lt;br&gt;
                      795 Folsom Ave, Suite 600&lt;br&gt;
                      San Francisco, CA 94107&lt;br&gt;
                      &lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (123) 456-7890
                    &lt;/address&gt;
                    &lt;address&gt;
                      &lt;strong&gt;Full Name&lt;/strong&gt;&lt;br&gt;
                      &lt;a href="mailto:#"&gt;first.last@example.com&lt;/a&gt;
                    &lt;/address&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>
          
        <div class="row">
          <div class="col-xs-12">
            <hr class="margintop80">  
            <p class="Roboto300 font14 margintop50" id="list">Lists <span class="gray2">/ Typography </span></p>
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
                      <code>
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
                </div>
              </div>
            </div>
          
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
                      <code>
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
                </div>
              </div>
            </div>
            

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
                      <code>
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
                </div>
              </div>
            </div>

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
                      <code>
                        &lt;ul class="list-inline margintop20"&gt;
                          &lt;li&gt;&lt;strong&gt;This is an Inline List Item&lt;/strong&gt;&lt;/li&gt;
                          &lt;li&gt;Phasellus iaculis&lt;/li&gt;
                          &lt;li&gt;Nulla volutpat&lt;/li&gt;
                        &lt;/ul&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="margintop80">

      <!-- ICONS
      ================================================== -->
      <div class="row margintop50">
        <div class="col-lg-12">
            <h4 id="icons">Icons</h4>
        </div>
      </div>

      <!-- Headings -->
      <div class="row">
        <div class="col-xs-12">
          <p class="Roboto300 font14 margintop20">Pe Icons Stroke</p>
          <i class="pe-4x pe-7s-album"></i><code>&lt;i class="pe-4x pe-7s-album"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-arc"></i><code>&lt;i class="pe-4x pe-7s-arc"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-back-2"></i><code>&lt;i class="pe-4x pe-7s-back-2"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-bandaid"></i><code>&lt;i class="pe-4x pe-7s-bandaid"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-car"></i><code>&lt;i class="pe-4x pe-7s-car"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-diamond"></i><code>&lt;i class="pe-4x pe-7s-diamond"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-door-lock"></i><code>&lt;i class="pe-4x pe-7s-door-lock"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-gym"></i><code>&lt;i class="pe-4x pe-7s-gym"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-hammer"></i><code>&lt;i class="pe-4x pe-7s-hammer"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-rocket"></i><code>&lt;i class="pe-4x pe-7s-rocket"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-piggy"></i><code>&lt;i class="pe-4x pe-7s-piggy"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-wine"></i><code>&lt;i class="pe-4x pe-7s-wine"&gt;&lt;/i&gt;</code><br>
          <i class="pe-4x pe-7s-umbrella"></i><code>&lt;i class="pe-4x pe-7s-umbrella"&gt;&lt;/i&gt;</code><br>
        </div>
      </div>

      <hr class="margintop80">



      <!-- TABLES
      ================================================== -->
      <div class="row">
        <div class="col-xs-12">
          <h4 id="tables" class="margintop50">Tables</h4>

          <table class="table margintop40">
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
                    <code>
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
              </div>
            </div>
          </div>

          <div class="margintop30"><code class="font11">class="table-striped"</code></div>
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
                    <code>
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
              </div>
            </div>
          </div>
          

          <div class="margintop30"><code class="font11">class="table-bordered"</code></div>
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
                    <code>
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
              </div>
            </div>
          </div>
          

          <div class="margintop30"><code class="font11">class="table-hover"</code></div>
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
                    <code>
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
              </div>
            </div>
          </div>
          

          <div class="margintop30"><code class="font11">class="table-condensed"</code></div>
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
                    <code>
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
              </div>
            </div>
          </div>
          <br>

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
                    <code>
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
              </div>
            </div>
          </div>
          <br>
          
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
                    <code>
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
              </div>
            </div>
          </div>  
          <br>

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
                    <code>
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
              </div>
            </div>
          </div>  
          <br>
          

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
                    <code>
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
              </div>
            </div>
          </div>  
        </div>
      </div>
      
      <hr class="margintop80">


      <!-- FORMS
      ================================================== -->
      <div class="row">
        <div class="col-xs-12">

          <h4 id="forms" class="margintop50">Forms</h4>
          <div class="row margintop40">
            <div class="col-sm-5">
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
                        <code>
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
                  </div>
                </div>
              </div>
              

              <p class="Roboto300 font14 margintop60">Inline Form <span class="gray2">/ Forms</span></p>
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
                        <code>
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
                        <code>
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
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-offset-1 col-sm-6">
              <p class="Roboto300 font14">Horizontal Form <span class="gray2">/ Forms</span></p>
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
                        <code>
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
                  </div>
                </div>
              </div>    
            </div>
          </div>
          

          <div class="row margintop60">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Input Types <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input type="text" class="form-control pull-left" placeholder="Text input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input" style="width: 20%;">Ver código</a><br>
                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="text" class="form-control" placeholder="Text input"&gt;
                            &lt;span class="help-block"&gt;A block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control pull-left" placeholder="Password input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#password" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="password" class="form-control" placeholder="Pasword input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="datetime" class="form-control pull-left" placeholder="datetime input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#datetime" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="datetime" class="form-control" placeholder="datetime input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="datetime-local" class="form-control pull-left" placeholder="datetime-local input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#datetime-local" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="datetime-local" class="form-control" placeholder="datetime-local input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="date" class="form-control pull-left" placeholder="date input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#date" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="date" class="form-control" placeholder="date input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="month" class="form-control pull-left" placeholder="month input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#month" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="month" class="form-control" placeholder="month input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input type="time" class="form-control pull-left" placeholder="time input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#time" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="time" class="form-control" placeholder="time input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="week" class="form-control pull-left" placeholder="week input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#week" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="week" class="form-control" placeholder="week input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="number" class="form-control pull-left" placeholder="number input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#number" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="number" class="form-control" placeholder="number input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="email" class="form-control pull-left" placeholder="email input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#email" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="email" class="form-control" placeholder="email input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="url" class="form-control pull-left" placeholder="url input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#url" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="url" class="form-control" placeholder="url input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="search" class="form-control pull-left" placeholder="search input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#search" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="search" class="form-control" placeholder="search input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="tel" class="form-control pull-left" placeholder="tel input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tel" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="tel" class="form-control" placeholder="tel input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="color" class="form-control pull-left" placeholder="color input" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#color" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input type="color" class="form-control" placeholder="color input"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control pull-left" id="disabledInput" type="text" placeholder="Disabled input here..." style="width: 80%;" disabled>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#disabled" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess1">Input with success</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputSuccess1" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#success" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-success"&gt;
                            &lt;label class="control-label" for="inputSuccess1"&gt;Input with success&lt;/label&gt;
                            &lt;input class="form-control" id="inputSuccess1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group has-warning">
                <label class="control-label" for="inputwarning1">Input with warning</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputwarning1" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#warning" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-warning"&gt;
                            &lt;label class="control-label" for="inputWarning1"&gt;Input with warning&lt;/label&gt;
                            &lt;input class="form-control" id="inputWarning1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="form-group has-error">
                <label class="control-label" for="inputerror1">Input with error</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputerror1" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#error" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-error"&gt;
                            &lt;label class="control-label" for="inputerror1"&gt;Input with error&lt;/label&gt;
                            &lt;input class="form-control" id="inputerror1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="form-group has-success">
                <label class="control-label" for="inputsuccess1">Input with success</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputsuccess1" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#success" style="width: 20%;">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-success"&gt;
                            &lt;label class="control-label" for="inputsuccess1"&gt;Input with success&lt;/label&gt;
                            &lt;input class="form-control" id="inputsuccess1" type="text"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div> 
              
              <div class="form-group has-success has-feedback">
                <label class="control-label" for="inputsuccess1">Input with success feedback</label>
                <div class="clearfix"></div>
                <input type="text" class="form-control pull-left" id="inputsuccess1">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#success-feedback">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-success has-feedback"&gt;
                            &lt;label class="control-label" for="inputSuccess2"&gt;Input with success&lt;/label&gt;
                            &lt;input class="form-control" id="inputSuccess2" type="text"&gt;
                            &lt;span class="glyphicon glyphicon-ok form-control-feedback"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="form-group has-error has-feedback">
                <label class="control-label" for="inputError2">Input with error</label>
                <input type="text" class="form-control" id="inputError2">
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#error-feedback">Ver código</a><br>
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
                        <code>
                          &lt;div class="form-group has-error has-feedback"&gt;
                            &lt;label class="control-label" for="inputerror2"&gt;Input with error&lt;/label&gt;
                            &lt;input class="form-control" id="inputerror2" type="text"&gt;
                            &lt;span class="glyphicon glyphicon-remove form-control-feedback"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Text Area"></textarea>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#textarea">Ver código</a>
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
                        <code>
                          &lt;div class="form-group"&gt;
                            &lt;textarea class="form-control" rows="6" placeholder="Text Area"&gt;&lt;/textarea&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row margintop60">
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
                        <code>
                          &lt;div class="input-group"&gt;
                            &lt;span class="input-group-btn"&gt;
                              &lt;a href="#" class="btn btn-primary"&gt;Ver código&lt;/a&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="input-group margintop5">
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
                        <code>
                          &lt;div class="input-group"&gt;
                            &lt;input type="text" class="form-control"&gt;
                            &lt;span class="input-group-btn"&gt;
                              &lt;a href="#" class="btn btn-primary"&gt;Ver código&lt;/a&gt;
                            &lt;/span&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-group margintop5 pull-left" style="width: 80%;">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown" style="width: 20%;">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div>


              <div class="input-group margintop5 pull-left" style="width: 80%;">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-right" style="width: 20%;">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div>

              <div class="input-group pull-left" style="width: 80%;">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-2" style="width: 20%;">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div>
              

              <div class="input-group pull-left" style="width: 80%;">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-group-dropdown-3" style="width: 20%;">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row margintop60">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#radio-buttons">Ver código</a>
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
                        <code>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#radio-buttons-inline">Ver código</a>
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
                        <code>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#radio-buttons-color">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div> 
              
              <div class="input-group margintop30">
                <span class="input-group-addon">
                  <input type="radio">
                </span>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#radio-buttons-addon">Ver código</a>
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
                        <code>
                          &lt;div class="input-group margintop30"&gt;
                            &lt;span class="input-group-addon"&gt;
                              &lt;input type="radio"&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#checkbox">Ver código</a>
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
                        <code>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#checkbox-inline">Ver código</a>
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
                        <code>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#checkbox-colors">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div>
              
              <div class="input-group margintop30">
                <span class="input-group-addon">
                <input type="checkbox">
                </span>
                <input type="text" class="form-control">
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#checkbox-addon">Ver código</a>
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
                        <code>
                          &lt;div class="input-group margintop30"&gt;
                            &lt;span class="input-group-addon"&gt;
                              &lt;input type="checkbox"&gt;
                            &lt;/span&gt;
                            &lt;input type="text" class="form-control"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row margintop60">
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select1">Ver código</a>
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
                        <code>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select-multiple">Ver código</a>
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
                        <code>
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
                  </div>
                </div>
              </div> 
            </div>
          </div>

          <div class="row margintop60">
            <div class="col-xs-12">
              <p class="Roboto300 font14">Forms Sizing <span class="gray2">/ Forms</span></p>
              <div class="margintop30"></div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control input-lg pull-left" type="text" placeholder=".input-lg" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-lg" style="width: 20%;">Ver código</a>
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
                        <code>&lt;input class="form-control input-lg" type="text" placeholder=".input-lg"&gt;</code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div> 
              
              <div class="form-group">
                <input class="form-control pull-left" type="text" placeholder="input default" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-default" style="width: 20%;">Ver código</a>
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
                        <code>&lt;input class="form-control" type="text" placeholder="Input default"&gt;</code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <input class="form-control input-sm pull-left" type="text" placeholder=".input-sm" style="width: 80%;">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#input-sm" style="width: 20%;">Ver código</a>
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
                        <code>&lt;input class="form-control input-sm" type="text" placeholder=".input-sm"&gt;</code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <select class="form-control input-lg pull-left" style="width: 80%;">...</select>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select-lg" style="width: 20%;">Ver código</a>
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
                        <code>&lt;select class="form-control input-lg" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <select class="form-control pull-left" style="width: 80%;">...</select>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select-default" style="width: 20%;">Ver código</a>
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
                        <code>&lt;select class="form-control" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <select class="form-control input-sm pull-left" style="width: 80%;">...</select>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#select-sm" style="width: 20%;">Ver código</a>
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
                        <code>&lt;select class="form-control input-sm" placeholder="..."&gt;&lt;/select&gt;</code><br>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-sm-6">
              <form class="form-horizontal" role="form">
                <div class="form-group form-group-lg">
                  <label class="col-sm-4 control-label" for="formGroupInputLarge">Large label</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <input class="form-control pull-left" type="text" id="formGroupInputLarge" placeholder="Large label" style="width: 60%;">
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-lg" style="width: 30%;">Ver código</a>
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
                          <pre>
                            <code>
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
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label" for="formGroupInputLarge">Small label</label>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <input class="form-control pull-left" type="text" id="formGroupInputLarge" placeholder="Small label" style="width: 60%;">
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#label-sm" style="width: 30%;">Ver código</a>
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
                          <pre>
                            <code>
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
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <hr class="margintop80">

      <!--  
      ================================================== -->
      <div class="row">
        <div class="col-xs-12">       

          <div class="row margintop50">
            <div class="col-xs-12">
              <h4 id="buttons" class="">Buttons</h4>
            </div>
            <div class="col-sm-6">
              <p class="HelveticaBd font14 margintop40">Buttons <span class="HelveticaLt gray2">/ Buttons </span></p>
              <button type="button" class="btn btn-default">Default</button><code>&lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-primary">Primary</button><code>&lt;button type="button" class="btn btn-primary"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-info">Info</button><code>&lt;button type="button" class="btn btn-info"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-success">Success</button><code>&lt;button type="button" class="btn btn-success"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-warning">Warning</button><code>&lt;button type="button" class="btn btn-warning"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-danger">Danger</button><code>&lt;button type="button" class="btn btn-danger"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-inverse">Inverse</button><code>&lt;button type="button" class="btn btn-inverse"&gt;Default&lt;/button&gt;</code><br>
              <button type="button" class="btn btn-link">Link</button><code>&lt;button type="button" class="btn btn-link"&gt;Default&lt;/button&gt;</code><br>
              
              <p class="HelveticaBd font14 margintop40">Disabled Buttons <span class="HelveticaLt gray2">/ Buttons </span></p>
              <a href="#" class="btn btn-default disabled">Default</a><code>&lt;a href="#" class="btn btn-default disabled"&gt;Default&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-primary disabled">Primary</a><code>&lt;a href="#" class="btn btn-primary disabled"&gt;Primary&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-success disabled">Success</a><code>&lt;a href="#" class="btn btn-success disabled"&gt;Success&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-info disabled">Info</a><code>&lt;a href="#" class="btn btn-info disabled"&gt;Info&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-warning disabled">Warning</a><code>&lt;a href="#" class="btn btn-warning disabled">Warning&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-danger disabled">Danger</a><code>&lt;a href="#" class="btn btn-danger disabled"&gt;Default&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-inverse disabled">Inverse</a><code>&lt;a href="#" class="btn btn-inverse disabled"&gt;Default&lt;/a&gt;</code><br>
              <a href="#" class="btn btn-link disabled">Link</a><code>&lt;a href="#" class="btn btn-link disabled"&gt;Default&lt;/a&gt;</code>
              
              <p class="HelveticaBd font14 margintop40">Dropdowns <span class="HelveticaLt gray2">/ Buttons </span></p>
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
              
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-primary" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Primary</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-info" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Info</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-success" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Success</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>


                <div class="btn-group">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-warning" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Warning</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-danger" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Danger</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
              
                <div class="btn-group">
                  <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-inverse" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Inverse</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"&gt;Default &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;ul class="dropdown-menu" role="menu"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                              &lt;li class="divider"&gt;&lt;/li&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <p class="HelveticaBd font14 margintop40">Dropdown Toggle <span class="HelveticaLt gray2">/ Buttons </span></p>

                <div class="btn-group">
                  <button type="button" class="btn btn-default">Default</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                

                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Primary</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-primary" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Primary</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
                              &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-info">Info</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-info" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Info</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
                              &lt;button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-success">Success</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-success" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Success</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
                              &lt;button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-warning">Warning</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-warning" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Warning</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
                              &lt;button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-danger">Danger</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-danger" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Danger</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
                              &lt;button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="btn-group">
                  <button type="button" class="btn btn-inverse">Inverse</button>
                  <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropdown-toggle-inverse" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropdown-toggle-inverse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropdown Toggle Inverse</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-inverse"&gt;Inverse&lt;/button&gt;
                              &lt;button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                
                <div class="btn-group dropup">
                  <button type="button" class="btn btn-primary">Primary</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
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
                </div><!-- /btn-group -->
                <a href="#" data-toggle="modal" data-target="#dropup" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="dropup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Dropup</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group dropup"&gt;
                              &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
                              &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;
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
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                
                <p class="HelveticaBd font14 margintop40">Button Sizes <span class="HelveticaLt gray2">/ Forms </span></p>
                <p>
                  <button type="button" class="btn btn-primary btn-lg">Large button</button>
                  <a href="#" data-toggle="modal" data-target="#button-lg" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-lg"&gt;Large button&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-primary">Default button</button>
                  <a href="#" data-toggle="modal" data-target="#button-default" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button default</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary"&gt;Default button&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-primary btn-sm">Small button</button>
                  <a href="#" data-toggle="modal" data-target="#button-sm" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-sm"&gt;Small button&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                  <a href="#" data-toggle="modal" data-target="#button-xs" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-xs"&gt;Extra small button&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </p>

                <p>
                  <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" data-toggle="modal" data-target="#button-icon-lg" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-default btn-lg"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" data-toggle="modal" data-target="#button-icon" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" data-toggle="modal" data-target="#button-icon-sm" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-default btn-sm"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star"></span> Star</button>
                  <a href="#" data-toggle="modal" data-target="#button-icon-xs" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-icon-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button icon xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-default btn-xs"&gt;&lt;span class="glyphicon glyphicon-star"&gt;&lt;/span&gt; Star&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </p>

                <p class="HelveticaBd font14 margintop40">Button Circle <span class="HelveticaLt gray2">/ Buttons </span></p>
                <p>
                  <button type="button" class="btn btn-primary btn-lg btn-circle">?</button>
                  <a href="#" data-toggle="modal" data-target="#button-circle-lg" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-circle-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button circle lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-lg btn-circle"&gt;?&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-primary btn-circle">?</button>
                  <a href="#" data-toggle="modal" data-target="#button-circle-default" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-circle-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button circle default</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-circle"&gt;?&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div><br>

                  <button type="button" class="btn btn-primary btn-sm btn-circle">?</button>
                  <a href="#" data-toggle="modal" data-target="#button-circle-sm" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-circle-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button circle sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-sm btn-circle"&gt;?&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div><br>

                  <button type="button" class="btn btn-primary btn-xs btn-circle">?</button>
                  <a href="#" data-toggle="modal" data-target="#button-circle-xs" style="width: 30%;">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="button-circle-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button circle xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>&lt;button type="button" class="btn btn-primary btn-xs btn-circle"&gt;?&lt;/button&gt;</code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </p>
              </div>

              <div class="col-sm-6">
                <p class="HelveticaBd font14 margintop40">Block Level Buttons <span class="HelveticaLt gray2">/ Forms </span></p>
                <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
                <a href="#" data-toggle="modal" data-target="#button-block" style="width: 30%;">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="button-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button block</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>&lt;button type="button" class="btn btn-default btn-lg btn-block"&gt;Block level button&lt;/button&gt;</code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="HelveticaBd font14 margintop40">Button Groups <span class="HelveticaLt gray2">/ Forms </span></p>
                <div class="btn-group">
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-left"></span></button>
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center"></span></button>
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right"></span></button>
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-justify"></span></button>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#button-group"">Ver código</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="button-group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-left"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-center"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-right"&gt;&lt;/span&gt;&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;&lt;span class="glyphicon glyphicon-align-justify"&gt;&lt;/span&gt;&lt;/button&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix margintop20"></div>
                

                <div class="btn-group">
                  <button type="button" class="btn btn-default">Left</button>
                  <button type="button" class="btn btn-default">Middle</button>
                  <button type="button" class="btn btn-default">Right</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-2">Ver código</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="button-group-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group 2</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Left&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Middle&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Right&lt;/button&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix margintop20"></div>
                

                <div class="btn-group">
                  <button type="button" class="btn btn-default">1</button>
                  <button type="button" class="btn btn-default">2</button>
                  <button type="button" class="btn btn-default">3</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-3">Ver código</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="button-group-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group 3</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix margintop20"></div>

                <div class="btn-group">
                  <button type="button" class="btn btn-default">4</button>
                  <button type="button" class="btn btn-default">5</button>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                     </ul>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-dropdown">Ver código</button>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="button-group-dropdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group dropdown</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;4&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;5&lt;/button&gt;
                              &lt;div class="btn-group"&gt;
                                &lt;a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                  Dropdown
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;ul class="dropdown-menu"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                 &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix margintop20"></div>                

                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-default">Left</a>
                  <a href="#" class="btn btn-default">Middle</a>
                  <a href="#" class="btn btn-default">Right</a>
                </div>
                <a href="#" data-toggle="modal" data-target="#button-group-block">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="button-group-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group block</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group btn-group-justified"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Left&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Middle&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Right&lt;/button&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix margintop20"></div>
                
                
                <p class="HelveticaBd font14 margintop40">Button Groups Sizes<span class="HelveticaLt gray2">/ Forms </span></p>
                <p>
                  <div class="btn-group btn-group-lg">
                    <button type="button" class="btn btn-default">Left</button>
                    <button type="button" class="btn btn-default">Middle</button>
                    <button type="button" class="btn btn-default">Right</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-lg">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group lg</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="btn-group btn-group-lg"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>
                  

                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Left</button>
                    <button type="button" class="btn btn-default">Middle</button>
                    <button type="button" class="btn btn-default">Right</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-default">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group default</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="btn-group"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>

                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">Left</button>
                    <button type="button" class="btn btn-default">Middle</button>
                    <button type="button" class="btn btn-default">Right</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-sm">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group sm</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="btn-group btn-group-sm"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>

                  <div class="btn-group btn-group-xs">
                    <button type="button" class="btn btn-default">Left</button>
                    <button type="button" class="btn btn-default">Middle</button>
                    <button type="button" class="btn btn-default">Right</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-xs">Ver código</button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="button-group-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dixsiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Button group xs</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="btn-group btn-group-xs"&gt;
                                &lt;button type="button" class="btn btn-default"&gt;1&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;2&lt;/button&gt;
                                &lt;button type="button" class="btn btn-default"&gt;3&lt;/button&gt;
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margintop20"></div>
                </p>

                <p class="HelveticaBd font14 margintop40">Button Group Vertical<span class="HelveticaLt gray2">/ Forms </span></p>
                <div class="btn-group-vertical">
                  <button type="button" class="btn btn-default">Button</button>
                  <button type="button" class="btn btn-default">Button</button>
                  <div class="btn-group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-default">Button</button>
                  <button type="button" class="btn btn-default">Button</button>
                  <div class="btn-group">
                    <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button-group-vertical">Ver código</button>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="button-group-vertical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Button group vertical</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="btn-group-vertical"&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                              &lt;div class="btn-group"&gt;
                                &lt;button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                  Dropdown
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                              &lt;button type="button" class="btn btn-default"&gt;Button&lt;/button&gt;
                              &lt;div class="btn-group"&gt;
                                &lt;button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                  Dropdown
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                              &lt;div class="btn-group"&gt;
                                &lt;button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"&gt;
                                  Dropdown
                                  &lt;span class="caret"&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="margintop80">

        <!-- NAVS
        ================================================== -->
        <div class="row">
          <div class="col-xs-12">
             
            <h4 id="forms" class="margintop50">Navs</h4>     
            
            <div class="row">

              <div class="col-sm-7">
                <p class="Roboto300 font14 margintop30">Tabs <span class="gray2">/ Navs </span></p>

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
                          <code>
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
                    </div>
                  </div>
                </div>
                

                <ul class="nav nav-tabs nav-justified margintop30" role="tablist">
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
                          <code>
                            &lt;ul class="nav nav-tabs nav-justified margintop30" role="tablist"&gt;
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
                    </div>
                  </div>
                </div>
                                
                <p class="Roboto300 font14 margintop60">Pills <span class="gray2">/ Navs </span></p>
                <ul class="nav nav-pills margintop30">
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
                          <code>
                            &lt;ul class="nav nav-pills margintop30"&gt;
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
                    </div>
                  </div>
                </div>
                

                <ul class="nav nav-pills nav-justified margintop20">
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
                          <pre>
                          <code>
                            &lt;ul class="nav nav-pills nav-justified margintop20"&gt;
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
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-sm-offset-1">
                <p class="Roboto300 font14 margintop30">Vertical Pills <span class="gray2">/ Navs </span></p>
                <ul class="nav nav-pills nav-stacked margintop20">
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
                          <code>
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
                    </div>
                  </div>
                </div>
                

                <p class="Roboto300 font14 margintop40">Breadcrumb <span class="gray2">/ Navs </span></p>
                <hr>
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
                          <code>
                            &lt;ul class="breadcrumb margintop20"&gt;
                              &lt;li class="active"&gt;Home&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
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
                          <code>
                            &lt;ul class="breadcrumb margintop20"&gt;
                              &lt;li&gt;&lt;a href="#"&gt;Home&lt;/li&gt;
                              &lt;li class="active"&gt;Library&lt;/li&gt;
                            &lt;/ul&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="Roboto300 font14 margintop40">Pagination <span class="gray2">/ Navs </span></p>
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
                            <code>
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
                      </div>
                    </div>
                  </div>
                  

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
                            <code>
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
                      </div>
                    </div>
                  </div>


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
                            <code>
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
                      </div>
                    </div>
                  </div>
                </div>

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
                            <code>
                              &lt;ul class="pager"&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            </code>
                          </pre>
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
                            <code>
                              &lt;ul class="pager"&gt;
                                &lt;li class="previous disabled"&gt;&lt;a href="#"&gt;&larr; Older&lt;/a&gt;&lt;/li&gt;
                                &lt;li class="next"&gt;&lt;a href="#"&gt;Newer &rarr;&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="margintop80">

        <!-- NAVBAR
        ================================================== -->
        <div class="row margintop50">
          <div class="col-lg-12">
            <h4 id="navbar">Navbar</h4>

              <nav class="navbar navbar-default margintop30">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                      <li class="disabled"><a href="#">Disabled Link</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                      <li>
                        <form class="navbar-form" role="search">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                              <button class="btn btn-primary" type="button"><i class="pe-7s-search"></i></button>
                            </span>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <a href="" class="btn btn-primary marginbottom50" data-toggle="modal" data-target="#navbar-1">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="navbar-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Navbar</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code>
                          &lt;nav class="navbar navbar-default margintop30"&gt;
                            &lt;div class="container-fluid"&gt;
                              &lt;div class="navbar-header"&gt;
                                &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
                                  &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                              &lt;/div&gt;
                              &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"&gt;
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
                                  &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled Link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;ul class="nav navbar-nav navbar-right"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;
                                    &lt;form class="navbar-form" role="search"&gt;
                                      &lt;div class="input-group"&gt;
                                        &lt;input type="text" class="form-control" placeholder="Search"&gt;
                                        &lt;span class="input-group-btn"&gt;
                                          &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="pe-7s-search"&gt;&lt;/i&gt;&lt;/button&gt;
                                        &lt;/span&gt;
                                      &lt;/div&gt;
                                    &lt;/form&gt;
                                  &lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/nav&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div> 
              

              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
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
                      <li class="disabled"><a href="#">Disabled Link</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                      <li>
                        <form class="navbar-form" role="search">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                              <button class="btn btn-primary" type="button"><i class="pe-7s-search"></i></button>
                            </span>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <a href="" class="btn btn-primary marginbottom50" data-toggle="modal" data-target="#navbar-inverse">Ver código</a>
              <!-- Modal -->
              <div class="modal fade" id="navbar-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Navbar</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code>
                          &lt;nav class="navbar navbar-inverse margintop30"&gt;
                            &lt;div class="container-fluid"&gt;
                              &lt;div class="navbar-header"&gt;
                                &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
                                  &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                  &lt;span class="icon-bar"&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
                              &lt;/div&gt;
                              &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"&gt;
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
                                  &lt;li class="disabled"&gt;&lt;a href="#"&gt;Disabled Link&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;ul class="nav navbar-nav navbar-right"&gt;
                                  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
                                  &lt;li&gt;
                                    &lt;form class="navbar-form" role="search"&gt;
                                      &lt;div class="input-group"&gt;
                                        &lt;input type="text" class="form-control" placeholder="Search"&gt;
                                        &lt;span class="input-group-btn"&gt;
                                          &lt;button class="btn btn-primary" type="button"&gt;&lt;i class="pe-7s-search"&gt;&lt;/i&gt;&lt;/button&gt;
                                        &lt;/span&gt;
                                      &lt;/div&gt;
                                    &lt;/form&gt;
                                  &lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/nav&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <hr class="margintop80">

        <!-- INDICATORS
        ================================================== -->
        <div class="row">
          <div class="col-xs-12">
            
            <h4 id="forms" class="margintop50">Indicators</h4>
            <p class="Roboto300 font14 margintop40" id="alerts">Alerts <span class="gray2">/ Indicators </span></p>
            
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
                          <code>
                            &lt;div class="alert alert-default" role="alert"&gt;
                              &lt;strong&gt;Ejem!&lt;/strong&gt; This is the default alert message. &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
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
                          <code>
                            &lt;div class="alert alert-dismissible alert-warning"&gt;
                              &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                              &lt;h4&gt;Warning!&lt;/h4&gt;
                              &lt;p&gt;Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;.&lt;/p&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>    
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                  </div>
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
                            <code>
                              &lt;div class="alert alert-dismissible alert-danger"&gt;
                                &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                                &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                  </div>
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-success">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="alert-dismissible-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible Success</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="alert alert-dismissible alert-success"&gt;
                                &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                                &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                  </div>
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#alert-dismissible-info">Ver código</a>
                  <!-- Modal -->
                  <div class="modal fade" id="alert-dismissible-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="gridSystemModalLabel">Alert Dismissible Info</h4>
                        </div>
                        <div class="modal-body">
                          <pre>
                            <code>
                              &lt;div class="alert alert-dismissible alert-info"&gt;
                                &lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
                                &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
                              &lt;/div&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row margintop50">
              <div class="col-lg-6">
                <p class="Roboto300 font14 margintop40" id="labels">Labels <span class="gray2">/ Indicators </span></p>
                <div class="bs-component margintop20">
                  <span class="label label-default">Default</span><code>&lt;span class="label label-default"&gt;Default&lt;/span&gt;</code><br>
                  <span class="label label-primary">Primary</span><code>&lt;span class="label label-primary"&gt;Primary&lt;/span&gt;</code><br>
                  <span class="label label-success">Success</span><code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code><br>
                  <span class="label label-warning">Warning</span><code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code><br>
                  <span class="label label-danger">Danger</span><code>&lt;span class="label label-danger"&gt;Danger&lt;/span&gt;</code><br>
                  <span class="label label-info">Info</span><code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code><br>
                </div>
              </div>
              <div class="col-lg-6">
                <p class="Roboto300 font14 margintop40" id="badges">Badges <span class="gray2">/ Indicators </span></p>
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
                            <code>
                              &lt;ul class="nav nav-pills"&gt;
                                &lt;li class="active"&gt;&lt;a href="#"&gt;Home &lt;span class="badge"&gt;42&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Profile &lt;span class="badge"&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href="#"&gt;Messages &lt;span class="badge"&gt;3&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                            </code>
                          </pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="margintop80">
      
        <!-- Progress bars
        ================================================== -->
        <div class="bs-docs-section">

          <div class="row margintop50">
            <div class="col-lg-12">
              <h4 id="progress-bars">Progress bars</h4>
              <p class="Roboto300 font14 margintop40">Basic <span class="gray2">/ Progress bars </span></p>
              <div class="bs-component">
                <div class="progress">
                  <div class="progress-bar" style="width: 60%;"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-bar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar" style="width: 60%;"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p class="Roboto300 font14 margintop40">Contextual alternatives <span class="gray2">/ Progress bars </span></p>
              <div class="bs-component">
                <div class="progress">
                  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-info">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-bar-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar Info</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar progress-bar-info" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="progress margintop20">
                  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-success">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-bar-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar success</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar progress-bar-success" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="progress margintop20">
                  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-warning">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-bar-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar warning</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar progress-bar-warning" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="progress margintop20">
                  <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-bar-danger">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-bar-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Bar danger</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar progress-bar-danger" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p class="Roboto300 font14 margintop40">Striped <span class="gray2">/ Progress bars </span></p>
              <div class="bs-component">
                <div class="progress progress-striped">
                  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-striped">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-striped" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Striped Info</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress progress-striped"&gt;
                              &lt;div class="progress-bar progress-bar-info" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                

                <div class="progress progress-striped margintop20">
                  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-striped-success">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-striped-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Striped Success</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress progress-striped"&gt;
                              &lt;div class="progress-bar progress-bar-success" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="progress progress-striped margintop20">
                  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-striped-warning">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-striped-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Striped warning</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress progress-striped"&gt;
                              &lt;div class="progress-bar progress-bar-warning" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="progress progress-striped margintop20">
                  <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-striped-danger">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-striped-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Striped danger</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress progress-striped"&gt;
                              &lt;div class="progress-bar progress-bar-danger" style="width: 20%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p class="Roboto300 font14 margintop40">Animated <span class="gray2">/ Progress bars </span></p>
              <div class="bs-component">
                <div class="progress progress-striped active">
                  <div class="progress-bar" style="width: 45%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-animated">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-animated" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Animated</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress progress-striped active"&gt;
                              &lt;div class="progress-bar" style="width: 45%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p class="Roboto300 font14 margintop40">Stacked <span class="gray2">/ Progress bars </span></p>
              <div class="bs-component">
                <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                  <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                </div>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#progress-stacked">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="progress-stacked" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Progress Stacked</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="progress"&gt;
                              &lt;div class="progress-bar progress-bar-success" style="width: 35%"&gt;&lt;/div&gt;
                              &lt;div class="progress-bar progress-bar-warning" style="width: 20%"&gt;&lt;/div&gt;
                              &lt;div class="progress-bar progress-bar-danger" style="width: 10%"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <hr class="margintop80">

        <!-- Containers
        ================================================== -->
        <div class="bs-docs-section">

          <div class="row margintop50">
            <div class="col-lg-12">
              <h4 id="containers">Containers</h4>
              <p class="Roboto300 font14 margintop40" id="jumbotron">Jumbotron <span class="gray2">/ Containers</span></p>
              <div class="bs-component">
                <div class="jumbotron margintop20">
                  <h1>Jumbotron</h1>
                  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                  <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jumbotron-1">Ver código</a></p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="jumbotron-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Jumbotron</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="jumbotron margintop20"&gt;
                              &lt;h1&gt;Jumbotron&lt;/h1&gt;
                              &lt;p&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
                              &lt;p&gt;&lt;a class="btn btn-primary btn-lg"&gt;Learn more&lt;/a&gt;&lt;/p&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop40" id="list-group">List Groups <span class="gray2">/ Containers</span></p>
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
                          <code>
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
                          <code>
                            &lt;div class="list-group"&gt;
                              &lt;a href="#" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;
                              &lt;a href="#" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
                              &lt;a href="#" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
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
                          <code>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop40" id="panels">Panels <span class="gray2">/ Containers</span></p>
            </div>
          </div>
          <div class="row margintop20">
            <div class="col-lg-4">
              <div class="bs-component">
                <div class="panel panel-default">
                  <div class="panel-body">
                    Basic panel
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#basic-panel">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="basic-panel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Basic Panel</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-default"&gt;
                              &lt;div class="panel-body"&gt;
                                Basic panel
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default margintop20">
                  <div class="panel-heading">Panel heading</div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-default">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel default with heading</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-default"&gt;
                              &lt;div class="panel-heading"&gt;Panel heading&lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                

                <div class="panel panel-default margintop20">
                  <div class="panel-body">
                    Panel content
                  </div>
                  <div class="panel-footer">Panel footer</div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-default-footer">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-default-footer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel default with footer</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-default"&gt; 
                              &lt;div class="panel-body"&gt;  
                                Panel content
                              &lt;/div&gt;  
                              &lt;div class="panel-footer"&gt;  Panel footer&lt;/div&gt;  
                            &lt;/div&gt;  
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel primary</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-primary">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel primary</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-primary"&gt;
                              &lt;div class="panel-heading"&gt;
                                &lt;h3 class="panel-title"&gt;Panel primary&lt;/h3&gt;
                              &lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                

                <div class="panel panel-success margintop20">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel success</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-success">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel success</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-success"&gt;
                              &lt;div class="panel-heading"&gt;
                                &lt;h3 class="panel-title"&gt;Panel Success&lt;/h3&gt;
                              &lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-warning margintop20">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel warning</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-warning">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel warning</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-warning"&gt;
                              &lt;div class="panel-heading"&gt;
                                &lt;h3 class="panel-title"&gt;Panel warning&lt;/h3&gt;
                              &lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bs-component">
                <div class="panel panel-danger margintop20">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel danger</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-danger">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel danger</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-danger"&gt;
                              &lt;div class="panel-heading"&gt;
                                &lt;h3 class="panel-title"&gt;Panel danger&lt;/h3&gt;
                              &lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-info margintop20">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel info</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#panel-info">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="panel-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Panel info</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="panel panel-info"&gt;
                              &lt;div class="panel-heading"&gt;
                                &lt;h3 class="panel-title"&gt;Panel info&lt;/h3&gt;
                              &lt;/div&gt;
                              &lt;div class="panel-body"&gt;
                                Panel content
                              &lt;/div&gt;
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop40" id="wells">Wells <span class="gray2">/ Containers</span></p>
            </div>
          </div>
          <div class="row margintop20">
            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well">Look, I'm in a well!</div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="well"&gt;
                              Look, I'm in a well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well well-sm">
                  Look, I'm in a small well!
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well-sm">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well sm</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="well well-sm"&gt;
                              Look, I'm in a small well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bs-component">
                <div class="well well-lg">
                  Look, I'm in a large well!
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#well-lg">Ver código</a>
                <!-- Modal -->
                <div class="modal fade" id="well-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Well lg</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                            &lt;div class="well well-lg"&gt;
                              Look, I'm in a large well!
                            &lt;/div&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <p class="Roboto300 font14 margintop40" id="thumbnails">Thumbnails <span class="gray2">/ Containers</span></p>
          </div>
        </div>
        <div class="row margintop20">
          <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTMwM2EgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlMzAzYSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#thumbnail">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="thumbnail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Thumbnail</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                        &lt;a href="#" class="thumbnail"&gt;
                          &lt;img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTMwM2EgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlMzAzYSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"&gt;
                        &lt;/a&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTMwM2EgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlMzAzYSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#thumbnail">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="thumbnail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Thumbnail</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                        &lt;a href="#" class="thumbnail"&gt;
                          &lt;img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTMwM2EgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlMzAzYSI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSI5Ny4yIj4zMTl4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"&gt;
                        &lt;/a&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMxOSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTc1ZTMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlNzVlMyI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSIxMDcuMiI+MzE5eDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p>
                  <a href="#" class="btn btn-primary" role="button">Button</a>
                  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
              </div>
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#thumbnail-text">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="thumbnail-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Thumbnail text</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                         &lt;div class="thumbnail"&gt;
                          &lt;img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMxOSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTc1ZTMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlNzVlMyI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSIxMDcuMiI+MzE5eDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"&gt;
                          &lt;div class="caption"&gt;
                            &lt;h3&gt;Thumbnail label&lt;/h3&gt;
                            &lt;p&gt;Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.&lt;/p&gt;
                            &lt;p&gt;
                              &lt;a href="#" class="btn btn-primary" role="button"&gt;Button&lt;/a&gt;
                              &lt;a href="#" class="btn btn-default" role="button"&gt;Button&lt;/a&gt;
                            &lt;/p&gt;
                          &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMxOSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTc1ZTMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlNzVlMyI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSIxMDcuMiI+MzE5eDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p>
                  <a href="#" class="btn btn-primary" role="button">Button</a>
                  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
              </div>
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#thumbnail-text">Ver código</a>
            <!-- Modal -->
            <div class="modal fade" id="thumbnail-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Thumbnail text</h4>
                  </div>
                  <div class="modal-body">
                    <pre>
                      <code>
                         &lt;div class="thumbnail"&gt;
                          &lt;img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE5IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDMxOSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxOWU4ZTc1ZTMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxNnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTE5ZThlNzVlMyI+PHJlY3Qgd2lkdGg9IjMxOSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMTcuOTg0Mzc1IiB5PSIxMDcuMiI+MzE5eDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"&gt;
                          &lt;div class="caption"&gt;
                            &lt;h3&gt;Thumbnail label&lt;/h3&gt;
                            &lt;p&gt;Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.&lt;/p&gt;
                            &lt;p&gt;
                              &lt;a href="#" class="btn btn-primary" role="button"&gt;Button&lt;/a&gt;
                              &lt;a href="#" class="btn btn-default" role="button"&gt;Button&lt;/a&gt;
                            &lt;/p&gt;
                          &lt;/div&gt;
                      </code>
                    </pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="margintop80">

        <!-- Dialogs
        ================================================== -->
        <div class="bs-docs-section">

          <div class="row margintop50">
            <div class="col-lg-12">
              <h4 id="dialogs">Dialogs</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
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
                          <code>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <p class="Roboto300 font14 margintop40">Popovers <span class="gray2">/ Dialogs</span></p>
              <div class="bs-component">
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>
                <a href="#"  data-toggle="modal" data-target="#popover-left">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="popover-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Popover left</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Left&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>
                <a href="#"  data-toggle="modal" data-target="#popover-top">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="popover-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Popover top</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Top&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>
                <a href="#"  data-toggle="modal" data-target="#popover-bottom">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="popover-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Popover bottom</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Bottom&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
                <a href="#"  data-toggle="modal" data-target="#popover-right">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="popover-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Popover right</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Dismissible popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;Right&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <p class="Roboto300 font14 margintop40">Tooltips <span class="gray2">/ Dialogs</span></p>
              <div class="bs-component">
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
                <a href="#"  data-toggle="modal" data-target="#tooltip-left">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="tooltip-left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Tooltip left</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"&gt;Left&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>
                <a href="#"  data-toggle="modal" data-target="#tooltip-top">Ver código</a><br>
                <!-- Modal -->
                <div class="modal fade" id="tooltip-top" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Tooltip top</h4>
                      </div>
                      <div class="modal-body">
                        <pre>
                          <code>
                              &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"&gt;Top&lt;/button&gt;
                          </code>
                        </pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
              <a href="#"  data-toggle="modal" data-target="#tooltip-bottom">Ver código</a><br>
              <!-- Modal -->
              <div class="modal fade" id="tooltip-bottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Tooltip bottom</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code>
                            &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"&gt;Bottom&lt;/button&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
              <a href="#"  data-toggle="modal" data-target="#tooltip-right">Ver código</a><br>
              <!-- Modal -->
              <div class="modal fade" id="tooltip-right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Tooltip right</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code>
                            &lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"&gt;Right&lt;/button&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="bs-docs-section">
          <div class="row">
            <div class="col-lg-12">
              <p class="Roboto300 font14 margintop60" id="carousel">Carousel <span class="gray2">/ Dialogs</span></p>
            </div>
          </div>

          <div class="row margintop20">
            <div class="col-lg-12">
              
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                <ol class="carousel-indicators"> 
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li> 
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li> 
                  <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li> 
                </ol> 
                <div class="carousel-inner" role="listbox"> 
                  <div class="item"> 
                    <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNzc3OiM1NTUvdGV4dDpGaXJzdCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1MWEwNjU3MGY5IHRleHQgeyBmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTUxYTA2NTcwZjkiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMzA4LjI5Njg3NSIgeT0iMjcwLjEiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true"> 
                  </div> 
                  <div class="item"> 
                    <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNjY2OiM0NDQvdGV4dDpTZWNvbmQgc2xpZGUKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTFhMDY1NThmYiB0ZXh0IHsgZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MWEwNjU1OGZiIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjI2NC45NTMxMjUiIHk9IjI3MC4xIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true"> 
                  </div> 
                  <div class="item active"> 
                    <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNTU1OiMzMzMvdGV4dDpUaGlyZCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1MWEwNjUyMjVlIHRleHQgeyBmaWxsOiMzMzM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTUxYTA2NTIyNWUiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNTU1Ii8+PGc+PHRleHQgeD0iMjk4LjMyMDMxMjUiIHk9IjI3MC4xIj5UaGlyZCBzbGlkZTwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> 
                  </div> 
                </div> 
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> 
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
              </div>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#carousel-1">Ver código</a><br>
              <!-- Modal -->
              <div class="modal fade" id="carousel-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="gridSystemModalLabel">Carousel</h4>
                    </div>
                    <div class="modal-body">
                      <pre>
                        <code>
                          &lt;div id="carousel-example-generic" class="carousel slide" data-ride="carousel"&gt; 
                            &lt;ol class="carousel-indicators"&gt; 
                              &lt;li data-target="#carousel-example-generic" data-slide-to="0" class=""&gt;&lt;/li&gt; 
                              &lt;li data-target="#carousel-example-generic" data-slide-to="1" class=""&gt;&lt;/li&gt; 
                              &lt;li data-target="#carousel-example-generic" data-slide-to="2" class="active"&gt;&lt;/li&gt; 
                            &lt;/ol&gt; 
                            &lt;div class="carousel-inner" role="listbox"&gt; 
                              &lt;div class="item"&gt; 
                                &lt;img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNzc3OiM1NTUvdGV4dDpGaXJzdCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1MWEwNjU3MGY5IHRleHQgeyBmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTUxYTA2NTcwZjkiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMzA4LjI5Njg3NSIgeT0iMjcwLjEiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true"&gt; 
                              &lt;/div&gt; 
                              &lt;div class="item"&gt; 
                                &lt;img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNjY2OiM0NDQvdGV4dDpTZWNvbmQgc2xpZGUKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTFhMDY1NThmYiB0ZXh0IHsgZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MWEwNjU1OGZiIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjI2NC45NTMxMjUiIHk9IjI3MC4xIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true"&gt; 
                              &lt;/div&gt; 
                              &lt;div class="item active"&gt; 
                                &lt;img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNTU1OiMzMzMvdGV4dDpUaGlyZCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1MWEwNjUyMjVlIHRleHQgeyBmaWxsOiMzMzM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTUxYTA2NTIyNWUiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNTU1Ii8+PGc+PHRleHQgeD0iMjk4LjMyMDMxMjUiIHk9IjI3MC4xIj5UaGlyZCBzbGlkZTwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"&gt; 
                              &lt;/div&gt; 
                            &lt;/div&gt; 
                            &lt;a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"&gt; &lt;span class="glyphicon glyphicon-chevron-left" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Previous&lt;/span&gt;&lt;/a&gt; 
                            &lt;a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"&gt; &lt;span class="glyphicon glyphicon-chevron-right" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Next&lt;/span&gt; &lt;/a&gt; 
                          &lt;/div&gt;
                        </code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <hr class="margintop80">

        <h4 id="media-objects" class="margintop50">Media Objects</h4>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
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
            </div>
          </div>
        </div>

        <div class="media margintop30">
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolore ipsa dolorem sint laborum quam quia beatae, placeat! Provident nulla atque consequatur ullam inventore dolore sed harum excepturi. Voluptas, aliquam.
          </div>
          <div class="media-right">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media margintop30"&gt;
                      &lt;div class="media-body"&gt;
                        &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, dolore ipsa dolorem sint laborum quam quia beatae, placeat! Provident nulla atque consequatur ullam inventore dolore sed harum excepturi. Voluptas, aliquam.
                      &lt;/div&gt;
                      &lt;div class="media-right"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
          </div>
          <div class="media-right">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                      &lt;div class="media-body"&gt;
                        &lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia dolores exercitationem vitae amet odit quis perferendis in. Maiores quam non laudantium praesentium quod vel, beatae delectus iste voluptate, qui quia.
                      &lt;/div&gt;
                      &lt;div class="media-right"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </div>


        <div class="media">
          <div class="media-left media-top">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left media-top"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
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
            </div>
          </div>
        </div>

        <div class="media">
          <div class="media-left media-middle">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left media-middle"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
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
            </div>
          </div>
        </div>

        <div class="media">
          <div class="media-left media-bottom">
            <a href="#">
              <img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left media-bottom"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
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
            </div>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="...">
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
                  <code>
                    &lt;div class="media"&gt;
                      &lt;div class="media-left"&gt;
                        &lt;a href="#"&gt;
                          &lt;img class="media-object circle" src="http://image.made-in-china.com/2f0j00RvKQwVtGEdcy/Gray-High-Gloss-Powder-Coating.jpg" alt="..."&gt;
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
            </div>
          </div>
        </div>

        
        <div class="row margintop100">
          <div class="col-xs-12">
            <h4>Plain Elements / No Bootstrap</h4>
            <form class="margintop40">
              <input type="text" value="This is an INPUT type TEXT in a FORM"/>
              <br><br>
              <select>
                <option>This is an OPTION in a SELECT</option>
                <option>This is an OPTION in a SELECT</option>
                <optgroup>
                  <option>This is an OPTION in a OPTGROUP in a SELECT</option>
                  <option>This is an OPTION in a OPTGROUP in a SELECT</option>
                </optgroup>
                <option>This is an OPTION in a SELECT</option>
              </select>
              <br><br>
              <textarea name="ta1">This is text in a TEXTAREA in a FORM</textarea>
              <br><br>
              <fieldset>
                <textarea name="ta2">This is text in a TEXTAREA in a FIELDSET in a FORM</textarea>
              </fieldset>
              <br>
              <button>This is a BUTTON</button>
            </form>

            <br>
            <p>This paragraph contains a bunch of phrase elements. Up first in an <a href="test">[A]nchor</a>, followed by an <abbr title="test">ABBR with a title value</abbr>, followed by an <acronym title="test">ACRONYM with a title value</acronym>, followed by a <cite>CITE</cite> element, followed by a <code>CODE</code> element, followed by a <del>DEL</del> element, followed by a <em>EM</em> element, followed by a <ins>INS</ins> element, followed by a <kbd>KBD</kbd> element, followed by a <q>Q</q> element, followed by a <samp>SAMP</samp> element, followed by a <span>SPAN</span> element, followed by a <strong>STRONG</strong> element, followed by a <tt>TT</tt> element, followed by a <var>VAR</var> element, all within a containing P.</p>

            <blockquote>This is a BLOCKQUOTE element.</blockquote>

            <table>
              <caption>This is a CAPTION in a TABLE</caption>
              <thead>
                <tr>
                  <th>This is a TH in a TR in a THEAD in a TABLE</th>
                  <td>This is a TD in a TR in a THEAD in a TABLE</td>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>This is a TH in a TR in a TFOOT in a TABLE</th>
                  <td>This is a TD in a TR in a TFOOT in a TABLE</td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <th>This is a TH in a TR in a TBODY in a TABLE</th>
                  <td>This is a TD in a TR in a TBODY in a TABLE</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

  
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
    </script>
  </body>
</html>