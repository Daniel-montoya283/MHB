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
  <link rel="stylesheet" href="CSS/i_po.css"> 
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
        <a href="../MHB/influencer.php"><button class="buttonP">Inicio</button></a>
        <a href="index.html"><button onclick="window.location.href='/MHB/login/logout.php'" class="buttonP">Cerrar Sección</button></a>
      </div>
      
    </nav>
      <h1 class="user_title">Bienvenido, <span><?= $_SESSION['name']; ?></span></h1>
    <h2>Vacantes Disponibles para Promocionar</h2>
    <section class="job-listings">
      <div class="job-container">
        <div class="job-card">
          <h3>Desarrollador Web</h3>
          <p><strong>Empresa:</strong> Tech Solutions</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>
        <div class="job-card">
          <h3>Diseñador Gráfico</h3>
          <p><strong>Empresa:</strong> Creativos S.A.</p>
          <p><strong>Ubicación:</strong> Remoto</p>
          <p><strong>Tipo de contrato:</strong> Freelance</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>
        <div class="job-card">
          <h3>Analista de Datos</h3>
          <p><strong>Empresa:</strong> DataCorp</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>
        <div class="job-card">
          <h3>Diseñador UX/UI</h3>
          <p><strong>Empresa:</strong> Creative Minds</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Freelance</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Analista de Datos</h3>
          <p><strong>Empresa:</strong> DataCorp</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Ingeniero de Software</h3>
          <p><strong>Empresa:</strong> SoftTech</p>
          <p><strong>Ubicación:</strong> Cali, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Remoto</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Community Manager</h3>
          <p><strong>Empresa:</strong> SocialBuzz</p>
          <p><strong>Ubicación:</strong> Barranquilla, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Medio tiempo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Administrador de Servidores</h3>
          <p><strong>Empresa:</strong> CloudSecure</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Especialista en Marketing Digital</h3>
          <p><strong>Empresa:</strong> MarketPlus</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Remoto</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Soporte Técnico</h3>
          <p><strong>Empresa:</strong> IT Assist</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Temporal</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Gerente de Producto</h3>
          <p><strong>Empresa:</strong> InnovateX</p>
          <p><strong>Ubicación:</strong> Cali, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Redactor de Contenidos</h3>
          <p><strong>Empresa:</strong> ContentPro</p>
          <p><strong>Ubicación:</strong> Remoto</p>
          <p><strong>Tipo de contrato:</strong> Freelance</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>
        <div class="job-card">
          <h3>Chef Ejecutivo</h3>
          <p><strong>Empresa:</strong> Gourmet Delights</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Profesor de Matemáticas</h3>
          <p><strong>Empresa:</strong> Colegio San José</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Medio tiempo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Asesor de Ventas</h3>
          <p><strong>Empresa:</strong> Tienda Éxito</p>
          <p><strong>Ubicación:</strong> Cali, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Enfermero/a</h3>
          <p><strong>Empresa:</strong> Clínica Vida</p>
          <p><strong>Ubicación:</strong> Barranquilla, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Turnos rotativos</p>
          <button onclick="abrirModal()">Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Conductor de Reparto</h3>
          <p><strong>Empresa:</strong> Logística Express</p>
          <p><strong>Ubicación:</strong> Bucaramanga, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button>Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Diseñador de Moda</h3>
          <p><strong>Empresa:</strong> Trendy Wear</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Freelance</p>
          <button>Promocionar</button>
        </div>
        <div class="job-card">
          <h3>Videógrafo</h3>
          <p><strong>Empresa:</strong> Creative Studio</p>
          <p><strong>Ubicación:</strong> Barranquilla, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Freelance</p>
          <button>Promocionar</button>
        </div>

        <div class="job-card">
          <h3>Especialista en Ciberseguridad</h3>
          <p><strong>Empresa:</strong> SecureNet</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
          <p><strong>Tipo de contrato:</strong> Tiempo completo</p>
          <button>Promocionar</button>
        </div>
      </div>
    </section>
  </main>

  <div id="modal-promocionar" class="modal">
  <div class="modal-content">
    <h2>Promocionar Vacante</h2>
    <p>Selecciona la red social:</p>
    <button class="facebook" onclick="promocionarEn('facebook')">Facebook</button>
    <button class="twitter" onclick="promocionarEn('twitter')">X (Twitter)</button>
    <button class="instagram" onclick="promocionarEn('instagram')">Instagram</button>
    <button class="whatsapp" onclick="promocionarEn('whatsapp')">WhatsApp</button>
    <br>
    <button class="cancel" onclick="cerrarModal()">Cancelar</button>
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

  <script src="JS/main.js"></script>
  <script>


function promocionarEn(red) {
  alert('Promocionando en: ' + red);
  cerrarModal();
}

function abrirModal() {
  const modal = document.getElementById('modal-promocionar');
  modal.classList.add('modal-visible'); // Añade la clase que centra y muestra
}

function cerrarModal() {
  const modal = document.getElementById('modal-promocionar');
  modal.classList.remove('modal-visible'); // Remueve la clase
}
function promocionarEn(red) {
  const redes = {
    facebook: 'https://www.facebook.com/',
    twitter: 'https://twitter.com/',
    instagram: 'https://www.instagram.com/',
    whatsapp: 'https://web.whatsapp.com/'
  };
  
  if(redes[red]) {
    window.open(redes[red], '_blank');
  }
  
  cerrarModal();
}

  </script>
</body>

</html>