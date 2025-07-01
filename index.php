<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio Web Dinámico Mejorado</title>
  <link rel="stylesheet" href="style/main.css">
</head>
<body>
  <div class="bg-animated"></div>
  <header>
    <h1>Saber Hacer unidad 2</h1>
  </header>

  <main>
    <section class="card">
      <h2>🎯 Eventos del Mouse</h2>
      <button id="hoverBtn">Pasa el mouse aquí</button>
      <p id="hoverMsg"></p>
      <button id="clickBtn">Haz clic aquí</button>
      <p id="clickMsg"></p>
    </section>

    <section class="card">
      <h2>⚙️ Funciones Sincrónicas</h2>
      <button onclick="saludar()">Saludar</button>
      <div id="saludo"></div>
    </section>

    <section class="card">
      <h2>🔁 Función Asíncrona</h2>
      <button onclick="loadData()">Cargar datos simulados</button>
      <div id="dataResult">Esperando datos...</div>
    </section>

  <section class="card">
  <h2>🎨 Animaciones y Transiciones</h2>
  <div class="anim-grid">
    <div class="anim-box anim1">Hover</div>
    <div class="anim-box anim2">Pulse</div>
    <div class="anim-box anim3">Slide</div>
    <div class="anim-box anim4">Rotate</div>
    <div class="anim-box anim5">Color</div>
    <div class="anim-box anim6" onclick="toggleAnimation(this)">Click</div>
  </div>
</section>

    
  </main>

  <script src="js/main.js"></script>
</body>
<div class="bg-animated"></div>

</html>
