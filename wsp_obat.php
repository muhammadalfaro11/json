<?php
	include'connection.php';
	error_reporting(0);
	
	header('Content-Type: application/json; charset-utf8');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Dispotition, Content-Description');
	
	$sql="select * from obat";
	$query=mysqli_query($con,$sql) or die(mysqli_error());
	$rest['obat']=array();
	while($data=mysqli_fetch_array($query))
	{
		$ft['kode']=$data['kode'];
		$ft['obat']=$data['obat'];
		$ft['produsen']=$data['produsen'];
		$ft['satuan']=$data['satuan'];
		$ft['harga']=$data['harga'];
		array_push($rest["obat"],$ft);
	}
	echo json_encode($rest);
?>