<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">                
	<meta name="viewport" content="width=device-width, initial-scale=1.0">        
	<link href="<?php echo base_url('public/css/micss.css') ?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet" media="screen">
        
	
        <script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>
        
                
    </head>

    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">            
            <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
            </ul>
          </div>
        </div>
        </nav>
        
        
            
                <!-- Contenido de la aplicación -->
        <div class="contenido" id="container">
            
            <div class="col-md-12">
               	<?php $this->load->view($contenido) ?>
            </div>            
            
        </div>
            
        <footer>
            <center>
                <p><h4>
                    <?php //echo $this->session->userdata('usuario').' ('.$this->session->userdata('nombre_per').')'; ?> 
                    </h4> &copy; Indicadores - 2015
                    <br>
                </p>                
                </center>
        </footer>            
        
		
    </body>
        
</html>
