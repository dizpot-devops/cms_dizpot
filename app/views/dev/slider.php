<?php
?>

<div class="boxes2"></div>

<!--<style>-->
<!--    #resizable, #also { height: 120px; padding: 0.5em; }-->
<!--    #resizable h3, #also h3 { text-align: center; margin: 0; }-->
<!--    #resizable{-->
<!--        width: 100%;-->
<!--        background: #838383;-->
<!--        color: white;}-->
<!--    #also{-->
<!--        width: 100%;-->
<!--        background: #123456;-->
<!--    }}-->
<!--</style>-->

<script>
    $.fn.addResizeable = function() {
        var divs = [
            {
                id:'resizable',
                width:6
            },
            {
                id:'also',
                width:6
            }
        ];
        let row =  $('<div></div>');
        row.attr('class', 'row');

        let box1 =  $('<div></div>');
        box1.attr('class', 'col-6');
        box1.css({"height": "120px", "background": "#838383"});

        let box2 =  $('<div></div>');
        box2.attr('class', 'col-6');
        box2.css({"height": "120px", "background": "#123456"});

        row.append(box1);
        row.append(box2);

        let i = 6;
        box1.on('click', function(){
            if(i != 11) {
                i++;
                box1.removeClass('col-' + divs[0].width);
                box1.addClass('col-' + i);
                divs[0].width = i;

                box2.removeClass('col-' + divs[1].width);
                box2.addClass('col-' + (12 - i));
                divs[1].width = (12 - i);
            }
        })
        box2.on('click', function(){
            if(i != 1) {
                i--;
                box1.removeClass('col-' + divs[0].width);
                box1.addClass('col-' + i);
                divs[0].width = i;

                box2.removeClass('col-' + divs[1].width);
                box2.addClass('col-' + (12 - i));
                divs[1].width = (12 - i);
            }
        })

        $(this).append(row);


        // $( "#resizable" ).resizable({
        //     // alsoResize: "#also",
        //     grid: 12,
        //     resize:function(event, ui) {
        //         var newsize = ui.size; //current size
        //         var available = 12 - newsize; //col- size left
        //
        //         // for(var i=0; i < divs.length; i++) {
        //         //     if(ui.id == divs[i].id) {continue;}
        //         //     $('#' + divs[i].id).removeClass('col-' + divs[i].width);
        //         //     $('#' + divs[i].id).addClass('col-' + available);
        //         //     divs[i].width = available;
        //         // }
        //         $('#' + divs[0].id).removeClass('col-' + divs[0].width);
        //         $('#' + divs[0].id).addClass('col-' + newsize);
        //         divs[0].width = newsize;
        //
        //         $('#' + divs[1].id).removeClass('col-' + divs[1].width);
        //         $('#' + divs[1].id).addClass('col-' + available);
        //         divs[1].width = available;
        //
        //
        //     }
        // });
        //
        // $( "#also" ).resizable({
        //     grid: 12
        // });

    };

    $('.boxes2').addResizeable();
</script>


<!--<div class="row">-->
<!---->
<!--    <div class="col-6">-->
<!--        <div id="resizable" >-->
<!--            <h3 >Resize</h3>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-6">-->
<!--        <div id="also">-->
<!--            <h3>will also resize</h3>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->

