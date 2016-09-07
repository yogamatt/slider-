$(document).ready(function(){
	onSlide();
	editContainer();
	editContent();
})

function onSlide() {
	$('.slide').hover(function(){
		$(this).addClass('safe');
	}, function(){
		$(this).removeClass('safe');
	})
}

function editContainer() {
	$('.editable').hover(function(){
		$(this).find('.edit-container').animate({'opacity':'1'},300);
	}, function(){
		$(this).find('.edit-container').animate({'opacity':'0'},300);
	})
}

function editContent() {
	$('.edit-button').click(function(){
		if ($('.slide').hasClass('safe')){
			$('.edit-container-slide').slideToggle();
			$('.edit-button, .delete-button').toggleClass('editing');
		};
	})
}