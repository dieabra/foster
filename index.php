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

    <div class="video-background">
      <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ?modestbranding=1" frameborder="0" allowfullscreen></iframe>
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
            <div class="col-sm-4">
              <div class="text-center">
                <div class="circle-number">
                  <div class="number">
                    <i class="fa fa-tablet"></i>
                  </div>
                </div>
                <p class="step-info">Hacé tu pedido en una de las tablets</p>
              </div>
            </div>
             <div class="col-sm-4">
              <div class="text-center">
                <div class="circle-number">
                  <div class="number">3'</div>
                </div>
                <p class="step-info">Esperá 3 minutos mientras preparamos tu pedido</p>
              </div>
            </div>
             <div class="col-sm-4">
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
          <div class="col-sm-6">
            <div class="bg-image" style="background-image: url('https://instagram.faep8-2.fna.fbcdn.net/vp/7e5ec728ca1cf25c9a9ece048a2e7acf/5B42FD34/t51.2885-15/e35/28158574_302286526965205_9108094659363602432_n.jpg')"></div>
          </div>
          <div class="col-sm-6">
            <p class="info-box-text">Somos una empresa focalizada en el desarrollo de nuevas tecnologías para mejorar la calidad de vida de personas. Gracias a la rápida y constante evolución de la tecnología, y la gran facilidad de la gente de adaptarse a estos cambios aún en la actividades más cotidianas, es que decidimos encarar nuestro primer desarrollo: un local gastronómico inteligente. En nuestro local la experiencia del consumidor va a ser completamente diferente a lo que estamos acostumbrados. Se puede cubrir la totalidad de la experiencia de consumo sin interactuar con personas y de manera muy eficiente. Implementando tecnología IOT logramos que el pedido, el pago y el expendio de la comida se puedan hacer de manera autónoma. 
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
            <p class="info-box-text"> Nuestro sistema incluye Windows IOT, computadores Raspberry Pi, tablets, boxes automatizados (desarrollados por nosotros) y una aplicación propia. Una aplicación en la nube gestiona los pedidos y pagos que se realizan desde las tablets (y próximamente de una App Mobile); envía esta información al sector de producción y asiste en el armado de los platos. Luego controla y ordena la cola de pedidos para luego seleccionar y accionar los boxes de autoservicio correspondientes para retirar el pedido. <br><br>

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
        <h4 class="text-primary">Encontranos en pleno microcentro</h4>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.1262275909576!2d-58.37513848477037!3d-34.60096948046026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaccbe60f5ad%3A0x682432c0c00380e!2sF%C5%8Dster+Nutrition!5e0!3m2!1sen!2sar!4v1521730943067&" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>   

    

    <!-- FOOTER -->
    <?php include ('partials/_footer.php'); ?>

  
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>