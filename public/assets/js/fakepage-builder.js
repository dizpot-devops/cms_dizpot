(function() {
    var root = typeof self === 'object' && self.self === self && self || typeof global == 'object' && global.global === global && global || this || {};

    var PBUILD = function (obj) {
        if (obj instanceof _) return obj;
        if (!(this instanceof _)) return new _(obj);
        this._wrapped = obj;
    };
    root.PBUILD= PBUILD;

    PBUILD.ROWS = [
        {
            id:'',
            style:{},
            cols:[],
            pointer:false
        }

    ];

    PBUILD.blankRow = function(){
        return {
            id:'',
            style:{},
            cols:[],
            pointer:false
        };
    }
    PBUILD.blankCol = function(col_id,col_width) {
        return {
            id:col_id,
            width:col_width,
            style:{},
            content:{}
        }
    }

    PBUILD.addRow = function() {
        var idCnt = this.ROWS.length;
        this.ROWS[idCnt] = {
            id:'row_' + idCnt,
            style:{

            },
            cols:[],
            pointer:false
        }
        this.drawPage();
    }

    PBUILD.showing_controls = '';
    PBUILD.current_sidebar_content = 'page-rows-layout';
    PBUILD.showControls = function(type) {
        event.stopPropagation();
        var curr = this.showing_controls;
        if(curr != '') {
            $('#' + curr + "_controls_div").addClass('noshow');
        }
        $('#' + type + "_controls_div").removeClass("noshow");
        this.showing_controls = type;

    }


   PBUILD.showSideBar = function(bar) {

        var curr = this.current_sidebar_content;
        if(curr != '') {
            $('#' + curr).addClass('noshow');
        }
        $('#' + bar).removeClass("noshow");
        this.current_sidebar_content = bar;
    }


    PBUILD.drawPage = function() {
        var cont = $('#pageContainer');
        cont.empty();

        for(var i=0; i<this.ROWS.length; i++) {
            this.ROWS[i].pointer = this.createRow(this.ROWS[i].id,["row","builder_pagerow","droppable"]);
            if(this.ROWS[i].cols.length > 0) {
                this.ROWS[i].pointer.empty();
                for (var j = 0; j < this.ROWS[i].cols.length; j++) {
                    var col = this.ROWS[i].cols[j];

                    var column = this.createColumn(col.id, col.width, ['builder_column']);

                    this.ROWS[i].pointer.append(column);
                }
            }
            cont.append(this.ROWS[i].pointer);

            //cont.append('Hello');
        }
    }


    PBUILD.createDiv = function(id,classes,style) {
        var div = $('<div></div>');

        // Set ID
        div.attr("id",id);
        for (var i = 0; i < classes.length; i++) {
            div.addClass(classes[i]);
        }
        return div;
    }
    PBUILD.createColumn = function(id,width,classes,style) {
        var div = this.createDiv(id,classes,style);
        div.addClass("col-" + width);
        div.html("Column");
        return div;

    }
    PBUILD.createRow = function(id,classes,style) {
        var div = this.createDiv(id,classes,style);
        div.html("This row has no columns.. drag and drop columns");
        div.droppable({
            accept:".draggable",
            drop:function(event,ui) {

                PBUILD.addColumnsToRow($(this),ui.helper.attr("data-cols"));
            }

        });
        div.on("click",function(event) {
            event.stopPropagation();
            PBUILD.showControls("row");
        });
        return div;
    }
    PBUILD.addColumnsToRow = function(el,numCols) {
        var col_width = Math.floor(12 / numCols);
        var rowIdx = this.findRowWithId(el.attr("id"));
        if(rowIdx === false) {
            alert("Row with id " + el.attr("id") + " not found")
        }
        else {
            this.ROWS[rowIdx].cols = [];
            for(var i=0; i<numCols; i++) {

                this.ROWS[rowIdx].cols[this.ROWS[rowIdx].cols.length] = this.blankCol(el.attr("id") + "_" + i,col_width);
            }
        }
        this.drawPage();
    }
    PBUILD.findRowWithId = function(rowId) {
        for(var i=0; i<this.ROWS.length; i++) {
            if(this.ROWS[i].id == rowId) {
                return i;
            }
        }
        return false;
    }

}());




// function addRow() {
//     var idCnt = ROWS.length;
//     ROWS[idCnt] = {
//         id:'row_' + idCnt,
//         style:{
//
//         },
//         cols:[],
//         pointer:false
//     }
//     drawPage();
// }

// function drawPage() {
//     var cont = $('#pageContainer');
//     cont.empty();
//
//     for(var i=0; i<ROWS.length; i++) {
//         ROWS[i].pointer = createRow(ROWS[i].id,["row","builder_pagerow","droppable"]);
//         if(ROWS[i].cols.length > 0) {
//             ROWS[i].pointer.empty();
//             for (var j = 0; j < ROWS[i].cols.length; j++) {
//                 var col = ROWS[i].cols[j];
//
//                 var column = createColumn(col.id, col.width, ['builder_column']);
//
//                 ROWS[i].pointer.append(column);
//             }
//         }
//         cont.append(ROWS[i].pointer);
//
//         //cont.append('Hello');
//     }
//
// }

// function createDiv(id,classes,style) {
//     var div = $('<div></div>');
//
//     // Set ID
//     div.attr("id",id);
//     for (var i = 0; i < classes.length; i++) {
//         div.addClass(classes[i]);
//     }
//     return div;
// }
// function createColumn(id,width,classes,style) {
//     var div = createDiv(id,classes,style);
//     div.addClass("col-" + width);
//     div.html("Column");
//     return div;
//
// }
// function createRow(id,classes,style) {
//     var div = createDiv(id,classes,style);
//     div.html("This row has no columns.. drag and drop columns");
//     div.droppable({
//         accept:".draggable",
//         drop:function(event,ui) {
//
//             addColumnsToRow($(this),ui.helper.attr("data-cols"));
//         }
//
//     });
//     div.on("click",function(event) {
//         event.stopPropagation();
//         showControls("row");
//     });
//     return div;
// }
// function addColumnsToRow(el,numCols) {
//     var col_width = Math.floor(12 / numCols);
//     var rowIdx = findRowWithId(el.attr("id"));
//     if(rowIdx === false) {
//         alert("Row with id " + el.attr("id") + " not found")
//     }
//     else {
//         ROWS[rowIdx].cols = [];
//         for(var i=0; i<numCols; i++) {
//
//             ROWS[rowIdx].cols[ROWS[rowIdx].cols.length] = blankCol(el.attr("id") + "_" + i,col_width);
//         }
//     }
//     drawPage();
// }
// function findRowWithId(rowId) {
//     for(var i=0; i<ROWS.length; i++) {
//         if(ROWS[i].id == rowId) {
//             return i;
//         }
//     }
//     return false;
// }