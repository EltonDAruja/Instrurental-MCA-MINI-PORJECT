<body>
  <table border="1">
  <tr>
       <th>Catagory Code</th>
       <th>Catagory Name</th>
       <th>Description</th>

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select * from tbl_catagory";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['ccode'];?></td>
  <td><?php echo $row['cname'];?></td>
  <td><?php echo $row['cdesc'];?></td>
</tr>
<?php } ?>
</table>
</body>
