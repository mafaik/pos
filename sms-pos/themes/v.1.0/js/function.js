
function getDataProductArray(id, array, key){
    var a = [];
    $.each(array, function (i, b) {
        if (b[key] == id) {
            a = b;
            return false;
        }
    });
    return a;
}