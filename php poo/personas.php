<!DOCTYPE html>
<html>
<head>
    <title>Pruebas</title>
</head>
<body>
<?php
class Persona {
    protected $nombre;

    public function inicializar($nom)
    {
        $this->nombre = $nom;
    }

    public function visualizar()
    {
        echo "Nombre: " . $this->nombre . "<br>";
    }
}

class Alumno extends Persona {
    private $nota1;
    private $nota2;
    private $nota3;

    public function inicializarAlumno($nom, $n1, $n2, $n3)
    {
        $this->inicializar($nom);
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function visualizar()
    {
        parent::visualizar();  
        echo "Media: " . $this->calcularMedia() . "<br><br>";
    }
}

class Profesor extends Persona {
    private $modulo;

    public function inicializarProfesor($nom, $mod)
    {
        $this->inicializar($nom);  
        $this->modulo = $mod;
    }

    public function visualizar()
    {
        parent::visualizar(); 
        echo "Módulo: " . $this->modulo . "<br><br>";
    }
}

$alumno1 = new Alumno();
$alumno1->inicializarAlumno('Juan', 7, 8, 9);
$alumno1->visualizar();

$alumno2 = new Alumno();
$alumno2->inicializarAlumno('Ana', 4, 5, 6);
$alumno2->visualizar();

$profesor1 = new Profesor();
$profesor1->inicializarProfesor('Alberto', 'PHP');
$profesor1->visualizar();

$profesor2 = new Profesor();
$profesor2->inicializarProfesor('Santi', 'ISO');
$profesor2->visualizar();
?>
</body>
</html>