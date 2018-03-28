<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projectstrap v0.1.0-beta</title>
    <link rel="shortcut icon" href="img/FosterNutritionID_05.png" />
    <link rel="stylesheet" href="styles/projectstrap.css">

  </head>
  <body>
    <div class="site-wrapper">
      <?php include ('partials/_navbar.php'); ?>

    <!-- <div class="video-background">
      <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ?modestbranding=1" frameborder="0" allowfullscreen></iframe>
      </div>
    </div> -->

    <div class="hero">
      <div class="hero-box relative">
        <div class="center-center">
          <img src="img/FosterNutritionID_05.png" class="img-responsive wow fadeInUp" alt="">
          <p class="hero-title wow fadeInLeft" data-wow-delay="0.5s">El primer restaurante automatizado <br> de América Latina</p>
        </div>
        <a href="#" id="more"><i class="fa fa-chevron-down hero-icon wow fadeIn" data-wow-iteration="infinite"></i></a>
      </div>
    </div>


    <!-- STEPS -->
    <section class="explanation">
      <div class="steps">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h3 class="title-section">Viví la experiencia Foster</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
              <div class="text-center">
                <div class="circle-number">
                  <div class="number">
                    <i class="fa fa-tablet"></i>
                  </div>
                </div>
                <p class="step-info">Hacé tu pedido en una de las tablets</p>
              </div>
            </div>
             <div class="col-sm-4 wow fadeInUp" data-wow-delay="1s">
              <div class="text-center">
                <div class="circle-number">
                  <div class="number">3'</div>
                </div>
                <p class="step-info">Esperá 3 minutos mientras preparamos tu pedido</p>
              </div>
            </div>
             <div class="col-sm-4 wow fadeInUp" data-wow-delay="1.5s">
              <div class="text-center">
                <div class="circle-number">
                  <div class="number">
                    <i class="fa fa-cutlery"></i>
                  </div>
                </div>
                <p class="step-info">Retirá tu pedido del box y disfrutá de la comida</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="info-box">
      <div class="container">
        <div class="row row-eq-height">
          <div class="col-sm-6" data-jarallax-element="-140">
            <div class="bg-image" style="background-image: url('https://instagram.faep8-2.fna.fbcdn.net/vp/7e5ec728ca1cf25c9a9ece048a2e7acf/5B42FD34/t51.2885-15/e35/28158574_302286526965205_9108094659363602432_n.jpg')"></div>
          </div>
          <div class="col-sm-6">
            <p class="info-box-text right">Somos una empresa focalizada en el desarrollo de nuevas tecnologías para mejorar la calidad de vida de personas. Gracias a la rápida y constante evolución de la tecnología, y la gran facilidad de la gente de adaptarse a estos cambios aún en la actividades más cotidianas, es que decidimos encarar nuestro primer desarrollo: un local gastronómico inteligente. En nuestro local la experiencia del consumidor va a ser completamente diferente a lo que estamos acostumbrados. Se puede cubrir la totalidad de la experiencia de consumo sin interactuar con personas y de manera muy eficiente. Implementando tecnología IOT logramos que el pedido, el pago y el expendio de la comida se puedan hacer de manera autónoma. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="info-box">
      <div class="container">
        <div class="row row-eq-height">
          <div class="col-sm-6 col-sm-push-6">
            <div class="bg-image" style="background-image: url('https://instagram.faep8-2.fna.fbcdn.net/vp/af4839fa5ae06d603f13cf9638ffda15/5B2D149C/t51.2885-15/e35/28432939_378143195988871_8436313906858688512_n.jpg')"></div>
          </div>
          <div class="col-sm-6 col-sm-pull-6">
            <p class="info-box-text left"> Nuestro sistema incluye Windows IOT, computadores Raspberry Pi, tablets, boxes automatizados (desarrollados por nosotros) y una aplicación propia. Una aplicación en la nube gestiona los pedidos y pagos que se realizan desde las tablets (y próximamente de una App Mobile); envía esta información al sector de producción y asiste en el armado de los platos. Luego controla y ordena la cola de pedidos para luego seleccionar y accionar los boxes de autoservicio correspondientes para retirar el pedido. <br><br>

            Queremos eficientizar los locales de comidas rápidas, agilizar la operatoria para que le gente pueda disponer de su tiempo libre, minimizar los errores logrando la mejor repetitividad posible de los platos, simplificar el proceso de punta a punta y brindarle a la gente una alimentación sana y de calidad.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="text-center">
              <h3 class="title-section marginbottom40">Nuestro Menú</h3>
              <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#bowls" role="tab" data-toggle="tab">Bowls</a></li>
                <li role="presentation"><a href="#dulces" role="tab" data-toggle="tab">Dulces</a></li>
                <li role="presentation"><a href="#bebidas" role="tab" data-toggle="tab">Bebidas</a></li>
                <li role="presentation"><a href="#wraps" role="tab" data-toggle="tab">Wraps</a></li>
                <li role="presentation"><a href="#sopas" role="tab" data-toggle="tab">Sopas</a></li>
                <li role="presentation"><a href="#cafeyte" role="tab" data-toggle="tab">Café y te</a></li>
              </ul>

              <?php include ('partials/menu/_bowls.php'); ?>

              <?php include ('partials/menu/_dulces.php'); ?>
              
              <?php include ('partials/menu/_bebidas.php'); ?>  

              <?php include ('partials/menu/_wraps.php'); ?>  
              
              <?php include ('partials/menu/_sopas.php'); ?>

              <?php include ('partials/menu/_cafeyte.php'); ?>      
                
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="margintop80">
      <div class="text-center marginbottom50">
        <h4 class="title-section">Encontranos en <br> pleno microcentro</h4>
      </div>
      <div id="map"></div>
    </section>       
    

    <!-- FOOTER -->
    <?php include ('partials/_footer.php'); ?>
  
    <!-- JS -->
    <?php include ('partials/_javascript.php'); ?>    

  </body>
</html>