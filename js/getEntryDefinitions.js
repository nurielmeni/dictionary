function getDefinitions(url)
{
    jQuery.ajax({
        'dataType':'html',
        'url': url,
        'type': 'get',
        'success': printDfinition,
        'cache': false,
        'data': jQuery(this).parents("form").serialize()
    });
}

function printDfinition(result)
{
    // data is an ARRAY with the columns: definition, type, position
    var data = jQuery.parseJSON(result);
    var htmlData = '';
    $.each(data, function(index, value){
        htmlData += '<p>'+value['position']+'. '+value['type']+'</p>'+
                         '<p>'+value['definition']+'</p>';
    })
    $('#wordEntry').html(htmlData);                        
}