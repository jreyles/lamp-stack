<table>
<?php for($i=1; $i<=9; $i++)
      { ?>
      <tr>
<?php    for($j=1; $j<=9; $j++)
         { ?>
         <td><?= $i * $j ?></td>
<?php    } ?>
      </tr>
<?php } ?>
</table>
