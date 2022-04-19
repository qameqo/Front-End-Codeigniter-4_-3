<div class="container mt-5" id="con-signin">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class=" row justify-content-center mb-2">
                <div class="col-sm-2">
                    <H2 class="mb-0">Admin</H2>
                    <h5>service</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8" id="form-login">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-0 border" id="usernameadmin"
                                aria-describedby="emailHelp" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control border-0 border pass" id="passwordadmin"
                                placeholder="Password">
                            <span class="input-group-append">
                                <button style="color:white;"
                                    class="btn btn-outline-secondary fas fa-eye-slash border-0 border toggle-password"
                                    type="button">
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="reMember">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" onclick="lsRememberMe()" ; WIDTH="100%" class=" btn-sign">Sign in</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6"><img src="<?php echo base_url('assets/img/img-login.jpg'); ?>" WIDTH="100%" HEIGHT="100%"
                alt=""></div>
    </div>
</div>
<script>
    $(document).on('click', '.toggle-password', function () {

        $(this).toggleClass("fas fa-eye-slash fas fa-eye ");

        var input1 = $("#passwordadmin");

        if (input1.attr('type') === 'password') {
            input1.attr('type', 'text')
        } else {
            input1.attr('type', 'password')
        }

    });
    const rmCheck = document.getElementById("reMember"),
        emailInput = document.getElementById("usernameadmin"),
        passwordInput = document.getElementById("passwordadmin");
    if (localStorage.checkboxad && localStorage.checkboxad !== "") {
        rmCheck.setAttribute("checked", "checked");
        emailInput.value = localStorage.usernamead;
        passwordInput.value = localStorage.passwordad;
    } else {
        rmCheck.removeAttribute("checked");
        emailInput.value = "";
    }

    function lsRememberMe() {
        if (rmCheck.checked && emailInput.value !== "" && passwordInput.value !== "") {
            localStorage.usernamead = emailInput.value;
            localStorage.passwordad = passwordInput.value;
            localStorage.checkboxad = rmCheck.value;
            window.location = "Dashboard";
        } else {
            localStorage.username = "";
            localStorage.password = "";
            localStorage.checkbox = "";
        }
    }
</script>