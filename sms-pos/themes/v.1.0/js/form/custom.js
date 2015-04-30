/**
 * Created by Awalin Yudhana on 27/04/2015.
 */


function appendItem(data){
    console.log(data);
    for (var x in data){
        if (data[x] === parseInt(data[x], 10)){
            value = parseInt(b);
        }
        else{
            value = data[x];
        }

        var id_input = $('#input-'+x);
        var id_text = $('#text-'+x);
        if(id_input.length){
            id_input.val( data[x] );
        }
        if(id_text.length){
            id_text.html( data[x] );
        }

    }
}

function barcodeParam(param_objt){
    var param = param_objt.value;
    var data = getDataProductArray(param, data_storage, 'barcode');
    appendItem(data);
}

function idParam(param){
    var data = getDataProductArray(param, data_storage, 'id_product');
    appendItem(data);
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

function setDpp(param){

    var total = parseInt(convertCurrency($('#sum-total-text').text()));
    var dpp = total - param;
    $('#sum-dpp-text').html(numberFormat(dpp));
    ppnCheck();
}
function convertCurrency(currency){
    return Number(currency.replace(/[^0-9\.]+/g,""));
}

function numberFormat(number){
    return (number + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

function ppnCheck(){
    var input = $('input:checkbox[name=status_ppn]');
    var dpp = parseInt(convertCurrency($('#sum-dpp-text').text()));
    var ppn = 0;


    if(input.prop( "checked" ) == true){
        ppn = 0.1 * dpp;
    }
    $('#sum-ppn-text').html(numberFormat(ppn));
    $('#sum-grand_total-text').html(numberFormat(dpp + ppn));
}