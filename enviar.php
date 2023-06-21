<?php
include('conexion.php');
$imagen=$_FILES['imagen'];
$nombre=$_POST['nombre']; 
if($imagen['type']=="image/jpg"or$imagen['type']=="image/png"){
   $nombreTemporal= $imagen["tmp_name"] ;
$ruta="fotos/".md5( $nombreTemporal).".jpg";
$query="INSERT INTO datos(nombre,foto) VALUES('$nombre','$ruta')";
$result=mysqli_query($connection,$query);
if(!$result){
    die("no se pudo guardar");
}else{
    move_uploaded_file( $nombreTemporal,$ruta);
    echo $ruta;
}


}else{
    echo "seleccione una correcta";
}
?>