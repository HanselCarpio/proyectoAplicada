var bigMc = 0;
var mcFlurry = 0;
var mcWrap = 0;
var mcPapas = 0;
var refresco = 0;
var mcPolla = 0;
var bbqChrunchy = 0;
var ensalada = 0;
var guacamoleSantaFe = 0;
var papas = 0;
var pepsi2l = 0;
var twisterClasic = 0;
var brasileña = 0;
var cocaCola15 = 0;
var lasagnaPolla = 0;
var spaguettiNapolitano = 0;
var suprema = 0;
var chocoFresa = 0;
var chrunchyWrap = 0;
var fiestaFriesSupreme = 0;
var gorditaChrunchy = 0;
var pizzaMexicana = 0;
var xtremeChicken = 0;
var baconHuevoburrito = 0;
var churrasco = 0;
var costilla = 0;
var filetMignon = 0;
var marYtierra = 0;
var tBone = 0;
var chorizo = 0;
var BBB = 0;
var bBx = 0;
var pM = 0;

function remover() {
    document.getElementById("facturacion").classList.remove();
}


function cambiarMenuMc() {
    var aux1 = document.getElementById("campo1");
    var aux2 = document.getElementById("campo2");
    var aux3 = document.getElementById("campo3");

    aux1.innerHTML = '<div class="thumbnail text-center"><img src="img/mc/big_new_cr.png" alt="Mc" width="150" height="100"><p id="bigMc"><strong> Big Mc ¢3000 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'bigMc\')"></center><div class="thumbnail text-center"><img src="img/mc/mc-flurry-oreo_new_cr.png" alt="Mc" width="150" height="100"><p id="mcFlurry"><strong> Mc Flurry ¢1300 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'mcFlurry\')"></center>';
    aux2.innerHTML = '<div class="thumbnail text-center"><img src="img/mc/mc-wrap-classic.png" alt="Mc" width="150" height="100"><p id="mcWrap"><strong> Mc Wrap ¢2000 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'mcWrap\')"></center><div class="thumbnail text-center"><img src="img/mc/papas.png" alt="Mc" width="150" height="100"><p id="mcPapas"><strong> Papas ¢700 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'mcPapas\')"></center>';
    aux3.innerHTML = '<div class="thumbnail text-center"><img src="img/mc/COCA_1.png" alt="Mc" width="150" height="100"><p id="refresco"><strong> Refresco ¢700 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'refresco\')"></center><div class="thumbnail text-center"><img src="img/mc/pollo-mc-crispy_new_cr.png" alt="Mc" width="150" height="100"><p id="mcPolla"><strong> Pollo McCrispy ¢1000 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'mcPolla\')"></center>';
}

function cambiarMenuKFC() {
    var aux1 = document.getElementById("campo1");
    var aux2 = document.getElementById("campo2");
    var aux3 = document.getElementById("campo3");

    aux1.innerHTML = '<div class="thumbnail text-center"><img src="img/kfc/bbq_crunch.webp" alt="Mc" width="150" height="100"><p id="bbqChrunchy"><strong> BBQ Chrunchy ¢2600</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'bbqChrunchy\')"></center><div class="thumbnail text-center"><img src="img/kfc/ensalada.webp" alt="Mc" width="150" height="100"><p id="ensalada"><strong> ensalada ¢1400</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'ensalada\')"></center>';
    aux2.innerHTML = '<div class="thumbnail text-center"><img src="img/kfc/guacamole_santaFe.webp" alt="Mc" width="150" height="100"><p id="guacamoleSantaFe"><strong> Guacamole santa fe ¢2000</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'guacamoleSantaFe\')"></center><div class="thumbnail text-center"><img src="img/kfc/papas.webp" alt="Mc" width="150" height="100"><p id="papas"><strong> Papas ¢850</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'papas\')"></center>';
    aux3.innerHTML = '<div class="thumbnail text-center"><img src="img/kfc/pepsi.webp" alt="Mc" width="150" height="100"><p id="pepsi2l"><strong> Pepsi 2 lts ¢2300</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'pepsi2l\')"></center><div class="thumbnail text-center"><img src="img/kfc/Twister.webp" alt="Mc" width="150" height="100"><p id="twisterClasic"><strong> Twister Clasic ¢2100 </strong></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'twisterClasic\')"></center>';
}

function cambiarMenuPH() {
    var aux1 = document.getElementById("campo1");
    var aux2 = document.getElementById("campo2");
    var aux3 = document.getElementById("campo3");

    aux1.innerHTML = '<div class="thumbnail text-center"><img src="img/ph/brasilea.png" alt="Mc" width="150" height="100"><p id="brasileña"><strong> Brasileña ¢6500</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'brasileña\')"></center><div class="thumbnail text-center"><img src="img/ph/coca-cola-15-litros.png" alt="Mc" width="150" height="200"><p id="cocaCola15"><strong> Coca Cola 1.5 lts ¢1800</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'cocaCola15\')"></center>';
    aux2.innerHTML = '<div class="thumbnail text-center"><img src="img/ph/lasagna-de-pollo.png" alt="Mc" width="150" height="100"><p id="lasagnaPolla"><strong> Lasagna de pollo ¢2500</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'lasagnaPolla\')"></center><div class="thumbnail text-center"><img src="img/ph/spaguetti-napolitano.png" alt="Mc" width="150" height="100"><p id="spaguettiNapolitano"><strong> Spaguetti napolitano ¢2100</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'spaguettiNapolitano\')"></center>';
    aux3.innerHTML = '<div class="thumbnail text-center"><img src="img/ph/supreme.png" alt="Mc" width="150" height="100"><p id="suprema"><strong> Suprema ¢7500</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'suprema\')"></center><div class="thumbnail text-center"><img src="img/ph/choco-fresa.png" alt="Mc" width="150" height="100"><p id="chocoFresa"><strong> Choco Fresa ¢1400</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'chocoFresa\')"></center>';
}

function cambiarMenuTB() {
    var aux1 = document.getElementById("campo1");
    var aux2 = document.getElementById("campo2");
    var aux3 = document.getElementById("campo3");

    aux1.innerHTML = '<div class="thumbnail text-center"><img src="img/taco/crunchyWrap.png" alt="Mc" width="150" height="100"><p id="chrunchyWrap"><strong> Chrunchy Wrap ¢2100</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'chrunchyWrap\')"></center><div class="thumbnail text-center"><img src="img/taco/fiesta_fries.png" alt="Mc" width="150" height="100"><p id="fiestaFriesSupreme"><strong> Fiesta Fries Supreme ¢1475</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'fiestaFriesSupreme\')"></center>';
    aux2.innerHTML = '<div class="thumbnail text-center"><img src="img/taco/gordita_chrunchy.png" alt="Mc" width="150" height="100"><p id="gorditaChrunchy"><strong> Gordita Chrunchy ¢2300</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'gorditaChrunchy\')"></center><div class="thumbnail text-center"><img src="img/taco/mexica_pizza.png" alt="Mc" width="150" height="100"><p id="pizzaMexicana"><strong> Pizza Mexicana ¢2700</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'pizzaMexicana\')"></center>';
    aux3.innerHTML = '<div class="thumbnail text-center"><img src="img/taco/xtreme_chicken.png" alt="Mc" width="150" height="100"><p id="xtremeChicken"><strong> Xtreme Chicken ¢3000</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'xtremeChicken\')"></center><div class="thumbnail text-center"><img src="img/taco/bacon_huevo.png" alt="Mc" width="150" height="100"><p id="baconHuevoburrito"><strong> Bacon Huevo Burrito ¢1600</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'baconHuevoBurrito\')"></center>';
}

function cambiarMenuLC() {
    var aux1 = document.getElementById("campo1");
    var aux2 = document.getElementById("campo2");
    var aux3 = document.getElementById("campo3");

    aux1.innerHTML = '<div class="thumbnail text-center"><img src="img/casona/churrasco.jpg" alt="Mc" width="150" height="100"><p id="churrasco"><strong> Churasco ¢4800</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'churrasco\')"></center><div class="thumbnail text-center"><img src="img/casona/costilla.jpg" alt="Mc" width="150" height="100"><p id="costilla"><strong> costilla ¢6500</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'costilla\')"></center>';
    aux2.innerHTML = '<div class="thumbnail text-center"><img src="img/casona/filetmignon.jpg" alt="Mc" width="150" height="100"><p id="filetMignon"><strong> Filet Mignon ¢7000</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'filetMignon\')"></center><div class="thumbnail text-center"><img src="img/casona/marytierra.jpg" alt="Mc" width="150" height="100"><p id="marYtierra"><strong> Mar y Tierra ¢10000</strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'marYtierra\')"></center>';
    aux3.innerHTML = '<div class="thumbnail text-center"><img src="img/casona/tbone.jpg" alt="Mc" width="150" height="100"><p id="tBone"><strong> T Bone ¢8000 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'tBone\')"></center><div class="thumbnail text-center"><img src="img/casona/chorizo.jpg" alt="Mc" width="150" height="100"><p id="chorizo"><strong> Chorizo ¢3700 </strong></p></div><center><input id="botonAñadir" type="button" value="+" onclick="addCarrito(\'chorizo\')"></center>';
}

function compra() {
    alert("SU COMPRA HA SIDO REALIZADA CON EXITO");
    window.location.href = "index.html";
}

function addCarrito(id) {
    var imp = 0.13;
    var envio = 0.02;
    var aux = document.getElementById(id);
    var total;
    switch (id) {
        case "bigMc":
            bigMc = 3000;
            total = bigMc;
            document.getElementById("producto1").innerHTML = 'Big Mc' + ' ' + bigMc;
            break;
        case "mcFlurry":
            mcFlurry = 1300;
            total += mcFlurry;
            document.getElementById("producto2").innerHTML = 'McFlurry' + ' ' + mcFlurry;
            break;
        case "mcWrap":
            mcWrap = 2000;
            total += mcWrap;
            document.getElementById("producto3").innerHTML = 'McWrap' + ' ' + mcWrap;
            break;
        case "mcPapas":
            mcPapas = 700;
            total += mcPapas;
            document.getElementById("producto4").innerHTML = 'McPapas' + ' ' + mcPapas;
            break;
        case "refresco":
            refresco = 700;
            total += refresco;
            document.getElementById("producto5").innerHTML = 'Refresco' + ' ' + refresco;
            break;
        case "mcPolla":
            mcPolla = 1000;
            total += mcPolla;
            document.getElementById("producto6").innerHTML = 'Mc Pollo Crispy' + ' ' + mcPolla;
            break;
        case "bbqChrunchy":
            bbqChrunchy = 2600;
            total += bbqChrunchy;
            document.getElementById("producto7").innerHTML = 'BBQ Chtunchy' + ' ' + bbqChrunchy;
            break;
        case "ensalada":
            ensalada = 1400;
            total += ensalada;
            document.getElementById("producto8").innerHTML = 'Ensalada' + ' ' + ensalada;
            break;
        case "guacamoleSantaFe":
            guacamoleSantaFe = 2000;
            total += guacamoleSantaFe;
            document.getElementById("producto9").innerHTML = 'Guacamole Santa Fe' + ' ' + guacamoleSantaFe;
            break;
        case "papas":
            papas = 850;
            total += papas;
            document.getElementById("producto10").innerHTML = 'Papas' + ' ' + papas;
            break;
        case "pepsi2l":
            pepsi2l = 2300;
            total += pepsi2l;
            document.getElementById("producto11").innerHTML = 'Pepsi 2l' + ' ' + pepsi2l;
            break;
        case "twisterClasic":
            twisterClasic = 1000;
            total += twisterClasic;
            document.getElementById("producto12").innerHTML = 'Twister Clasico' + ' ' + twisterClasic;
            break;
        case "brasileña":
            brasileña = 6500;
            total += brasileña;
            document.getElementById("producto13").innerHTML = 'Brasileña' + ' ' + brasileña;
            break;
        case "cocaCola15":
            cocaCola15 = 1800;
            total += cocaCola15;
            document.getElementById("producto14").innerHTML = 'Coca Cola 1.5' + ' ' + cocaCola15;
            break;
        case "lasagnaPolla":
            lasagnaPolla = 2500;
            total += lasagnaPolla;
            document.getElementById("producto15").innerHTML = 'Lasagna Pollo' + ' ' + lasagnaPolla;
            break;
        case "spaguettiNapolitano":
            spaguettiNapolitano = 2100;
            total += spaguettiNapolitano;
            document.getElementById("producto16").innerHTML = 'Spaguetti Napolitano' + ' ' + spaguettiNapolitano;
            break;
        case "suprema":
            suprema = 7500;
            total += suprema;
            document.getElementById("producto17").innerHTML = 'Suprema' + ' ' + suprema;
            break;
        case "chocoFresa":
            chocoFresa = 1400;
            total += chocoFresa;
            document.getElementById("producto18").innerHTML = 'Choco Fresas' + ' ' + chocoFresa;
            break;
        case "chrunchyWrap":
            chrunchyWrap = 2100;
            total += chrunchyWrap;
            document.getElementById("producto19").innerHTML = 'Chrubchy Wrap' + ' ' + chrunchyWrap;
            break;
        case "fiestaFriesSupreme":
            fiestaFriesSupreme = 1300;
            total += fiestaFriesSupreme;
            document.getElementById("producto20").innerHTML = 'Fiesta Fries Supreme' + ' ' + fiestaFriesSupreme;
            break;
        case "gorditaChrunchy":
            gorditaChrunchy = 2300;
            total += gorditaChrunchy;
            document.getElementById("producto21").innerHTML = 'Gordita Chrunchy' + ' ' + gorditaChrunchy;
            break;
        case "pizzaMexicana":
            pizzaMexicana = 2700;
            total += pizzaMexicana;
            document.getElementById("producto22").innerHTML = 'Pizza Mexicana' + ' ' + pizzaMexicana;
            break;
        case "xtremeChicken":
            xtremeChicken = 3000;
            total += xtremeChicken;
            document.getElementById("producto23").innerHTML = 'Xtreme Chicken' + ' ' + xtremeChicken;
            break;
        case "baconHuevoBurrito":
            baconHuevoburrito = 1600;
            total += baconHuevoburrito;
            document.getElementById("producto24").innerHTML = 'Bacan Huevo Burito' + ' ' + baconHuevoburrito;
            break;
        case "churrasco":
            churrasco = 4800;
            total += churrasco;
            document.getElementById("producto25").innerHTML = 'Churrasco' + ' ' + churrasco;
            break;
        case "costilla":
            costilla = 6500;
            total += costilla;
            document.getElementById("producto26").innerHTML = 'Costilla' + ' ' + costilla;
            break;
        case "filetMignon":
            filetMignon = 7000;
            total += filetMignon;
            document.getElementById("producto27").innerHTML = 'Filet Mignon' + ' ' + filetMignon;
            break;
        case "marYtierra":
            marYtierra = 10000;
            total += marYtierra;
            document.getElementById("producto28").innerHTML = 'Mar y Tierra' + ' ' + marYtierra;
            break;
        case "tBone":
            tBone = 8000;
            total += tBone;
            document.getElementById("producto29").innerHTML = 'T Bone' + ' ' + tBone;
            break;
        case "chorizo":
            chorizo = 3700;
            total += chorizo;
            document.getElementById("producto30").innerHTML = 'Chorizo Argentino' + ' ' + chorizo;
            break;
        case "bigBellBox":
            BBB = 4000;
            total = total+BBB;
            document.getElementById("producto31").innerHTML = 'Big Bell Box' + ' ' + BBB;
            break;
        case "bigBox":
            bBx = 4800;
            total += bBx;
            document.getElementById("producto32").innerHTML = 'Big box' + ' ' + bBx;
            break;
        case "paqueteMedianas":
            pM = 13900;
            total += pM;
            document.getElementById("producto33").innerHTML = 'Paquete Medianas' + ' ' + pM;
            break;
    }
    document.getElementById("total").innerHTML = 'El total es de' + ' ' + total;
}