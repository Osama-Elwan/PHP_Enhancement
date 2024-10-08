<?php 
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php  include './views/header.php' ?>

<div class="galery-container">
    
    <?php foreach($imageTitles AS $src => $title):?>
        <!-- dont forget this(? ) after image.php -->
        <a href="image.php?<?php echo http_build_query(['image'=>$src]) ?>" class="gallery-item">
            <h3><?php echo e($title) ?></h3>
            <img src="./images/<?php echo urlencode($src); ?>" alt="<?php echo e($title) ?>">
        </a>
            <?php endforeach; ?>
    </div>












<?php include './views/header.php' ?>