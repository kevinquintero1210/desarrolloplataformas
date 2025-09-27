function redirigirLogin() {
  window.location.href = 'login.html';
}

// script.js
document.addEventListener('DOMContentLoaded', function () {
  // Animación inicial (fade-in)
  requestAnimationFrame(() => document.body.classList.add('loaded'));

  // Botón de Iniciar Sesión: redirigir a login.html (ajusta la ruta si es otra)
  var btn = document.getElementById('btnLogin');
  if (btn) {
    btn.addEventListener('click', function () {
      window.location.href = 'login.html';
    });
  }

  // (Opcional) si deseas capturar clics en tarjetas para analytics o rutas dinámicas:
  // document.querySelectorAll('.card').forEach(c => {
  //   c.addEventListener('click', function(e){
  //     // ejemplo: console.log('clic en tarjeta', this.getAttribute('href'));
  //   });
  // });
});
