<?php 
$sorting = $_GET["sort"];

switch ($sorting) 
{
	case 'price-asc':
	$sorting = 'price ASC';	
	break;

	case 'price-desc':
	$sorting = 'price DESC';	
	break;

	case 'popular':
	$sorting = 'count DESC';	
	break;

	case 'news':
	$sorting = 'datetime DESC';	
	break;

	case 'brand':
	$sorting = 'brand';	
	break;

	default:
	$sorting = 'products_id DESC';
	break;
}
 ?>