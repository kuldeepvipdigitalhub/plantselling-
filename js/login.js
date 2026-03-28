$(document).ready(function() {
    $(".login_here").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "Project 01\login.php",
            data: {
                Emailid: btoa($(".login_email").val()),
                Password: btoa($(".login_password").val()),
            },
            beforeSent: function() {
                $(".login_here").html("Please wait...");
            },
            success: function(response) {
                if (response.trim() == "Login Success") {
                    window.location = "Project 01\webhome.php";
                }
            }
        });
    });
});