<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 01:15:29
         compiled from ".\templates\categorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115805806a8458ef4c8-49513534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b977d60bf69ff57eed367e0b1264cec493fbb2' => 
    array (
      0 => '.\\templates\\categorias.tpl',
      1 => 1476832420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115805806a8458ef4c8-49513534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806a845a60862_91589327',
  'variables' => 
  array (
    'added' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806a845a60862_91589327')) {function content_5806a845a60862_91589327($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Task Admin Pro V0.0001</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1>Categorias:</h1>
    <button id="refresh" type="button" class="btn btn-default btn-xs pull-right " aria-label="Refresh">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
 </button>

    <form action="index.php?action=add_categoria" method="POST" enctype="multipart/form-data" id="addForm">
      <div class="form-group">
        <label for="task">Nueva categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Insert task name here...">
        <label for="image">Image</label>
        <input type="file" name="image[]" id="image" multiple>
      </div>
      <button type="submit" id="addBtn" class="btn btn-default">Agregar</button>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['added']->value){?>
    <div class="alert alert-success" role="alert">Yes!</div>
    <?php }?>
    <div id="listTasks">
      <?php echo $_smarty_tpl->getSubTemplate ('categoriasList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.3/mustache.js"></script>
    <!--<script src="js/main.js"></script>-->

  </body>
</html>
<?php }} ?>