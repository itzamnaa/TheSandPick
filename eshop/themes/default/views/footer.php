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
h1,h2,h3,h4{
    font-family: 'Palanquin Dark', sans-serif;
}
.breadcrumbs *{
    font-family: 'Handlee', cursive;
    z-index: 4;
}
button,input[type=submit]{
    border-radius: 6px;
}
table{  
   background-color:  rgba(0,0,0,0.1);
}
table *{
    border
}
#payment-cod{
    background-color: transparent;
}
#diva *{
    color: #FECE1A;
    border-radius: 5%;
}
#diva li{
    color: #FECE1A;
    background-color: #181A1C;
}
#diva a:hover{
    color: #181A1C;
    background-color: #FECE1A;
}
#diva a:hover > i{
    color: #181A1C;
    background-color: #FECE1A;
}
#diva a:hover > span{
    color: #181A1C;
    background-color: #FECE1A;
}
.categoryItemHover{
    background-color: red;
}
.gumbo-tray-content{
    background-color:  rgba(254,206,26,0.9);
    color: #181A1C;
}
.orderSummary{
    background-color: transparent;
}
.cartSummaryTitle{
    font-family: 'Palanquin Dark', sans-serif;
}
</style>
<script type="text/javascript">
        $(function () {
            // body...
            $('.triangle').hide();
            $('previewImg').height('500px');
        });
        </script>
</html>