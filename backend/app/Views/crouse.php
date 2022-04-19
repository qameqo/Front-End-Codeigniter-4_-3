<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>คอร์สเรียน</b></h3>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_crouse">
        <h4><b> + เพิ่ม</b></h4>
    </button>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="crouse_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ</th>
                        <th>สถานที่อบรม</th>
                        <th>สัปดาห์กิจกรรม</th>
                        <th>วันที่เริ่ม</th>
                        <th>วันที่จบ</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/wallet.png') ?>" class="img-user" alt=""></td>
                        <td>SMART CEO GO</td>
                        <td>โรมแรมอินเตอร์คอม</td>
                        <td>13</td>
                        <td>25 ก.ย. 2564</td>
                        <td>25 ธ.ค. 2564</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/userre.png') ?>" class="img-user" alt=""></td>
                        <td>YOUNG CEO GO</td>
                        <td>โรมแรมอินเตอร์คอม</td>
                        <td>13</td>
                        <td>25 พ.ค. 2564</td>
                        <td>25 ส.ค. 2564</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ</th>
                        <th>สถานที่อบรม</th>
                        <th>สัปดาห์กิจกรรม</th>
                        <th>วันที่เริ่ม</th>
                        <th>วันที่จบ</th>
                        <th>แก้ไข</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_crouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มคอร์สเรียน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 text-center">
                  <label for="exampleInputPasswor">รูปภาพ</label>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <form action="" method="post" id="form-image">
                                    <input type='file' id="imageUpload" accept="image/*" multiple />
                                    <label for="imageUpload"><img
                                            src="https://img.icons8.com/ios-glyphs/30/000000/camera.png" /></i></label>
                                </form>
                            </div>
                            <div class="avatar-preview">
                                <img class="profile-user-img img-responsive img-circle" id="imagePreview"
                                    src="https://img.icons8.com/cotton/64/000000/person-male--v2.png"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">ชื่อ</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                            <label for="exampleInputPasswor">วันที่จบ</label>
                            <div class="input-group">
                                <input type="password" class="form-control  pass" id="pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">สัปดาห์กิจกรรม</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">วันที่เริ่ม</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="exampleInputPasswor">สถานที่อบรม</label>
                            <div class="input-group">
                                <textarea class="form-control  pass" row="3" id="confirm-pass-regis" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    var table_crouse = $('#crouse_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_crouse);
    $("#imageUpload").change(function (data) {

        var imageFile = data.target.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);

        reader.onload = function (evt) {
            $('#imagePreview').attr('src', evt.target.result);
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
    });
</script>