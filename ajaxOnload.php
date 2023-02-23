<?php 


include_once('condb.php');

//echo 'MARIO';
//DIE();

$TextoToH="";
$actualT="";
$actualN="";

$turnos="";
$ventanillasT="";
$sql = "select id_solicitud from ultimo ";
$id_solicitud_al_inicio = odbc_result(odbc_exec($link,$sql),"id_solicitud");
	
$sql = "select top 1 b.dependencia,b.id_dependencia,a.solicitud,c.posicion, hora_atencion, a.id_solicitud,b.letra from 
solicitud a, c_dependencias b, usuario c where 
(a.estatus = 'A') and a.id_dependencia = b.id_dependencia and
a.id_usuario = c.id_usuario and a.hablado is null and hora_atencion > DATEADD(DAY, DATEDIFF(DAY, 0, GETDATE()), 0) order by hora_atencion";

$paso = 0;
$result = odbc_exec($link,$sql);
$id_solicitud_u = 0;

$cuantos = cuantos($result);
//echo 'cuantos '.$cuantos;
$hablar = 1;
if( $cuantos == 0 ){	
	$sql = "select top 1 b.dependencia,b.id_dependencia,a.solicitud,c.posicion, hora_atencion, a.id_solicitud,b.letra from 
	solicitud a, c_dependencias b, usuario c where 
	a.id_dependencia = b.id_dependencia and
	a.id_usuario = c.id_usuario and hora_atencion > DATEADD(DAY, DATEDIFF(DAY, 0, GETDATE()), 0) order by hora_atencion desc";
	
	//echo $sql;
	$result = odbc_exec($link,$sql);
	$id_solicitud_u = 0;
	$hablar = 0;
}
?>

<?
while(odbc_fetch_array($result)){
		$dependencia = odbc_result($result,"dependencia");
 		$tramite = trim(odbc_result($result,"letra")).'-'.odbc_result($result,"solicitud");
		$ventanilla= odbc_result($result,"posicion");
		
		if ($paso == 0){
			$id_solicitud_u = odbc_result($result,"id_solicitud");
			$paso = 1;

		}

		

		?>


<? 
}
?>
<?
	  $sql_1 = "select top 5 b.dependencia,b.id_dependencia,a.solicitud,c.posicion,c.lugar as lugar1, hora_atencion, a.id_solicitud,b.letra from 
solicitud a, c_dependencias b, usuario c where 
a.estatus = 'A' and a.id_dependencia = b.id_dependencia and
a.id_usuario = c.id_usuario order by hora_atencion desc";


	$result_1 = odbc_exec($link,$sql_1);
	
		
//die();
//die($output):
     while(odbc_fetch_array($result_1)){

		$dependencia_1 = odbc_result($result_1,"dependencia");
 		$tramite_1 = trim(odbc_result($result_1,"letra")).'-'.trim(odbc_result($result_1,"solicitud"));

		$ventanilla_1=trim(odbc_result($result_1,"posicion"));
		$lugar=trim(odbc_result($result_1,"lugar1"));
		
		//lista de llamados
		
		//$TextoToH=$texto1;
		
		$turnos.=$tramite_1.',';
		$ventanillasT.=$lugar.',';
		
		
		//substr("pruebacadenas", 2);
			
//die();
		?>


<?}
$turnos=substr($turnos,0,-1);
$ventanillasT=substr($ventanillasT,0,-1);
?>

<?

$sql = "select id_solicitud, hablado from ultimo";
$result = odbc_exec($link,$sql);
$id_solicitud = odbc_result($result,"id_solicitud");




if ($id_solicitud_u <> $id_solicitud){
	$sql = "update ultimo set id_solicitud = $id_solicitud_u,hablado = 'N' ";
	odbc_exec($link,$sql);
//echo 'entre a cambiar ultimo';
}

$sql = "select hablado from solicitud where id_solicitud = $id_solicitud_u";
$result = odbc_exec($link,$sql);

$hablado = odbc_result($result,"hablado");






	
if ($hablar == 1)  {
//echo 'entre';
//die();
	$sql = "select id_solicitud from ultimo ";
	$id_solicitud = odbc_result(odbc_exec($link,$sql),"id_solicitud");
	$sql = "select top 1 b.dependencia,b.id_dependencia,a.solicitud,c.posicion,c.lugar as lugar1, hora_atencion, a.id_solicitud,b.letra from 
	solicitud a, c_dependencias b, usuario c where 
	a.id_solicitud = $id_solicitud and a.id_dependencia = b.id_dependencia and
	a.id_usuario = c.id_usuario ";

	//$sql = "select top 1 dependencia,id_dependencia,solicitud,posicion,hora_atencion, id_solicitud,letra from prueba_filas order by id_solicitud desc";

	$result = odbc_exec($link,$sql);
	
	//echo $sql;
	//die();
		$dependencia = odbc_result($result,"dependencia");
		//$tramite = (odbc_result($result,"id_dependencia").'-'.odbc_result($result,"solicitud");
 		$tramite = trim(odbc_result($result,"letra")).'-'.odbc_result($result,"solicitud");

		$ventanilla= odbc_result($result,"posicion");
		$lugar=trim(odbc_result($result,"lugar1"));
			
		$texto = ' '.$tramite.'  '.$ventanilla;
		//$texto = $texto.' '.$texto;
		//echo 'entre '.$texto.'<br>';
		
		/* --- */
 		$tramite1 = trim(odbc_result($result,"letra")).'  '.odbc_result($result,"solicitud");
		//hablado principal
		$texto1 = 'Turno '.$tramite1.'  '.$ventanilla;
		
		$actualT=$tramite1;
		$actualN=$lugar;
		$TextoToH=$texto1;

		/* --- */

	$sql = "update solicitud set hablado = 'S' where id_solicitud = $id_solicitud";
    odbc_exec($link,$sql);	

	$sql = "update ULTIMO set hablado = 'S'";
    odbc_exec($link,$sql);	
	?>
	



<? 
		
		
		} 

//array a enviar;
//Turno actual con habla
	
//Turnos llamados


$data = array();
$data["turnos"]=trim($turnos);
$data["ventanillas"]=trim($ventanillasT);
$data["hablar"]=utf8_encode($TextoToH);
$data["actualT"]=trim($actualT);
$data["actualN"]=trim($actualN);


echo json_encode($data);


	//echo substr($actualT,0, -1);


function cuantos($result)
{
	$cuantos = 0;
	while($i =odbc_fetch_array( $result )){
		$cuantos++;
	}
	@odbc_fetch_row($result, 0); 

	return $cuantos;

}
?>
