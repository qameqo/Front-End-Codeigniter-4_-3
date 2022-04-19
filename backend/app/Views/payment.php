<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>การชำระเงิน</b></h3>
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="payment_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>คอร์ส</th>
                        <th>ใบแจ้งชำระเงิน</th>
                        <th>ยอดรวม</th>
                        <th>สถานะ</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>27/10/2021</td>
                        <td><a href="#" class="btn-link" data-toggle="modal" data-target="#modal_pay_detail">
                                <u>นส.นัวนา กาสินี</u> </h4>
                                </button></td>
                        <td>Young CEO GO</td>
                        <td>t.png</td>
                        <td>150,000</td>
                        <td>ชำระเงินแล้ว</td>
                        <td>โอนเงินผ่านธนาคาร</td>
                    </tr>
                    <tr>
                        <td>27/10/2021</td>
                        <td><a href="#" class="btn-link" data-toggle="modal" data-target="#modal_pay_detail">
                                <u>นส.นัวนา กาสินี</u> </h4>
                                </button></td>
                        <td>Young CEO GO</td>
                        <td>t.png</td>
                        <td>150,000</td>
                        <td>ชำระเงินแล้ว</td>
                        <td>-</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>วันที่</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>คอร์ส</th>
                        <th>ใบแจ้งชำระเงิน</th>
                        <th>ยอดรวม</th>
                        <th>สถานะ</th>
                        <th>Type</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_pay_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content bgmodal">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLongTitle">การชำระเงิน</h5>&nbsp;<span
                    class="mt-auto">รายละเอียด</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-0 " id="modalbodypay">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>วันที่</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <p>เวลา</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>ชื่อ-นามสกุล</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>คอร์สที่ลงทะเบียน</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>ยอดรวม</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 pass" id="pass-regis"
                                        placeholder="">
                                    <div class="input-group-append ">
                                        <span class="input-group-text bg-white border-0" id="basic-addon2">บาท</span>
                                    </div>
                                </div>
                                <!-- <input type="text" class="form-control border-0"> -->
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>อีเมลล์</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>เบอร์โทรศัพท์</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3">
                                <p>สถานะ</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <select name="" id="" class="form-control border-0">
                                        <option value="รอชำระเงิน">รอชำระเงิน</option>
                                        <option value="ชำระเงินแล้ว">ชำระเงินแล้ว</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <button class="btn btn-pay">บันทึกข้อมูล</button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <button class="btn btn-cancel-pay">ลบการแจ้งชำระหนี้</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 pl-5 pb-5 pr-5 pt-0 mt-2">
                            <div class="row justify-content-center">
                                <div class="bord-yel col-sm-12" style="text-align:center;">
                                    <h5 class="m-0">หลักฐานการโอน</h5>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class=" bord-yel col-sm-4" style="text-align:center;">
                                    <p class="m-0">ชื่อไฟล์</p>
                                </div>
                                <div class="bord-yel col-sm-8"style="text-align:center;">
                                    <p class="m-0">1.png</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class=" bord-yel col-sm-12 text-center p-2">
                                    <img src="<?php echo base_url('assets/img/slip.jpg') ?> " class="img-slip" alt="">
                                </div>
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
    var table_payment = $('#payment_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_payment);
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