</div>
<br>
    <div class="container hide">
        <nav>
            <?php page_loop(0, 'class="nav nav-center"');?>
        </nav>

        <div class="credits hide">
            
        </div>
    </div>

    <div id="footer" class="primary-section">
      <div class="container text-center">
        <p>&copy; 2015 Page by itza & breceda, El contenido de esta pagina es con fines educativos y es ficticio</p>
        <br>
        </div>

    </div>


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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/readable/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('../../css/style.css');?>" />
<script type="text/javascript" src="<?php echo base_url('../../js/bootstrap.js');?>"></script>
<link href='https://fonts.googleapis.com/css?family=Palanquin+Dark:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
<style type="text/css">
html{
    
}
header{
    background:#181A1C;
}
body{
    background: linear-gradient(0deg, rgba(254,206,26,0.8), rgba(254,206,26,0.8)), 
    url(<?php echo base_url('../../images/Slider.png');?>) repeat;
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
    color: #FECE1A;
    
}
.orderItemQuantity{
color: #181A1C;
}
.main *{
    color: #181A1C;
}
.triangle{
     z-index: -1;
}
h1{
    font-family: 'Palanquin Dark', sans-serif;
}
.breadcrumbs *{
    font-family: 'Handlee', cursive;
    z-index: 4;
}
button{
    border-bottom-right-radius: 10%;
}

</style>
<script type="text/javascript">
        $(function () {
            // body...
            $('.triangle').hide();
        });
        </script>
</html>