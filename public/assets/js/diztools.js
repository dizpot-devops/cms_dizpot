$.fn.addColorPicker = function () {
    var cont = $('<div></div>');
    cont.addClass("input-group");
    cont.addClass("mb-3");

    var cont2 = $('<div></div>');
    cont2.addClass("input-group-text")
    cont2.css("height", "50px");

    var colorPicker = $('<input>')
    colorPicker.attr("type", "color");
    colorPicker.css({"height":"35px", "width":"60px"});
    colorPicker.on('blur', function(){
        text.val(colorPicker.val());
    })

    var text = $('<input>');
    text.attr("type", "text");
    text.val(colorPicker.val());
    text.addClass("form-control");
    text.css({"height":"50px", "font-size":"20px"});
    text.attr("name", $(this).attr("name"));
    text.on('blur', function(){
        colorPicker.val(text.val());
    })

    cont.append(cont2);
    cont2.append(colorPicker);
    cont.append(text);
    $(this).append(cont);
};