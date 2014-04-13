function getDefinitions(url)
{
    jQuery.ajax({
        'dataType':'html',
        'url': url,
        'type': 'get',
        'success': function(result){alert(result);},
        'cache': false,
        'data': jQuery(this).parents("form").serialize()
    });
}
        