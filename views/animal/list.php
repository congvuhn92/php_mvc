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
        <th>Name</th>
        <th>Leg</th>
        <th>Height</th>
        <th>Weight</th>

    </tr>
    <?php foreach ($animals as $key => $animal) { ?>
        <tr>
            <td><?php echo $animal['name'] ?></td>
            <td><?php echo $animal['leg'] ?></td>
            <td><?php echo $animal['height'] ?></td>
            <td><?php echo $animal['weight'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>