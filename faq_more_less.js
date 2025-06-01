jQuery(document).ready(function(){
  var $this = $('.faqAccordian');  
	$('.collapsible-content__item').slice(0,3).addClass('shown');
	$('.collapsible-content__item').not('.shown').hide();
	$('.faqAccordian .faqButton').on('click',function(){
		$('.collapsible-content__item').not('.shown').toggle(300);
		$(this).toggleClass('showLess');
        if ($(this).text() == "view more") {
          $(this).text("view less")
        } else {
          $(this).text("view more")
        }
	});
});
