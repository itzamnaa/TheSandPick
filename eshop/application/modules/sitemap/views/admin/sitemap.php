<?php pageHeader('Reportes Graficos'); ?>
<iframe id="frame" src="<?php echo base_url('../graficas/index.php');?>" width="100%" frameborder="0"></iframe>

<style>
.progressbar {
    color: #fff;
    text-align: right;
    height: 25px;
    width: 0;
    background-color: #0ba1b5; 
    border-radius: 3px;
    margin-top: 10px;
}
#status { margin-top: 10px;}
</style>
<script>
    jQuery(function($){
  var lastHeight = 0, curHeight = 0, $frame = $('iframe:eq(0)');
  setInterval(function(){
    curHeight = $('#frame').contents().find('body').height();
    if ( curHeight != lastHeight ) {
      $frame.css('height', (lastHeight = curHeight) + 'px' );
    }
  },500);
});
</script>