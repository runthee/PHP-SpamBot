<?PHP

include("funcs/all.php");

$msg = file_get_contents("data/text");
$ip = file_get_contents("data/ip");
$id = file_get_contents("data/id");

spam($msg,$id);
file_put_contents("data/stats","Spaming...");
?>
