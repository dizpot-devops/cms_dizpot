<script src="/assets/js/page-builder.js"></script>
<style>
    #pageContainer:hover {
        background-color: yellow;
    }
    .builder_pagerow {
        background-color: white;
        border:1px dashed grey;
        margin:10px;
        min-height:100px;
        padding:10px;

    }
    .builder_pagerow:hover {
        background-color:yellow;
    }
    .builder_column {
        background-color: #FCFCFC;
        border:1px dashed red;

    }
    .builder_column:hover {
        background-color:yellow;
    }
    .noshow {
        display:none;
    }
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; }
    html>body #sortable li { height: 1.5em; line-height: 1.2em; }
    .ui-state-highlight { height: 50px; line-height: 1.2em; background-color: grey; }
</style>



<script>





    $( function() {
        $( "#pageContainer" ).sortable({
            placeholder: "ui-state-highlight",
            revert:true,
            update:function(event,ui) {
                var array = $("#pageContainer").sortable("toArray");
                for(var i=0; i<array.length; i++) {

                }

            }
        });

        $( ".draggable" ).draggable({
            //connectToSortable: "#pageContainer",
            helper: "clone",
            revert: "invalid",

        });

    } );





    $(document).ready(function() {
        drawPage();
    });

</script>


<input type="button" value="Add Row" onclick="addRow()"/>
<div class="row">

    <div class="col-9" style="background-color: white">
        <div class="row">
            <div class="col-12" id="pageContainer"  >
            </div>
        </div>
    </div>

    <script>
        $('#pageContainer').on("click",function(event) {
            event.stopPropagation();
            showControls('page');
        });
        var showing_controls = '';
        function showControls(type) {
            event.stopPropagation();
            var curr = showing_controls;
            if(curr != '') {
                $('#' + curr + "_controls_div").addClass('noshow');
            }
            $('#' + type + "_controls_div").removeClass("noshow");
            showing_controls = type;

        }

        var current_sidebar_content = 'page-rows-layout';
        function showSideBar(bar) {

            var curr = current_sidebar_content;
            if(curr != '') {
                $('#' + curr).addClass('noshow');
            }
            $('#' + bar).removeClass("noshow");
            current_sidebar_content = bar;
        }
    </script>
    <div class="col-3" style="background-color: #F0F0F0">
        <div class="row noshow" id="row_controls_div">
            row controls
        </div>
        <div class="row noshow" id="column_controls_div">
            col controls
        </div>
        <div class="row noshow" id="page_controls_div">
            <div class="col-12">

                <style>
                    .control_cell_row {
                        border-bottom:1px solid grey;
                        padding:5px;
                        font-size:13px;

                    }
                    .control_cell_row div {

                    }
                </style>

                <div class="row" >

                    <div class="col-4" onclick="showSideBar('page-rows-layout')">
                        Rows
                    </div>
                    <div class="col-4" onclick="showSideBar('page-style-layout')">
                        Style
                    </div>
                </div>
                <div class="row">

                    <div id="page-style-layout" class="col-12 noshow">
                        <div class="row control_cell_row">
                            <div class="col-4">
                                Background color:
                            </div>
                            <div class="col-8">
                                <input type="color"  data-page-update=true name="page_bg_color" value="#ff0000">

                            </div>
                        </div>
                        <div class="row control_cell_row">
                            <div class="col-4">
                                Background Image:
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                    </div>

                    <div id="page-rows-layout" class="col-12">
                        <div class="row">


                            <div class="col-12 draggable ui-state-default" data-cols=1 style="background-color: white; padding:10px; margin:5px">
                                <div class="row">
                                    <div style="width:100%; height:65px; background-color: grey; margin:5px"></div>
                                </div>
                            </div>

                            <div class="col-12 draggable" data-cols=2 style="background-color: white; padding:10px; margin:5px">
                                <div class="row">
                                    <div style="width:47%; height:65px; background-color: grey; margin:5px"></div>
                                    <div style="width:47%; height:65px; background-color: grey; margin:5px"></div>
                                </div>
                            </div>
                            <div class="col-12 draggable" data-cols=3 style="background-color: white; padding:10px; margin:5px">
                                <div class="row">
                                    <div style="width:30%; height:75px; background-color: grey; margin:5px"></div>
                                    <div style="width:30%; height:75px; background-color: grey; margin:5px"></div>
                                    <div style="width:30%; height:75px; background-color: grey; margin:5px"></div>
                                </div>
                            </div>
                            <div class="col-12 draggable" data-cols=4 style="background-color: white; padding:10px; margin:5px">
                                <div class="row">
                                    <div style="width:22%; height:75px; background-color: grey; margin:5px"></div>
                                    <div style="width:22%; height:75px; background-color: grey; margin:5px"></div>
                                    <div style="width:22%; height:75px; background-color: grey; margin:5px"></div>
                                    <div style="width:22%; height:75px; background-color: grey; margin:5px"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

