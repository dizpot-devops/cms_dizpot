<form method="post" action="/users/create">
    <input type="hidden" name="form-submit" value="users-create" />

    <label for="fName">First Name*:</label><br>
    <input type="text" id="fName" name="fName" placeholder="" required><br><br>

    <label for="lName">Last Name*:</label><br>
    <input type="text" id="lName" name="lName" placeholder="" required><br><br>

    <label for="email">Email*:</label><br>
    <input type="email" id="email" name="email" placeholder="" required><br><br>

    <input type="submit" name="submit" value="Submit"><br>
</form>
