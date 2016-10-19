<div class="container-fluid">
      <div class="row">
          <div class="col-md-12"><h3>Novedades</h3></div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>

              <th>Evento</th>
              <th>Organiza[categoria]</th>
            </tr>
          </thead>
          <tbody id="myTable">
            {foreach $novedades as $novedad}
            <tr class="success">

              <td>{$novedad['nombre']}</td>
              <td>{$novedad['idCategoria']}</td>
              <td></td>
            </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
      <div class="col-md-12 text-center">
         <ul class="pagination" id="myPager"></ul>
      </div>
  </div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
