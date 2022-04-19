<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>รายชื่อวิทยากร</b></h3>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_lecturer">
        <h4><b> + เพิ่ม</b></h4>
    </button>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="lecturer_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>คอร์ส</th>
                        <th>สถานที่อบรม</th>
                        <th>หัวข้อ</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>ระยะเวลา</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class=" btn-link" data-toggle="modal"
                                data-target="#modal_lec_detail">
                                <u>นายอิทธิพัทธ์ กุลพงษ์ว..</u> </h4>
                            </a></td>
                        <td>เจ้าของเถ้าแก่น้อย</td>
                        <td>Young CEO GO</td>
                        <td>โรมแรมอินเตอร์คอม</td>
                        <td>Entrepreneuria</td>
                        <td>24 ก.ย. 2564</td>
                        <td>13.30 น.</td>
                        <td>3 ชม.</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                    <tr>
                        <td><a href="#" class=" btn-link" data-toggle="modal"
                                data-target="#modal_lec_detail">
                                <u>นายอิทธิพัทธ์ กุลพงษ์ว..</u> </h4>
</a></td>
                        <td>เจ้าของPotato corner</td>
                        <td>Young CEO GO</td>
                        <td>โรมแรมอินเตอร์คอม</td>
                        <td>Pitching Techn...</td>
                        <td>24 ก.ย. 2564</td>
                        <td>13.30 น.</td>
                        <td>1 ชม. 15 น.</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>คอร์ส</th>
                        <th>สถานที่อบรม</th>
                        <th>หัวข้อ</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>ระยะเวลา</th>
                        <th>แก้ไข</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_lecturer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มวิทยากร</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
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
                                <input type="text" class="form-control  pass" id="pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">คอร์ส</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">สถานที่อบรม</label>
                            <div class="input-group">
                                <input type="text" class="form-control  pass" id="pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">หัวข้อ</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">เวลา</label>
                            <div class="input-group">
                                <input class="form-control  pass" id="confirm-pass-regis" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPasswor">ระยะเวลา</label>
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
<div class="modal fade" id="modal_lec_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content bgmodal">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดวิทยากร</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-0 ">
                <div class="container-fluid">
                    <div class="row justify-content-lg-between">
                        <div class="col-sm-8 bg-white mt-2"
                            style="box-shadow:0px 5px 5px rgba(0,0,0,0.2); border-radius: 8px;">
                            <div class="row">
                                <div class="col-sm-4 pt-3 text-center" style="border-right: 1px solid gray;">
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
                                                src="<?php echo base_url('assets/img/person5.png'); ?>"
                                                alt="User profile picture">
                                        </div>
                                    </div>
                                    <h6>วิทยากรอบรม</h6>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span for="exampleInputPassword1">ชื่อ-นามสกุล</span>
                                                <div class="input-group">
                                                    <input type="text" class=" input-lec " id="exampleInputPassword1"
                                                        placeholder="" value="นายพชร จิราธิวัฒน์">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span for="exampleInputPassword1">ตำแหน่ง</span>
                                                <div class="input-group">
                                                    <input type="text" class=" input-lec " id="exampleInputPassword1"
                                                        placeholder="" value="เจ้าของPotato corner">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <span for="exampleInputPassword1">ช่องทางติดต่อ</span>
                                                <div class="input-group">
                                                    <input type="text" class=" input-lec " id="exampleInputPassword1"
                                                        placeholder="" value="@asianpharmacy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span for="exampleInputPassword1">คอร์สที่อบรม</span>
                                                <div class="input-group">
                                                    <input type="text" class="input-lec " id="exampleInputPassword1"
                                                        placeholder="" value="Young Ceo Go">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span for="exampleInputPassword1">หัวข้ออบรม</span>
                                                <div class="input-group">
                                                    <input type="text" class="input-lec" id="exampleInputPassword1"
                                                        placeholder="" value="Pitching Technique">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 bg-white mt-2"
                            style="box-shadow:0px 5px 5px rgba(0,0,0,0.2); border-radius: 8px;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Note</p>
                                    <textarea type="text" row="5" class="input-news" maxlength="1500"
                                        style="width: 100%; height: 150px;"
                                        placeholder="ไม่มีโน๊ตที่บันทึไว้"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container p-3 mt-3" style="">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 txt-end">
                            <input type="text" id="datetimepicker3">
                        </div>
                        <div class="col-sm-5 bg-dark txt-start">
                            <div class=" p-2 text-white" width="50%">
                                <h4>เวลาอบรม</h4>
                                <p>วันเสาร์ที่ 2 ตุลาคม พ.ศ. 2564</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                   <span> <span class="font-weight-bold">เวลาเริ่ม</span> <span class="border-bottom">13.30 น.</span>  </span>
                                    </div>
                                    <div class="col-sm-6">
                                   <span> <span class="font-weight-bold">เวลาสิ้นสุด</span> <span class="border-bottom">15.30 น.</span>  </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                   <span> <span class="font-weight-bold">สถานที่</span> <span class="border-bottom">โรมแรมอินเตอร์คอม</span>  </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    jQuery('#datetimepicker3').datetimepicker({
                        format: 'd-m-Y',
                        timepicker: false,
                        inline: true,
                        lang: 'en'
                    });
                    $("#datetimepicker3").change(function(){
                       console.log($("#datetimepicker3").val());
                    });
                </script>
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
    var table_lecturer = $('#lecturer_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_lecturer);
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