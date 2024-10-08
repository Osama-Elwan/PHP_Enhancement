<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
$pages =[
    'citrus_salmon' => 'Citrus Symphony Salmon',
    'mediterranian_pasta' => 'Mediterranean Marvel Pasta',
    'sunset_risotto' => 'Sunset Risotto',
    'tropical_tacos' => 'Tropical Tango Tacos',
];
?>
<form action="include.php" method="get">
    <select name="page" id="">
        <option value="">Please select a recipe</option>
        <?php foreach ($pages as $key => $value):?>
            <option 
            value="<?php echo e($key) ?>"
            <?php if(!empty($_GET['page']) && $_GET['page'] ==$key) echo 'selected'; ?>
            >
            <?php echo e($value) ;?>
            </option>
        <?php endforeach; ?>
        
    </select>
    <input type="submit" value="Submit!">
</form>

<?php 

if(!empty($_GET['page'])){
    $page = $_GET['page'];
    // if(in_array($page,$pages)){ //in_array check about values of assoc array  and we use keys not values 
    if(!empty($pages[$page])){

        echo file_get_contents("pages/{$page}.php");//change file ext to html dont forget that 
    }
}
?>

</body>
</html>
