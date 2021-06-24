<?php
?>
<div class="fontSelecter" name="select1"></div>
<div class="fontSelecter" name="select2"></div>
<div class="fontSelecter" name="select2"></div>
<script>

    $.fn.addFontPicker = function () {
        let select = $('<select></select>');

        select.change(function (){
            $(this).css("font-family", $(this).val());
        });

        let fonts = ["Arial, sans-serif",
            "Verdana, sans-serif",
            "Helvetica, sans-serif",
            "Tahoma, sans-serif",
            "Trebuchet MS, sans-serif",
            "Times New Roman, serif",
            "Georgia, serif",
            "Garamond, serif",
            "Courier New, monospace",
            "Brush Script MT, cursive"];

        for(let i = 0; i < 10; i++) {
            let optG =  $('<optgroup></optgroup>');
            optG.css("font-family", fonts[i]);

            let opt = $('<option>' + fonts[i].split(",")[0] + '</option>');
            opt.attr("value", fonts[i]);

            optG.append(opt);
            select.append(optG);
        }

        $(this).append(select);
    }

    $('.fontSelecter').addFontPicker();

</script>
