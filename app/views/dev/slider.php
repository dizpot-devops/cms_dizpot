<?php

?>






    <style>
        #resizable { background-position: top left; }
        #resizable, #also { width: 150px; height: 120px; padding: 0.5em; }
        #resizable h3, #also h3 { text-align: center; margin: 0; }
        #also { margin-top: 1em; }
    </style>

    <script>
        $( function() {
            $( "#resizable" ).resizable({
                alsoResize: "#also",
                start:function() {

                }
            });
            $( "#also" ).resizable();
        } );
    </script>


<div id="resizable" class="ui-widget-header" style="background-color:white">
    <h3 class="ui-state-active">Resize</h3>
</div>

<div id="also" class="ui-widget-content">
    <h3 class="ui-widget-header">will also resize</h3>
</div>

