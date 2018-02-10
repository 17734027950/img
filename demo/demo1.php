<?php
	$path = dirname(__FILE__).'/../';
	require_once $path.'vendor/autoload.php';

	use Grafika\Grafika;
	$editor = Grafika::createEditor();


	// $editor->open($image1 , '../images/1.jpg'); // 打开yanying.jpg并且存放到$image1
	// $editor->resizeFit($image1 , 200 , 200);
	// $editor->save($image1 , 'thumb/1-1.jpg');

	// $editor->open($image2 , '../images/2.jpg'); // 打开yanying.jpg并且存放到$image2
	// $editor->resizeFit($image2 , 200 , 200);
	// $editor->save($image2 , 'thumb/1_2.jpg');


	// // echo "<img src=''>";
	

	$src = '../images/1.jpg';
	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'top-left' );
	$editor->save( $image, 'result1.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'top-center' );
	$editor->save( $image, 'result2.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'top-right' );
	$editor->save( $image, 'result3.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'center-left' );
	$editor->save( $image, 'result4.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'center' );
	$editor->save( $image, 'result5.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'center-right' );
	$editor->save( $image, 'result6.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'bottom-left' );
	$editor->save( $image, 'result7.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'bottom-center' );
	$editor->save( $image, 'result8.jpg' );
	$editor->free( $image );

	$editor->open( $image, $src );
	$editor->crop( $image, 300, 200, 'bottom-right' );
	$editor->save( $image, 'result9.jpg' );
	$editor->free( $image );
?>