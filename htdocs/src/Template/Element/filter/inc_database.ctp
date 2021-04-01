<?php
$host     = "mysql"; // nome do container mysql
$dbname   = "information_schema";
$user     = "root";
$password = "root";

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM INNODB_METRICS limit 3;";
$consulta = $pdo->query($sql);
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
//echo "LOCALHOST TESTE BD MYSQL<br><br>";
//print_r($linha);
?>

<?php
$cursos=[
	['id'=>'85', 'name'=>'inter', 'details'=>
		[
			'level'=>'85', 'name'=>'Inter Starter','Livro'=>'English ID Starter - Editora Richmond', 'Editora'=>'Richmond','Edição'=>'','ISBN'=>'2222', 'Ativo'=>'sim', 'Gera Certificado'=>'não', 'Carga Horária'=>'47', 'Iniciante'=>'Sim', 'Idade Inciaal'=>'13', 'Idade Final(ano/mês)'=>'99', 'idade'=>'','Falta Reprova'=>'Sim', 'Nota Reprova'=>'Sim','Modalidade'=>'Presencial','Curso'=>'5', 'Font Color'=>'#000000','Background'=>'#bdd630',
		]
	],
	['id'=>'86', 'name'=>'inter', 'details'=>
		[
			'level'=>'85', 'name'=>'Starter','Livro'=>'English ID Starter - Editora Richmond', 'Editora'=>'Richmond','Edição'=>'','ISBN'=>'2222', 'Ativo'=>'sim', 'Gera Certificado'=>'não', 'Carga Horária'=>'47', 'Iniciante'=>'Sim', 'Idade Inciaal'=>'13', 'Idade Final(ano/mês)'=>'99', 'idade'=>'','Falta Reprova'=>'Sim', 'Nota Reprova'=>'Sim','Modalidade'=>'Presencial','Curso'=>'5', 'Font Color'=>'#000000','Background'=>'#bdd630',
		]
	],
	['id'=>'85', 'name'=>'inter', 'details'=>
		[
			'level'=>'85', 'name'=>'Starter','Livro'=>'English ID Starter - Editora Richmond', 'Editora'=>'Richmond','Edição'=>'','ISBN'=>'2222', 'Ativo'=>'sim', 'Gera Certificado'=>'não', 'Carga Horária'=>'47', 'Iniciante'=>'Sim', 'Idade Inciaal'=>'13', 'Idade Final(ano/mês)'=>'99', 'idade'=>'','Falta Reprova'=>'Sim', 'Nota Reprova'=>'Sim','Modalidade'=>'Presencial','Curso'=>'5', 'Font Color'=>'#000000','Background'=>'#bdd630',
		]
	],
	['id'=>'86', 'name'=>'inter', 'details'=>
		[
			'level'=>'85', 'name'=>'Starter','Livro'=>'English ID Starter - Editora Richmond', 'Editora'=>'Richmond','Edição'=>'','ISBN'=>'2222', 'Ativo'=>'sim', 'Gera Certificado'=>'não', 'Carga Horária'=>'47', 'Iniciante'=>'Sim', 'Idade Inciaal'=>'13', 'Idade Final(ano/mês)'=>'99', 'idade'=>'','Falta Reprova'=>'Sim', 'Nota Reprova'=>'Sim','Modalidade'=>'Presencial','Curso'=>'5', 'Font Color'=>'#000000','Background'=>'#bdd630',
		]
	],
];
?>