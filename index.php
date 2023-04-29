<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
     <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1><center>Bienvenido al menú digital</center></h1>
    <form action="recuento.php" method="POST">
    <center><h3>Ingrese su número de mesa:</h3><input type="number" name="nummesa"min=1 max=7 required></center>
    <div id="Alimentos">
        <span class="containerc">
            <span class="item"><h2></h2></span>
            <span class="item"><h2 style = "background:rgb(233, 77, 77)"><center>Alimentos</center></h2></span>
        </span>
        
    <div class="container">
        <span align="right"><br><br><img src=teques.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><h3><center>Tequeños</center></h3><h4><center>(5 pzas)</center></h4></span>
        <span align="left" class="item"><br><label>$100</label> <br><br><input type="number" id="teques" name="teques" min="0" max="10" value="0"></span>
        
        <span align="right"><br><br><img src=bollitos.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><h3><center>Bollitos</center></h3><h4><center>(4 pzas)</center></h4></span>
        <span align="left" class="item"><br><label>$70</label> <br><br><input type="number" name="bollitos" min="0" max="10"  value="0"></span>
        
        <span align="right"><br><br><img src=arepa.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><br><br><h3><center>Arepa de queso</center></h3></span>
        <span align="left" class="item"><br><label>$80</label> <br><br><input type="number" name="arepaq" min="0" max="10"  value="0"></span>
        
        <span align="right"><br><br><img src=arepa2.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><br><br><h3><center>Arepa de atún</center></h3></span>
        <span align="left" class="item"><br><label>$70</label> <br><br><input type="number" name="arepaa" min="0" max="10"  value="0"></span>
        
        <span align="right"><br><br><img src=pepito.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><h3><center>Pepito</center></h3><h4><center>(de carne)</center></h4></span>
        <span align="left" class="item"><br><label>$100</label> <br><br><input type="number" name="pepito" min="0" max="10"  value="0"></span>

    </div>
    </div>

    <div id="Bebidas">
        <span class="containerc">
            <span class="item"><h2></h2></span>
            <span class="item"><h2 style = "background:rgb(233, 77, 77)"><center>Bebidas</center></h2></span>
        </span>
        
    <div class="container">
        <span align="right"><br><br><img src=malta.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><h3><center>Malta</center></h3><h4><center>280mL</center></h4></span>
        <span align="left" class="item"><br><label>$45</label> <br><br><input type="number" name="malta" min="0" max="10"  value="0"></span>
        
        <span align="right"><br><br><img src=frescolita.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><h3><center>Frescolita</center></h3><h4><center>35mL</center></h4></span>
        <span align="left" class="item"><br><label>$60</label> <br><br><input type="number" name="frescolita" min="0" max="10"  value="0"></span>
        
        <span align="right"><br><br><img src=papelon.jpg style="border-radius: 50%"; width=100px height=100px></span>
        <span class="item"><br><br><h3><center>Papelón con limón</center></h3></span>
        <span align="left" class="item"><br><label>$30</label> <br><br><input type="number" name="papelon" min="0" max="10"  value="0"></span>
    </div>
    </div>
    <br><br><br><br><br>
    <center><input type="submit" class= "boton" value ="enviar"></center>
    <!-- <center><a href="recuento.php" class = "boton">Hacer recuento</a></center> -->
    </form>
</body>
<br><br><br>
<footer>Si necesita pedir más de 10 elementos de una misma cosa, tendrá que pedirlo directamente a alguien de nuestro personal de servicio.<br>
Creado por Maria Alejandra Marulanda Villasmil
</footer>
</html>