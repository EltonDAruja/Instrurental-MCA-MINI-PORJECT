<body>
  <table border="1">
  <tr>
       <th>Variety Code</th>
       <th>Variety Name</th>
       <th>Description</th>

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select * from tbl_variety";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['vcode'];?></td>
  <td><?php echo $row['vname'];?></td>
  <td><?php echo $row['vdesc'];?></td>
</tr>
<?php } ?>
</table>
</body>
