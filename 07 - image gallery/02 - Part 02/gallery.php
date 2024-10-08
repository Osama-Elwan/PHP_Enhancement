<?php 
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php  include './views/header.php' ?>


<?php foreach($imageTitles AS $src => $title):?>
    <h3>
        <!-- dont forget this(? ) -->
        <a href="image.php?<?php echo http_build_query(['image'=>$src]) ?>"><?php echo e($title) ?>
    
</h3>
    <img src="./images/<?php echo urlencode($src); ?>" alt="<?php echo e($title) ?>">
    </a>
    <?php endforeach; ?>












<?php include './views/header.php' ?>