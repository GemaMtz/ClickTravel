<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Conexion extends PDO
			{
				private $tipo_de_base='mysql';
				private $host='localhost:3307';
				private $nombre_de_base='bd_chat_utc';
				private $usuario='root';
				private $contrasena='';

				public function __construct()
				{
					try
					{
						parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario,$this->contrasena);
					}
					catch(PDOException $e)	
					{
						echo 'Ha surgido un error y no se puede conecta a la B.D. Detalle: '.$e->getMessage();
					}
				}
			} 
	?>
</body>
</html>