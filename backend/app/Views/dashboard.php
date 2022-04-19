<div class="row justify-content-end mt-4 m-0">
    <div class="col-sm-10">
        <div class="container bgcon">
            <h3> <b>Dashboard</b> - Home</h3>
            <div class="row justify-content-center">
                <div class="col-sm-3 dash-card m-2 p-3" style="background-color:#CDE3BF;">
                    <span>
                        <img src="<?php echo base_url('assets/img/wallet.png'); ?>" class="img-dash" style="float:left;"
                            alt="">
                        <div style="float:right; text-align:end;">
                            <p>100,000.00 บาท</p>
                            <b>รวมยอดเงิน</b>
                        </div>
                    </span>
                </div>
                <div class="col-sm-3 dash-card m-2 p-3" style="background-color:#C9E3EE;">
                    <span>
                        <img src="<?php echo base_url('assets/img/userre.png'); ?>" class="img-dash" style="float:left;"
                            alt="">
                        <div style="float:right; text-align:end;">
                            <p>890 คน</p>
                            <b>ผู้สมัครเข้าอบรม</b>
                        </div>
                    </span>
                </div>
                <div class="col-sm-3 dash-card m-2 p-3" style="background-color:#FFE7AA;">
                    <span>
                        <img src="<?php echo base_url('assets/img/teacher.png'); ?>" class="img-dash"
                            style="float:left;" alt="">
                        <div style="float:right; text-align:end;">
                            <p>400 คน</p>
                            <b>วิทยากร</b>
                        </div>
                    </span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <table id="dash_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>คอร์สลงทะเบียน</th>
                                <th>สถานะ</th>
                                <th>การชำระเงิน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 พ.ค. 64</td>
                                <td>อธิพัฒน์ รองเมือง</td>
                                <td>0656675778</td>
                                <td>Smart CEO Go</td>
                                <td>รอสัมภาษณ์</td>
                                <td>เรียบร้อย</td>
                            </tr>
                            <tr>
                                <td>30 พ.ค. 64</td>
                                <td>อธิพัฒน์ รองเมือง</td>
                                <td>0656675778</td>
                                <td>Smart CEO Go</td>
                                <td>รอสัมภาษณ์</td>
                                <td>เรียบร้อย</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>วันที่</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>คอร์สลงทะเบียน</th>
                                <th>สถานะ</th>
                                <th>การชำระเงิน</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var table_dash = $('#dash_table').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table_dash);
</script>