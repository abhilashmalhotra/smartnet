new WOW().init();
$(".animsition").animsition();
$('[data-toggle="tooltip"]').tooltip();
function modalAnimation(modal, animation) {
	$('#'+ modal +' .modal-dialog').attr('class', 'modal-dialog modal-dialog-centered modal-lg ' + animation + '  animated');
};
$(document).ready(()=> {		
	$('#searchOpen').click(()=> {
		$('.header__search').slideToggle();
	});	
	$('#closeSearchbar').click(()=> {			
		$('.header__search').slideUp();
	});
	$(window).scroll(()=> {    
		var scroll = $(window).scrollTop();
		if (scroll <= 100) {			
			$(".menu__right").show();
		} else {			
			$(".menu__right").hide();
		}
	});
	$('#logInModal').on('show.bs.modal', function (e) {
		modalAnimation('logInModal', 'bounceInLeft');
	});
	$('#logInModal').on('hide.bs.modal', function (e) {
		modalAnimation('logInModal', 'slideOutUp');
	});
	$('#registerModal').on('show.bs.modal', function (e) {
		modalAnimation('registerModal', 'bounceInLeft');
	});
	$('#registerModal').on('hide.bs.modal', function (e) {
		modalAnimation('registerModal', 'slideOutUp');
	});
	ma5menu({
		position: 'right',
		closeOnBodyClick: true
	});
});