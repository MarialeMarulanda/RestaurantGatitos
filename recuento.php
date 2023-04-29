<?php
if(isset($_POST['teques'])){ $teques = $_POST['teques']; }
if(isset($_POST['bollitos'])){ $bollitos=$_POST['bollitos']; }
if(isset($_POST['arepaq'])){ $arepaq=$_POST['arepaq']; }
if(isset($_POST['arepaa'])){ $arepaa=$_POST['arepaa']; }
if(isset($_POST['pepito'])){ $pepito=$_POST['pepito']; }
if(isset($_POST['malta'])){ $malta=$_POST['malta']; }
if(isset($_POST['frescolita'])){ $frescolita=$_POST['frescolita']; }
if(isset($_POST['papelon'])){ $papelon=$_POST['papelon']; }
$nummesa=$_POST['nummesa'];
$total;
$total=(($teques*100)+($bollitos*70)+($arepaq*80)+($arepaa*70)+($pepito*100)+($malta*45)+($frescolita*60)+ ($papelon*30));

?>
<link href="style.css" rel="stylesheet" type="text/css">
<body><center><br><br><br>
    <h1>Recuento para la mesa <?php echo"$nummesa";?></h1>
        <h3>Su orden contiene:</h3>
        <div>
            <?php
            if($teques==0 and $bollitos==0 and $arepaq==0 and $arepaa==0 and 
                $pepito==0 and $malta==0 and $frescolita==0 and $papelon==0){
                    echo"NADA. No has pedido nada, vuelve y ordena algo :)<br><br><br>";
                }else{
                    if($teques == 1){echo " <br>1    orden de tequeños "; }
                    if($teques>1){echo "<br>$teques    ordenes de tequeños"; }
                    if($bollitos == 1){echo "<br>1    orden de bollitos.";}
                    if($bollitos>1){echo "<br>$bollitos    orndenes de bollitos";}
                    if($arepaq==1){echo "<br>1    arepa de queso";}
                    if($arepaq>1){echo "<br>$arepaq    arepas de queso";}
                    if($arepaa==1){echo "<br>1    arepa de atún";}
                    if($arepaa>1){echo "<br>$arepaa    arepas de atún";}
                    if($pepito==1){echo "<br>1    pepito";}
                    if($pepito>1){echo "<br>$pepito    pepitos";}
                    if($malta==1){echo "<br>1    malta";}
                    if($malta>1){echo "<br>$malta    maltas";}
                    if($frescolita==1){echo "<br>1    frescolita";}
                    if($frescolita>1){echo "<br>$frescolita    frescolitas";}
                    if($papelon==1){echo "<br>1    papelón con limón";}
                    if($papelon>1){echo "<br>$papelon    papelones con limón";}
                    echo "<br><br><h3>Su total a pagar sería de<br> $ $total.00";
                    echo '<br><br><br><a href="confirmacion.php" class="boton">Confirmar</a>';
            }
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.php" class="boton">Volver</a>
       <div>
    </div>
</center></body>

<script>

</script>