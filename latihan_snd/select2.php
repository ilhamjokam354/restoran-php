<?php
    require_once 'dblatihan.php';
    $db = new DB;
    $sql = "SELECT * FROM tbl_latihan";
    $row  = $db->getAll($sql);
    $no = 1;
?>
<table>
    
        <tr>
            <thead>no</thead>
            <thead>latihan</thead>
            <thead>no latihan</thead>
            <thead>nama</thead>
            <thead>alamat</thead>
            <thead>telepon</thead>
        </tr>
    
    <tbody>
       
            <tr>
            <?php 
            if (!empty($row)) {?>
            <?php foreach ($row as $key):?>
                <td><?php echo $no++?></td>
                <td><?php echo $key['latihan']?></td>
                <td><?php echo $key['no_latihan']?></td>
                <td><?php echo $key['nama']?></td>
                <td><?php echo $key['alamat']?></td>
                <td><?php echo $key['tlp']?></td>
                <?php endforeach?>
                <?php }?>
            </tr>
            
    </tbody>

</table>