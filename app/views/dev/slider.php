<?php
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>
    #resizable, #also { width: 150px; height: 120px; padding: 0.5em; }
    #resizable h3, #also h3 { text-align: center; margin: 0; }
    #resizable{
        width: 100%;
        background: #838383;
        color: white;}
    #also{
        width: 100%;
        background: #eee;
    }}
</style>

<script>
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

    $( function() {
        $( "#resizable" ).resizable({
            alsoResize: "#also",
            grid: 12,
            resize:function(event, ui) {
                var newsize = ui.size; //current size
                var available = 12 - newsize; //col- size left

                for(var i=0; i < divs.length; i++) {
                    if(ui.id == divs[i].id) {continue;}
                    $('#' + divs[i].id).removeClass('col-' + divs[i].width);
                    $('#' + divs[i].id).addClass('col-' + available);
                    divs[i].width = available;

                }
            }
        });

        $( "#also" ).resizable({
            grid: 12
        });

    } );

</script>

<div class="container">
<div class="row">

    <div class="col-6">
        <div id="resizable" >
            <h3 >Resize</h3>
        </div>
    </div>

    <div class="col-6">
        <div id="also">
            <h3>will also resize</h3>
        </div>
    </div>

</div>
</div>

