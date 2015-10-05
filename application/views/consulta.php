
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Seleccione Sector</h3>
  </div>
  <div class="panel-body">
        <form method="POST" action="<?php echo base_url()?>consulta/checkLista">
        <div style="overflow: auto; height:100px;">

          <?php foreach($query as $value){ ?>
              <input type="checkbox" name="listaSector[]" value="<?php echo $value->sec_id; ?>"><?php echo $value->sec_name; ?>
          <?php } ?>

        </div>
        <input type="submit">
        </form>
  </div>
</div>



<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Seleccione Indicador</h3>
  </div>
  <div class="panel-body">
      <div style="overflow: auto; height:100px;">
          
      </div>
  </div>
</div>    
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Seleccione Indicador</h3>
  </div>
  <div class="panel-body">
      <div style="overflow: auto; height:100px;">
                  
      </div>
  </div>
</div>

