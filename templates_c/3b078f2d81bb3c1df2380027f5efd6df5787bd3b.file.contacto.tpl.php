<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 00:58:15
         compiled from "templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220205806a907863a38-31071468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b078f2d81bb3c1df2380027f5efd6df5787bd3b' => 
    array (
      0 => 'templates\\contacto.tpl',
      1 => 1446422315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220205806a907863a38-31071468',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806a9078acfb0_40779253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806a9078acfb0_40779253')) {function content_5806a9078acfb0_40779253($_smarty_tpl) {?><section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contacto
                    <small></small>
                </h1>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
               <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <div class="col-md-4">
                <h3></h3>
                <p>
                    <br><br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (2262) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:contacto@noticiasderechopublico.com">contacto@noticiasderechopublico.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Lunes - Viernes: 9:00 a 17:00 </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3>Enviar mensaje</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre :</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Ingrese su nombre.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email :</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Ingrese correo electronico.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Ingrese texto" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
</section>    <?php }} ?>