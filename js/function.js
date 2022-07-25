var countre=1;
function add_more_feild(){
    countre+=1;
    php='<div class="row" id="row'+countre+'">\
    <div class="col-8">\
    <label>Addition Cost</label>\
    <input class="form-control" type="text" name="cost" placeholder="Additional Cost">\
    <div>\
    </div>'
    var form=document.getElementById('product_form');
    form.innerPHP+=php

}