// Evento de mouse (hover)
document.getElementById('hoverBtn').addEventListener('mouseover', () => {
  document.getElementById('hoverMsg').textContent = '¡Estás sobre el botón!';
});

document.getElementById('hoverBtn').addEventListener('mouseout', () => {
  document.getElementById('hoverMsg').textContent = '';
});

// Evento de mouse (click)
document.getElementById('clickBtn').addEventListener('click', () => {
  document.getElementById('clickMsg').textContent = '¡Hiciste clic en el botón!';
});

// Función síncrona
function saludar() {
  const nombre = prompt('¿Cuál es tu nombre?');
  if (nombre) {
    document.getElementById('saludo').textContent = `¡Hola, ${nombre}! Bienvenido.`;
  }
}

// Función asíncrona
async function loadData() {
  document.getElementById('dataResult').textContent = 'Cargando...';
  await new Promise(resolve => setTimeout(resolve, 2000));
  document.getElementById('dataResult').textContent = '¡Datos cargados exitosamente!';
}

// Animación dinámica
function toggleAnimation(element) {
  element.classList.toggle('active');
}
// Reutilizar la función de clic para anim6
function toggleAnimation(element) {
  element.classList.toggle('active');
}
