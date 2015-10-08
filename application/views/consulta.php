
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="panel panel-primary">  
            <div class="panel-body">
                <center>SELECCIONAR INDICADOR(ES)</center>
                <form method="POST" action="<?php echo base_url()?>consulta/checkIndi">
                  <div style="overflow: auto; height:200px; width: 100%;">
                      <table class="table table-bordered">  
                  <?php     

                    foreach($listsectorIndicador as $value){          
                  ?>
                          <tr>
                              <td>
                              <input type="checkbox" name="listaSectorIndicador[]" value="<?php echo $value->idfuenteinformacion; ?>"><?php echo $value->nombreindicador; ?>
                              </td>                            
                          </tr>
                            <?php                              
                        }
                        ?>

                      </table>
                  </div> <br>
                  <center>
                       <input type="submit" value="Mostrar Localidad y Periodo" class="btn btn-primary">
                  </center>
                  </form>
                
            </div>
        </div>
    </div>
  <div class="col-md-3 col-md-pull-9">
    <div class="panel panel-primary">
            <div class="panel-body">
                <center>SELECCIONAR SECTOR(ES)</center>
                  <form method="POST" action="<?php echo base_url()?>consulta/checkSector">
                  <div style="overflow: auto; height:200px; width: 100%;">
                      <table class="table table-bordered">  
                  <?php     

                    foreach($listsectorapu as $value){          
                  ?>
                          <tr>
                              <td>
                              <input type="checkbox" name="listaSector[]" value="<?php echo $value->idfuenteinformacion; ?>"><?php echo $value->nombresector; ?>
                              </td>                            
                          </tr>
                            <?php                              
                        }
                        ?>

                      </table>
                  </div> <br>
                  <center>
                       <input type="submit" value="Mostrar Indicadores" class="btn btn-primary">
                  </center>
                  </form>
            </div>
          </div>
      
  </div>
</div>






    





