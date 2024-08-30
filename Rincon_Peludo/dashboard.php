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
                <a class="nav-link fs-5" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item dropdown ms-3">
                <a class="nav-link fs-5" href="#consulta">Consulta</a>
              </li>
              <li class="nav-item dropdown ms-3">
                <a class="nav-link fs-5" href="#nutricion">Nutricion</a>
              </li>
              <li class="nav-item dropdown ms-3" style="width: 14rem">
                <a class="nav-link w-100 fs-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Preguntas Frecuentes</a>
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
    <!--Tarjeta consulta-->
    <div id="consulta" class="d-flex justify-content-around mt-5 mb-5 flex-wrap"> <h2>Consulta</h2> </div>
    <div class="d-flex justify-content-around mt-5 mb-5 flex-wrap" id="slider">       
      <div class="slider-section">
        <a href="./Gatito-o-cachorro-de-0-meses-a-1-año.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/consulta_0-1.jpg"
              alt="imagen-de-0-1"
              href=""
            />
            <div class="card-body">
              <h4 class="card-title">Gatito o cachorro: de 0 meses a 1 año</h4>
              <p class="card-text">
                Las mascotas recién nacidas deben tener una revisión médica de forma inicial para descartar problemas 
                congénitos y para determinar un calendario para su desparasitación, así como el esquema de vacunación 
                necesario para el cachorro o gatito. 
              </p>
            </div>
          </div>
        </a>
      </div> 
      <div class="slider-section">
        <a href="Adulto-de-1-año-a-7-año.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/consulta_1-7.avif"
              alt="imagen-de-1-7"
            />
            <div class="card-body">
              <h4 class="card-title">Adulto de 1 año a 7 año</h4>
              <p class="card-text">
                Como ésta es la etapa de mayor duración en la vida de tu mascota, es la misma que se toma 
                como referencia para la respuesta genérica de visitar al veterinario al menos una vez al año. 
              </p>
            </div>
          </div>
        </a>
        
      </div> 
      <div class="slider-section">
        <a href="Adulto-mayor-de-7-años-en-adelante.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/consulta_7-adelante.avif"
              alt="imagende-de-7-adelante"
            />
            <div class="card-body">
              <h4 class="card-title">Adulto mayor de 7 años en adelante</h4>
              <p class="card-text">
                La presencia de padecimientos es más frecuente en esta etapa de vida, por lo que el 
                veterinario te brindará recomendaciones para evitar o, en su caso, tratar adecuadamente
                a tu mascota para que no se vea tan afectada su salud si es que ya cuenta con algún inconveniente.
              </p>
            </div>
          </div>
        </a>
        
      </div> 
      <div class="slider-section">
        <a href="Como-bañar-a-tu-mascota.php"></a>
        <div class="card" style="flex-shrink: 0">
          <img
            class="card-image"
            src="assets/img/baño.png"
            alt="imagen-de-baño"
          />
          <div class="card-body">
            <h4 class="card-title">Cómo bañar a tu mascota</h4>
            <p class="card-text">
              Antes de sumergir a tu mascota en el agua, conoce en detalle la secuencia de acciones para un 
              baño eficaz y que no genere estrés en tu mascota. Cada aspecto cuenta, así que considera los 
              elementos esenciales para un aseo exitoso: desde la elección del champú adecuado hasta la preparación del espacio.
            
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta Medicamentos y Examenes--> 
    <div id="nutricion" class="d-flex justify-content-center mt-5 flex-wrap"> <h2>Nutricion y Entrenamiento</h2> </div>
    <div class="d-flex justify-content-around mt-5 mb-5 flex-wrap">
      <div class="slider-section">
        <a href="Que-cantidad-de-comida-debo-darle-a-mi-cachorro.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/perro_comiendo.avif"
              alt="imagen-de-producto"
            />
            <div class="card-body">
              <h4 class="card-title">¿Qué cantidad de comida debo darle a mi cachorro?</h4>
              <p class="card-text">
                Alimentar a tu nueva mascota con comida para cachorros de alta calidad ayuda a prepararlo para una vida larga y saludable como perro adulto.
              </p>
            </div>
          </div>
        </a>   
      </div>
      <div class="slider-section">
        <a href="Como-modificar-la-dieta-de-mi-gato.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/gato_comiendo.avif"
              alt="imagen-de-producto"
            />
            <div class="card-body">
              <h4 class="card-title">¿Cómo modificar la dieta de mi gato?</h4>
              <p class="card-text">
                Mantener la salud de tu gatito es una responsabilidad que debes compartir con él, ya sea procurando un hogar seguro, chequeos regulares con el veterinario o brindándole una alimentación con todos los nutrientes que requiere en un balance óptimo
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="slider-section">
        <a href="Como-entrenar-a-tu-perro-con-señas.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/entrenamiento_señas.avif"
              alt="imagen-de-producto"
            />
            <div class="card-body">
              <h4 class="card-title">¿Cómo entrenar a tu perro con señas?</h4>
              <p class="card-text">
                Entrenar a tu perro haciéndole señas con las manos es para él fácil de entender. Todo lo que necesitas para saber cómo entrenar a tu perro con este tipo de aprendizaje
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="slider-section">
        <a href="Adiestramiento-canino-reglas-basicas.php">
          <div class="card" style="flex-shrink: 0">
            <img
              class="card-image"
              src="assets/img/entrenamiento.avif"
              alt="imagen-de-producto"
            />
            <div class="card-body">
              <h4 class="card-title">Adiestramiento canino, reglas básicas</h4>
              <p class="card-text">
                Enseñarle algunas reglas básicas de adiestramiento canino puede hacer maravillas para la convivencia con tu mascota.
                Posiblemente darle adiestramiento canino a tu perro no es una tarea tan complicada.
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <!--Tarjeta servicios-->
    <div id="servicios" class="d-flex justify-content-around mt-5 mb-5"> <h2>Servicios</h2> </div>
    <div class="d-flex justify-content-around mt-5 mb-5 flex-wrap">
      <div class="m-4" style="width: 15rem">
        <img src="./assets/img/veterinario.png" style="width: 15rem" class="p-4" />
        <p class="text-center fs-5">
          Contamos con un personal capacitado para cuidar a sus mascotas 
          mientras ustedes las dejan a nuestro cuidado.
        </p>
      </div>
      
      <div class="m-4" style="width: 15rem">
        <img
          src="./assets/img/veri.png"
          alt=""
          style="width: 15rem"
          class="p-4"
        />
        <p class="text-center fs-5">
          Los ayudaremos a realizar un chequeo a su mascota para que se encuentre 
          lo mas sano y feliz posible. 
        </p>
      </div>
    
      <div class="m-4" style="width: 15rem">
        <img
          src="./assets/img/soporte-tecnico.png"
          alt=""
          style="width: 15rem"
          class="p-4"
        />
        <p class="text-center fs-5">
          Contamos con acesores las 24 horas del dia que te ayudaran con todas
          tus inquietudes de forma instantanea.
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
              <img src="../assets/img/facebook.png" alt="" style="width: 2rem" />
            </a>

            <!-- Twitter <a href="https://www.flaticon.es/iconos-gratis/social" title="social iconos">Social iconos creados por riajulislam - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://twitter.com/i/flow/login"
              role="button"
              ><img src="../assets/img/twitter.png" alt="" style="width: 2rem"
            /></a>

            <!-- Instagram <a href="https://www.flaticon.es/iconos-gratis/instagram" title="instagram iconos">Instagram iconos creados por Pixel perfect - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://www.instagram.com/?hl=es-la"
              role="button"
              ><img src="../assets/img/instagram.png" alt="" style="width: 2rem"
            /></a>

            <!-- Linkedin  <a href="https://www.flaticon.es/iconos-gratis/linkedin" title="linkedin iconos">Linkedin iconos creados por riajulislam - Flaticon</a>-->
            <a
              class="btn btn-floating m-1"
              href="https://co.linkedin.com/"
              role="button"
              ><img src="../assets/img/linkedin.png" alt="" style="width: 2rem"
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
































