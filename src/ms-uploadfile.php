<?php

$dir_subida = 'img/';
$fichero_subido = $dir_subida . $_FILES['fileToUpload']['name'];

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fichero_subido)) {
    header("Location: subirAzure.php?archivo=" . $_FILES["fileToUpload"]["name"]);
} else {
    
}
?>
