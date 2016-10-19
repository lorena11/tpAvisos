<?php

  class novedadModel
  {

    private $novedad;
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=adcdata;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }






    public function agregarNovedad($nombre){
      //$id_cat = $this->buscarId($categoria);
      $consulta = $this->db->prepare('INSERT INTO novedades(nombre) VALUES (?)');
      $consulta->execute(array($nombre));
    }


    /*function getTareas(){
       $tareas = array();
       $consulta = $this->db->prepare("SELECT * FROM tarea");
       $consulta->execute();
       while($tarea = $consulta->fetch()){
         $consulta1 = $this->db->prepare("SELECT * FROM imagen where fk_id_tarea=?");
         $consulta1->execute(array($tarea['id']));
         $imagenes = $consulta1->fetchAll();
         $tarea['imagenes'] = $imagenes;
         $tareas[] = $tarea;
       }
       return $tareas;
     }*/

     /*function agregarNovedad($novedad, $files){
       $rutas = $this->subirArchivos($files);
       $consulta = $this->db->prepare('INSERT INTO idNovedad(nombre) VALUES(?)');
       $consulta->execute(array($novedad));
       $id_nov = $this->db->lastInsertId();
       foreach ($rutas as $ruta) {
         $imagenes = $this->db->prepare('INSERT INTO imagen(fk_id_nov,ruta) VALUES(?,?)');
         $imagenes->execute(array($id_nov, $ruta));
       }
     }*/

    /*	function borrarTarea($id_tarea){
       $consulta = $this->db->prepare('DELETE FROM tarea WHERE id=?');
       $consulta->execute(array($id_tarea));
     }*/


    public function getNovedades(){
      $novedades = array();
      $consulta = $this->db->prepare('SELECT * FROM novedades');
      $consulta->execute();
      $id=2;

      while ($novedad = $consulta->fetch())
      {
        $novedades[$id]['idNovedad'] = $novedad['idNovedad'];
        $novedades[$id]['nombre'] = $novedad['nombre'];

        $novedades[$id]['idCategoria'] = $novedad['idCategoria'];
        $id++;
      }
      return $novedades;
    }

    private function buscarId($nombreCat)
    {
      $consulta = $this->db->prepare('SELECT * FROM categorias');
      $consulta->execute();
      while ($categoria = $consulta->fetch()){
        if ($categoria['nombre'] = $nombreCat) {
          return $categoria['idCategoria'];
        }
      }
    }


    public function borrarNovedad($idNovedad){
      $consulta = $this->db->prepare('DELETE FROM novedades WHERE idNovedad=?');
      $consulta->execute(array($idNovedad));
    }

  }

?>
