
<div class="panel panel-primary">
  <div class="panel-body">
        <form method="POST" action="<?php echo base_url()?>consulta/checkLista">
        <div style="overflow: auto; height:200px;">
            <table class="table table-bordered">  
        <?php           
          foreach($query as $value){
              echo '<tr><td>';
        ?>
              <input type="checkbox" name="listaSector[]" value="<?php echo $value->idfuenteinformacion; ?>"><?php echo $value->nombre; ?>            
                <?php                              
              }               
              echo '</td></tr>';
              ?>
                
            </table>
        </div>            
            <label>SELECCIONAR SECTOR(ES)</label> | <input type="submit" value="Mostrar Indicadores">
        </form>
  </div>
</div>


<div class="panel panel-primary">  
  <div class="panel-body">
      <div style="overflow: auto; height:100px;">
          
      </div>
  </div>
</div>    
<div class="panel panel-primary"> 
  <div class="panel-body">
      <div style="overflow: auto; height:100px;">
                  
      </div>
  </div>
</div>




