document.getElementById("cambiarContenido").addEventListener("click", function() {
  document.getElementById("contenido").textContent = "cambiado";
});

document.getElementById("formulario").addEventListener("submit", function(event) {
  let nombre = document.getElementById("nombre").value.trim();
  let email = document.getElementById("email").value.trim();
  let mensaje = document.getElementById("mensaje").value.trim();
  
  if (nombre === "" || email === "" || mensaje === "") {
      event.preventDefault();
      alert("Por favor, complete todos los campos del formulario.");
  }
});