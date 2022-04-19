<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>Important Person</b></h3>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_person">
        <h4><b> + เพิ่ม</b></h4>
    </button>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="person_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>ช่องทางติดต่อ</th>
                        <th>ผลงานทางวิชาการ</th>
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
<div class="modal fade" id="modal_person" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มคณะกรรมการ</h5>
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
                            <label for="exampleInputPasswor">ช่องทางติดต่อ</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">ผลงานทางวิชาการ</label>
                            <div class="input-group">
                                <textarea class="form-control  pass" row="3" id="confirm-pass-regis"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">

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
    var table_person = $('#person_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_person);
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