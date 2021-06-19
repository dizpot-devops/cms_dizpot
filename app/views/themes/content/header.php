
<style>
    #droppable {
        border:1px dashed grey;
    }
</style>

<script>
    $(document).ready(function() {
        $( ".draggable").draggable();
        $( "#droppable" ).droppable({
            accept: "#draggable",
            classes: {
                "ui-droppable-active": "ui-state-active",
                "ui-droppable-hover": "ui-state-hover"
            },
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
            }
        });
    });
    $( function() {

    } );
</script>

<div class="row">

    <div class="col-9" style="background-color: white">
        <div id="droppable" class="ui-widget-header">
            &nbsp;
        </div>
    </div>
    <div class="col-3" style="background-color: #F0F0F0">
        <div class="row">

            <!--          <div class="col-4">-->
            <!--              Rows-->
            <!--          </div>-->
            <!--          <div class="col-4">-->
            <!--              Content-->
            <!--          </div>-->
            <!--          <div class="col-4">-->
            <!--              Style-->
            <!--          </div>-->
        </div>
        <div class="row">
            <div id="row-layout-chooser" class="col-12">
                <div class="row">
                    <div class="col-12" style="background-color: white; padding:10px; margin:5px">
                        <div class="row">
                            <div style="width:100%; height:75px; background-color: grey; margin:5px"></div>
                        </div>
                    </div>

                    <div class="col-12 draggable" style="background-color: white; padding:10px; margin:5px" id="draggable">
                        <div class="row">
                            <div style="width:23%; height:75px; background-color: grey; margin:5px"></div>
                            <div style="width:73%; height:75px; background-color: grey; margin:5px"></div>
                        </div>
                    </div>
                    <div class="col-12" style="background-color: white; padding:10px; margin:5px">
                        <div class="row">
                            <div style="width:23%; height:75px; background-color: grey; margin:5px"></div>
                            <div style="width:47%; height:75px; background-color: grey; margin:5px"></div>
                            <div style="width:23%; height:75px; background-color: grey; margin:5px"></div>
                        </div>
                    </div>
                    <div class="col-12" style="background-color: white; padding:10px; margin:5px">
                        <div class="row">

                            <div style="width:73%; height:75px; background-color: grey; margin:5px"></div>
                            <div style="width:23%; height:75px; background-color: grey; margin:5px"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
