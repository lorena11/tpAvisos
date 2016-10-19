<?php
  include_once 'libs/Smarty.class.php';

  class IndexView {
      private $smarty;
      private $errores;


      function __construct(){
        $this->smarty = new Smarty();
        $this->errores = array();
      }

      public function show($categorias, $added){
        //$this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('added', $added);
        $this->smarty->display('categorias.tpl');
      }

      public function showCategorias($categorias, $added){
        //$this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('added', $added);
        $this->smarty->display('categoriasList.tpl');
      }

      function mostrarIndex(){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->display('index.tpl');
      }

      //public function mostrarTPL($contenido,$categoria,$novedad)
      public function mostrarTPL($contenido,$categoria)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        //$this->smarty->assign('novedades', $novedad);
        return $this->smarty->fetch($contenido);
      }

      function mostrarError($error){
        array_push($this->errores, $error);
      }

  }
?>
