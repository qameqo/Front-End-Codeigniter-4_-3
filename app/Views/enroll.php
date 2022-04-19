<!-- <div class="container mt-0 mb-5 pt-0 pb-5 ">
    <div class="row">
        <div class="col-sm-5 p-0">
            <img class="bg-img5" src="<?php echo base_url('assets/img/bg5.png'); ?>" alt="">
        </div>
        <div class="col-sm-7 speaker" id="Enroll">
            <div class="row justify-content-center p-1">
                <div class="col-sm-10">
                    <p class="h1 txtalignsec2 bordlb4" style="color:#fff;"> <strong>Enroll in Course</strong> </p>
                </div>
            </div>
            <div class="row p-1">
                <div class="col-sm-12" style="text-align:end;">
                    <select name="" id="selcoruse" class="form-control">
                        <option value="" disabled>Choose Course...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="4">3</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;"> Name </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="name">
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;"> Phone Number</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="phone">
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;">Email </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="email">
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;">Line ID </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="line">
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;">Coordinator's name </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="coordinatorname">
                </div>
            </div>
            <div class="row justify-content-center p-1">
                <div class="col-sm-6">
                    <p class="h3 txtalignsec2" style="color:#fff;">Coordinator's number </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="txt form-control" name="" id="coordinatornumber">
                </div>
            </div>
            <div class="row justify-content-center p-2">
                <button class="btn" id="submit"> <strong> Accept</strong></button>
            </div>
        </div>
    </div>
</div> -->
<style>
    #grad1 {

        /* background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA) */
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
        /* border: 2px solid #81D4FA; */
        /* box-shadow: 0px 10px 10px rgba(102, 191, 255, 0.81); */
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #000;
    }

    #msform input,
    #msform select,
    #msform textarea {
        margin-bottom: 25px;
        margin-top: 2px;
        border: 2px solid #000;

        /* padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px */
    }

    #msform input:focus,
    #msform select,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        /* border: none; */
        font-weight: bold;
        /* border-bottom: 2px solid skyblue; */
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #C99209;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 2px 2px white, 0 0 3px 3px black
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue
    }

    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 33%;
        float: left;
        position: relative
    }

    #progressbar #account:before {
        content: "\2139"
    }

    #progressbar #personal:before {
        content: "\261D"
    }

    #progressbar #payment:before {
        content: "\2714"
    }

    #progressbar #confirm:before {
        content: "\0034"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #C99209;

    }

    .radio-group {
        position: relative;
        margin-bottom: 25px
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>
<div class="container-fluid mt-5" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>ลงทะเบียนคอร์ส</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul class="pl-0" id="progressbar">
                                <li class="active" id="account"><strong>กรอกข้อมูลส่วนตัว</strong></li>
                                <li id="personal"><strong>เลือกคอร์ส</strong></li>
                                <li id="payment"><strong>ลงทะเบียนสำเร็จ</strong></li>
                                <!-- <li id="confirm"><strong>Finish</strong></li> -->
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">ข้อมูลส่วนตัว</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmai">ชื่อ</label>
                                                <input type="email" class="form-control" id="exampleInputEmai"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmai">นามสกุล</label>
                                                <input type="email" class="form-control" id="exampleInputEmai"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmai">อาชีพ</label>
                                                <input type="email" class="form-control" id="exampleInputEmai"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <!-- <input type="email" name="email" class="form-control"
                                        placeholder="Email Id" /> <input type="text" name="uname" class="form-control"
                                        placeholder="UserName" /> <input type="password" name="pwd" class="form-control"
                                        placeholder="Password" /> <input type="password" name="cpwd" class="form-control"
                                        placeholder="Confirm Password" /> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmai">เบอร์โทรศัพท์</label>
                                                <input type="email" class="form-control" id="exampleInputEmai"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmai">อีเมลล์</label>
                                                <input type="email" class="form-control" id="exampleInputEmai"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">เลือกคอร์ส</h2>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">เลือก</option>
                                                    <option value="2">YOUNG CEO GO</option>
                                                    <option value="1">SMART CEO GO</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" /> <input type="button" name="next" class="next action-button"
                                    value="Submit" />
                            </fieldset>
                            <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img
                                                src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px">
                                        </div>
                                        <div class='radio' data-value="paypal"><img
                                                src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px">
                                        </div> <br>
                                    </div> <label class="pay">Card Holder Name*</label> <input type="text"
                                        name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text"
                                                name="cardno" placeholder="" /> </div>
                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password"
                                                name="cvcpwd" placeholder="***" /> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select> <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" /> <input type="button" name="make_payment"
                                    class="next action-button" value="Confirm" />
                            </fieldset> -->
                            <!-- <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                class="fit-image"> -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Thank You</h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="<?php echo base_url('assets/img/succes.png') ?>" class="fit-image" alt="">    
                                        </div>
                                    </div> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-10 text-center">
                                            <h5>เสร็จสิ้นการลงทะเบียนโปรดตรวจสอบที่หน้าแอคเค้าท์
                                                ระบบจะทำการแจ้งเตือนว่าคุณได้อยู่ในลำดับขั้นตอนไหน</h5>
                                            <h6>หากมีปัญหาขัดข้องส่วนไหนสามารถทำการสอบถามเราได้ตลอดเวลา ขอบคุณค่ะ</h6>
                                            <a type="button" href="<?php echo base_url('Pages'); ?>" class="btn btn-outline-dark">ตกลง</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>