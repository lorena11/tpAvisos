
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Evento
                </h1>

                <ul class="breadcrumb">
                {foreach $categorias as $categoria}
                    <li><a>{$categoria['nombre']}</a></li>
                        <ul>
                            {foreach $novedades as $novedad}
                            <li>{$novedad['nombre']}</li>

                        </ul>
                        {/foreach}
                </ul>
                {/foreach}
            </div>
        </div>

    </div>
</section>
