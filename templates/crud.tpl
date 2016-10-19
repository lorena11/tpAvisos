<div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <!--      Categorías     -->
  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <div>
        <ul id="aMostrar"class="list-group">
          {foreach $categorias as $categoria}
            <li class="list-group-item">
              {$categoria['nombre']}
                <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_categoria&idCategoria={$categoria['idCategoria']}"></a>
                <img src="{$categoria['img']}" alt="imagen-categoria-{$categoria['idCategoria']}" class="img-responsive"  />
          {/foreach}
        </ul>
      </div>


      {if count($errores) gt 0}
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            {foreach $errores as $error}
              <li>{$error}</li>
            {/foreach}
          </ul>
        </div>
      {/if}

      <form action="index.php?action=crud_agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="category">Categoría</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Categoría">
        </div>
        <div class="form-group">
          <label for="imagesToUpload">Imagenes</label>
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        </div>
        <button type="submit" class="btn btn-default">Agregar Categoría</button>
      </form>
    </div>

    <!--      novedades -->
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Novedades</label>
      <ul class="list-group">
        {foreach $novedades as $novedad}
          <li class="list-group-item">
            {$novedad['nombre']}
            <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_novedad&idNovedad={$novedad['idNovedad']}"></a></li>
        {/foreach}
      </ul>

      {if count($errores) gt 0}
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            {foreach $errores as $error}
              <li>{$error}</li>
            {/foreach}
          </ul>
        </div>
      {/if}

      <form action="index.php?action=crud_agregar_novedad" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="noved">Novedades</label>
          <input type="text" class="form-control" id="noved" name="noved" placeholder="nombre evento">
        </div>
        <div class="form-group">
          <label for="date">Fecha</label>
          <input type="text" class="form-control" id="fecha" placeholder="Fecha">
        </div>
        <div class="form-group">
          <div>
            <label for="category">Categoria</label>
          </div>
          <select class="form-control" id="category">
            {foreach $categorias as $categoria}
              <option>{$categoria['nombre']}</option>
            {/foreach}
          </select>
        </div>
        <button type="submit" class="btn btn-default" id="agregarNovedad">Agregar Evento</button>
      </form>
    </div>

  </div>


</div>
