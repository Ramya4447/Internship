<?php
$conn = mysqli_connect("localhost", "root", "", "ramya");
$sql = "SELECT * FROM ask";
$records = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($records)) {
?>
    <table style="width: 100%; text-align:center;border-collapse: collapse;" border="1">
        <tr>
            <th>Name</th>
            <thgi>Email</th>
            <th>Subject</th>
        </tr>
        <tr>
            <td>
                <?php echo $data['firstname']; ?>
            </td>
            <td>
                <?php echo $data["lastname"]; ?>
            </td>
            <td>
                <?php echo $data["qustion"]; ?>
            </td>
        <?php
    }
        ?>
        </tr>
    </table>
