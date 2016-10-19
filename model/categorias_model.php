<?php

  class categoriaModel
  {

    private $categoria;
    private $db;

    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=adcdata;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function subirImagenes(){
      $carpeta = "uploads/imagenes/";
      $destinos_finales = array();
      foreach ($imagenes["tmp_name"] as $key => $value) {
        $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
        move_uploaded_file($value, end($destinos_finales));
        }
        return $destinos_finales;
    }



    /*function getCategoria(){
      $categorias_to_return = [];
      $consulta = $this->db->prepare("SELECT * FROM categorias");
      $consulta->execute();
      $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
      foreach ($categorias as $key => $categoria) {
        $consulta = $this->db->prepare("SELECT * FROM imagen WHERE fk_id_categoria=?");
        $consulta->execute(array($categoria['id']));
        $images = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $categoria['imagenes'] = $images;
        $categorias_to_return[]= $categoria;
      }
      return $categorias_to_return;
    }*/
    /*function getCategoria(){
      $categorias = array();
      $consulta = $this->db->prepare("SELECT * FROM categorias");
      $consulta->execute();

      $nombre = '';
      $id=0;
      while ($categorias = $consulta->fetch()){
        $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_categoria=?");
        $consultaImagenes->execute(array($categorias['id']));
        $imagenes_categoria = $consultaImagenes->fetchAll();
        $categorias['imagenes'] = $imagenes_categoria;
        //$imagenes[]=$categorias;
        //$categorias['id_category'] = $categoria['id'];
        //$categorias['nombre'] = $categoria ['nombre'];
        $id++;
      }
      return $categorias;
    }*/

    /*function agregarCategoria($categoria){
    try{
      $destinos_finales=$this->subirImagenes();
      //Inserto la categoria
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('INSERT INTO categorias(nombre) VALUES(?)');
      $consulta->execute(array($categoria));
      $id_categoria = $this->db->lastInsertId();
      //Insertar las imagenes
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO imagen(id,fk_id_categoria,path) VALUES(?,?)');
        $consulta->execute(array($id_categoria, $value));
      }
      $this->db->commit();
      }
      catch(Exception $e){
            $this->db->rollBack();
      }
    }*/
/*****/

    function copyImage($image){
      $path = '/uploads/imagenes/'.uniqid().$image["name"];
      move_uploaded_file($image["tmp_name"], $path);
      return $path;
    }

    public function get_categorias($id){
      $caterias_to_return =[];
      $select = $this->db->prepare("select * from categorias where id=?");
      $select->execute(array($id));
      $categorias = $select->fetchAll(PDO::FETCH_ASSOC);
      foreach ($categorias as $key => $categoria) {
        $select = $this->db->prepare("select * from imagen where fk_id_categoria=?");
        $select->execute(array($categoria['id']));
        $images = $select->fetchAll(PDO::FETCH_ASSOC);
        $categoria['imagenes'] = $images;
        $categorias_to_return []=$categoria;
      }
      return $categorias_to_return;
    }

    public function get_categoria(){
      $categorias_to_return = [];
      $select = $this->db->prepare("select * from categorias");
      $select->execute();
      $categorias = $select->fetchAll(PDO::FETCH_ASSOC);
      foreach ($categorias as $key => $categoria) {
        $select = $this->db->prepare("select * from imagen where fk_id_categoria=?");
        $select->execute(array($categoria['id']));
        $images = $select->fetchAll(PDO::FETCH_ASSOC);
        $categoria['imagenes'] = $images;
        $categorias_to_return[]=$categoria;
      }
      return $categorias_to_return;
    }


    function add_categoria($categoria,$images){
      $insert = $this->db->prepare("INSERT INTO categorias(nombre) VALUES(?)");
      $insert->execute(array($categoria));
      $fk_id_categoria = $this->db->lastInsertId();

      foreach ($images as $image) {
        $path_image =  $this->copyImage($image);
        $insert = $this->db->prepare("INSERT INTO imagen(path, fk_id_categoria) VALUES(?,?)");
        $insert->execute(array($path_image,$fk_id_categoria));
      }
      return $this->get_categorias($fk_id_categoria);
    }

    /*function delete_categoria($index){
      $delete = $this->db->prepare("delete from categorias where id=?");
      $delete->execute(array($index));
      $return['status']= $delete->rowCount()==1 ? 'la tarea fue borrada con exito :)': 'ERROR!';
      return $return;
    }*/
    
    function delete_categoria($index){
      $sentencia = $this->db->prepare("delete from categorias where id=?");
      $sentencia->execute(array($index));
    }

    function toggle_status_categoria($index){
      $select = $this->db->prepare("select finalizada from categorias where id=?");
      $select->execute(array($index));
      $estadoCategoria= $select->fetch();
      $nuevoEstado=$estadoCategoria['finalizada'];
      $update = $this->db->prepare("update categorias set finalizada=? where id=?");
      $update->execute(array($nuevoEstado,$index));
    }



    function update_categoria($id,$categoria){
      $insert = $this->db->prepare("UPDATE categorias SET nombre=? WHERE id =?");
      $insert->execute(array($categoria,$id));

      return $this->get_categorias($id);
    }

    function get_categorias_By_Id($id){
      $select = $this->db->prepare("select * from categorias where id= ?");
      $select->execute(array($id));
      $categoria = $select->fetch(PDO::FETCH_ASSOC);
      $select = $this->db->prepare("select * from imagen where fk_id_categoria=?");
      $select->execute(array($task['id']));
      $images = $select->fetchAll(PDO::FETCH_ASSOC);
      $task['imagenes'] = $images;
      return $categoria;
    }
/*****/
    /*private function subirArchivos($archivos){
      $destino = 'images/' . uniqid() . $archivos['name'][0];
      move_uploaded_file($archivos['tmp_name'][0], $destino);
      return $destino;
    }*/




    /*function agregarCategoria($categoria){
      $ruta = $this->subirArchivos($files);
      $consulta = $this->db->prepare('INSERT INTO categorias(nombre) VALUES(?)');
      $consulta->execute(array($categoria,$ruta));
      //$consulta->execute(array($categoria));
    }*/

    /*function borrarCategoria($categoria){
      $consulta = $this->db->prepare('DELETE FROM categorias WHERE id=?');
      $consulta->execute(array($categoria));
    }*/

  }

?>
