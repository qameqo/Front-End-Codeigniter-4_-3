<a href="#" id="toTop"><img src="https://img.icons8.com/fluent/48/000000/circled-up-2.png" /></a>
<div class="container-fluid" id="footer">
    <div class="row p-2" style="background-color:#3a3a3a; color:#fff;">
        <div class="col-sm-4" style="">
            <p class="h2 "> <b class="bordlb4">About US</b> </p> <br>
            <p class="h6">
                In today's fast-paced world, media plays an integral role in our daily life, both in and of work.
                Business enterprise, big or small It is necessary to set up a strategy for the correct and appropriate
                media usage patterns for the business. And form management of
                information in order to optimize the image of the organization,
                executives, as well as various products and services.
            </p>
            <div class="row">
                <div class="col-sm-7">
                    <a href="" style="text-decoration: none;"><img
                            src="https://img.icons8.com/color/48/000000/facebook.png" /></a> &nbsp;<a href=""
                        style="text-decoration: none;"> <img
                            src="https://img.icons8.com/color/48/000000/line-me.png" /></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="h2 "><b class="bordlb4">Address</b> </p> <br>
            <p class="h6"><img src="https://img.icons8.com/color/48/000000/google-maps-new.png" />Thailand , Bangkok</p>
            <br>
            <p class="h6"><img src="https://img.icons8.com/ios-filled/50/ffffff/phone.png" />+ 098 465 2328</p><br>
            <p class="h6"><img src="https://img.icons8.com/fluent/48/000000/email-sign.png" />themedia2021@gmail.com</p>
            <br>
        </div>
        <div class="col-sm-4">
            <p class="h2 "><b class="bordlb4">Contact US</b> </p>
            <p class="h4">Email *</p>
            <input type="text" name="" class="form-control txt" id="email_contact">
            <p class="h4 pt-1">Message</p>
            <textarea name="" id="" cols="15" class="form-control txt" rows="5"></textarea>
            <button class="btn mt-3" id="btnsend">
                <strong>Send</strong>
            </button>
        </div>

    </div>
    <div class="row justify-content-center pt-4 pb-4" style="background-color:#000; color:#fff; ">
        <p class="h5 m-0 p-4"> <b> ©Copyright 2021 The-Media All Rights Reserved </b></p>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script> -->


<script>
    function Onscroll() {
        var navbar = $('.navbar-light');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                navbar.addClass('bg-dark');
            } else {
                navbar.removeClass('bg-dark');
            }
        });
    }

    var btn = $('#toTop');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }

    });

    btn.on('click', function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });
    $('.navbar-nav .nav-link').click(function () {
        $('.navbar-nav .nav-item .nav-link').removeClass('navactive');
        $(this).addClass('navactive');
    })

    $('.span-slide').click(function () {
        $('.span-slide').removeClass('span-active');
        $(this).addClass('span-active');
    })
    $('#tabs .nav-item .nav-link').click(function () {
        $('#tabs .nav-item .nav-link').removeClass('tabsactive');
        $(this).addClass('tabsactive');
    })
    $('.btncor').click(function () {
        $('.btncor').removeClass('btncoractive');
        $(this).addClass('btncoractive');
    })
    $('.a-lecturer').click(function () {
        $('.a-lecturer').removeClass('lectureractive');
        $(this).addClass('lectureractive');
    })
    $('#sidebar ul li ').click(function () {
        $('#sidebar ul li').removeClass('sideactive');
        $(this).addClass('sideactive');
    })
    $('#datetimepicker').datetimepicker({
        format: 'Y-m-d',
        inline: true,
        lang: 'en',
        timepicker: false,
    });
    $("#datetimepicker").change(function () {
        var date = $("#datetimepicker").val();
        console.log(date);
        var newdate = moment(date).format('DD MMMM YYYY').toString();
        var event_data = '';
        if (date == "2021-04-19") {
            $("#detail").empty();
            event_data += '<div id="description2">';
            event_data += '<p class="h5" style="font-weight:Bold;">19 April 2021</p>';
            event_data +=
                '<p class="h6">Session 1 : Orientation  <span style="float:right;">1:00 - 3:00 PM</span> </p>';
            event_data +=
                '<p class="h6"><img src="https://img.icons8.com/color/48/000000/google-maps-new.png" style="width:29px; height:32px;" /> Grand Hyatt Erawan , Bangkok</p>';
            event_data += '<br>';
            event_data +=
                '<p class="h6">Session 2 : ICE BREAKKING <span style="float:right;">3:30 - 5:00 PM</span>  </p>';
            event_data +=
                '<p class="h6"><img src="https://img.icons8.com/color/48/000000/google-maps-new.png" style="width:29px; height:32px;" /> Grand Hyatt Erawan , Bangkok</p>';
            event_data += '</div>';
            $("#detail").append(event_data);
        } else {
            $("#detail").empty();
            event_data += '<div id="description">';
            event_data += '<p class="h4" id="nomeet" style="font-weight:Bold;">No Meeting</p>';
            event_data += '</div>';
            $("#detail").append(event_data);
        }
    });
    $("#speak").owlCarousel({
        loop: true,
        center: true,
        items: 3,
        dots: false,
        margin: 20,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            margin: 0,
            autoHeight: true,
            stagePadding: 9,
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 2,
                loop: true,
            },
            1000: {
                items: 3,
                loop: true,
            }
        }
    });
    var selector = $('#speak');

    $('.my-next-button').click(function () {
        selector.trigger('next.owl.carousel');
    });

    $('.my-prev-button').click(function () {
        selector.trigger('prev.owl.carousel');
    });
    $("#seleb").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        dots: false,
        stagePadding: 9,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            autoHeight: true,
            margin: 0,
            stagePadding: 0,
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 2,
                loop: true,
            },
            1000: {
                items: 3,
                loop: true,
            }
        }
    });

    $("#owlExecutive").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        dots: false,
        stagePadding: 9,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            autoHeight: true,
            margin: 0,
            stagePadding: 0,
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 2,
                loop: true,
            },
            1000: {
                items: 3,
                loop: true,
            }
        }
    });
    $("#trip").owlCarousel({
        loop: true,
        items: 1,
        dots: false,
        margin: 40,
        nav: false,
            navText: [
            '<img class="mr-auto" src="https://img.icons8.com/metro/26/fa314a/sort-left.png"/>',
            '<img class="ml-auto" src="https://img.icons8.com/metro/26/fa314a/sort-right.png"/>'

        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            autoHeight: true,
            nav: true,
            margin: 0,
            stagePadding: 0,
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 2,
                loop: true,
            },
            1000: {
                items: 3,
                loop: true,
            }
        }
    });
    
    $("#btnenroll").click(function () {
        window.location = "Enroll/#Enroll";
    });
    $("#executive").click(function () {
        window.location = "Executive";
    });
    $("#advisor").click(function () {
        window.location = "Advisor";
    });
    $("#director").click(function () {
        window.location = "Director";
    });
    $("#linkcourse").click(function () {
        var coruse = $("#coruse2").position();
        $('html, body').animate({
            scrollTop: coruse.top
        }, 500);
        return false;
    });
    $("#linktraining").click(function () {
        var training = $("#training").position();
        $('html, body').animate({
            scrollTop: training.top
        }, 500);
        return false;
    });

    $("#linkcontactus").click(function () {
        var footer = $("#footer").position();
        $('html, body').animate({
            scrollTop: footer.top
        }, 500);
        return false;
    });
    $("#submit").click(function () {
        Swal.fire({
            title: 'Alert !!',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            showCloseButton: true,
            text: 'Please check your e-mail that The Media has sent the schedule to your e-mail. If anything goes wrong, please report it to the home page of The Media Facebook page or call for more information.To 098 465 2328',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        })
    });
    $("#smartceo").click(function () {
        var event_data = '';
        $("#detail").empty();
        event_data += '<div id="description">';
        event_data += '<p class="h4" id="nomeet" style="font-weight:Bold;">Choose Date...</p>';
        event_data += '</div>';
        $("#detail").append(event_data);
    });
    $("#youngceo").click(function () {
        var event_data = '';
        $("#detail").empty();
        event_data += '<div id="description">';
        event_data += '<p class="h4" id="nomeet" style="font-weight:Bold;">Choose Date...</p>';
        event_data += '</div>';
        $("#detail").append(event_data);
    });

    $('ul.pagination').on('click', 'a', function () { // listen for click on pagination link
        if ($(this).hasClass('panigactive')) return false;
        var active_elm = $('ul.pagination a.panigactive');
        if (this.id == 'next') {
            var _next = active_elm.parent().next().children('a');
            if ($(_next).attr('id') == 'next') {
                // appending next button if reach end
                var num = parseInt($('a.panigactive').text()) + 1;
                if (num > 10) {
                    return false;
                } else {
                    active_elm.removeClass('panigactive');
                    $('<li><a class="panigactive" href="#">' + num + '</a></li>').insertBefore($('#next')
                        .parent());
                    $('#prev').parent().next().remove();
                    return;
                }

            }
            _next.addClass('panigactive');
        } else if (this.id == 'prev') {
            var _prev = active_elm.parent().prev().children('a');
            if ($(_prev).attr('id') == 'prev') {
                var num = parseInt($('a.panigactive').text()) - 1;
                if (num < 1) {
                    return false;
                } else {
                    active_elm.removeClass('panigactive');
                    _prev = $('<li><a class="panigactive" href="#">' + num + '</a></li>').insertAfter($('#prev')
                        .parent());
                    $('#next').parent().prev().remove();
                    return;
                }

            };
            _prev.addClass('panigactive');
        } else {
            $(this).addClass('panigactive');
        }
        active_elm.removeClass('panigactive');
    });

    $(document).ready(function () {
        var url = window.location.pathname;
        var res = url.split("/");
        var nav = $('.nav-link strong');
        var brand = $('.navbar-brand strong')
        console.log(res[1]);
        if (res[1] === "Young" || res[1] === "News" || res[1] === "NewsDetails" || res[1] === "Person" || res[1] === "PersonDetails" || 
            res[1] === "Signin" || res[1] === "Enroll" || res[1] === "Profile" ||
            res[1] === "Pages") {
            nav.css('color', 'black');
            brand.css('color', 'black');
        }
    });
    $("#btnsignin").click(function () {
        $("#signin").show();
        $("#signup").hide();
    });
    $("#btnsignup").click(function () {
        $("#signin").hide();
        $("#signup").show();
    });

    //   wizard
    $(document).ready(function () {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function () {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function () {
            return false;
        })

    });

    $(document).on('click', '.toggle-password', function () {

        $(this).toggleClass("fas fa-eye-slash fas fa-eye ");

        var input1 = $("#txtlogpassword");
        var input2 = $("#pass-regis");
        var input3 = $("#confirm-pass-regis");

        if (input1.attr('type') === 'password') {
            input1.attr('type', 'text')
        } else {
            input1.attr('type', 'password')
        }
        if (input2.attr('type') === 'password') {
            input2.attr('type', 'text')
        } else {
            input2.attr('type', 'password')
        }
        if (input3.attr('type') === 'password') {
            input3.attr('type', 'text')
        } else {
            input3.attr('type', 'password')
        }
        // if (input2.attr('type') === 'password' && input3.attr('type') === 'password') {
        //     input2.attr('type', 'text');
        //     input3.attr('type', 'text');
        // } else {
        //     input2.attr('type', 'password');
        //     input3.attr('type', 'password');
        // }

    });
</script>
<script>
    $(document).ready(function () {


        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

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
        // $('#status_table').DataTable();
        var table_status = $('#status_table').DataTable({
            responsive: true
        });
        var table_order = $('#order_table').DataTable({
            responsive: true
        });
        new $.fn.dataTable.FixedHeader(table_status);
        new $.fn.dataTable.FixedHeader(table_order);

    });
    const chooseFile = document.getElementById("choose-file");
    const imgPreview = document.getElementById("img-preview");
    const chooseFile2 = document.getElementById("choose-file2");
    const imgPreview2 = document.getElementById("img-preview2");
    chooseFile.addEventListener("change", function () {
        getImgData();
    });
    chooseFile2.addEventListener("change", function () {
        getImgData2();
    });

    function getImgData() {
        const files = chooseFile.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function () {
                imgPreview.style.display = "block";
                imgPreview.innerHTML = '<img src="' + this.result + '" />';
            });
        }
    }

    function getImgData2() {
        const files = chooseFile2.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function () {
                imgPreview2.style.display = "block";
                imgPreview2.innerHTML = '<img src="' + this.result + '" />';
            });
        }
    }
    $("#a-account").click(function () {
        $("#account").show();
        $("#order").hide();
        $("#status_account").hide();
        $("#payment").hide();
    });
    $("#a-status").click(function () {
        $("#account").hide();
        $("#order").hide();
        $("#status_account").show();
        $("#payment").hide();
    });
    $("#a-order").click(function () {
        $("#account").hide();
        $("#order").show();
        $("#status_account").hide();
        $("#payment").hide();
    });
    $("#a-payment").click(function () {
        $("#account").hide();
        $("#order").hide();
        $("#status_account").hide();
        $("#payment").show();
    });
    $("#checkdebit").click(function () {
        $("#btn-submit").attr("disabled", !this.checked);
    });
</script>
</body>

</html>