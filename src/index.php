<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/icones/fleur.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/stylesDivers.css">
    <link rel="stylesheet" type="text/css" href="css/stylesBaniere.css">
    <link rel="stylesheet" type="text/css" href="css/stylesMenu.css">
    <link rel="stylesheet" type="text/css" href="css/stylesGalerie.css">
    <title>Galeries de fleurs</title>
  </head>
  <body>
    <div id="page">
      <img id="parametres" src="img/divers/parametres.png" onclick="changer_parametres()">
      <header>
        <div id="baniere" onclick="stopper_defilement()" ondblclick="lancer_defilement()">
          <img id="1" class="img_baniere visible" alt="baniere" src="img/baniere/baniere1.jpg">
          <img id="2" class="img_baniere cachee" alt="baniere" src="img/baniere/baniere2.jpg">
          <img id="3" class="img_baniere cachee" alt="baniere" src="img/baniere/baniere3.jpg">
          <img id="4" class="img_baniere cachee" alt="baniere" src="img/baniere/baniere4.jpg">
          <img id="5" class="img_baniere cachee" alt="baniere" src="img/baniere/baniere5.jpg">
          <img id="6" class="img_baniere cachee" alt="baniere" src="img/baniere/baniere6.jpg">
        </div>
        <nav>
          <ul>
            <li><a href="#" onclick="adapter_galerie('rose');">rose</a></li>
            <li><a href="#" onclick="adapter_galerie('hortensia');">hortensia</a></li>
            <li><a href="#" onclick="adapter_galerie('fruitier');">fruitier</a></li>
            <li><a href="#" onclick="adapter_galerie('autre');">autre</a></li>
          </ul>
       </nav>
      </header>
      <main>
        <div class="titrePage">
          <h1><span id="titre">Galerie de roses</span></h1>
        </div>
        <div class='galerie'>
          <div class='ligne_galerie'>
            <img id='fleur1' class='img_galerie' alt='rose1' title='rose' src='img/fleurs/rose/rose1.jpg'>
            <img id='fleur2' class='img_galerie' alt='rose2' title='rose' src='img/fleurs/rose/rose2.jpg'>
            <img id='fleur3' class='img_galerie' alt='rose3' title='rose' src='img/fleurs/rose/rose3.jpg'>
          </div>
          <div class='ligne_galerie'>
            <img id='fleur4' class='img_galerie' alt='rose4' title='rose' src='img/fleurs/rose/rose4.jpg'>
            <img id='fleur5' class='img_galerie' alt='rose5' title='rose' src='img/fleurs/rose/rose5.jpg'>
            <img id='fleur6' class='img_galerie' alt='rose6' title='rose' src='img/fleurs/rose/rose6.jpg'>
          </div>
        </div>
      </main>
      <footer onmouseover="construit_infobulle()" onmouseout="detruit_infobulle()">
        <p>JavaScript 2020</p>
        <p>TD1 - dynamiser les pages web</p>
      </footer>
    </div>
      <script type="text/javascript" src="js/scripts_td1.js"></script>
  </body>
</html>
