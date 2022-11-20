<body>
  <table border="1">
  <tr>
       <th>UserID</th>
       <th>User Name</th>

  </tr>
       <?php
            include("DatabaseCon.php");
            $db=new DatabaseCon();
            $s="select uid,uname from tbl_login";
            $rs=$db->selectData($s);
            while($row=mysqli_fetch_array($rs)) {
        ?>
<tr>
  <td><?php echo $row['uid'];?></td>
  <td><?php echo $row['uname'];?></td>
</tr>
<?php } ?>
</table>
</body>
