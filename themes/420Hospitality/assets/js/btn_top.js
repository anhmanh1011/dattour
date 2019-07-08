jQuery(document).ready(function ($) {
	if($(".btn-top").length > 0){
		$(window).scroll(function () {
			var e = $(window).scrollTop();
			if (e > 300) {
				$(".btn-top").show()
			} else {
				$(".btn-top").hide()
			}
		});
		$(".btn-top").click(function () {
			$('body,html').animate({
				scrollTop: 0
			})
		})
	}		
});

//if ($('.btn-top').length) {
//    var scrollTrigger = 100, // px
//        backToTop = function () {
//            var scrollTop = $(window).scrollTop();
//            if (scrollTop > scrollTrigger) {
//                $('.btn-top').addClass('show');
//            } else {
//                $('.btn-top').removeClass('show');
//            }
//        };
//    backToTop();
//    $(window).on('scroll', function () {
//        backToTop();
//    });
//    $('.btn-top').on('click', function (e) {
//        e.preventDefault();
//        $('html,body').animate({
//            scrollTop: 0
//        }, 700);
//    });
//}