<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rincon Peludo</title>
    <link rel="icon" href="assets/img/Logo.jpeg"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <!-- barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">
              <img src="assets/img/Logo.jpeg" alt="Logo" style="height: 4rem"
            /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-4 d-flex justify-content-end">
            <li class="nav-item dropdown ms-3">
            <a class="nav-link fs-5" href="dashboard.php">Servicios</a>
          </li>
          <li class="nav-item dropdown ms-3">
            <a class="nav-link fs-5" href="" data-bs-toggle="dropdown">Consulta</a>
             <ul
              class="dropdown-menu bg" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item bg" href="Gatito-o-cachorro-de-0-meses-a-1-año.php">Gatito o cachorro: de 0 meses a 1 año</a></li>
              <li><a class="dropdown-item bg" href="Adulto-de-1-año-a-7-año.php">Adulto de 1 año a 7 año</a></li>
              <li><a class="dropdown-item bg" href="Adulto-mayor-de-7-años-en-adelante.php">Adulto mayor de 7 años en adelante</a></li>
              <li><a class="dropdown-item bg" href="Como-bañar-a-tu-mascota.php">Cómo bañar a tu mascota</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-3">
            <a class="nav-link fs-5" href="#" data-bs-toggle="dropdown">Nutricion</a>
             <ul
              class="dropdown-menu bg" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item bg" href="Que-cantidad-de-comida-debo-darle-a-mi-cachorro.php">¿Qué cantidad de comida debo darle a mi cachorro?</a></li>
              <li><a class="dropdown-item bg" href="Como-modificar-la-dieta-de-mi-gato.php">¿Cómo modificar la dieta de mi gato?</a></li>
              <li><a class="dropdown-item bg" href="Como-entrenar-a-tu-perro-con-señas.php">¿Cómo entrenar a tu perro con señas?</a></li>
              <li><a class="dropdown-item bg" href="Adiestramiento-canino-reglas-basicas.php">Adiestramiento canino, reglas básicas</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-3" style="width: 14rem">
            <a class="nav-link w-100 fs-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" 
            aria-expanded="false">Preguntas Frecuentes</a>
            <ul
              class="dropdown-menu bg" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item bg" href="#">Quienes Somos</a></li>
              <li><a class="dropdown-item bg" href="#">Contacto</a></li>
              <li><a class="dropdown-item bg" href="#">PQR</a></li>
            </ul>
          </li>
              <!--ventana Emergente-->
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <li class="nav-item ms-3" style="width: 10rem">
                  <div class="">
                  <?php
                      if (isset($_SESSION['usuario'])) {
                          echo "Bienvenido, " . htmlspecialchars($_SESSION['usuario']);
                      } else {
                          echo '<a href="index.html" class="btn btn-primary fs-5">Cerrar Sesion</a>';
                      }
                      ?>
                  </div>
                </li>
              </div>
            </ul>
          </div>
    </nav>                                   
    <!-- Carrusel -->
    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">        
          <div class="carousel-item active" data-bs-interval="4000">      
            <a href="#consulta"><img src="assets/img/consulta.jpg" class="d-block w-100" alt="consulta" style="max-height: 43rem;" ></a>   
            <div class="carousel-caption d-none d-md-block">
              <h1>Consulta</h1>
            </div>
          </div>
          <div class="carousel-item">
            <a href="#nutricion"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Medicamentso" style="max-height: 43rem;"></a>
            <div class="carousel-caption d-none d-md-block">
              <h1>Nutricion y Entrenamiento</h1>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <a href="#servicios"><img src="assets/img/servicios.jpg" class="d-block w-100" alt="servicios" style="max-height: 43rem;"></a>
            <div class="carousel-caption d-none d-md-block">
              <h1>Servicios</h1>
            </div>
          </div>     
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!--Tarjetas--> 
      <div class="tarjeta-container img-fluid">
        <img
        class="imagen mt-5 img-fluid card"
        src="assets/img/baño.png"
        alt="Imagen de Producto"
      />
        <div class="p-4 card tarjeta2">         
          <h2 class="mb-5 text-center ">Como bañar a tu mascota</h2>
          <p class="card-text2 just">
            Sigue esta guía paso a paso para bañar a tu perro sin demasiados sobresaltos.</p><br>
            1.Tranquiliza a tu perro </p><br>A muchos perros no les gusta que los bañen, así que es
            importante hacerles saber que lo que más nos importa es su bienestar. Háblale
            con voz tranquilizadora antes, durante y después del baño. También puedes darle
            una golosina después de bañarlo. </p><br>2. Cepilla a tu perro antes de nada </p><br>Así te
            asegurarás de que no haya nudos ni enredos. Los nudos retienen agua, lo que
            puede irritarle la piel.</p><br> 3. Comprueba la temperatura del agua </p><br>Mantenla templada
            y comprueba su temperatura antes de lavar a tu perro.</p><br> 4. Moja el cuerpo de tu
            perro </p><br>Sumerge su cuerpo en agua tibia y asegúrate de que su pelaje esté bien
            mojado, sobre todo por la parte inferior.</p><br> 5. Añade el champú para perros</p><br> Echa
            una pequeña cantidad y frótalo por el cuerpo hasta que haga espuma. No apliques
            champú en la cabeza ni en la cara del perro; podría entrarle en los ojos. </p><br>6.
            Límpiale la cara</p><br> Si el perro también tiene sucia la cara, límpiala con un paño
            húmedo, pero no eches champú ni jabón. </p><br>7. Aclara a tu perro </p><br>Es importante
            aclarar bien al perro con agua tibia. El exceso de jabón puede irritarle la
            piel, por lo que es importante ser riguroso con el aclarado. </p><br>8. Seca a tu perro
            </p><br>Utiliza una toalla para secar bien a tu perro después del baño. También puedes
            usar un secador de pelo, pero procura de que esté en la configuración más suave,
            mantenlo alejado de su piel y tenlo en movimiento para no concentrar el calor en
            un solo punto durante demasiado tiempo. </p><br>9. Recompensa a tu perro </p><br>Después de
            bañarlo, es importante recompensarlo verbalmente. También sería buena idea darle
            un premio para que sepa que valoras su colaboración.
          </p>
        </div>
      </div>
    <!-- footer -->
    <footer class="bg-secondary">
      <div class="d-flex m-4 w-75 flex-wrap justify-content-between" >
         <div class="w-100"> 
            <a href="index.html">
            <img src="assets/img/Logo.jpeg" alt="Logo"/>
            </a>          
          </div>
          <div class="mb-4 ms-2" style="width: 15rem">
            <h4>LEGAL</h4>
            <a href="#" class="text-decoration-none fs-5 nav-link">Privacidad</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Terminos</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Politicas de seguridad</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Cookies</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Propiedad intelectial</a>
          </div>
          <div class="mb-4" style="width: 15rem">
            <h4>TRABAJA CON NOSOTROS</h4>
            <a href="#" class="text-decoration-none fs-5 nav-link">Portal de empleo</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Blog </a>
          </div>
          <div class="mb-4" style="width: 15rem">
            <a href="#" class="text-decoration-none fs-5 nav-link">Destinos</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Sala de prensa</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">PQRS</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Código promocional</a>
            <a href="#" class="text-decoration-none fs-5 nav-link">Contacto</a>
          </div>
      </div>
      <div class="text-center text-white">
          <!-- Section: Social media -->
          <section class="mb-2">
            <!-- Facebook <a href="https://www.flaticon.es/iconos-gratis/facebook" title="facebook iconos">Facebook iconos creados por Pixel perfect - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://m.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjUzMjczNDMzLCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&refid=9"
              role="button"
            >
              <img src="./assets/img/facebook.png" alt="" style="width: 2rem" />
            </a>
            <!-- Twitter <a href="https://www.flaticon.es/iconos-gratis/social" title="social iconos">Social iconos creados por riajulislam - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://twitter.com/i/flow/login"
              role="button"
              ><img src="./assets/img/twitter.png" alt="" style="width: 2rem"
            /></a>
            <!-- Instagram <a href="https://www.flaticon.es/iconos-gratis/instagram" title="instagram iconos">Instagram iconos creados por Pixel perfect - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://www.instagram.com/?hl=es-la"
              role="button"
              ><img src="./assets/img/instagram.png" alt="" style="width: 2rem"
            /></a>
            <!-- Linkedin  <a href="https://www.flaticon.es/iconos-gratis/linkedin" title="linkedin iconos">Linkedin iconos creados por riajulislam - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://co.linkedin.com/"
              role="button"
              ><img src="./assets/img/linkedin.png" alt="" style="width: 2rem"
            /></a>
          </section>
      </div>
      <div class="text-center p-2">
        <p>&copy; Todos los derechos reservados :: Rincon Peludo &trade; :: 2024</p>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>






