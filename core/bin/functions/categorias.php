<?php 
error_reporting(0);

$value=$_POST['value'];
$cat1=$_POST['cat1'];
$cat2=$_POST['cat2'];
$cat3=$_POST['cat3'];
$cat4=$_POST['cat4'];
$cat5=$_POST['cat5'];
$cat6=$_POST['cat6'];
$cat7=$_POST['cat7'];
$cat8=$_POST['cat8'];
$cat9=$_POST['cat9'];
$cat10=$_POST['cat10'];
$cat11=$_POST['cat11'];
$cat12=$_POST['cat12'];
$cat13=$_POST['cat13'];
$cat14=$_POST['cat14'];
$cat15=$_POST['cat15'];
$cat16=$_POST['cat16'];
$cat17=$_POST['cat17'];
$cat18=$_POST['cat18'];
$cat19=$_POST['cat19'];
$cat20=$_POST['cat20'];
$tipo1=$_POST['tipo1'];

if ($tipo1!=2) {
	$sql="SELECT * FROM categoria WHERE  Nombre NOT IN('$cat1','$cat2','$cat3','$cat4','$cat5','$cat6','$cat7','$cat8','$cat9','$cat10','$cat11','$cat12','$cat13','$cat14','$cat15','$cat16','$cat17','$cat18','$cat19','$cat20') AND Descripcion LIKE '%$value%' OR Nombre NOT IN('$cat1','$cat2','$cat3','$cat4','$cat5','$cat6','$cat7','$cat8','$cat9','$cat10','$cat11','$cat12','$cat13','$cat14','$cat15','$cat16','$cat17','$cat18','$cat19','$cat20') AND Nombre LIKE '%$value%' ";
}else{
	$sql="SELECT * FROM categoria WHERE  Nombre NOT IN('$cat1','$cat2','$cat3','$cat4','$cat5','$cat6','$cat7','$cat8','$cat9','$cat10','$cat11','$cat12','$cat13','$cat14','$cat15','$cat16','$cat17','$cat18','$cat19','$cat20') AND Descripcion LIKE '%$value%' AND Id_Clase NOT IN(2) OR Nombre NOT IN('$cat1','$cat2','$cat3','$cat4','$cat5','$cat6','$cat7','$cat8','$cat9','$cat10','$cat11','$cat12','$cat13','$cat14','$cat15','$cat16','$cat17','$cat18','$cat19','$cat20') AND Nombre LIKE '%$value%' AND Id_Clase NOT IN(2) ";

}



$top=24;
$left=10;
$c=2;
$id=0;
while($row = $db->recorrer($sql)){
	$id=$id+1;
?>
	
		<div class="selecat" id="sc<?php echo $id ?>" nombre="<?php echo $row['Nombre']; ?>" tipo="<?php echo $row['Id_Clase']; ?>" codigo="<?php echo $row['Id_Categoria']; ?>" style="z-index:1000; cursor:pointer; position:relative; left:; top:; margin:0% 0% 5% 8.6%; float:left; width:22%; height:40%; background:black; border-radius:10px; border-size:1px; border-color:black;">
			<img src="<?php echo $row['Imagen']; ?>" style="width:100%; height:100%; border-radius:10px;" alt="">				
			<div id="dessc<?php echo $id; ?>" style="width:100%; opacity:0; height:100%; position:absolute; display:; top:-70%; background:; align:center; vertical-align:middle;">
				<h4 style="color:white; opacity:1; "><?php echo $row['Nombre']; ?></h4>
				<p style="color:white; opacity:1;  font-size:0.7vw; line-height:1.6875;"><?php echo $row['Descripcion']; ?></p>	
			</div>	
				<div style="z-index:100; display:none;" class="checkboxFive">
		  			<input type="checkbox" class="unselectable"  value="<?php echo $row["Id_Categoria"];?>" id="<?php echo $row["Id_Categoria"];?>" name="categoria[]" />
				  	<label class="unselectable" for="<?php echo $row["Id_Categoria"];?>"></label>
				  	<input name="tipo[]" value="<?php echo $row['Id_Clase']; ?>" style="display:none;"></input>
			  	</div>
		</div>
		<?php	
		$c=$c+1;
		if(!is_int($c/2)){
			
			$top=53;
		}else{
			$left=$left+30;
			$top=24;
		}

}


 ?>






















