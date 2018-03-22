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

        </div>
      </div>
    </div>  

  
    <!-- JS -->
    <?php include("../partials/_javascript.php"); ?>
  </body>
</html>