<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="library";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_error());
}

if($_GET['submit'] == "submit"){
    $search = $_GET['search'];
    $query = mysqli_query($conn,"SELECT name,number FROM search WHERE `name` LIKE '%$search%'");
    if(mysqli_num_rows($query) > 0){
        ?>
        <table border="2">
            <tr>
                <td>Name</td>
                <td>Number</td>
            </tr>
        <?php
        while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['number'] ?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <?php
    }
  mysqli_close($conn);
}
?>