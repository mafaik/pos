function leaveDropdownProduct(id, array, key) {
    var a = getDataProductArray(id, array, key);
    $( "#product-barcode" ).val( a['barcode'] );
    $( "#product-id" ).val( a['id_product'] );
    $( "#product-name" ).html( a['name']+' | '+a['unit']+' ( '+a['value']+' )' );
    $( "#product-unit" ).val(a['name']+' | '+a['unit']+' ( '+a['value']+' )' );
}

function leaveTextBarcode(id, array, key){
    var a = getDataProductArray(id, array, key);
    $("#product-id").val(a['id_product'] );
    $("#product-name" ).html( a['name']+' | '+a['unit']+' ( '+a['value']+' )' );
    $( "#product-unit" ).val( a['name']+' | '+a['unit']+' ( '+a['value']+' )' );

}

function updateQty(a, url){
    var qty = $('#qty-'+a).val();
    if(qty <= 0 || isNaN(qty)){
        alert("Qty harus lebih dari 0");
        return false;
    }else{
        window.location.href = url+'/'+a+'/'+qty;
    }
}

function qtyKeyPress(a, url){
    if(event.keyCode == 13){
        updateQty(a, url);
        event.preventDefault();
    }
}

$(document).ready(function () {
    ////////////////////////ALL textbox to upper
    $("#").blur(function () {
        $(this).val($(this).val().toUpperCase());
    });
});