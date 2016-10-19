<ul class="list-group">
  {foreach from=$categorias item=categoria}
    <li class="list-group-item">
      {if $categoria['finalizada'] }
      <s><strong>{$categoria['nombre']}</strong></s>
      {else}
        <strong>{$categoria['nombre']}</strong>
        {if $categoria['imagenes'] }
          {foreach from=$categoria['imagenes'] key=index item=imagen}
            <img src="{$imagen['path']}" alt="{$categoria['nombre']}_image_{$index}" class="img-thumbnail" />
          {/foreach}
        {/if}
      {/if}
      <a class="index.php?action=delete_categoria" id-tarea="{$categoria['id']}" href="#">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
      </a>
      <a class="index.php?action=update_categoria" id-tarea="{$categoria['id']}" href="#">
      {if $categoria['finalizada'] }
        <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
      {else}
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
      {/if}
      </a>
    </li>
  {/foreach}
</ul>
