<?php pageHeader('Distribucion de Clientes por Pais') ?>

<div class="row">
  <p></p>
  <div class="jumbotron ">
  <iframe id="frame" src="<?php echo base_url('../graficas/mapa.php');?>" frameborder="0"></iframe>
  </div>
</div>


<style type="text/css">
    #frame{
        width: 680px;
        height: 400px;
    }
</style>
