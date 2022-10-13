<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Menu</title>

    <style>
@import url('https://fonts.googleapis,com/css2?family=Raleway:wght@400;700&display=swap');
#titulo{ color: rgb(0, 228, 49); margin: 3%}

*{margin: 0;padding: 0;box-sizing: border-box;}
body{display: flex;justify-content: center;align-items: center;height: 100vh;background: #151925;font-family: 'Raleway',sans-serif;font-weight: bold;}
a{position: relative;display: inline-block;padding: 25px 30px;margin: 40px 0;color: #09f3ff;text-decoration: none;text-transform: uppercase;
transition: 0.5s;letter-spacing: 4px;overflow: hidden;margin-right: 50px;}
a:hover{background: #03e9f4;color: #050801;box-shadow:0 0 5px #03e9f4,0 0 25px #03e9f4,0 0 50px #03e9f4,0 0 200px #03e9f4;    -webkit-box-reflect:below 1px linear-gradient(transparent,#0005);}
a:nth-child(1){filter: hue-rotate(270deg);}
a:nth-child(2){filter: hue-rotate(110deg);}
a span{position: absolute;display: block;}
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
    <h1 id="titulo">MENU</h1>

    <a href="menu/salida">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Salir
    </a>

    <a  href="menu/suma">
          Suma
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </a>
    <br>
    <a href="menu/mult">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Multiplicacion
    </a>
    <br>
    <a  href="menu/exp">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Exponente
    </a>
    <br>

</body>
</html>
