<!-- <a href="#" id="toTop"><img src="https://img.icons8.com/fluent/48/000000/circled-up-2.png" /></a> -->

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
    $(document).ready(function () {
        var url = $(location).attr('pathname'); 
        var res = url.split("/");
        console.log(res[2]);
        if (res[3] === "" || res[3] === "Login") {
           $("#ver_nav").hide();
        } else {
            $("#ver_nav").show();
        }
    });
</script>
</body>

</html>