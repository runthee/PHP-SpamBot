<?php

function move($old,$new){
    rename($old, $new);
}

function spam($id,$msg){

//Set Text Spam
$msgfile = fopen("data/text", "w") or die("Unable to have New User!");
$txt = $msg;
fwrite($msgfile, $txt);
fclose($msgfile);

//Set Gpid
$idfile = fopen("data/gpid", "w") or die("Unable to have New User!");
$txt = $id;
fwrite($idfile, $txt);
fclose($idfile);

//Start Spaming
move("plugs/D/smsg-1.php","plugs/E/smsg-1.php");
move("plugs/D/smsg-2.php","plugs/E/smsg-2.php");
file_get_contents("plugs/D/smsg-1.php");

}

?>
