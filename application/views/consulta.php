
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
                       <!--<input type="submit" value="Mostrar Localidad y Periodo" class="btn btn-primary">-->
                  </center>
                  </form>
                <!--Inicio de localidad y periodo-->
                
                <form method="POST" action="<?php echo base_url()?>consulta/checkIndi">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <center>SELECCIONAR LOCALIDAD(ES)</center>
                            <div style="overflow: auto; height:200px; width: 100%;">
                                <table class="table table-bordered">  
                            <?php     

                              foreach($listsectorIndicador as $value){          
                            ?>
                                    <tr>
                                        <td>
                                        <input type="checkbox" name="listaLocalidad[]" value="<?php echo $value->idrepterritorial; ?>"><?php echo $value->localidad; ?>
                                        </td>                            
                                    </tr>
                                      <?php                              
                                  }
                                  ?>

                                </table>

                            </div> 
                        </div>
                        <div class="col-md-6">
                            <center>SELECCIONAR PERIODO</center>
                            <div style="overflow: auto; height:200px; width: 100%;">
                                <table class="table table-bordered">  
                          <?php     

                            foreach($listsectorIndicador as $value){          
                          ?>
                                  <tr>
                                      <td>
                                      <input type="checkbox" name="listaPeriodo[]" value=""><?php echo $value->periodo; ?>
                                      </td>                            
                                  </tr>
                                    <?php                              
                                }
                                ?>

                              </table>
                            </div>
                        </div>
                    </div>
                    
                  
                    
                    <br>
                  <center>
                       <input type="submit" value="Consultar" class="btn btn-primary">
                  </center>
                  </form>
                <!--FIN de localidad y periodo-->
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






    





