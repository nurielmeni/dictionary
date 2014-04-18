function getDefinitions(url)
{
    jQuery.ajax({
        'dataType':'html',
        'url': url,
        'type': 'get',
        'success': function(result){$('#wordEntry').html('<p>'+result+'</p>');},
        'cache': false,
        'data': jQuery(this).parents("form").serialize()
    });
}
        