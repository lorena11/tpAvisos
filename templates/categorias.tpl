<!DOCTYPE html>
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
    {if $added }
    <div class="alert alert-success" role="alert">Yes!</div>
    {/if}
    <div id="listTasks">
      {include file='categoriasList.tpl'}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.3/mustache.js"></script>
    <!--<script src="js/main.js"></script>-->

  </body>
</html>
