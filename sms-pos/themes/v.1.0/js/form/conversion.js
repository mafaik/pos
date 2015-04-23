/**
 * Created by Awalin Yudhana on 20/04/2015.
 */
function addItem(t){
    var a = getDataProductArray(t, data_storage, 'id_product')
    $( "#result-barcode" ).html( a['barcode'] );
    $( "#result-name" ).html( a['name'] );
    $( "#result-brand" ).html( a['brand'] );
    $( "#result-unit" ).html( a['unit']+'/'+a['value'] );
    $( "#result-stock" ).html( a['stock'] );
    $( "#result-id-product" ).val( a['id_product'] );
    var qty_result = parseInt($( "#qty").val()) * parseInt($("#value").val());
    $( "#result-qty" ).html( qty_result );
    $( "#result-qty-result" ).val(qty_result);
}
