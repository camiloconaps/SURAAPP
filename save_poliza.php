<?php
require_once("../../atenea_web/setup.php");
require_once("../../atenea_web/configs/conexion.php");
$conn = abrirbd ();

$usuario= $_POST[sura_use];
$cnt_polizas= $_POST[sura_cpo];
$telefono= $_POST[sura_tel];
$nic= $_POST[sura_nic];

$prod1= $_POST[sura_pr1];
$npoliza1= $_POST[sura_np1];
$plan1= $_POST[sura_pl1];
$fil1= $_POST[sura_fi1];

$prod2= $_POST[sura_pr2];
$npoliza2= $_POST[sura_np2];
$plan2= $_POST[sura_pl2];
$fil2= $_POST[sura_fi2];

$superv= $_POST[sura_sup];


$sql_id_cliente = query ( "select SEQ_IDCLIENTES.NEXTVAL from dual" );
                $row2 = fetch ( $sql_id_cliente );
                $id_cliente_gest = $row2 [NEXTVAL];

                $sql_fec = query ( "SELECT (SYSDATE + 2) FECHA FROM DUAL" );
                $row_sql_fec = fetch ( $sql_fec );
                $fecha_arm = $row_sql_fec [FECHA];

/*$upload_folder ='./carga';
$nombre_archivo = $_FILES['fil1']['name'];
$tipo_archivo = $_FILES['fil1']['type'];
$tamano_archivo = $_FILES['fil1']['size'];
$tmp_archivo = $_FILES['fil1']['tmp_name'];
$archivador = $upload_folder . '/' . $nombre_archivo;
if (!move_uploaded_file($tmp_archivo, $archivador)) {
	//var_sum
	echo "no cargo";
}
*/
$pdate= date("Y/m/d H:i:s");

query ( "ALTER SESSION SET NLS_DATE_FORMAT = 'yyyy/mm/dd hh24:mi:ss'", 0 );
query ( "INSERT INTO CRMTP_CLIENTES (ID_CLIENTE,ID_CAMPANA,ID_EMPRESA,ID_LISTA,ID_CARGUE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, CONVENIDO1, CONVENIDO3, CONVENIDO4, CONVENIDO5, CONVENIDO6, CONVENIDO7, CONVENIDO8, CONVENIDO9, CONVENIDO21, PRIMER_NOMBRE, SEGUNDO_NOMBRE) VALUES ($id_cliente_gest,4955,149,8081,0, '$telefono','$nic','$prod1','$npoliza1','$plan1','$fil1','$prod2','$npoliza2','$plan2','$fil2',sysdate,'$usuario','$cnt_polizas') ", 0 );

query ( "INSERT INTO CRMTP_CLIENTES_GESTION (ID_CLIENTE,ID_LISTA,ID_CAMPANA_EMPRESA,ID_CARGUE,INTENTOS,ESTADO) VALUES($id_cliente_gest,8081,4955,0,0,0)",0);

query ( "INSERT INTO CRMTP_DB_LISTAS (ID_CAMPANA_EMPRESA,ID_LISTA,ID_CLIENTE,FECHA_HORA_CONTACTO,PRIORIDAD,TIPO_GESTION,ID_CARGUE,COMENTARIO,ID_USUARIO,ESTADO,ID_CALIFICACION) SELECT ID_CAMPANA,ID_LISTA,ID_CLIENTE,'','','',ID_CARGUE,'','',0,'' FROM CRMTP_CLIENTES WHERE ID_CAMPANA=4955 AND ID_CLIENTE=$id_cliente_gest", 0 );

if($npoliza2 == ""){
query ( "INSERT INTO MODCTB_SURA_DET_AUDITORIA (ID_DETALLE,NIC_ID,PRODUCTO,N_POLIZA,PLAN,ADJUNTO,VENDOR,SUPERVISOR) VALUES (MODCTB_SURA_DET_AUDITORIA_SEQ.NEXTVAL,'$nic', '$prod1', '$npoliza1', '$plan1', '$fil1', '$usuario', '$superv')",0);
}else{
query ( "INSERT INTO MODCTB_SURA_DET_AUDITORIA (ID_DETALLE,NIC_ID,PRODUCTO,N_POLIZA,PLAN,ADJUNTO,VENDOR,SUPERVISOR) VALUES (MODCTB_SURA_DET_AUDITORIA_SEQ.NEXTVAL,'$nic', '$prod1', '$npoliza1', '$plan1', '$fil1', '$usuario', '$superv')",0);
query ( "INSERT INTO MODCTB_SURA_DET_AUDITORIA (ID_DETALLE,NIC_ID,PRODUCTO,N_POLIZA,PLAN,ADJUNTO,VENDOR,SUPERVISOR) VALUES (MODCTB_SURA_DET_AUDITORIA_SEQ.NEXTVAL,'$nic', '$prod2', '$npoliza2', '$plan2', '$fil2', '$usuario', '$superv')",0);
}


echo json_encode("Inserto la(s) siguiente(s) poliza(s): ".$npoliza1." ".$npoliza2);
//echo $idusuario;
exit();
?>

