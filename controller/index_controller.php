<?php
  include_once 'view/index_view.php';
  include_once 'model/novedades_model.php';
  include_once 'model/categorias_model.php';

  class IndexController
  {

    private $view;
    private $model;
    private $modelp;

    function __construct()
    {
      $this->view = new IndexView();
      $this->model = new categoriaModel();
      $this->modelp = new novedadModel();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->get_categorias(''));
    //  return $this->view->mostrarTPL($ruta,$this->GetCategoria(''));
    }

    public function GetCategoria($added){
        $categorias = $this->model->get_categoria();
        $this->view->show($categorias, $added);
    }

    /*public function addTask(){
      $added = false;
      //print_r($_FILES['image']);
      if (isset($_POST['task']) && $_POST['task']!=''){
        $imagenes = [];
        if(isset($_FILES['image'])){
        for($i=0; $i<count($_FILES['image']['name']);$i++)
        {
          if(($_FILES['image']['size'][$i]>0) && ($this->esImagen($_FILES['image']['type'][$i])))
          {
              $image_name = $_FILES['image']['name'][$i];
              $image_tmp = $_FILES['image']['tmp_name'][$i];
              $image['name']=$image_name;
              $image['tmp_name']=$image_tmp;
              $imagenes[] = $image;
          }
        }

        }
        $task = $_POST['task'];
        $description = $_POST['description'];
        $this->modelTask->addTask($task,$description,$imagenes);
        $added=true;
      }
      $tasks = $this->modelTask->getTasks();
      $this->viewTask->showTasks($tasks, $added);
    }
*/

   private function esImagen($file_type){
     return ($file_type =='uploads/imagenes/jpeg' || $file_type =='uploads/imagenes/png' );
   }

  public function AddCategoria()  {
  $added = false;
  if(isset($_REQUEST['categoria']) && ($_REQUEST['categoria'] != '')){
      $imagenes = [];
      if(isset($_FILES['image'])){
      for($i=0; $i<count($_FILES['image']['name']);$i++){
        if(($_FILES['image']['size'][$i]>0) && ($this->esImagen($_FILES['image']['type'][$i]))){
            $image_name = $_FILES['image']['name'][$i];
            $image_tmp = $_FILES['image']['tmp_name'][$i];
            $image['name']=$image_name;
            $image['tmp_name']=$image_tmp;
            $imagenes[] = $image;
            }
        }
      }
      $categoria = $_POST['categoria'];
      $this->model->add_Categoria($categoria,$imagenes);
      $added=true;
     }
     $categorias = $this->model->get_categoria();
     $this->view->showCategorias($categoria,$added);
    }




    function DeleteCategoria(){
      if(isset($_REQUEST['categoria'])){
        $categoria  = $_REQUEST['categoria'];
        $this->model->delete_categoria($categoria);
      }
      $categorias = $this->model->get_categoria();
      $this->view->showCategorias($categorias, false);
    }

    public function toggleStatusCategoria(){
      if(isset($_REQUEST['categoria'])){
         $categoria = $_REQUEST['categoria'];
         $this->model->toggle_status_categoria($categoria);
      }
      $categorias = $this->model->get_categoria();
      $this->view->showCategorias($categoria);
    }

    /*function agregarNovedad()
    {
      $added = false;
      if(isset($_REQUEST['idNovedad'])&&($_REQUEST['idNovedad'] != '')){
        $this->modelp->agregarNovedad($_REQUEST['idNovedad'], $_REQUEST['idCategoria']);
      }
      else{
        $this->view->mostrarError('El novedad que intenta agregar esta vacio');
      }
      $this->MostrasIndex();
    }



    //si agrego desde la bd phpmyadmin, si funciona el borrado
    function borrarNovedad(){
      if(isset($_REQUEST['idNovedad'])){
        $this->modelp->borrarNovedad($_REQUEST['idNovedad']);
      }
      else{
        $this->view->mostrarError('El evento que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }
*/
  }

?>
