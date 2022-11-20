<body>
  <table border="1">
  <tr>
       <th>Name</th>
       <th>Address</th>
       <th>phone</th>
       <th>Email</th>
  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select*from tbl_register";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['adr'];?></td>
  <td><?php echo $row['phn'];?></td>
  <td><?php echo $row['em'];?></td>
</tr>
<?php } ?>
</table>
</body>
