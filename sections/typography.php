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

          <!-- TYPOGRAPHY
          ================================================== -->
          <h4 class="margintop50">Typography</h4>
          <ol>
            <li>Font Family</li>
            <li>Headings</li>
            <li>Font Size</li>
            <li>
              Inline Text Elements
              <ul>
                <li>Paragraph</li>
                <li>Text left</li>
                <li>Text center</li>
                <li>Text right</li>
                <li>Text justified</li>
                <li>Subtitle</li>
              </ul>
            </li>
            <li>Blockquote</li>
            <li>Styled text</li>
            <li>Address</li>

          </ol>

          <hr class="margintop40">
          
          <!-- FONT FAMILY -->
          <p class="lead">Typefaces, Headings and Font-Size Classes</p>
          <p class="Roboto300 font14 margintop40">Roboto Typeface - by Christian Robertson - Apache License, version 2.0 - <a href="https://www.google.com/fonts#UsePlace:use/Collection:Roboto">Google Fonts</a></p>
          <h2 class="Roboto100">Roboto Thin 100 <code class="font12">class="Roboto100"</code></h2>
          <h2 class="Roboto300">Roboto Light 300 <code class="font12">class="Roboto300"</code></h2>
          <h2 class="Roboto400">Roboto Normal 400 <code class="font12">class="Roboto400"</code></h2>
          <h2 class="Roboto500">Roboto Medium 500 <code class="font12">class="Roboto500"</code></h2>
          <h2 class="Roboto700">Roboto Bold 700 <code class="font12">class="Roboto700"</code></h2>

          <hr class="margintop40">
          
          <!-- HEADINGS -->
          <p class="Roboto300 font14 margintop40">Headings</p>
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
          
          <hr class="margintop40">
          
          <!-- FONT SIZE CLASSES -->
          <p class="Roboto300 margintop40">Font-Size Classes</p>
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
          
          <hr class="margintop40">
          
          <!-- INLINE TEXT ELEMENTS -->
          <p class="Roboto300 font14 margintop40">Inline Text Elements <span class="gray2">/ Typography </span></p>
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
                    <code id="lead-a">
                      &lt;p class="lead"&gt;&lt;span class="GothamMd orange"&gt;Lead&lt;/span&gt; Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#lead-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          <hr>
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
                    <code id="paragraph-a">
                      &lt;p&gt;
                        &lt;strong&gt;Paragraphs&lt;/strong&gt; Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
                        Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                      &lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#paragraph-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>          
          <hr>
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
                    <code id="text-left-a">
                      &lt;p class="text-left"&gt;
                        &lt;strong&gt;Left aligned text.&lt;/strong&gt; Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-left-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>  
          <hr>
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
                    <code id="text-center-a">
                      &lt;p class="text-center"&gt;
                        &lt;strong&gt;Left aligned text.&lt;/strong&gt; Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-center-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          <hr>

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
                    <code id="text-right-a">
                      &lt;p class="text-right"&gt;
                        &lt;strong&gt;Right aligned text.&lt;/strong&gt; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-right-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          <hr>

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
                    <code id="text-justify-a">
                      &lt;p class="text-justify"&gt;
                        &lt;strong&gt;Justified text.&lt;/strong&gt; Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-justify-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr>
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
                    <code id="subtitle-a">
                      &lt;p class="subtitle"&gt;
                        Subtitle example&lt;/p&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#subtitle-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">

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
                    <code id="blockquote-a">
                      &lt;blockquote&gt;
                        &lt;p&gt;&lt;span class="Roboto500"&gt;Blockquote&lt;/span&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.&lt;/p&gt;
                        &lt;footer&gt;Someone famouse in &lt;cite title="Source Title"&gt;&lt;/cite&gt;&lt;/footer&gt;
                      &lt;/blockquote&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#blockquote-a">Copiar código</button>
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
                    <code id="blockquote-reverse-a">
                      &lt;blockquote class="blockquote-reverse"&gt;
                        &lt;p&gt;&lt;span class="Roboto500"&gt;"Blockquote Reverse&lt;/span&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat."&lt;/p&gt;
                        &lt;footer&gt;Someone famouse in &lt;cite title="Source Title"&gt;&lt;/cite&gt;&lt;/footer&gt;
                      &lt;/blockquote&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#blockquote-reverse-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          
          <hr class="margintop40">          
          
          <!-- STYLED TEXT -->
          <p class="HelveticaBd font14">Styled Text</p>
          <p>
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
                      <code id="text-muted-a">&lt;span class="text-muted"&gt;This line of text is styled with a "text-muted" class&lt;/span&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-muted-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>  
          <p>  
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
                      <code id="text-primary-a">&lt;span class="text-primary"&gt;This line of text is styled with a "text-primary" class&lt;/span&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-primary-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>
          
          <p>
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
                      <code id="text-warning-a">&lt;span class="text-warning"&gt;This line of text is styled with a "text-warning" class&lt;/span&gt;</code> 
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-warning-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>           
            
          <p>
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
                      <code id="text-danger-a">&lt;span class="text-danger"&gt;This line of text is styled with a "text-danger" class&lt;/span&gt;</code> 
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-danger-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p> 
          
          <p>
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
                      <code id="text-success-a">&lt;span class="text-success"&gt;This line of text is styled with a "text-success" class&lt;/span&gt;</code> 
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-success-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p> 
          
          <p>
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
                      <code id="text-info-a">&lt;span class="text-info"&gt;This line of text is styled with a "text-info" class&lt;/span&gt;</code> 
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-info-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p> 
          
          <p>
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
                      <code id="text-mark-a">You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.</code><br>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-mark-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>
          
          <p>
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
                      <code id="text-deleted-a">&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-deleted-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-ins-a">&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-ins-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-underline-a">&lt;u&gt;This line of text will render as underlined&lt;/u&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-underline-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-small-a">&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-small-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-bold-a">&lt;strong&gt;This line is a rendered as bold text&lt;/strong&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-bold-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-italic-a">&lt;em&gt;This line is a rendered as italicized text&lt;/em&gt;</code><br>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-italic-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-lowercase-a">&lt;span class="text-lowercase"&gt;This line is a Lowercased text.&lt;/span&gt;</code><br>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-lowercase-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-uppercase-a">&lt;span class="text-uppercase"&gt;This line is a uppercased text.&lt;/span&gt;</code><br>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-uppercase-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <p>
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
                      <code id="text-capitalize-a">&lt;span class="text-capitalize"&gt;This line is a Capitalized text.&lt;/span&gt;</code>
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary btn-copy" data-clipboard-target="#text-capitalize-a">Copiar código</button>
                  </div>
                </div>
              </div>
            </div>
          </p>

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
                    <code id="text-abbr-a">&lt;span&gt;An abbreviation of the word attribute is &lt;/span&gt;&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;</code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-abbr-a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="margintop40">
          
          <!-- ADDRESS -->
          <p class="HelveticaBd font14">Address</p>
          <address class="margintop20">
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
                    <code id="text-address-a">
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
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#text-address-a">Copiar código</button>
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