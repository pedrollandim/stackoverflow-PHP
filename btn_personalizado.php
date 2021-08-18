<!DOCTYPE html>
<html lang='pt-br'>


<body>

<form>
<button type="button" class="btn glyphicon glyphicon-plus" value="botao ligado" 
 onclick="mostrar(this)">
<p>botao ligado</p>
</button>


</form>



<script>
const button = document.querySelector('button');
const paragraph = document.querySelector('p');

button.addEventListener('click', updateButton);

function updateButton() {
  if (button.value === 'botao desligado') {
    button.value = 'botao ligado';
    paragraph.textContent = 'botao ligado';
  } else {
    button.value = 'botao desligado';
    paragraph.textContent = 'botao desligado';
  }
}

function mostrar(e) {
  if (e.classList.contains("glyphicon-plus")) { //se tem olho aberto
    e.classList.remove("glyphicon-plus"); //remove classe olho aberto
    e.classList.add("glyphicon-minus"); //coloca classe olho fechado
  } else {
    e.classList.remove("glyphicon-minus"); //remove classe olho fechado
    e.classList.add("glyphicon-plus"); //coloca classe olho aberto
  }
 }
</script>


</body>

<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
 </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> 
</script>


</html>