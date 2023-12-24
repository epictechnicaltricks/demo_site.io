<?php
include 'connectdb.php';

$sql = "SELECT * FROM inquiries";

$results = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
 font-family: Arial, sans-serif;
}

table {
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
a {
    text-decoration: none;
    color: inherit;
}
</style>
</head>
<body>

<h2>Mobile Contact List</h2>

<table>
 <tr>
    <th>Name</th>
    <th>Mobile No</th>
    <th>Email</th>
    <th>Message</th>
    <th>Action</th>
 </tr>
<?php foreach ($results as $row): ?>
 <tr>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><a  href="tel:<?php echo htmlspecialchars($row['phone']); ?>"><?php echo htmlspecialchars($row['phone']); ?></a></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
    <td><?php echo htmlspecialchars($row['msg']); ?></td>
    <td>
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" value="Delete">
        </form>
    </td>
 </tr>
<?php endforeach; ?>
</table>

</body>
</html>