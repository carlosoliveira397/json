<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Meu primeiro Json</title>
	<meta charset="utf-8"/>
	<style>
		table {
			margin-left: 35%;
		}
		tr:nth-child(even) {background-color: #BFEFFF;}
	</style>
</head>
<body>
	<?php
		$arq_json = json_decode( file_get_contents('https://dados.antt.gov.br/dataset/4720d6b2-f133-41d8-bbcd-a50f487ee3d6/resource/e0d6f0ac-03c6-4884-9ccb-2de9e836d7b3/download/veiculos_habilitados.json'));
		//var_dump($arq_json);
			echo "<table border=2>";
		//for ( $j = 0; $j < count($arq_json->features); $j++ ) 
		for ( $j = 0; $j < 10; $j++ ) 
		{
			echo "<tr>";
			echo "<td>"."Razão Social: "."</td>\n"."<td>".$arq_json->veiculos_habilitados[$j]->razao_social."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."CNPJ: "."</td>\n"."<td>".$arq_json->veiculos_habilitados[$j]->cnpj."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."Serviço Regular: "."</td>\n"."<td>".$arq_json->veiculos_habilitados[$j]->servico_regular."</td>";
			echo "</td>";
			echo "<tr>";
			echo "<td colspan=2>"."<br>"."</td>";
			echo "<br>";
			
		}
			echo "</table>";
	?>
</body>
</html>