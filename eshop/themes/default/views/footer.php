</div>
<footer>
    <div class="container hide">
        <nav>
            <?php page_loop(0, 'class="nav nav-center"');?>
        </nav>

        <div class="credits">
            
        </div>
    </div>
    <div id="footer">
      <div class="container text-center">
        <p>&copy; 2015 Page by itza & breceda, El contenido de esta pagina es con fines educativos y es ficticio</p> 
        </div>
    </div>
</footer>

<script>
setInterval(function(){
    resizeCategories();
}, 200);

function updateItemCount(items)
{
    $('#itemCount').text(items);
}

function resizeCategories()
{
    $('.categoryItem').each(function(){
        $(this).height($(this).width());
        var look = $(this).find('.look');
        var margin = 0-look.height()/2;
        look.css('margin-top', margin);
    });
}
</script>

</body>
<!--
<link href='<?php echo base_url('../css/animate.css');?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('../css/bootstrap.css');?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('../css/bootstrap-responsive.css');?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('../css/style.css');?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('../css/pluton.css');?>' rel='stylesheet' type='text/css'>
-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/readable/bootstrap.min.css" />
<style type="text/css">
header{
    background:#181A1C;
}
body{
    background:#FECE1A;
}
footer{
    background:#181A1C;
    color: #FECE1A;
}
.categoryItem{
    background:transparent;
    border: none;
}
.categoryItem:hover{
    background: #181A1C;
    color: #FECE1A;
}
.navPrimar{
    background:#FECE1A;
}
</style>
</html>