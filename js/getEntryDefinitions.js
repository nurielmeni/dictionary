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
        htmlData += '<p style="margin: 0 0 7px 7px; color: #636CD6; font-weight: bold;">'+value['position']+'. '+value['type']+'</p>'+
                         '<p style="margin: 0 0 7px 22px; color: #616161;">'+value['definition']+'</p>'+
                         '<p style="margin: 0 0 10px 22px; color: #ACADB0; font-size: small;">(Source: '+value['source']+')</p>'+
                         '<p style="margin: 0 0 10px 22px; color: #ACADB0; font-size: small;">(Dictionary: '+value['dictionary']+')</p>';
    });
    $('#wordEntry').html(htmlData);                        
}