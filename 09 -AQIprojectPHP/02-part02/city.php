
<?php 
include_once __DIR__. '/inc/functions.inc.php';
$city = null;
if(!empty($_GET['city'])){
    
    $city = $_GET['city'];
}
// var_dump($city);

$filename = null;
if(!empty($city)){
    $cities = json_decode(
        file_get_contents(__DIR__ . '/../data/index.json' ),
        true
    );
    // var_dump($cities);
    foreach($cities AS $currentCity) {
        if($currentCity['city'] === $city){
            $filename = $currentCity['filename'];
            break;
        }
    }
}
var_dump($filename);
if(!empty($filename)){
    $data = json_decode(
        file_get_contents('compress.bzip2://' . __DIR__ . '/../data/' . $filename),
        true
    )['results'];
    var_dump($data);
}
?>


<?php 
include_once __DIR__. '/views/header.inc.php';
?>















<?php 
include_once __DIR__. '/views/footer.inc.php';
?>
