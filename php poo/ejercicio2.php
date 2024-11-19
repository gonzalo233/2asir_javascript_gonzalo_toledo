<html>
<head>
<title>2ASIR</title>
</head>
<body>
<?php
class clase_2asir {
  private $nombre;
  private $nota;
  public function Inicializar($nom, $nota)
  {
    $this->nombre=$nom;
    $this->nota=$nota;
  }
  public function Visualizar()
  {
    echo $this->nombre."  ".$this->nota;
    echo "<br>";
  }
}

$alumno1=new clase_2asir();
$alumno1->Inicializar('Juan', 8);
$alumno1-> Visualizar();

$alumno2=new clase_2asir();
$alumno2->inicializar('Ana', 9);
$alumno2->Visualizar();
?>
</body>
</html>