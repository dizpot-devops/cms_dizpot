<?php
    $pics = $viewmodel;
    /*echo $pics[0]['path']; exit;*/
?>
<style>
    .mydropzone {
        background: white;
        border-radius: 5px;
        border: 2px dashed rgb(0, 135, 247);
        border-image: none;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .media_img{
        height: 100px;
        diaply: block;
        margin-left: auto;
        margin-right: auto;
        padding-top: 10px;
        padding-right: 10px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<div class="row">
    <div class="col-12" id="main">
        <!-- UPLOAD PICTURE-->
        <script src="/assets/vendors/dropzone-5.7.0/dist/dropzone.js" type='text/javascript'></script>
        <link href='/assets/vendors/dropzone-5.7.0/dist/dropzone.css' type='text/css' rel='stylesheet'>

        <div class="text-dark font-weight-bold mb-2"><span>Upload Picture:</span></div>
        <div class="mydropzone dpzone" id="dpzone-0" data-dropIndex=0 style="padding-left:15px; padding-right:15px">
            <img id="productImage_0" style='width:200px' src="<?php echo "/assets/images/product_images/product-image-placeholder.jpg"; ?>">
            <input name="pImage_0" type="hidden" id="pImage_0" value="<?php echo ""; ?>" />
        </div>

        <div>
        <?php
            for($i = 0; $i<count($pics); $i++){
                echo '
                        <span>
                            <img class="media_img pictureClick" src="/assets/images/media/'. $pics[$i]['path'] .'" alt="'. $pics[$i]['title'] ,'" path="'.$pics[$i]['path'].'" id="'.$pics[$i]['id'].'">
                        </span>
                 ';
            }
         ?>
        </div>
    </div>
    <!--SIDE BAR-->
    <div id="sideBar">

    </div>
</div>
<script>
    $(document).ready(function () {
        Dropzone.autoDiscover = false;
        $("#dpzone-0").dropzone({
            method:'post',
            url: "/media/upload/",
            params:{
                category:'',
                tag:'picture',
                dir:'media/'
            },
            addRemoveLinks: true,
            success: function (file, response) {
                var imgName = response;
                $('#productImage_0') . attr('src', imgName);
                $('#pImage_0') . val(imgName);
                location.reload(true);
                // file.previewElement.classList.add("dz-success");
                // console.log("Successfully uploaded :" + imgName);
            },
            error: function (file, response) {
                file.previewElement.classList.add("dz-error");
            }
        });
    });

    $('.pictureClick').on('click', function(){
        let name = $(this).attr('path');
        let id = $(this).attr('id');

        let div = $('<body></body');
        div.css({'height': '100%', 'width': '350px', 'position': 'fixed', 'top': '0px', 'right': '0px', 'padding-top': '40px'});

        let div2 = $('<div></div>');
        div2.addClass('grid-margin').addClass('stretch-card');
        div.append(div2);

        let div3 = $('<div></div');
        div3.addClass('card');
        div2.append(div3);

        let div4 = $('<div></div>');
        div4.addClass('card-body');
        div3.append(div4);

        let h4 = $('<h4>Picture Information</h4>');
        h4.addClass('card-title');
        div4.append(h4);

        let info = "Picture with ID: " + id + " was clicked";
        let p1 = $('<p></p>');
        p1.text(info);
        p1.addClass('card-description');
        div4.append(p1);

        let form = $('<form></form>');
        form.addClass('picture-form');
        div4.append(form);

        let div5 = $('<div></div>');
        div5.addClass('form-group');
        form.append(div5);

        let label1 = $('<label>Picture Info</label>');
        div5.append(label1);

        let input1 = $('<input>');
        input1.attr('type', 'text').addClass('form-control').attr('id', 'picInput').attr('placeholder', name);
        div5.append(input1);
        // alert(name + " " + id);
        $('#main').removeClass('col-12');
        $('#main').addClass('col-9')
        $('#sideBar').empty();
        // $('#sideBar').addClass('col-4');
        $('#sideBar').append(div);


    });
</script>