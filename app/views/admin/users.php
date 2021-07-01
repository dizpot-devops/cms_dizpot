<?php
$users = $viewmodel;
?>
<div class="add-user">
    <a href="/users/create" id="createUser">
        <input type="submit" name="Submit" value="Create User"><br>
    </a>
</div>

<style>
    table {
        border-collapse: separate;
        border-spacing: 15px 15px;
    }
</style>
<table>
    <tr>
        <th>User ID     </th>
        <th>First Name  </th>
        <th>Last Name   </th>
        <th>Email       </th>
    </tr>
    <?php
        for($i = 0; $i < count($users); $i++){
            echo '
            <tr>
                <td>'. $users[$i]["id"]         .'</td>
                <td>'. $users[$i]["firstName"]  .'</td>
                <td>'. $users[$i]["lastName"]   .'</td>
                <td>'. $users[$i]["email"]      .'</td>
            </tr>
            ';
        }
    ?>
</table>