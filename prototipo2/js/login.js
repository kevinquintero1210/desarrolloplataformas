document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm"),
        username = document.getElementById("usuario"),
        password = document.getElementById("password"),
        showPass = document.getElementById("showPassword"),
        btn = document.getElementById("submit"),

        userError = document.getElementById("userError"),
        passError = document.getElementById("passError"),
        rememberMe = document.getElementById("rememberMe");

  // Mostrar/ocultar contraseña
  showPass.addEventListener("change", () => {
    password.type = showPass.checked ? "text" : "password";
  });

  // Validar formulario
  form.addEventListener("submit", function(e) {
    e.preventDefault(); 
    let valid = true;

    if (username.value.trim() === "") {
        userError.textContent = "Por favor ingresa tu usuario";
        username.classList.add("error-input");
        valid = false;
    } else {
        userError.textContent = "";
        username.classList.remove("error-input");
    }

    if (password.value.trim() === "") {
        passError.textContent = "Por favor ingresa tu contraseña";
        password.classList.add("error-input");
        valid = false;
    } else {
        passError.textContent = "";
        password.classList.remove("error-input");
    }

    if (!valid) return;

    // Guardar "Recuérdame"
    if (rememberMe.checked) {
        localStorage.setItem("usuarioRecordado", username.value);
    } else {
        localStorage.removeItem("usuarioRecordado");
    }

    alert("✅ Bienvenido " + username.value);
    window.location.href = "./cristian.html";
  });

  // Cargar usuario guardado
  const usuarioGuardado = localStorage.getItem("usuarioRecordado");
  if (usuarioGuardado) {
    username.value = usuarioGuardado;
    rememberMe.checked = true;
  }

  // Botón click (debug)
  btn.addEventListener("click", () => {
    console.log("🔘 Botón 'Iniciar sesión' presionado");
  });
});
