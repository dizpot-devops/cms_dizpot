<?php
?>
<!--<head>-->
<!--<link rel="stylesheet" href="assets/css/fontawesome/css/fontawesome.min.css">-->
<!--</head>-->
<div class="boxes2"></div>
<div class="boxes3"></div>
<div class="boxes5"></div>
<div class="boxes7"></div>

<script>
    $.fn.addResizeable = function(numCol) {
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
            divs[i].box.css({"height": "120px", "background": "#838383", "position": "relative", "text-align": "center"});

            // let ptag = $('<p>hello</p>');
            // ptag.css({'position': 'absolute', "margin-left": '25px'});
            // divs[i].box.append(ptag);

            if(i != 0){
                divs[i].box.prev(divs[i-1].box);
                let leftSlider = $('<div></div>');
                leftSlider.css({"height": "120px", "width": "25px", "position": "absolute", "left": "0", 'background-color': 'rgba(0, 0, 255, 0.2)'});

                // let larrow = $('<i></i>');
                // larrow.addClass('fas fa-arrow-left');
                // leftSlider.append(larrow);

                let larrow = $('<p><<</p>');
                larrow.css({'color': '#0000FF', "text-align": "left"});
                leftSlider.append(larrow);

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
                        }
                    }
                    if(box2W != 1) {
                        box1.removeClass('col-' + box1W);
                        box1W++;
                        box1.attr('width', box1W);
                        box1.addClass('col-' + box1W);
                        // divs[id].box.innerHTML = i;
                        box2.removeClass('col-' + box2W);
                        box2W--;
                        box2.attr('width', box2W);
                        box2.addClass('col-' + box2W);
                        // divs[id].box.innerHTML = (12-i);
                    }
                })
                divs[i].box.append(leftSlider);
            }
            if(i != (numCol-1)){
                divs[i].box.next(divs[i+1].box);
                let rightSlider = $('<div></div>');
                rightSlider.css({"height": "120px", "width": "25px", "position": "absolute", "right": "0", 'background-color': 'rgba(255, 0, 0, 0.2)'});
                rightSlider.attr('id', i);

                let rarrow = $('<p>>></p>');
                rarrow.css({'color': '#f00', "text-align": "right"});
                rightSlider.append(rarrow);

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
                        }
                    }
                    if(box2W != 1) {
                        box1.removeClass('col-' + box1W);
                        box1W++;
                        box1.attr('width', box1W);
                        box1.addClass('col-' + box1W);
                        // divs[id].box.innerHTML = i;
                        box2.removeClass('col-' + box2W);
                        box2W--;
                        box2.attr('width', box2W);
                        box2.addClass('col-' + box2W);
                        // divs[id].box.innerHTML = (12-i);
                    }
                })
                divs[i].box.append(rightSlider);
            }
            row.append(divs[i].box);
        }
        $(this).append(row);
    };
    $('.boxes2').addResizeable(2);
    $('.boxes3').addResizeable(3);
    $('.boxes5').addResizeable(5);
    $('.boxes7').addResizeable(7);
</script>