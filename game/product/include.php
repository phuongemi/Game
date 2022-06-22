<?php
$ROOT_DIRECTORY = $_SERVER['DOCUMENT_ROOT'].'/game';
include_once($ROOT_DIRECTORY.'/util/date_util.php');
include_once($ROOT_DIRECTORY.'/util/sql_util.php');
include_once($ROOT_DIRECTORY.'/object/genre.php');
include_once($ROOT_DIRECTORY.'/object/product.php');
include_once($ROOT_DIRECTORY.'/object/product_genre.php');
include_once($ROOT_DIRECTORY.'/object/product_search.php');
include_once($ROOT_DIRECTORY.'/object/product_code.php');
include_once($ROOT_DIRECTORY.'/object/system_requirements.php');
include_once($ROOT_DIRECTORY.'/object/order.php');
include_once($ROOT_DIRECTORY.'/object/order_item.php');
include_once($ROOT_DIRECTORY.'/object/page.php');
include_once($ROOT_DIRECTORY.'/sql/genre_sql.php');
include_once($ROOT_DIRECTORY.'/sql/product_sql.php');
include_once($ROOT_DIRECTORY.'/sql/user_sql.php');
include_once($ROOT_DIRECTORY.'/sql/order_sql.php');
include_once($ROOT_DIRECTORY.'/util/product_util.php');
include_once($ROOT_DIRECTORY.'/util/genre_util.php');
?>