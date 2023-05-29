<!-- This code is for password hide/show... -->
<input type="password" onkeyup="check_password()" value="" required name="old_password" class="form-control" placeholder="Old Password" id="old_password"><span toggle="#old_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
