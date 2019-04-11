<?php

$dir_subida = 'img/';
$fichero_subido = $dir_subida . basename($_FILES['fileToUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";

header("Location: subirAzure.php?archivo="+$_FILES["fileToUpload"]["name"]);
?>
