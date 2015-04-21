/**
 * Created by Awalin Yudhana on 20/04/2015.
 */
function leaveDropdownProductFrom(id, array, key) {
    var a = getDataProductArray(id, array, key);
    $( "#product-id-text" ).val(a['id_product']);
    $( "#product-value-text" ).val(a['value']);
    $( "#product-barcode" ).html(a['barcode']);
    $( "#product-name" ).html(a['name']);
    $( "#product-unit" ).html(a['unit']);
    $( "#product-value" ).html(a['value'] );
    $( "#product-stock" ).html(a['stock'] );
}

function leaveDropdownProductResult(id, array, key){
    var id_p_from = $( "#product-id-text" ).val();
    var qty_from = $( "#product-qty" ).val();
    var value_from = $( "#product-value-text" ).val();
    if(!id_p_from ){
        alert("Data Error");
        return false;
    }
    var a = getDataProductArray(id, array, key);
    $( "#product-id-text-result" ).val(a['id_product']);
    $( "#product-barcode-result" ).html(a['barcode']);
    $( "#product-name-result" ).html(a['name']);
    $( "#product-qty-result" ).val(value_from*qty_from);
    $( "#product-unit-result" ).html(a['unit']);
    $( "#product-value-result" ).html(a['value'] );
    $( "#product-stock-result" ).html(a['stock'] );
    var updated_stock = parseInt(a['stock']) + (value_from*qty_from);
    $( "#product-updated-stock-result" ).html(updated_stock );

}
function changeQty(array){
    var qty_from = $( "#product-qty" ).val();
    var value_from = $( "#product-value-text" ).val();
    var te = $( "#product-id-text-result" );
    var id_p_result = te.val();
    if(id_p_result){
        $( "#product-qty-result" ).val(value_from*qty_from);
        var a = getDataProductArray(te, array, 'id_product');
        var updated_stock = parseInt(a['stock']) + (a['value']*qty_from);
        $( "#product-updated-stock-result" ).html(updated_stock );
    }
}
function changeQtyResult(array){
    var qty_result = $( "#product-qty-result" ).val();
    var stock_result = $( "#product-stock-result" ).text();
    if(stock_result){
        var updated_stock = parseInt(qty_result) + parseInt(stock_result);
        $( "#product-updated-stock-result" ).html(updated_stock );
    }
}
