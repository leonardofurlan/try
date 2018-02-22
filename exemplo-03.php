<?php 

function trataNome($name){

	if($name == 1){

		throw new Exception("Nenhum nome foi informado.", 1);
		
	}

	echo $name."<br>";

}

try {

	
	trataNome(1);	
	trataNome("Joao");

} catch(Exception $e) {

	echo $e->getMessage();

} finally {

	echo "Executou o Try!";

}

 ?>