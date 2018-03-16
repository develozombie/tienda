<img src="img/bcp1.jpg" width="300px" /></br>
<?php
phpinfo();
$file = '/aci/logs/log.txt';
if(is_file($file))
{
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current .= date("Y-m-d").'\t'.$_SERVER['REMOTE_ADDR']."\n";
    // Write the contents back to the file
    file_put_contents($file, $current);
}
else
{
    file_put_contents($file, "");
}
?>
