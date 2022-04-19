<section class="mt-5 pt-5">
    <div class="container  mt-5  mb-5">
        <div class="p-3" style="box-shadow: 0px 3px 4px rgba(156, 156, 156, 0.65)">
            <div class="row justify-content-center">
                <span style="float:left;" class="mr-2 pr-2"><button class="shadow-none btn btncor btncoractive"
                        id="btnsignin">เข้าสู่ระบบ</button></span><span class="ml-2 pl-2" style="float:right;"><button
                        id="btnsignup" class="shadow-none btn btncor">สมัครสมาชิก</button></span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 ">
                    <div id="signin" class="mt-5 mb-5">
                        <div class="form-group">
                            <label for="exampleInputEmai">อีเมลล์</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-0 border" id="txtlogemail" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPasswor">รหัสผ่าน</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-0 border pass" id="txtlogpassword"
                                    placeholder="">
                                <span class="input-group-append">
                                    <button
                                        class="btn btn-outline-secondary  fas fa-eye-slash toggle-password border-0 border"
                                        type="button">
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="reMem">
                            <label class="form-check-label" for="exampleCheck1">จำฉันไว้</label>
                            <a style="float:right; color:#EF9309; text-decoration: none;" href="#"><u> ลืมรหัสผ่าน
                                    ?</u></a>
                        </div> -->
                        <!-- onclick="lsRememberMe()" ;  -->
                        <button type="submit" id="btnlogin" class="mt-2 btn btn-sign">เข้าสู่ระบบ</button>
                    </div>
                    <div id="signup" style="display:none;" class="mt-5 mb-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ชื่อ</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0 border" id="txtfirstname"
                                            aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">นามสกุล</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0 border" id="txtlastname"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">อีเมลล์</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control border-0 border" id="txtemail"
                                            aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0 border" id="txtphone"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPasswor">รหัสผ่าน</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control border-0 border pass" id="pass-regis"
                                            placeholder="">
                                        <span class="input-group-append">
                                            <button
                                                class="btn btn-outline-secondary fas fa-eye-slash border-0 border toggle-password"
                                                type="button">
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPasswor">ยืนยันรหัสผ่าน</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control border-0 border pass"
                                            id="confirm-pass-regis" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="h6">Your personal data will be used to support your experience throughout this
                                    website, to manage access to your account, and for other purposes described in our
                                    <strong style="color:#EF9309;">Privacy Policy.</strong> </p>

                                <button type="submit" id="btnregister" class=" mt-2 btn btn-sign">ลงทะเบียน</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    var url = $("#url").val();
    var base_url = "<?php echo base_url(); ?>";

    $("#btnlogin").click(function () {
        var password = $("#txtlogpassword").val();
        var email = $("#txtlogemail").val();
        $.ajax({
            url: url + 'api/Account/login',
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                password: password,
                email: email,
            }),
            beforeSend: function (xhr) {
                xhr.setRequestHeader("app_id", $('#app_id').val());
                xhr.setRequestHeader("app_key", $('#app_key').val());
            },
            contentType: 'application/json',
            success: function (res) {
                console.log(base_url);
                if (res.status) {
                    $.redirect("Profile", {
                        email: res.data.email,
                        id: res.data.id,
                        firstname: res.data.first_name,
                        lastname: res.data.last_name,
                        mobile: res.data.mobile,
                        picture: res.data.picture,
                    }, "POST");
                }
            },
            error: function (res) {
                Swal.fire({
                    icon: 'warning',
                    text: 'ไม่พบรหัสผู้ใช้งาน',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
        });
    });
    $("#btnregister").click(function () {

        var _data = new Object();
        _data.firstName = $("#txtfirstname").val();
        _data.lastName = $("#txtlastname").val();
        _data.mobile = $("#txtphone").val();
        _data.email = $("#txtemail").val();
        _data.password = $("#pass-regis").val();
        _data.confirmPassword = $("#confirm-pass-regis").val();

        if (!OnValidateLength(_data)) {
            return false;
        }

        var firstName = $("#txtfirstname").val();
        var lastName = $("#txtlastname").val();
        var mobile = $("#txtphone").val();
        var email = $("#txtemail").val();
        var password = $("#pass-regis").val();
        var confirmPassword = $("#confirm-pass-regis").val();

        $.ajax({
            url: url + 'api/Account/register',
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                firstName: firstName,
                lastName: lastName,
                mobile: mobile,
                email: email,
                password: password,
                confirmPassword: confirmPassword
            }),
            beforeSend: function (xhr) {
                xhr.setRequestHeader("app_id", $('#app_id').val());
                xhr.setRequestHeader("app_key", $('#app_key').val());
            },
            contentType: 'application/json',
            success: function (res) {
                Swal.fire({
                    icon: 'success',
                    text: 'ลงทะเบียนสำเร็จ',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function () {
                    window.location.href = "Signin";
                });
            },
            error: function (res) {
                Swal.fire({
                    icon: 'error',
                    text: 'ลงทะเบียนไม่สำเร็จ',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
        });
    });

    function OnValidateLength(_data) {
        if (_data.firstName == "") {
            MessagePopup('กรุณากรอกชื่อ');
            return false;
        }
        if (_data.lastName == "") {
            MessagePopup('กรุณากรอกนามสกุล');
            return false;
        }
        if (_data.email == "") {
            MessagePopup('กรุณากรอกอีเมล์');
            return false;
        }
        if (_data.mobile == "") {
            MessagePopup('กรุณากรอกเบอร์โทรศัพท์');
            return false;
        }

        if (_data.password == "") {
            MessagePopup('กรุณากรอกรหัสผ่าน');
            return false;
        }
        if (_data.confirmPassword == "") {
            MessagePopup('กรุณากรอกยืนยันรหัสผ่าน');
            return false;
        }

        return true;
    }

    function MessagePopup(_text) {
        Swal.fire({
            icon: 'warning',
            text: _text,
            showConfirmButton: false,
            position: 'top-end',
            timer: 2000
        });
    }
</script>