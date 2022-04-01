<?php
//Definicion
class Persona{
    //Propiedades
    protected $documento;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setDocumento($doc){ $this-> documento = $doc;} //Aca guarda el valor o la vareable 
    public function getDocumento(){return $this-> documento;} // Aca imprime la variable

    public function setNombre($nom){ $this-> nombre = $nom;} //Aca guarda el valor o la vareable 
    public function getNombre(){return $this-> nombre;} // Aca imprime la variable

    public function setEdad($edad){ $this-> edad = $edad;} //Aca guarda el valor o la vareable 
    public function getEdad(){return $this-> edad;} // Aca imprime la variable

    public function setNacionalidad($nac){ $this-> nacionalidad = $nac;} //Aca guarda el valor o la vareable 
    public function geNacionalidad(){return $this-> nacionalidad;} // Aca imprime la variable
}

class Docente extends Persona{
    //Propiedades
  private $especialidad;
  const ESPECIALIDAD_FS = "Programador Full Stack";
  const ESPECIALIDAD_BBDD = "Base de Datos";
  const ESPECIALIDAD_MKT = "Marketing Digital";
  protected $nombre;

  public function __get($propiedad)  {
    return $this->$propiedad;
}
public function __set($propiedad, $valor)  {
    $this->$propiedad = $valor;
    return $this;
}

  public function imprimir() {
      echo "Nombre " . $this-> nombre . "<br>";
      echo "Especialidad " . $this->  especialidad . "<br>";
  }
  public function imprimirEspecialidades(){
      echo self::ESPECIALIDAD_FS;
  }
}

class Alumno extends Persona{
    private $legajo;
    private $nota_portfolio;
    private $nota_php;
    private $nota_proyecto;
    private $promedio;

    public function __construct(){
        $this-> legajo = 0;
        $this-> nota_portfolio = 0.0;
        $this-> nota_php = 0.0;
        $this-> nota_proyecto = 0.0;
    }
    public function __destruct()
    {
        print "Destruyendo Objeto" . $this-> nombre . "<br>"; //Sirve para destuir toda la sesion luego de haber terminado 
    }                                                            # el cliclo completo destruye todo lo que este abierto 

    public function __get($propiedad)  {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor)  {
        $this->$propiedad = $valor;
        return $this;
    }

    public function calcularPromedio(){
        $suma = $this-> nota_portfolio + $this-> nota_php + $this-> nota_proyecto;
        $resultado = $suma / 3;
        $this-> promedio = round($resultado,2);
    }
    public function imprimir(){
        echo "Nombre " . $this-> nombre . "<br>";
        echo "Nota Portfolio " . $this-> nota_portfolio . "<br>";
        echo "Nota Php " . $this-> nota_php . "<br>";
        echo "Nota Proyecto " . $this-> nota_proyecto . "<br>";
        echo "El promedio es: " . $this-> promedio . "<br>";
        echo "<br>";
        

    }
}
     $alumno1 = new Alumno();
     $alumno1-> nombre = "Luciano";
     //$alumno1-> setNombre("Luciano");
     $alumno1-> edad = 24;
     $alumno1-> nota_portfolio = 10;
     $alumno1-> nota_php = 8.50;
     $alumno1-> nota_proyecto = 9;
     $alumno1-> calcularPromedio();
     $alumno1-> imprimir();

     $alumno2 = new Alumno();
     $alumno2-> nombre = "Natalia";
     $alumno2-> edad = 30;
     $alumno2-> nota_portfolio = 9;
     $alumno2-> nota_php = 9;
     $alumno2-> nota_proyecto = 10;
     $alumno2-> calcularPromedio();
     $alumno2-> imprimir();

     $docente1 = new Docente();
     $docente1-> nombre = "Cesar";
     $docente1-> especialidad = Docente ::ESPECIALIDAD_FS;
     $docente1-> imprimir();

    


    ?>
    
    
    
    