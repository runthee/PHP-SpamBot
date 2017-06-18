<?PHP

include("../../config/ranks/admin.php");
include("../../config/token.php");

$msg = file_get_contents("../../data/text");
$ip = file_get_contents("../../data/ip");
$id = file_get_contents("../../data/id");

file_get_contents("http://api.telegram.org/bot".$token."/sendmessage?chat_id=".$id."&text=".$text);
exec("php smsg-2.php");
?>
