</div>

    <div id="footer">
      <div class="container text-center">
        <p>&copy; 2015 Page by itza & breceda, El contenido de esta pagina es con fines educativos y es ficticio</p> 
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
</html>