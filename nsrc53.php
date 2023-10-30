<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
$mysqli = new mysqli('localhost', 'admin', '1234', 'db_nsrc_53');
if ($_GET['cmd'] == 'signIn') {

} elseif ($_GET['cmd'] == 'accountSel') {
    echo json_encode($mysqli->query('select * from ac')->fetch_all(MYSQLI_ASSOC));
} elseif ($_GET['cmd'] == 'accountIns') {

} elseif ($_GET['cmd'] == 'accountUpd') {

} elseif ($_GET['cmd'] == 'accountDel') {

} elseif ($_GET['cmd'] == 'productSel') {
    echo json_encode($mysqli->query('select * from pd')->fetch_all(MYSQLI_ASSOC));
} elseif ($_GET['cmd'] == 'productIns') {

} elseif ($_GET['cmd'] == 'productUpd') {

} elseif ($_GET['cmd'] == 'productDel') {

} elseif ($_GET['cmd'] == 'modulesSel') {
    echo json_encode($mysqli->query('select * from md')->fetch_all(MYSQLI_ASSOC));
} elseif ($_GET['cmd'] == 'modulesIns') {

} elseif ($_GET['cmd'] == 'modulesUpd') {

} elseif ($_GET['cmd'] == 'modulesDel') {

} elseif ($_GET['cmd'] == 'modulesCard') {
    echo json_encode($mysqli->query('select * from pd join md using (mid)')->fetch_all(MYSQLI_ASSOC));
} else {
    echo 'error';
}
