<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>
<a href="http://localhost/learnphp/php-mvc/index.php?controller=student&action=add">Create student</a>
<form action="#" method="post">
    <input type="text" name="search" value="<?php echo $keyword ?>"><br>
    <button type="submit">Search</button>
</form>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Score</th>
        <th>Action</th>
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['first_name'] ?></td>
            <td><?php echo $student['last_name'] ?></td>
            <td><?php echo $student['address'] ?></td>
            <td><?php echo $student['age'] ?></td>
            <td><?php echo $student['gender'] === 'male' ? 'Nam' : 'Nữ' ?></td>
            <td><?php echo $student['score'] ?></td>
            <td>
                <a href="http://localhost/learnphp/php-mvc/index.php?controller=student&action=edit&id=<?php echo $student['id'] ?>">Edit</a>&nbsp;&nbsp<a
                        href="http://localhost/learnphp/php-mvc/index.php?controller=student&action=delete&id=<?php echo $student['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>