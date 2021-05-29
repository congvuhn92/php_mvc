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
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['first_name'] ?></td>
            <td><?php echo $student['last_name'] ?></td>
            <td><?php echo $student['address'] ?></td>
            <td><?php echo $student['age'] ?></td>
            <td><?php echo $student['gender'] ?></td>
            <td><?php echo $student['score'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>