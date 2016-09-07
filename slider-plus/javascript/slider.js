$(document).ready(function(){
	addActive();
})

function addActive(){
	var $values = '.values';
	var $change = $($values);
	var $time = '.delay';
	var $delay = $($time);
	var $slider = $('.slider-plus');
	var $value1 = $slider.find('li:nth-child(1) .sas-values').html();	
	$('.slider-plus li:nth-child(1)').addClass('active').css({'z-index':'1','opacity':'1'});
	$change.html($value1);
	setTimeout(translate1, 6500);

	function translate1(){
		var $change = $($values);
		var $value2 = $slider.find('li:nth-child(2) .sas-values').html();
		$slider.find('li:nth-child(3)').removeClass('translate');
		$slider.find('li:nth-child(1)').removeClass('active').addClass('translate').animate({'z-index':'0','opacity':'0'},600);
		$slider.find('li:nth-child(2)').addClass('active').animate({'z-index':'1','opacity':'1'},600);
		$change.html($value2);
		setTimeout(translate2, 6500);
	}

	function translate2(){
		var $change = $($values);
		var $value3 = $slider.find('li:nth-child(3) .sas-values').html();
		$slider.find('li:nth-child(1)').removeClass('translate');
		$slider.find('li:nth-child(2)').removeClass('active').addClass('translate').animate({'z-index':'0','opacity':'0'},600);
		$slider.find('li:nth-child(3)').addClass('active').animate({'z-index':'1','opacity':'1'},600);
		$change.html($value3);
		setTimeout(translate3, 6500);
	}

	function translate3(){
		var $change = $($values);
		var $value3 = $slider.find('li:nth-child(3) .sas-values').html();
		$slider.find('li:nth-child(2)').removeClass('translate');
		$slider.find('li:nth-child(3)').removeClass('active').addClass('translate').animate({'z-index':'0','opacity':'0'},600);
		$slider.find('li:nth-child(1)').addClass('active').animate({'z-index':'1','opacity':'1'},600);
		$change.html($value1);
		setTimeout(translate1, 6500);
	}
}