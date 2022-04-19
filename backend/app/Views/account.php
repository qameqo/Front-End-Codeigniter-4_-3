<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>Account Admin</b></h3>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_account">
        <h4><b> + เพิ่ม</b></h4>
    </button>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="account_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>ความสามารถ</th>
                        <th>ชื่อผู้ใช้</th>
                        <th>รหัสผ่าน</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>นายเอ นามสมมุติ</td>
                        <td>ผู้ดูแลระบบ</td>
                        <td>แก้ไข</td>
                        <td>aaaaa</td>
                        <td>123456</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                    <tr>
                    <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>นายบี นามสมมุติ</td>
                        <td>ผู้ดูแลระบบ</td>
                        <td>แก้ไข</td>
                        <td>bbbbb</td>
                        <td>123456</td>
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
                        <th>ความสามารถ</th>
                        <th>ชื่อผู้ใช้</th>
                        <th>รหัสผ่าน</th>
                        <th>แก้ไข</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มบัญชีผู้ใช้</h5>
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
                            <label for="exampleInputPasswor">ชื่อ-นามสกุล</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                            <label for="exampleInputPasswor">ตำแหน่ง</label>
                            <div class="input-group">
                                <input type="password" class="form-control  pass" id="pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">ความสามารถ</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">ชื่อผู้ใช้</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="exampleInputPasswor">รหัสผ่าน</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
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
    var table_account = $('#account_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_account);
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