<?php include_once("./template/Header.php"); ?>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tower_Bridge_%288151690991%29.jpg">

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="./img/img1.jpg">
        <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->

        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:black;">Puente Hidraulico </h1>
            <p style="color:black;">Pascal es un físico y matemático francés, el puente hidráulico se basa ente principio el cual consiste en que la presión aplicada en un punto de un liquido se transmite con el mismo valor a cada una de las partes del mismo.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://quimicayalgomas.com/wp-content/uploads/2012/11/Pascal.png">

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        مPuente Hidráulico
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1"> Principio de Pascal</h2>
        <hr>
        <p> Es una ley enuniada por el físico y matemático francés Blaise pascal (1623-1662) que se resume en la frase:<b> la presión ejercidad por un fluido incomprensible y en equilibrio dentro de un recipiente de paredes indefromables, se transmite con igual intensidad en todas las direcciones y en todos los puntos del fluido.</b></p>
        <blockquote>
          <p> El principo de Pascal puede comprobarse utilizando una esfera hueca, perforada en diferentes lugares y provistas de un embolo. Al llenar la esfera con agua y ejercer presión sobre ella mediante el émbolo, se observa que el agua sale por todos los agujeros con la misma velocidad y por lo tanto con la misma presión.</p>
        </blockquote>
        <p>También podemos ver aplicaciones del principio de Pascal en las prensas hidraulicas, en los elevadores hidráulicos y en los frenos hidraulicos.</p>
        <p> El principio de Pascal puede ser interpretado como una consecuencia de la ecuación fundamental de la hidrostática y de carácter altamente incomprensible de los liquidos. En esta clase de fluidos la densidad es practicamente constante, de modo que de acuerdo en con la ecuación: <b>P = Po + Pgh</b></p>
        <h3>Donde:</h3>
        <p> <b>P: </b>Presión total a la profundidad. <br> <b>Po: </b>Presión sobre la superficie libre del fluido. <br> <b>p: </b> Densidad del fluido. <br> <b>g: </b> aceleración de la gravedad. <br> <b>h: </b>Altura medidad en Metros.</p>
        
        <p> La presión se define como la fuerza ejercidad sobre unidad de área <b>p = F/A.</b> De este modo obtenemos la ecuación: <b>F1/A1 = F2/A2</b>, entendiéndose a <b>F1</b> como la fuerza en el primer pistón y <b>A1</b> como el área de este último. Realizando despejes sobre esta ecuación básica podemos obtener los resultados deseados en la resolución de un problema de fisica de este orden.</p>

        <p> Si se aumenta la presión sobre la superficie libre, por ejemplo, la presión total en el fondo ha de aumentar en la misma medida, ya que el termino <b>pgh</b> no varia al no hacerlo la presión total. Si el fluido no fuera incomprensible, su densidad responderia a los cambios de presión y el principio de Pascal no podria cumplirse. Por otra parte, si las paredes del recipiente no fuesen indeformables, las variables en la presión en el seno del liquido no podría transmitirse siguiendo este principio.</p>
        <p>Ejemplo:</p>
        <p> La presión ejercidad sobre la superficie de un liquido contenido en un recipiente cerrado se transmite a todos los puntos del mismo con la misma intensidad.</p>
        <img src="./img/ejemplo1.png">
        <p>El principio de Pascal se aplica en la hidrostática para reducir las fuerzas que deben aplicarse en determinados casos. Un ejemplo del Principio de Pascal puede verse en el punte hidráulico.</p>
      </article>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Menu Secundario</h4>
          <ol class="list-unstyled">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./Evidence.php">Evidence</a></li>
            <li><a href="./About.php">About</a></li>
          </ol>
        </div>
        <div>
          <iframe width="550" height="300" src="https://www.youtube.com/embed/6eNZaAI4JPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include_once("./template/Footer.php"); ?>