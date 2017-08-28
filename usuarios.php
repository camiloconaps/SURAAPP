<?php
$uspv = $_POST[sura_sperv];
$array = array();

$conn = @oci_connect("crmicc", "123", "192.168.100.202/WEB.interactivo.com.co");
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$pdate = date("Y/m/d");
$stid = oci_parse($conn, "ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD HH24:MI:SS'");
oci_execute($stid);

$stid = oci_parse($conn, "select * FROM MODCTB_SURA_USER_AUDITORIA WHERE SUPERVISOR=".$uspv );
oci_execute($stid);
$filas=0;
$idusuario="error";
while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
        $array[$row[ID_USER]] = $row[NOMBRE];
$filas++;
}

oci_free_statement($stid);
oci_close($conn);

echo json_encode($array);
exit();
?>

