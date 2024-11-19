<!DOCTYPE html>
<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Alumno {
private $nombre;
private $nota1;
private $nota2;
private $nota3;

public function inicializar($nom, $n1, $n2, $n3)
{
$this->nombre = $nom;
$this->nota1 = $n1;
$this->nota2 = $n2;
$this->nota3 = $n3;
}

public function calcularMedia()
{
    return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
}

public function imprimir()
{
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Media: " . $this->calcularMedia() . "<br><br>";
}
}

$alum1 = new Alumno();
$alum1->inicializar('Juan', 4, 5, 6);
$alum1->imprimir();

$alum2 = new Alumno();
$alum2->inicializar('Ana', 7, 1, 4);
$alum2->imprimir();

$alum3 = new Alumno();
$alum3->inicializar('pepe', 3, 1, 8);
$alum3->imprimir();
?>
</body>
</html>