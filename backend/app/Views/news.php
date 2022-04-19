<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>ข่าวสาร</b></h3>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_new">
        <h4><b> + เพิ่ม</b></h4>
    </button>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="new_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>หัวข้อ</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>แก้ไขโดย</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>ผู้ช่วยศาสตราจารย์</td>
                        <td>ประธานหลักสูตร</td>
                        <td>0000000000</td>
                        <td>วิจัย YOUNG</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>พันตำรวจเอก</td>
                        <td>อาจารย์</td>
                        <td>0000000000</td>
                        <td>วิจัย SMART</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>ช่องทางติดต่อ</th>
                        <th>ผลงานทางวิชาการ</th>
                        <th>แก้ไข</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bgmodal">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข่าวสาร</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-0 ">
                <div class="container p-0">
                    <div class=" file-upload">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text mt-auto">
                                <img src="https://img.icons8.com/ios/50/000000/compact-camera.png" />
                                <h3>เพิ่มรูปภาพ</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                        class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mt-3">
                            <input type="text" class="input-news" placeholder="หัวข้อ">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mt-3">
                                <textarea type="text" row="5" class="input-news" maxlength="1500" style="width: 100%; height: 150px;"
                                    placeholder="รายละเอียด"></textarea>
                              <span style="float:right;"><span  id="rchars">0</span> <span id="rchars">/ 1500</span></span>  
                        </div>
                        <script>
                            var minLength = 0;
                            $('textarea').keyup(function () {
                                var textlen = minLength + $(this).val().length;
                                $('#rchars').text(textlen);
                            });
                        </script>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-sm-12">
                            <span style="float:right;"><span class="font-weight-bold">เวลา</span>&nbsp;<span>15.21</span>&nbsp;<span class="font-weight-bold">วันที่</span>&nbsp;<span>14/01/2021</span>&nbsp;<span class="font-weight-bold">สร้างโดย</span>&nbsp;<span>qameqo</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
                        </div>
                        </div>
<script>
    var table_new = $('#new_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_new);


    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>