<?php

session_start();
if (!isset($_SESSION['email'])) {
  header("Location: /MHB/index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Candidato</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="../CSS/reclutador.css" />
    

    <!--Libreria para alertas-->
    <link rel="stylesheet" href="assets/alerts/css/iziToast.min.css" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Reggae+One&display=swap" rel="stylesheet" />
  </head>

  <body>
    <section>
      
      <header class="header" id="hanalei-fill-regulra">
        <div id="blo1">
            <div class="texto" id="texto"></div>
        </div>
        <h1 style="color: black; margin-bottom: 10.5rem">1</h1>
    </header>
       <nav>
      <div class="btn-cuenta">
        <img class="avatar" src="/MHB/media/cuenta.png" alt="">
        <h1 class="user_title"> <span><?= $_SESSION['name']; ?></span></h1>
      </div>
      <div class="acciones">
        <a href="../reclutador.php"><button class="buttonP">Inicio</button></a>
        <a ><button onclick="window.location.href='/MHB/login/logout.php'" class="buttonP">Cerrar Sección</button></a>
      </div>
      
    </nav>
    </section>

    <h1 class="text-center mt-5 mb-5 fw-bold">
      Panel de administracion de Ofertas
      
      <hr />
    </h1>

    <div class="container mb-5">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <h1 class="text-center">
            <span class="float-start">
              <a
                href="#"
                onclick="window.miModal('agregarEmpleadoModal','')"
                class="btn btn-success"
                title="Registrar Nuevo Empleado">
                <i class="bi bi-person-plus"></i>
              </a>
            </span>
            Lista de Ofertas
            <hr />
          </h1>

          <div class="table-responsive">
            <table class="table table-hover" id="tablaEmpleados">
              <thead>
                <tr>
                  <!-- <th>Nombre</th> -->
                   <th>Empresa</th>
                  <!-- <th>Edad</th> -->
                  <th>Años requeridos</th>
                  <!-- <th>Cédula</th> -->
                   <th>Modalidad</th>
                  <!-- <th>Sexo</th> -->
                  <th>Tipo</th>
                  <th>Cargo</th>
                  <!-- <th>Telefono</th> -->
                   <th>Ubicacion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="footer-top">
          <div class="F_bloq1">
              <h4>Enlaces Rápidos</h4>
              <ul style="list-style: none; padding: 0">
                  <li><a href="#">Sobre Nosotros</a></li>
                  <li><a href="#">Preguntas Frecuentes</a></li>
                  <li><a href="#">Política de Privacidad</a></li>
                  <li><a href="#">Términos y Condiciones</a></li>
              </ul>
              <h4 style="text-align: left">
                  📧 contacto@boost.com | 📍 Medellín, Colombia
              </h4>
          </div>

          <iframe class="F_bloq2" width="500" height="200" style="border: 0" loading="lazy" allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62734.72774856137!2d-75.60947204863279!3d6.244338146024714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428291eaf0c4b%3A0x7cdea93b9ebadb4a!2sMedell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1646823603343!5m2!1ses!2sco">
          </iframe>
      </div>

      <div class="F_bloq3">
          <h4>MAGENTO HIRING BOOST © 2025 - Todos los derechos reservados</h4>
      </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="module" src="assets/js/todoCrud.js"></script>
    <script src="assets/alerts/js/iziToast.min.js"></script>

    
    <script src="../JS/main.js"></script>
    
  </body>
</html>
