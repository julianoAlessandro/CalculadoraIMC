
<?php
$nome = $_GET['nome'];
$altura = $_GET['altura'];
$peso = $_GET['Peso'];
$IMC = $peso / ($altura * $altura);

    
if($IMC < 20){
	echo "<h2>Voce está abaixo do peso !!</h2><br>";
	echo "Seu imc é:".$IMC;


}

else if ($IMC > 20 && $IMC <= 25){
	echo "<h2>Seu peso está normal,sendo seu imc igual ha:</h2>";
	echo "Seu imc é:".$IMC;

}

else if ($IMC > 25 && $IMC <= 30){

	echo "<h2>Voce está com excesso de peso</h2>";
		echo "Seu imc é:".$IMC;

}

else if ($IMC > 30 && $IMC <= 35){
	echo "<h2>Voce está com obesidade</h2>";
	echo "Seu imc é:".$IMC;
}
else{
	echo "<h2>obesidade morbida</h2>";
	echo "Seu imc é:".$IMC;
}



?>