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

          <!-- CAROUSEL
          ================================================== -->
          <p class="HelveticaBd font14">Default Carousel</p>

          <!-- Default Carousel -->
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
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#carousel-1">Ver código</a><br>
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
                    <code id="carousel-1">
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
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#carousel-1">Copiar código</button>
                </div>
              </div>
            </div>
          </div>
        
          <hr class="margintop40">


          <!-- Fade Carousel -->
          <p class="HelveticaBd font14">Carousel Fade</p>
          <div id="carousel-example-generic-2" class="carousel slide carousel-fade" data-ride="carousel"> 
            <ol class="carousel-indicators"> 
              <li data-target="#carousel-example-generic-2" data-slide-to="0" class=""></li> 
              <li data-target="#carousel-example-generic-2" data-slide-to="1" class=""></li> 
              <li data-target="#carousel-example-generic-2" data-slide-to="2" class="active"></li> 
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
            <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> 
            <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#carousel-2">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="carousel-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Carousel Fade</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="carousel-2a">
                      &lt;div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel"&gt; 
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
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#carousel-2a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>


          <hr class="margintop40">


          <!-- Carousel with Background -->
          <p class="HelveticaBd font14">Carousel Background</p>
          <div id="carousel-example-generic-3" class="carousel slide carousel-background" data-ride="carousel"> 
            <ol class="carousel-indicators"> 
              <li data-target="#carousel-example-generic-3" data-slide-to="0" class=""></li> 
              <li data-target="#carousel-example-generic-3" data-slide-to="1" class=""></li> 
              <li data-target="#carousel-example-generic-3" data-slide-to="2" class="active"></li> 
            </ol> 
            <div class="carousel-inner" role="listbox"> 
              <div class="item">
                <div class="slide-1">
                  <div class="slide-text">
                    <h1>We are creative</h1>        
                    <h3>Get start your next awesome project</h3>
                    <a href="#" class="btn btn-lg btn-primary margintop10">Ver más</a>
                  </div>
                </div>  
              </div> 
              <div class="item"> 
                <div class="slide-2">
                  <div class="slide-text">
                    <h1>We are smart</h1>        
                    <h3>Get start your next awesome project</h3>
                  </div>
                </div> 
              </div> 
              <div class="item active"> 
                <div class="slide-3">
                  <div class="slide-text">
                    <h1>We are amazing</h1>        
                    <h3>Get start your next awesome project</h3>
                  </div>
                </div> 
              </div> 
            </div> 
            <a class="left carousel-control" href="#carousel-example-generic-3" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> 
            <a class="right carousel-control" href="#carousel-example-generic-3" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#carousel-3">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="carousel-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Carousel Background</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="carousel-3a">
                      &lt;div id="carousel-example-generic-3" class="carousel slide carousel-background" data-ride="carousel"&gt; 
                        &lt;ol class="carousel-indicators"&gt; 
                          &lt;li data-target="#carousel-example-generic-3" data-slide-to="0" class=""&gt;&lt;/li&gt; 
                          &lt;li data-target="#carousel-example-generic-3" data-slide-to="1" class=""&gt;&lt;/li&gt; 
                          &lt;li data-target="#carousel-example-generic-3" data-slide-to="2" class="active"&gt;&lt;/li&gt; 
                        &lt;/ol&gt; 
                        &lt;div class="carousel-inner" role="listbox"&gt; 
                          &lt;div class="item"&gt;
                            &lt;div class="slide-1"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are creative&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                                &lt;a href="#" class="btn btn-lg btn-primary margintop10"&gt;Ver más&lt;/a&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;  
                          &lt;/div&gt; 
                          &lt;div class="item"&gt; 
                            &lt;div class="slide-2"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are smart&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                              &lt;/div&gt;
                            &lt;/div&gt; 
                          &lt;/div&gt; 
                          &lt;div class="item active"&gt; 
                            &lt;div class="slide-3"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are amazing&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                              &lt;/div&gt;
                            &lt;/div&gt; 
                          &lt;/div&gt; 
                        &lt;/div&gt; 
                        &lt;a class="left carousel-control" href="#carousel-example-generic-3" role="button" data-slide="prev"&gt; &lt;span class="glyphicon glyphicon-chevron-left" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Previous&lt;/span&gt;&lt;/a&gt; 
                        &lt;a class="right carousel-control" href="#carousel-example-generic-3" role="button" data-slide="next"&gt; &lt;span class="glyphicon glyphicon-chevron-right" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Next&lt;/span&gt; &lt;/a&gt; 
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#carousel-3a">Copiar código</button>
                </div>
              </div>
            </div>
          </div>

          <hr class="margintop40">
          

          <!-- Carousel with Background & Text Animation -->
          <p class="HelveticaBd font14">Carousel Background With Text Animation</p>
          <div id="carousel-example-generic-4" class="carousel slide carousel-background carousel-background-animation" data-ride="carousel"> 
            <ol class="carousel-indicators"> 
              <li data-target="#carousel-example-generic-4" data-slide-to="0" class=""></li> 
              <li data-target="#carousel-example-generic-4" data-slide-to="1" class=""></li> 
              <li data-target="#carousel-example-generic-4" data-slide-to="2" class="active"></li> 
            </ol> 
            <div class="carousel-inner" role="listbox"> 
              <div class="item">
                <div class="slide-1">
                  <div class="slide-text">
                    <h1>We are creative</h1>        
                    <h3>Get start your next awesome project</h3>
                    <a href="#" class="btn btn-lg btn-primary margintop10">Ver más</a>
                  </div>
                </div>  
              </div> 
              <div class="item"> 
                <div class="slide-2">
                  <div class="slide-text">
                    <h1>We are smart</h1>        
                    <h3>Get start your next awesome project</h3>
                  </div>
                </div> 
              </div> 
              <div class="item active"> 
                <div class="slide-3">
                  <div class="slide-text">
                    <h1>We are amazing</h1>        
                    <h3>Get start your next awesome project</h3>
                  </div>
                </div> 
              </div> 
            </div> 
            <a class="left carousel-control" href="#carousel-example-generic-4" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> 
            <a class="right carousel-control" href="#carousel-example-generic-4" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
          </div>
          <a href="#" class="btn btn-primary margintop10" data-toggle="modal" data-target="#carousel-4">Ver código</a><br>
          <!-- Modal -->
          <div class="modal fade" id="carousel-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Carousel</h4>
                </div>
                <div class="modal-body">
                  <pre>
                    <code id="carousel-4a">
                      &lt;div id="carousel-example-generic-4" class="carousel slide carousel-background carousel-background-animation" data-ride="carousel"&gt; 
                        &lt;ol class="carousel-indicators"&gt; 
                          &lt;li data-target="#carousel-example-generic-4" data-slide-to="0" class=""&gt;&lt;/li&gt; 
                          &lt;li data-target="#carousel-example-generic-4" data-slide-to="1" class=""&gt;&lt;/li&gt; 
                          &lt;li data-target="#carousel-example-generic-4" data-slide-to="2" class="active"&gt;&lt;/li&gt; 
                        &lt;/ol&gt; 
                        &lt;div class="carousel-inner" role="listbox"&gt; 
                          &lt;div class="item"&gt;
                            &lt;div class="slide-1"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are creative&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                                &lt;a href="#" class="btn btn-lg btn-primary margintop10"&gt;Ver más&lt;/a&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;  
                          &lt;/div&gt; 
                          &lt;div class="item"&gt; 
                            &lt;div class="slide-2"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are smart&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                              &lt;/div&gt;
                            &lt;/div&gt; 
                          &lt;/div&gt; 
                          &lt;div class="item active"&gt; 
                            &lt;div class="slide-3"&gt;
                              &lt;div class="slide-text"&gt;
                                &lt;h1&gt;We are amazing&lt;/h1&gt;        
                                &lt;h3&gt;Get start your next awesome project&lt;/h3&gt;
                              &lt;/div&gt;
                            &lt;/div&gt; 
                          &lt;/div&gt; 
                        &lt;/div&gt; 
                        &lt;a class="left carousel-control" href="#carousel-example-generic-4" role="button" data-slide="prev"&gt; &lt;span class="glyphicon glyphicon-chevron-left" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Previous&lt;/span&gt;&lt;/a&gt; 
                        &lt;a class="right carousel-control" href="#carousel-example-generic-4" role="button" data-slide="next"&gt; &lt;span class="glyphicon glyphicon-chevron-right" aria-hidden="true"&gt;&lt;/span&gt; &lt;span class="sr-only"&gt;Next&lt;/span&gt; &lt;/a&gt; 
                      &lt;/div&gt;
                    </code>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary btn-copy" data-clipboard-target="#carousel-4a">Copiar código</button>
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