<?php
include 'db_connect.php';      ?>                

<table class="table table-bordered table-hover table-striped" id="listahli">
<thead bgcolor="1D9A78">
    <tr>
        <th>Bil</th>
        <th>Koperasi</th>
        <th>Pemborong</th>
        <th>Peruncit</th>
        <th>Modal Syer</th>
    </tr>
</thead>
<tbody>
    <?php
    $i = 1;
$result = mysqli_query($conn,"SELECT * FROM keahlian");
    while($row= $result->fetch_assoc()):
    ?>
    <tr>
        <td class="text-center"><?php echo $i++ ?></td>
        <td><b><?php echo ucwords($row['Koperasi']) ?></b></td>
        <td class="text-center">
            <?php 
            switch ($row['Pemborong']) {
                case '1':
                    echo "<span> <i class='bi bi-check-circle-fill'></i></span>";
                    break;
                case '2':
                    echo "<span> </span>";
                    break;               
                default:
                    echo "<span class=''>Undefined</span>";
                    break;
            }
            ?>
        </td>
        <td class="text-center">
        <?php 
        switch ($row['Peruncitan']) {
            case '1':
                echo "<span> <i class='bi bi-check-circle-fill'></i></span>";
                break;
            case '2':
                echo "<span></span>";
                break;               
            default:
                echo "<span class=''>Undefined</span>";
                break;
        }
        ?>
    </td>
    <td><b><?php echo ucwords($row['ModalSyer']) ?></b></td>
    </tr>	
<?php endwhile; mysqli_close($conn); ?>
</tbody>
</table>