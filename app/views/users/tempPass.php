<form method="post" action="/users/tempPass">
    <input type="hidden" id="form-submit" value="temp-pass">

    <label for="tempPass">Temporary Password*:</label><br>
    <input type="text" id="tempPass" placeholder="" required><br><br>

    <label for="newPass">New Password*:</label><br>
    <input type="password" id="newPass" placeholder="" required><br><br>

    <label for="confirm">Re-enter Password*:</label><br>
    <input type="password" id="confirm" placeholder="" required><br><br>

    <input type="submit" name="Submit" value="Submit"><br>
</form>

<?php

//check if the temp password matches given temp in email

//when submitted, update the password in database

//check if passwords match
if (!empty($post['newPass'])) {
    if ($post['newPass'] != $_POST['confirm'])
    {
        echo("Passwords do not match.");
    }
}
?>