<?php
    require "connection.php";
    
    $query_mysql = mysqli_query($host,"SELECT id,nama,alamat,pekerjaan FROM user")or die(mysqli_error());

    // mysqli_fetch_assoc => Array Asosiatif
    // mysqli_fetch_row => Array Numeric
    // mysqli_fetch_array => Mix
    // mysqli_fetch_object => Object
    
?>

<h3>Data user</h3>
<a class="tombol" href="create.php">+ Tambah Data Baru</a>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>		
        <th>Opsi</th>		
    </tr>
    <?php 

    $num = 1;
        
    while($dataUser = mysqli_fetch_array($query_mysql)){

    ?>
    <tr>
        <td><?php echo $num++; ?></td>
        <td><?php echo $dataUser['nama']; ?></td>
        <td><?php echo $dataUser['alamat']; ?></td>
        <td><?php echo $dataUser['pekerjaan']; ?></td>
        <td>
            <a class="edit" href="edit.php?id=<?php echo $dataUser['id']; ?>">Edit</a> |
            <a class="hapus" href="delete.php?id=<?php echo $dataUser['id']; ?>">Hapus</a>					
        </td>
    </tr>
    <?php 
        } 
    ?>
</table>