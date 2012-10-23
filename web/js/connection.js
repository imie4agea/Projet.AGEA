/* 
 * Refuse connection without reloading
 */

$(document).ready(function(){
    $("#login-form").submit(function(){
        $("#empty_field_warning").hide();
        $("#wrong_login_warning").hide();
        
        var username = $("#login_username").val();
        var password = $("#login_password").val();
        if(username.length == 0 || password.length == 0){
            $("#empty_field_warning").show();
        }
        else{
            $("#login_loading").show();
            $("#login-submit").disabled = true;
            $.get("./ajax/test_connection.php?username="+username+"&password="+password, function(data){
                if(data == "ok"){
                    document.getElementById("login-form").submit();
                }
                else{
                    $("#wrong_login_warning").show();
                    $("#login_loading").hide();
                    $("#login-submit").disabled = false;
                }
            });
        }
    })
});
