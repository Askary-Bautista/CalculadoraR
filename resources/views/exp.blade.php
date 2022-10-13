@extends('layouts.plantilla')
@section('title','Exponenciación')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estiloTablaMult.css">

    <style>
        #titulo{ color: rgb(0, 228, 49);}
        a{position: relative;display: inline-block;padding: 25px 30px;margin: 40px 0;color: #09f3ff;text-decoration: none;text-transform: uppercase;transition: 0.5s;letter-spacing: 4px;overflow: hidden;margin-right: 50px;}a:hover{background: #03e9f4;color: #030501;box-shadow:0 0 5px #03e9f4,0 0 25px #03e9f4,0 0 50px #03e9f4,0 0 200px #03e9f4;-webkit-box-reflect:below 1px linear-gradient(transparent,#0005);}a:nth-child(1){filter: hue-rotate(270deg);}a:nth-child(2){filter: hue-rotate(110deg);}a span{position: absolute;display: block;}
        a span{top: 0;left: 0;width: 100%;height: 2px;background: linear-gradient(90deg,transparent,#03e9f4);animation: animate1 1s linear infinite;}
        @keyframes animate1{0%{left:-100%;}50%,100%{left: 100%;}}
        a span:nth-child(2){top:-100%;right: 0;width: 2px;height: 100%;background: linear-gradient(180deg, transparent,#03e9f4);animation: animate2 1s linear infinite;animation-delay: 0.25s;}
        @keyframes animate2{0%{top:-100%;}50%,100%{top: 100%;}}
        a span:nth-child(3){bottom:0%;right:0;width: 100%;height: 2px;background: linear-gradient(270deg, transparent,#03e9f4);animation: animate3 1s linear infinite;animation-delay: 0.50s;}
        @keyframes animate3{0%{right:-100%;}50%,100%{right: 100%;}}
        a span:nth-child(4){bottom:-100%;left:0;width: 2px;height: 100%;background: linear-gradient(360deg, transparent,#03e9f4);animation: animate4 1s linear infinite;animation-delay: 0.75s;}
        @keyframes animate4{0%{bottom:-100%;}50%,100%{bottom: 100%;}
}
</style>
  </head>
  <body>

      <script>

         num = prompt('¿Que tabla de Exponenciación quieres?');
         document.write('<center>');
         document.write('<h1 id="titulo">Tabla de Exponenciación del ' + num + '</h1>');
         document.write('<br><br>')
          document.write('<table border=5px cellspacing=20px cellpadding = 15px bgcolor=darkorange>');
         for ( i = 0; i <=10; i++) {
          producto = Math.pow(num,i);
          document.write('<tr><td>' + num + '  ^  ' + i + '  =  ' + producto + ' </td></tr>');
         }
          document.write('</table>');
          document.write('</center>');

      </script>

    <a href="/menu">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Regresar
    </a>

    <a href="/menu/salida">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Salir
    </a>


  </body>
</html>