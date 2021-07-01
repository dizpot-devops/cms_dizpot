<?php
?>
<!--<head>-->
<!--<link rel="stylesheet" href="assets/css/fontawesome/css/fontawesome.min.css">-->
<!--</head>-->
<div class="boxes1"></div>
<div class="boxes2"></div>
<div class="boxes3"></div>
<div class="boxes4"></div>
<div class="boxes5"></div>
<div class="boxes6"></div>
<div class="boxes7"></div>
<div class="boxes8"></div>
<div class="boxes9"></div>
<div class="boxes10"></div>
<div class="boxes11"></div>
<div class="boxes12"></div>

<script>
    param = {
        numCol: 1,
        height: '120px'
    }
    $.fn.addResizeable = function(param) {
        let numCol = param['numCol'];
        let height = param['height'];
        let width = "25px"; //width of slider buttons

        let divs = [];
        let row = $('<div></div>');
        row.attr('class', 'row');
        row.css('padding-bottom', "10px");

        let ammtPer = (12/numCol) | 0;
        let remainder = 12 - (ammtPer * numCol);

        for(let i = 0; i < numCol; i++){
            let amt = ammtPer;
            if (remainder > 0){
                amt++;
                remainder--;
            }
            divs[i] = {
                width: amt,
                box: $('<div></div>').attr('width', amt)
            };
        }

        for(let i = 0; i < numCol; i++){
            divs[i].box.attr('class', 'col-' + divs[i].width);
            divs[i].box.attr('id', i);
            divs[i].box.css({"height": height, "background": "#838383", "position": "relative", "text-align": "center"});

            let ptag = $('<p>hello</p>');
            ptag.css({'position': 'absolute', "margin-left": width});
            ptag.addClass('tag');
            ptag.text(divs[i].width);
            divs[i].box.append(ptag);

            if(i != 0){
                divs[i].box.prev(divs[i-1].box);

                let leftSlider = $('<div></div>');
                leftSlider.css({"height": height, "width": width, "position": "absolute", "left": "0", 'background-color': 'rgba(0, 0, 255, 0.2)'});

                for(let i = 0; i<2; i++){
                    let larrow = $('<p><<<</p>');
                    larrow.css({'color': '#0000FF', "text-align": "left", "position": "absolute"});
                    if(i == 0)
                        larrow.css("top", "15px");
                    else
                        larrow.css("bottom", "0px");
                    leftSlider.append(larrow);
                }

                leftSlider.on('click', function(){
                    let box1 = $(this).parent();
                    let box2 = box1.prev();
                    let box1W = box1.attr('width');
                    let box2W = box2.attr('width');

                    if(box2W == 1 && box2.attr('id') != 0){
                        while(true){
                            box2 = box2.prev();
                            box2W = box2.attr('width');
                            if(box2W != 1 || box2.attr('id') == 0)
                                break;
                    }   }

                    if(box2W != 1) {
                        box1.removeClass('col-' + box1W);
                        box1.attr('width', ++box1W);
                        box1.addClass('col-' + box1W);
                        box1.children('p.tag').text(box1W);

                        box2.removeClass('col-' + box2W);
                        box2.attr('width', --box2W);
                        box2.addClass('col-' + box2W);
                        box2.children('p.tag').text(box2W);
                    }
                })
                divs[i].box.append(leftSlider);
            }
            if(i != (numCol-1)){
                divs[i].box.next(divs[i+1].box);

                let rightSlider = $('<div></div>');
                rightSlider.css({"height": height, "width": width, "position": "absolute", "right": "0", 'background-color': 'rgba(255, 0, 0, 0.2)'});

                for(let i = 0; i<2; i++){
                    let rarrow = $('<p>>>></p>');
                    rarrow.css({'color': '#f00', "text-align": "right", "position": "absolute"});
                    if(i == 0)
                        rarrow.css("top", "15px");
                    else
                        rarrow.css("bottom", "0px");
                    rightSlider.append(rarrow);
                }

                rightSlider.on('click', function(){
                    let box1 = $(this).parent();
                    let box2 = box1.next();
                    let box1W = box1.attr('width');
                    let box2W = box2.attr('width');

                    if(box2W == 1 && box2.attr('id') != numCol-1){
                        while(true){
                            box2 = box2.next();
                            box2W = box2.attr('width');
                            if(box2W != 1 || box2.attr('id') == numCol-1)
                                break;
                    }   }

                    if(box2W != 1) {
                        box1.removeClass('col-' + box1W);
                        box1.attr('width', ++box1W);
                        box1.addClass('col-' + box1W);
                        box1.children('p.tag').text(box1W);

                        box2.removeClass('col-' + box2W);
                        box2.attr('width', --box2W);
                        box2.addClass('col-' + box2W);
                        box2.children('p.tag').text(box2W);
                    }
                })
                divs[i].box.append(rightSlider);
            }
            row.append(divs[i].box);
        }
        $(this).append(row);
    };
    param = {
        numCol: 1,
        height: '80px'
    }
    $('.boxes1').addResizeable(param);
    param = {
        numCol: 2,
        height: '120px'
    }
    $('.boxes2').addResizeable(param);
    param = {
        numCol: 3,
        height: '80px'
    }
    $('.boxes3').addResizeable(param);
    param = {
        numCol: 4,
        height: '160px'
    }
    $('.boxes4').addResizeable(param);
    param = {
        numCol: 5,
        height: '120px'
    }
    $('.boxes5').addResizeable(param);
    param = {
        numCol: 6,
        height: '130px'
    }
    $('.boxes6').addResizeable(param);
    param = {
        numCol: 7,
        height: '140px'
    }
    $('.boxes7').addResizeable(param);
    param = {
        numCol: 8,
        height: '170px'
    }
    $('.boxes8').addResizeable(param);
    param = {
        numCol: 9,
        height: '180px'
    }
    $('.boxes9').addResizeable(param);
    param = {
        numCol: 10,
        height: '190px'
    }
    $('.boxes10').addResizeable(param);
    param = {
        numCol: 11,
        height: '130px'
    }
    $('.boxes11').addResizeable(param);
    param = {
        numCol: 12,
        height: '100px'
    }
    $('.boxes12').addResizeable(param);
</script>