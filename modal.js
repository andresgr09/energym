var modal = document.getElementById("myModal");
var respuesta = document.getElementById("respuesta");

// Obtener el formulario y agregar un evento para enviar el formulario con AJAX
var form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  xhr.open(this.method, this.action, true);
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Mostrar la respuesta en la ventana modal
      respuesta.innerHTML = this.responseText;
      modal.style.display = "block";
    }
  };
  xhr.send(new FormData(this));
});

// Agregar un evento para cerrar la ventana modal cuando se hace clic en la X
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}