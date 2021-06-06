<html>
<head>
    <title>Trang đăng kí</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" action="#">
    <!--    <fieldset>-->
    <legend>Edit Student</legend>
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" value="<?php echo $student['first_name']?>"></td>
        </tr>
        <tr>
            <td> Last Name</td>
            <td><input type="text" name="lastname" value="<?php echo $student['last_name']?>"</td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $student['address']?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age" value="<?php echo $student['age']?>"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="male" <?php echo $student['gender'] === 'male' ? 'selected' : '' ?>>Nam</option>
                    <option value="female" <?php echo $student['gender'] === 'female' ? 'selected' : '' ?>>Nữ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Score</td>
            <td><input type="number" name="score" value="<?php echo $student['score']?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Edit Student"></td>
        </tr>
    </table>
    <!--    </fieldset>-->
</form>
</body>
</html>
