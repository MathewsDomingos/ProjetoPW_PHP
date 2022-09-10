<table>
    <?php
        for($i = 0; $i < 10; $i++){
            ?>
                <tr>
                    <td>Nome <?php echo $i; ?> </td>
                    <td>Endereço <?php echo $i; ?> </td>
                    <td>CPF <?php echo $i; ?> </td>
                </tr>
            <?php
        }
    ?>
</table>