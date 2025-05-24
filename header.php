<?php
/**
* Header File
*
* @package zai
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress Theme</title>
    <?php wp_head();?>
</head>
<body>
<?php
if(function_exists('wp_body_open')){
    wp_body_open();
}
 ?>

    <header> Header</header>
