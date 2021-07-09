<?
require_once 'PizeriaDB.php';

class Ofertas{

    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;

    function __construct($id,$titulo,$imagen,$descripcion)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;        
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getImagen()
    {        
        return $this->imagen;        
    }
     
    public function getDescripcion()
    {        
        return $this->descripcion;        
    }

    public static function insertar()
    {
        $conexion = PizeriaDB::connectDb();
        $sql = "INSERT INTO oferta (titulo, imagen, descripcion) VALUES (\"".$this->titulo."\", \"".$this->imagen."\", \"".$this->descripcion."\")";
        $conexion->exec($sql);
    }

    public static function getOfertas()
    {
        $conexion = PizeriaDB::connectDb();
        $sql = "SELECT id,titulo,imagen,descripcion from oferta";
        $consulta = $conexion->query($sql);
        $ofertas=[];

        while($registro = $consulta->fetchObject())
        {
            $ofertas[] = new Ofertas($registro->id,$registro->titulo,$registro->imagen,$registro->descripcion);            
        }
        return $ofertas;
    }

    public static function getOfertasById($id)
    {
        $conexion = PizeriaDB::connectDb();
        $sql = "SELECT id,titulo,imagen,descripcion from oferta where id=\"".$id."\"";
        $consulta = $conexion->query($sql);        
        $registro = $consulta->fetchObject();
        $ofertas = new Ofertas($registro->id,$registro->titulo,$registro->imagen,$registro->descripcion);            
        
        return $ofertas;
    } 
    public function delete()
    {        
        $conexion = PizeriaDB::connectDb();
        $sql = "DELETE FROM oferta where id=\"".$this->id."\"";
        $conexion->exec($sql);
    }


}




