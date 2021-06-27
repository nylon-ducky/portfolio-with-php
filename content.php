
<?php
function postName() {
//$posts = array();
$name = $_POST['name'];
$message = $_POST['message'];

$whole = '<div class="card"><header class="posterNames">' . $name . '</header><br/><p class="posterMessage">' . $message . '</p></div>';

echo $whole;

}
?>