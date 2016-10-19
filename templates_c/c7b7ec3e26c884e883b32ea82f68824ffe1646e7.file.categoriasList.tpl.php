<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 01:27:34
         compiled from ".\templates\categoriasList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248725806a8c3468a75-85933390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b7ec3e26c884e883b32ea82f68824ffe1646e7' => 
    array (
      0 => '.\\templates\\categoriasList.tpl',
      1 => 1476833096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248725806a8c3468a75-85933390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806a8c35d6540_33303851',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'imagen' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806a8c35d6540_33303851')) {function content_5806a8c35d6540_33303851($_smarty_tpl) {?><ul class="list-group">
  <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
    <li class="list-group-item">
      <?php if ($_smarty_tpl->tpl_vars['categoria']->value['finalizada']){?>
      <s><strong><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</strong></s>
      <?php }else{ ?>
        <strong><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['categoria']->value['imagenes']){?>
          <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoria']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
_image_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="img-thumbnail" />
          <?php } ?>
        <?php }?>
      <?php }?>
      <a class="index.php?action=delete_categoria" id-tarea="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" href="#">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
      </a>
      <a class="index.php?action=update_categoria" id-tarea="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" href="#">
      <?php if ($_smarty_tpl->tpl_vars['categoria']->value['finalizada']){?>
        <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
      <?php }else{ ?>
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
      <?php }?>
      </a>
    </li>
  <?php } ?>
</ul>
<?php }} ?>