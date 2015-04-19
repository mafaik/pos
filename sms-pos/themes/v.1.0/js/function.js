
function getDataProductArray(id, array, key){
    var a = [];
    $.each(array, function (i, b) {
        if (b[key] == id.value) {
            a = b;
            return false;
        }
    });
    return a;
}