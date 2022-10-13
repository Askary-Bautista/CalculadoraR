@extends('layouts.plantilla')
@section('title','Salida')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
          #titulo{ font-family: 'Fredoka One';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://fonts.gstatic.com/s/fredokaone/v13/k3kUo8kEI-tA1RRcTZGmTlHGCac.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
          a{position: relative;display: inline-block;padding: 25px 30px;margin: 40px 0;color: #09f3ff;text-decoration: none;text-transform: uppercase;transition: 0.5s;letter-spacing: 4px;overflow: hidden;margin-right: 50px;}a:hover{background: #03e9f4;color: #030501;box-shadow:0 0 5px #03e9f4,0 0 25px #03e9f4,0 0 50px #03e9f4,0 0 200px #03e9f4;-webkit-box-reflect:below 1px linear-gradient(transparent,#0005);}a:nth-child(1){filter: hue-rotate(270deg);}a:nth-child(2){filter: hue-rotate(110deg);}a span{position: absolute;display: block;}
          a span{top: 0;left: 0;width: 100%;height: 2px;background: linear-gradient(90deg,transparent,#03e9f4);animation: animate1 1s linear infinite;}
          @keyframes animate1{0%{left:-100%;}50%,100%{left: 100%;}}
          a span:nth-child(2){top:-100%;right: 0;width: 2px;height: 100%;background: linear-gradient(180deg, transparent,#03e9f4);animation: animate2 1s linear infinite;animation-delay: 0.25s;}
          @keyframes animate2{0%{top:-100%;}50%,100%{top: 100%;}}
          a span:nth-child(3){bottom:0%;right:0;width: 100%;height: 2px;background: linear-gradient(270deg, transparent,#03e9f4);animation: animate3 1s linear infinite;animation-delay: 0.50s;}
          @keyframes animate3{0%{right:-100%;}50%,100%{right: 100%;}}
          a span:nth-child(4){bottom:-100%;left:0;width: 2px;height: 100%;background: linear-gradient(360deg, transparent,#03e9f4);animation: animate4 1s linear infinite;animation-delay: 0.75s;}
          @keyframes animate4{0%{bottom:-100%;}50%,100%{bottom: 100%;}}
          .container span {
  font-size: 120pt;
  font-weight: bold;
  position: relative;
  font-family: "Fredoka One";
  cursor: pointer;
  transition: all 300ms ease-in-out;
}
.container span::before {
  content: var(--l);
  position: absolute;
  transform: scale(1.1);
  filter: blur(15px);
}

.container span:hover {
  filter: contrast(250%);
}
.container span:nth-child(1) {
  color: #00bef8;
}
.container span:nth-child(2) {
  color: #ff0697;
}
.container span:nth-child(3) {
  color: #ff4d00;
}
.container span:nth-child(4) {
  color: #ffe600;
}
.container span:nth-child(5) {
  color: #bb00ff;
}
.container span:nth-child(6) {
  color: #00bef8;
}
.container span:nth-child(7) {
  color: #ff0697;
}
.container span:nth-child(8) {
  color: #ff4d00;
}
.container span:nth-child(9) {
  color: #ffe600;
}
.container span:nth-child(10) {
  color: #bb00ff;
}
.container span:nth-child(11) {
  color: #ffe600;
}
.container span:nth-child(12) {
  color: #bb00ff;
}
.container span:nth-child(13) {
  color: #bb00ff;
}
    </style>
</head>
<body>
<center>
    <div class="container">
        <span style="--l: 'H';">H</span>
        <span style="--l: 'a';">a</span>
        <span style="--l: 's';">s</span>
        <span style="--l: 't';">t</span>
        <span style="--l: 'a';">a</span>

        <span style="--l: 'P';">P</span>
        <span style="--l: 'r';">r</span>
        <span style="--l: 'o';">o</span>
        <span style="--l: 'n';">n</span>
        <span style="--l: 't';">t</span>
        <span style="--l: 'o';">o</span>
        <span style="--l: '!';">!</span>
        <span style="--l: '!';">!</span>

      </div>

    <br>
    <img src="https://ep01.epimg.net/verne/imagenes/2014/12/11/articulo/1418337149_292419_1418378736_sumario_normal.gif" alt="">
    <br><br>

    <a href="/menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Regresar
    </a>
</center>
</body>
</html>
