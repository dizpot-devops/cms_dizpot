
<form method="post" action="/users/tempPass" id="pass_reset" accept-charset="UTF-8">
    <input type="hidden" name="formSubmit" value="tempPass">
    <input type="hidden" name="utf8" value="✓" />

    <label for="tempPass">Temporary Password*:</label><br>
    <input type="text" name="tempPass" placeholder="" required><br><br>

    <label for="newPass">New Password*:</label><br>
    <input type="password" name="newPass" placeholder="" required><br><br>

    <label for="confirm">Re-enter Password*:</label><br>
    <input type="password" name="confirm" placeholder="" required><br><br>

    <input type="submit" name="Submit" value="Submit"><br>
</form>

<?php
$message = $viewmodel;

if($message == "ccError"){
    echo "<label>Temp Password is incorrect!</label>";
}
elseif ($message == "passError"){
    echo "<label>The Passwords do not match!</label>";
}
elseif ($message == "success"){
    echo "<label>Password Updated!</label>";
}
?>