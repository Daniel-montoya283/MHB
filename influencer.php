<?php

session_start();
if (!isset($_SESSION['email'])) {
  header("Location: /MHB/index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Influencer</title>
  <link rel="stylesheet" href="CSS/styles.css" />
  <link rel="stylesheet" href="CSS/inicio.css" />
  <link rel="stylesheet" href="CSS/influencer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Reggae+One&display=swap" rel="stylesheet" />
</head>

<body>
  <header class="header" id="hanalei-fill-regulra">
    <div id="blo1">
      <div class="texto" id="texto"></div>
    </div>
    <h1 style="color: black; margin-bottom: 10.5rem">1</h1>
  </header>

  <main>
      <nav>
      <div class="btn-cuenta">
        <img class="avatar" src="/MHB/media/cuenta.png" alt="">
        <h1 class="user_title"> <span><?= $_SESSION['name']; ?></span></h1>
      </div>
      <div class="acciones">
        <a href="../MHB/i_po.php"><button class="buttonP">Promocionar Ofertas</button></a>
        <a href="index.html"><button onclick="window.location.href='/MHB/login/logout.php'" class="buttonP">Cerrar Sección</button></a>
      </div>
      
    </nav>
      <h1 class="user_title">Bienvenido, <span><?= $_SESSION['name']; ?></span></h1>

    <h2>Panel de Informacion</h2>

    <section class="panel">
  <div class="cards">
    <div class="card">
      <div class="card-content">
        <div class="number">24</div>
      </div>
      <div class="icon-box">
        <img src="media/icons8-tarea-completada-50.png" alt="">
        <div class="card-name">Ofertas completadas</div>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="number">123</div>
      </div>
      <div class="icon-box">
        <img src="media/icons8-activo-50.png" alt="">
        <div class="card-name">Ofertas activas</div>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="number">45.638</div>
      </div>
      <div class="icon-box">
        <img src="media/icons8-ver-50.png" alt="">
        <div class="card-name">Vistas totales</div>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="number">$5.275.000 cop</div>
      </div>
      <div class="icon-box">
        <img src="media/icons8-dinero-50.png" alt="">
        <div class="card-name">Ganancias estimadas</div>
      </div>
    </div>
  </div>
 

</div>
</section>
<div class="charts-container">
    <div class="charts">
    <div class="chart1">
        <h2>Visitas de ofertas en los últimos 6 meses</h2>
          <canvas id="lineChart"></canvas>
    </div>
    <div class="chart2" id="doughnut-chart">
        <h2>Distribución por tipo de oferta publicada</h2>
        <canvas id="doughnut"  ></canvas>
    </div>
</div>
</div>

<br>
<br>
    


   
  </main>

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

  <script src="JS/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.9/dist/chart.umd.min.js"></script>
  
  <script src="JS/chart1.js"></script>
  
</body>

</html>