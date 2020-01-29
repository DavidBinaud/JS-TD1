
function adapter_galerie(nom) {
  for(let i = 1; i <= 6; i++) {
    let image = document.getElementById('fleur' + i);
    image.src = 'img/fleurs/' + nom + '/' + nom + i + '.jpg';
    image.title = nom + i;
    image.alt = nom + i;
  }
  adapter_titre(nom);
}

function cacher(im){
    im.classList.remove("visible");
    im.classList.add("cachee");
}

function afficher(im){
    im.classList.remove("cachee");
    im.classList.add("visible");
}

function suivant(n){
  return (n == 6? 1 : n + 1);
}

function change_baniere_v1(){
  let baniere = document.getElementsByClassName("visible")[0];
  let number = suivant(baniere.id * 1);
  cacher(baniere);
  afficher(document.getElementById(number));
}

function change_baniere_v2(){
  let baniere = document.getElementsByClassName("visible")[0];
  let number = suivant(baniere.id * 1);
  baniere.style.transition = "opacity 3s";
  cacher(baniere);
  afficher(document.getElementById(number));
}

function adapter_titre(nom){
  let titre = document.getElementById("titre");
  titre.innerHTML = tabTitres[nom];
}

function stopper_defilement(){
  clearInterval(chb);
}

function lancer_defilement(){
  chb = setInterval(change_baniere_v2,6000);
}

function construit_infobulle() {
   let info = document.createElement('div');
   info.innerHTML = "<p>c'est moi la bulle !</p>";
   info.id = "bulle";
   info.style.position = "fixed";
   info.style.top = "100px";
   info.style.right = "150px";
   info.style.backgroundColor = "darkblue";
   info.style.color = "white";
   info.style.borderRadius = "25px";
   info.style.padding = "10px";
   info.style.textAlign = "center";
   info.style.boxShadow = "10px 10px 10px lightblue";
   document.body.appendChild(info);
}


function detruit_infobulle() {
   let info = document.getElementById('bulle');
   document.body.removeChild(info);
 }

 function changer_parametres(){
  let number = actualBG;
  while( number == actualBG){
     number = Math.floor(Math.random() * (4 - 1 + 1)) + 1;
  }
  actualBG = number;
  let name = 'img/background/bg-' + number + '.jpg';
  console.log(number);
  document.body.style.transition = "opacity 3s";
  document.body.style.backgroundImage = "url(" + name + ")";
 }


let actualBG = 4;
let chb = setInterval(change_baniere_v2,6000);
let tabTitres = {
 'rose' : 'Galerie de roses',
 'hortensia': 'Galerie d\’hortensias',
 'fruitier': 'Galerie de fruitiers',
 'autre': 'Galerie de fleurs diverses'
 };