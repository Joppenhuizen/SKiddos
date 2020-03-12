jQuery( document ).ready(function($) {

	$('.mobile-btn').click(function(){
		$(this).toggleClass('active');
		$('.nav-top.mobile').toggleClass('active');
	});

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();   
		if(scroll > 150)
		{
			classScroll($('.nav-bar-container'), 'anim', 'add');
		}
		else
		{
			classScroll($('.nav-bar-container'), 'anim', 'remove');
		}
		if(scroll > 200)
		{
			classScroll($('body'), 'scrolled', 'add');
		}
		else
		{
			classScroll($('body'), 'scrolled', 'remove');
		}
	});
	$('.scrolltop').click(function(){
		window.scroll({top: 0, behavior: 'smooth'});
	});

	if($('#type-slider').length)
	{
		$('#type-slider').slick({
			infinite: true,
			slidesToShow: 3,
  			slidesToScroll: 1,
  			dots: false,
  			speed: 300,
  			arrows: false,
  			autoplay:true,
  			responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		  	]
		});
	}
	if($('#testemonial-slider').length)
	{
		$('#testemonial-slider').slick({
			infinite: true,
			slidesToShow: 2,
  			slidesToScroll: 1,
  			dots: false,
  			speed: 300,
  			arrows: false,
  			autoplay:true,
  			responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		  	]
		});
	}

	function classScroll(ele, classname, action)
	{
		switch(action)
		{
			case 'add':
				if(!ele.hasClass(classname))
				{
					ele.addClass(classname);
				}
			break;
			case 'remove':
				if(ele.hasClass(classname))
				{
					ele.removeClass(classname);
				}
			break;
		}
	}

	

});