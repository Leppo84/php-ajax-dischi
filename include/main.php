<?php

foreach ($all_disks as $disk) {
    ?>
    <img src="<?=$disk['poster']?>" alt="<?=$disk['title']?>">
    <h3><?=$disk['title']?></h3>
    <span><?=$disk['author']?></span>
    <span><?=$disk['year']?></span>
<?php
}

?>