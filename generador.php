<style>
.mensaje-exito {
    background-color: rgba(0, 128, 0, 0.8); /* Fondo verde semi-transparente */
    color: white; /* Texto blanco */
    padding: 20px; /* Espaciado interno */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Sombra */
    text-align: center; /* Centrar el texto */
    margin: 20px; /* Margen alrededor del contenedor */
}

.mensaje-exito h2 {
    margin-bottom: 10px; /* Espacio entre el título y el párrafo */
    font-family: 'Croissant One', cursive; /* Fuente personalizada */
}

.mensaje-exito p {
    margin: 5px 0; /* Margen entre los párrafos */
}

.mensaje-exito a {
    color: blue; /* Color dorado para el enlace */
    text-decoration: underline; /* Subrayar el enlace */
    transition: color 0.3s; /* Transición suave para el color */
}

.mensaje-exito a:hover {
    color: #FFEA00; /* Color más brillante al pasar el ratón */
}

</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombreRadio = $_POST['nombreRadio'];
    $urlLogo = $_POST['urlLogo'];
    $urlStreaming = $_POST['urlStreaming'];
    $numeroTelefono = $_POST['numeroTelefono'];

    // Eliminar espacios del nombre de la radio para la URL
    $nombreRadioURL = str_replace(' ', '', $nombreRadio);

    // Crear el contenido del archivo index.html
    $htmlContent = <<<HTML
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$nombreRadio</title>
    <link rel="shortcut icon" href="imagenes/radio-imagen-shortcut.png" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Croissant+One&display=swap');

html{
    height: 100%;
}
*{
    margin: 0;
    padding: 0;
}
body{
    background-color: #d6b6ab;
    background-image: url('https://wallpaperaccess.com/full/4727363.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center top;
}

@media screen and (max-width: 1179px) {
    body{
    background-position: right;
    }
}

a{
    text-decoration: none;
}
.barra{
    max-width: 100%;
    height: 65px;
    display: flex-box;
}
#texto-barra{
    color: white;
    font-size: 25px;
    font-family: 'Croissant One', cursive;
    position: absolute;
    line-height: 22px;
    padding-top: 12px;
    padding-left: 5px;
    letter-spacing: -4px;
    text-shadow: 3px 1px 10px black;
}
#icono-barra{
    margin: 10px 0px 20px 120px;
    /* margin-left: 20px; */
    color: white;
    font-size: 25px;
    filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.7));

    
}
section{
    justify-content: center;
    align-items: center;
    display: grid;
}

.contenedor-reproductor{
    width: 250px;
    height: 300px;
    top: 70px;
    right: 2vh;
    align-items: center;
    justify-content: center;
    box-shadow: 2px 2px 10px black;
    position: relative;
}
.contenedor-reproductor p{
    color: white;
    text-shadow: 3px 2px 4px black;
}



@media screen and (min-height: 700px) {
    .contenedor-reproductor{
        width: 250px;
        height: 300px;
        top: 150px;
        left: 0;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px black;
    }
}
@media screen and (min-height: 800px) {
    .contenedor-reproductor{
        width: 250px;
        height: 300px;
        top: 160px;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px black;
    }
}
@media screen and (min-height: 900px) {
    .contenedor-reproductor{
        width: 250px;
        height: 300px;
        top: 170px;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px black;
    }
}
@media screen and (min-height: 1000px) {
    .contenedor-reproductor{
        width: 250px;
        height: 300px;
        top: 200px;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px black;
    }
}
#imagen{
    width: 150px;
    margin-top: 40px;
    margin-left: 3.1em;
    border-radius: 5%;
}
.texto-reproductor{
    margin-top: 1em;
    font-size: 20px;
    text-align: center;
    font-family: 'Croissant One', cursive;
    letter-spacing: -2px;
}
#icono-play{
font-size: 35px;
margin-top: 0.4em;
margin-left: 3em;
color: rgb(255, 252, 252);
filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.7));
transition: all 0.3s linear;
}
#icono-play:hover{
    transform: scale(1.2);
}
#icono-wsp{
border: 15px solid #009100;
background-color: #009100;
border-radius: 100%;
box-shadow: 1px 1px 10px black;
bottom: 90px; 
right: 30px; 
position: fixed;
color: white;
}
.icono-ws{
    font-size: 30px;
}
#icono-wsp:hover{
    color: green;
    background-color: white;
    border-color: white;
}
footer{
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 50px;
}
.elementos-footer{
    display: flex;
    justify-content: space-between;
}

.elementos-footer p{
    color: white;
    font-size: 14px;
    padding: 10px 5px 0;
    font-family: 'Croissant One', cursive;
    line-height: 17px;
    text-shadow: 3px 1px 10px black;
}
.iconos-footer{
    display: flex;
    align-items: center;
}
.iconos-footer div{
    margin: 10px 10px 0;
}
.iconos-footer .icono-ig{
    color: rgb(187, 3, 233);
    filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.7));
}
.iconos-footer .icono-fb{
    color: rgb(0, 119, 255);
    filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.7));
}
.icono-ig:hover{
color: rgb(129, 0, 161);
}
.icono-ig{
    font-size: 23px;
}
.icono-fb:hover{
    color: rgb(0, 87, 250);
}
.icono-fb{
    font-size: 24px;
}
    </style>
  </head>
  <body>
    <nav>
      <div class="barra">
        <p id="texto-barra">
          &nbsp; &nbsp; Escuchas <br />
          $nombreRadio
        </p>
        <ion-icon name="radio-outline" id="icono-barra"></ion-icon>
      </div>
    </nav>
    <section class="contenedor">
      <div class="contenedor-reproductor">
        <div class="imagen-reproductor">
          <img src="$urlLogo" alt="$nombreRadio" id="imagen" />
        </div>
        <div class="texto-reproductor">
          <p>$nombreRadio</p>
        </div>
        <div id="play">
          <ion-icon name="play-outline" id="icono-play" onclick="reproducir()"></ion-icon>
        </div>
        <div class="volumen"></div>
        <div>
          <audio preload="auto" id="audio" src="$urlStreaming"></audio>
        </div>
      </div>
      <a href="https://wa.me/$numeroTelefono" id="icono-wsp">
        <ion-icon name="logo-whatsapp" class="icono-ws"></ion-icon>
      </a>
    </section>
    <footer class="footer">
      <div class="elementos-footer">
        <div>
		<!-- dev-radio no modificable queda en By @CRISPRO941 -->
          <a href="https://wa.me/56944808995" target="_blank"><p id="dev-radio">
            By <br />
            @CRISPRO941
          </p>
        </a>
        </div>
      </div>
    </footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script>
	function reproducir() {
    let icono = document.getElementById("icono-play");
    let control = document.getElementById("audio");

    if (control.paused) {
        icono.setAttribute("name", "pause-outline");
        control.play();
    } else {
        icono.setAttribute("name", "play-outline");
        control.pause();
    }
}
	</script>
  </body>
</html>
HTML;

    // Crear la carpeta con el nombre de la radio si no existe
    $folderPath = "radio/$nombreRadioURL";
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0777, true);
    }

    // Escribir el archivo index.html
    $filePath = "$folderPath/index.html";
    file_put_contents($filePath, $htmlContent);

    // Confirmar la creación y ofrecer el enlace de descarga
echo "
<div class='mensaje-exito'>
    <h2>¡Reproductor generado exitosamente!</h2>
    <p>El reproductor para <strong>$nombreRadio</strong> ha sido creado con exito
    <p>Puedes acceder al archivo <a href='$filePath'>aquí</a>.</p>
</div>
";

} else {
    echo "Error: Método no permitido.";
}
?>
