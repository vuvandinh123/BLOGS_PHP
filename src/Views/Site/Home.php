<?php require_once __PATH_COMPONENT__ . '/Header.php' ?>
<h1 class="text-red-500">Home nek</h1>
<section class="mt-20 ml-72">
    <div class="grid grid-cols-3 gap-5 pr-3">
        <?php
        for($i = 0; $i < 7; $i++) {
            include __PATH_COMPONENT__ . "/Card.php";
        }
        ?>

    </div>
</section>
<?php require_once __PATH_COMPONENT__ . '/Footer.php' ?>