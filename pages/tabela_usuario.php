<table>
    <?php
        for($i = 0; $i < 10; $i++){
            ?>
                <tr>
                    <td>Login <?php echo $i; ?> </td>
                    <td>Email <?php echo $i; ?> </td>
                    <td> <input type="checkbox" /> </td>
                </tr>
            <?php
        }
    ?>
</table>