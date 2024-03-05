<?php

   include "../controller/Employec.php" ;
   $empC=new employeC() ;
   $List =$empC->ListEmployees() ;
   var_dump($List);
?>
<html>

<head></head>

<body>
   <a href="addEmploye.php" 

    <center>
        <h1>List of employes</h1>
        
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($List as $employe) {
        ?>
            <tr>
                <td><?=$employe ['id'];?></td>
                <td><?=$employe ['firstName'];?></td>
                <td><?=$employe ['lastName'];?></td>
                <td><?=$employe ['email'];?></td>
                <td><?=$employe ['DoB'];?></td>
                <td><input type ="submit" value=" Update"></td>
                <td><a href="delete.php?id=<?php echo $employe['id']?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
  
</body>

</html>
