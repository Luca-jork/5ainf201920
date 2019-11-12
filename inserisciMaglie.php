<?php

	$username = $_REQUEST["username"];
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];

	$maglia = $_REQUEST["maglia"];

	$filtricolore = $_REQUEST["colore"];
	$filtritaglia = $_REQUEST["taglia"];
	$filtriprezzo = $_REQUEST["prezzo"];
	$filtricollezione = $_REQUEST["collezione"];
	$filtribrand = $_REQUEST["brand"];

	$debug=1;
	if($debug){
		echo "username: ".$username."</br>";
		echo "email: ".$email."</br>";
		echo "password: ".$password."</br>";
		echo "maglia: ".$maglia."</br>";

		echo "colore : ";
		foreach($filtricolore as $colore){
			echo $colore.", ";
		}

		echo "taglia : ";
		foreach($filtritaglia as $taglia){
			echo $taglia.", ";
		}

		echo "prezzo : ";
		foreach($filtriprezzo as $prezzo){
			echo $prezzo.", ";
		}

		echo "collezione : ";
		foreach($filtricollezione as $collezione){
			echo $collezione.", ";
		}

		echo "colore : ";
		foreach($filtribrand as $brand){
			echo $brand.", ";
		}


	}

?>