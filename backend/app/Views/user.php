<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
<div class="container bgcon">
    <h3> <b>รายชื่อผู้เข้าอบรม</b></h3>
    
    <div class="row justify-content-center mt-2">
        <div class="col-sm-12">
            <table id="user_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>คอร์ส</th>
                        <th>สถานะ</th>
                        <th>การชำระเงิน</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>นายเอ</td>
                        <td>0000000000</td>
                        <td>Young CEO GO</td>
                        <td>รอสัมภาษณ์</td>
                        <td>ชำระเงินแล้ว</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url('assets/img/per1.jpg') ?>" class="img-user" alt=""></td>
                        <td>นายเอ</td>
                        <td>0000000000</td>
                        <td>Young CEO GO</td>
                        <td>รอสัมภาษณ์</td>
                        <td>ชำระเงินแล้ว</td>
                        <td><a href="#"><img
                                    src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
                                href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อ</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>คอร์ส</th>
                        <th>สถานะ</th>
                        <th>การชำระเงิน</th>
                        <th>แก้ไข</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<script>
    var table_user = $('#user_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_user);
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