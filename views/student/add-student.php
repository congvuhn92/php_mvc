<html>
<head>
    <title>Trang tạo mới</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" action="#">
    <!--    <fieldset>-->
    <legend>Add Student</legend>
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td> Last Name</td>
            <td><input type="text" name="lastname"</td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="male" selected>Nam</option>
                    <option value="female">Nữ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Score</td>
            <td><input type="number" name="score"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Create Student"></td>
        </tr>
    </table>
    <!--    </fieldset>-->
</form>
</body>
</html>
