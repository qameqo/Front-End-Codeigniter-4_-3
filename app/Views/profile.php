<?php $session = session(); ?>
<div class="wrapper mt-2 pt-2">
  <nav id="sidebar">
    <div id="dismiss">
      <i class="fas fa-arrow-left"></i>
    </div>
    <div class="sidebar-header">
      <h3>บัญชีผู้ใช้</h3>
<input type="text" value="<?php echo $session->get('id'); ?>">
    </div>
    <ul class="list-unstyled components">
      <li class="sideactive">
        <a href="#homeSubmenu" id="a-account" data-toggle="collapse" aria-expanded="false"> <img
            src="https://img.icons8.com/windows/32/000000/edit-user.png" class="img-side" /> รายละเอียดบัญชี</a>
        <!-- <ul class="collapse list-unstyled" id="homeSubmenu">
          <li>
            <a href="#">Home 1</a>
          </li>
          <li>
            <a href="#">Home 2</a>
          </li>
          <li>
            <a href="#">Home 3</a>
          </li>
        </ul> -->
      </li>
      <li>
        <a href="#" id="a-order"><img src="https://img.icons8.com/windows/32/000000/buy.png" class="img-side" />
          รายการสั่งซื้อ</a>
      </li>
      <li>
        <a href="#pageSubmenu" id="a-status" data-toggle="collapse" aria-expanded="false"><img
            src="https://img.icons8.com/windows/32/000000/high-connection.png" class="img-side" /> สถานะ</a>
      </li>
      <!-- <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="#">Page 1</a>
          </li>
          <li>
            <a href="#">Page 2</a>
          </li>
          <li>
            <a href="#">Page 3</a>
          </li>
        </ul> -->
      <li>
        <a href="#" id="a-payment"> <img src="https://img.icons8.com/windows/32/000000/mobile-payment.png"
            class="img-side" />
          ชำระเงิน</a>
      </li>
      <li>
        <a href="#" id="a-logout"><img src="https://img.icons8.com/windows/32/000000/exit.png" class="img-side" />
          ออกจากระบบ</a>
      </li>
    </ul>
  </nav>
  <div id="content" class="container mt-5 pt-2 mb-2">
    <div class="row pl-3">
      <button type="button" id="sidebarCollapse" class=" btn btn-warning">
        <i class="fas fa-align-left"></i>
        <span>Account Menu</span>
      </button>
    </div>
    <div class="container mt-5" id="account">
      <div class="row justify-content-center">
        <h3>บัญชีผู้ใช้</h3>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <!-- <label for="exampleFormControlFile1" class="lang" key="profile">รูปโปรไฟล์</label>
            <input type="file" class="upload" id="txtUsrl_Image_User" onChange="previewFile(this);"
              data-action="zoom" />
            <span><img src="https://img.icons8.com/ios-glyphs/30/000000/camera.png"/></i></span> -->
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
                src="<?php echo $session->get('picture'); ?>" alt="User profile picture">
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">ชื่อจริง</label>
            <div class="input-group">
              <input class="form-control border-0 border pass"  value="<?php echo $session->get('firstname'); ?>" placeholder="">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">นามสกุล</label>
            <div class="input-group">
              <input class="form-control border-0 border pass"  value="<?php echo $session->get('lastname'); ?>" placeholder="">
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">เบอร์โทรศัพท์</label>
            <div class="input-group">
              <input class="form-control border-0 border pass"  value="<?php echo $session->get('mobile'); ?>" placeholder="">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">อีเมลล์</label>
            <div class="input-group">
              <input class="form-control border-0 border pass"  value="<?php echo $session->get('email'); ?>" placeholder="">
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">รหัสผ่านใหม่</label>
            <div class="input-group">
              <input type="password" class="form-control border-0 border pass" id="pass-regis" placeholder="">
              <span class="input-group-append">
                <button class="btn btn-outline-secondary fas fa-eye-slash border-0 border toggle-password"
                  type="button">
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPasswor">ยืนยันรหัสผ่านใหม่</label>
            <div class="input-group">
              <input type="password" class="form-control border-0 border pass" id="confirm-pass-regis" placeholder="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn-sign btn">บันทึกข้อมูล</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-2 mb-2" id="status_account" style="display:none;">
    <div class="row justify-content-center">
      <h3>รายการลงทะเบียน</h3>
    </div>
    <table id="status_table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>วันที่ลงทะเบียน</th>
          <th>ชื่อคอร์ส</th>
          <th>สถานะ</th>
          <th>วันที่นัดหมาย</th>
          <th>เวลา</th>
          <th>ที่อยู่</th>
          <th>แก้ไข</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Smart CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>

        </tr>
        <tr>
          <td>19 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอสัมภาษณ์</td>
          <td>21 พ.ค. 64</td>
          <td>12:00 น.</td>
          <td>https://zoom.us/me...</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
        <tr>
          <td>23 พ.ค. 64</td>
          <td>Young CEO GO</td>
          <td>รอชำระเงิน</td>
          <td>30 พ.ค. 64</td>
          <td>0:00 น.</td>
          <td>https://เเจ้งชำระ.com</td>
          <td><a href="#"><img
                src="https://img.icons8.com/fluent-systems-regular/32/000000/pencil--v1.png" /></a>&nbsp;<a
              href="#"><img src="https://img.icons8.com/metro/32/000000/trash.png" /></a></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>วันที่ลงทะเบียน</th>
          <th>ชื่อคอร์ส</th>
          <th>สถานะ</th>
          <th>วันที่นัดหมาย</th>
          <th>เวลา</th>
          <th>ที่อยู่</th>
          <th>แก้ไข</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="container mt-2 mb-2" id="order" style="display:none;">
    <div class="row justify-content-center">
      <h3>รายการสั่งซื้อคอร์ส</h3>
    </div>

    <table id="order_table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>ลำดับ</th>
          <th>ชำระก่อนวันที่</th>
          <th>คอร์ส</th>
          <th>สถานะ</th>
          <th>ยอดชำระ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>6601</td>
          <td>30 พ.ค. 64</td>
          <td>Smart CEO Go</td>
          <td>รอชำระเงิน</td>
          <td>150,000</td>
        </tr>
        <tr>
          <td>6601</td>
          <td>30 พ.ค. 64</td>
          <td>Smart CEO Go</td>
          <td>รอชำระเงิน</td>
          <td>150,000</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>ลำดับ</th>
          <th>ชำระก่อนวันที่</th>
          <th>คอร์ส</th>
          <th>สถานะ</th>
          <th>ยอดชำระ</th>
        </tr>
      </tfoot>
    </table>
  </div>

  <div class="container-fluid" id="payment" style="display:none;">
    
    <div class="tabs">
      <div class="row justify-content-center">
      <h3 class="mb-5">ช่องทางการชำระเงิน</h3>
      </div>
      <input type="radio" name="tabs" id="tab1" checked>
      <label for="tab1" class="rotateX" style="background-color:#92EFCE;">
        <img src="<?php echo base_url('assets/img/bank.png') ?>" class="icon-pay" alt="">&nbsp;<span>
          โอนผ่านธนาคาร</span>
        <!-- <img src="<?php echo base_url('assets/img/succes.png')?>" class="icon-pay img-select" alt=""> -->
      </label>

      <input type="radio" name="tabs" id="tab2">
      <label for="tab2" class="rotateX" style="background-color:#B8F7A2;">
        <img src="<?php echo base_url('assets/img/debit.png') ?>" class="icon-pay" alt="">&nbsp;<span> Debit &
          Credit</span>
        <!-- <img src="<?php echo base_url('assets/img/succes.png')?>" class="icon-pay img-select" alt=""> -->
      </label>

      <input type="radio" name="tabs" id="tab3">
      <label for="tab3" class="rotateX" style="background-color:#A3C8FF;">
        <img src="<?php echo base_url('assets/img/p.png') ?>" class="icon-pay" alt="">&nbsp;<span> PromptPay</span>
        <!-- <img src="<?php echo base_url('assets/img/succes.png')?>" class="icon-pay img-select" alt=""> -->
      </label>
      <div id="tab-content1" class="tab-content">
        <h3>โอนผ่านธนาคาร</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <img src="<?php echo base_url('assets/img/kbank.jpg') ?>" width="80%" height="90%" alt="">
              </div>
              <div class="col-sm-6">
                <span>
                  ธนาคารไทยพาณิชย์ 160-406107-2 มหาวิทยาลัยราชภัฏสวนสุนันทา ประเภท บัญชีออมทรัพย์ สาขา เดอะมอลล์
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">วันที่</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">เวลา</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">หมายเลขสั่งซื้อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">เบอร์ติดต่อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">ชื่อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">นามสกุล</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">ใบชำระเงิน</span>
              <div>
                <div id="img-preview"></div>
                <input type="file" id="choose-file" class="choose-file" name="choose-file" accept="image/*" multiple />
                <label for="choose-file">Choose File</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPasswor">จำนวนเงิน</span>
              <div class="input-group">
                <input type="text" class="form-control border-0 border pass" id="pass-regis" placeholder="">
                <span class="input-group-append">
                  <button class="btn btn-outline-secondary border-0 border" type="button">บาท
                  </button>
                </span>
              </div>
            </div>
            <button class="btn btn-sign" style="background-color:#FFC840">แจ้งชำระเงิน</button>
          </div>
        </div>
      </div> <!-- #tab-content1 -->
      <div id="tab-content2" class="tab-content">
        <h3> Debit & Credit Card</h3>
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <img src="<?php echo base_url('assets/img/credit-cards.jpg') ?>" width="100%" height="auto" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">HOLDER NAME</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">CARD NUMBER</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">CVV</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">DATE</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
            <button class="btn btn-sign" id="btn-debit_credit" data-toggle="modal" data-target="#modaldebit"
              style="background-color:#FFC840">ชำระเงิน</button>
          </div>
        </div>

      </div> <!-- #tab-content2 -->

      <div id="tab-content3" class="tab-content">

        <h3>Promptpay</h3>
        <div class="row justify-content-center">
          <div class="col-sm-4">
            <img src="<?php echo base_url('assets/img/promptpay.jpg') ?>" width="100%" height="auto" alt="">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4 text-center">
            <img src="<?php echo base_url('assets/img/qr_prompt.jpg') ?>" width="60%" height="100%" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">วันที่</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">เวลา</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">หมายเลขสั่งซื้อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">เบอร์ติดต่อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">ชื่อ</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">นามสกุล</span>
              <div class="input-group">
                <input type="password" class="form-control border-0 border" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPassword1">ใบชำระเงิน</span>
              <div>
                <div id="img-preview2"></div>
                <input type="file" id="choose-file2" class="choose-file" name="choose-file" accept="image/*" multiple />
                <label for="choose-file2">Choose File</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span for="exampleInputPasswor">จำนวนเงิน</span>
              <div class="input-group">
                <input type="text" class="form-control border-0 border pass" id="pass-regis" placeholder="">
                <span class="input-group-append">
                  <button class="btn btn-outline-secondary border-0 border" type="button">บาท
                  </button>
                </span>
              </div>
            </div>
            <button class="btn btn-sign" style="background-color:#FFC840">แจ้งชำระเงิน</button>
          </div>
        </div> <!-- #tab-content3 -->

      </div> <!-- .tabs -->
    </div>
  </div>
  <!-- END -->
  <div class="overlay"></div>
</div>

<div class="modal fade bd-example-modal-lg" id="modaldebit" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content " style="border-radius:0px;">
      <div class="modal-header p-0 pr-2" style="border:none;">
        <button type="button" style="color:red;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row justify-content-center">
          <div class="col-sm-8">
            <img src=" <?php echo base_url('assets/img/debit2.png'); ?>" width="30%" height="70%" alt="">
            <img src=" <?php echo base_url('assets/img/debit.jpg'); ?>" width="30%" height="50%" alt="">
          </div>
          <div class="col-sm-4">
            <p class="h3">Verified by <i style="color:#1C1F70;">VISA</i></p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-10">
            <b>Enter your one-time-password(OTP) here to proceed
              with your internet purchase</b>
          </div>
          <div class="col-sm-2">
            <p>Thai</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <textarea row="3" type="text" class="form-control"
              placeholder="OTP ได้ถูกส่งไปยังเบอร์โทรศัพท์หมายเลข XX-XXXX-XXXX หากไม่ถูกต้องกรุณาติดต่อศูนย์บริการบัตรเครดิท 023456789"></textarea>
          </div>
        </div>
        <div class="row mt-4 justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Merchant</p>
          </div>
          <div class="col-sm-4">
            <b>Omise Eventpop</b>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Amount</p>
          </div>
          <div class="col-sm-4">
            <b>THB 149,000.00</b>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Date</p>
          </div>
          <div class="col-sm-4">
            <b>18/11/2020</b>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Card Number</p>
          </div>
          <div class="col-sm-4">
            <b>*** *** *****</b>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Reference ID</p>
          </div>
          <div class="col-sm-4">
            <b>*******</b>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Enter One-Time Passcode</p>
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mt-1 justify-content-center">
          <div class="col-sm-4" style="text-align:end;">
            <p>Resend One-Time Passcode</p>
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mt-1 justify-content-center">
          <div class="col-sm-10">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="checkdebit" onclick="ok();" onkeypress="ok();">
              <label class="form-check-label" for="exampleCheck1">I agree that by clicking the box I have read,
                understood and accepted the 3D Secure Terms and Conditions</label>
            </div>
          </div>
        </div>
        <div class="row mt-1 justify-content-center">
          <div class="col-sm-8 text-center">
            <button disabled="disabled" class="btn btn-success" id="btn-submit">Submit</button>
            <button  class="btn btn-primary">Resend</button>
            <button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
      </div>
    </div>
  </div>
</div>
<script>
  $("#a-logout").click(function(){
    $.redirect("Pages", {text: "Logout"}, "POST");
    // window.location.href="Pages";
  });
</script>
