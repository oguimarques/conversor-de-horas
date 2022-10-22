<?php
$h = filter_input(INPUT_POST, "a");
$m= $h * 60
?>

<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" href="relogin.ico" type="imagem icon">
     <title>Conversor De Horas</title>
     <style>
      label{
        font-size:28px; 
        color:black;
      }
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@700&display=swap');
	    body{
        box-sizing: border-box;
        margin: 0px;
        background-color: #201b2c;
        font-family: 'Noto Sans', sans-serif;
      }

      div {
        flex-direction: column;
        align-items: center;
        display:flex;
        margin:auto;
        margin-top:5px;
        background-color:#77ffc0;
        border-radius:10px;
        width:350px;
        padding:10px;
      }

      p{
        text-align:center;

      }

      h1 {
        color:#77ffc0;
        text-align:center;
      }


      h2 {
        font-size: 2vh;
        color: #201b2c;
        margin: 2px;
      }


      .btn{
          border: 2px solid #77ffc0;
          border-radius:15px;
          background-color: white;
          font-weight:bold;
          cursor: pointer;
          text-transform: none;
      }

      .center-imagem {
        width: 25vw;
        display: block;
        flex-direction: column;
        padding: 0px 720px 0px;
      }

	 </style>
   </head>
   <body>
   <h1>Conversor De Horas Para Minutos</h1>
   <img src="tempo.svg" class="center-imagem" alt="Tempo Imagem">
   <div>
     <form method="post">
       <label> Horas: <input text: type="number" name="a"></label><br>
       <p><input class="btn" type="submit" name="envio" value="Calcular"></p>
     </form>
     <h2>Resultado:</h2>
     <h2><?=$m;?> Minutos </h2>
     </div>
   </body>
 </html>

