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
    var entryNoAndType = '';
    $.each(data, function(index, value){
        entryNoAndType = value['dictionary_id'] > 13 ? '<p style="margin: 0 0 7px 7px; color: #636CD6; font-weight: bold;">'+value['position']+'. '+value['type']+'</p>' : "";
        htmlData += entryNoAndType+
                    '<p style="margin: 0 0 7px 22px; color: #616161;">'+value['definition']+'</p>'+
                    '<p style="margin: 0 0 10px 22px; color: #ACADB0; font-size: small;">(Source: '+value['source']+')</p>'+
                    '<p style="margin: 0 0 10px 22px; color: #ACADB0; font-size: small;">(Dictionary: '+value['dictionary']+')</p>';
        if ($("#adminuser").length > 0){
            htmlData += '<p style="margin: 0 0 10px 22px; color: #ACADB0; font-size: small;">' + 
            '<a href="' + yii.urls.updateDefinitions + '/' + value['definition_id'] + 
            '">View Definition</a></p>';
        }
    });
    $('#wordEntry').html(htmlData);                        
}

$(function(){
    $("#searchOption").change(function(){
        $("#entry").val("");
        $("#entry").focus();
    });    
});


