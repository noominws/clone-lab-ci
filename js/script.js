/*
  * TYPOGRAPHY
*/

//Cufon.replace('body', {hover: true});
//Cufon.replace('h2, .main h3, h4, h5, h6, #slogan, .label', {hover: true});
Cufon.replace('.ozonex, h1, h2, h3, h4, h5, label, .heading, #menu ul li a, #top_nav a, #contact span', {hover: true, fontFamily: 'DB Ozone X'});
Cufon.replace('.mic1, .mic2, .mic3, .mic4, .mic5, .mic6, .mic, #news .pdf_list li a, #news .pdf_list li span.name, #news .none_list li span.title, #formular label, #formular2 label, #orderForm, #expoForm, #bizForm, span.sarabunnew', {hover: true});
Cufon.replace('#news .wealth_list li a, #news .wealth_list li span.title, #news .wealth_list li span.name', {hover: true});
Cufon.replace('#member li span.name', {hover: true});
Cufon.replace('#member li span.keyword', {hover: true});
Cufon.replace('#mcsweb li a.link', {hover: true});
Cufon.replace('#biz li span.name', {hover: true});
Cufon.replace('#biz li span.keyword', {hover: true});
Cufon.replace('.profile h1, .profile h2, .profile h3', {hover: true});
//Cufon.replace('.alist, .sarabunjustify, .sarabun, h3.orange, h4, h5, h6', {hover: true, fontFamily: 'TH SarabunPSK'});


$(document).ready(function(){
	
	/*
	  * TOP MENU
	*/
	
	$("#top_nav li").hover(function(){
		 $(this).find('.subnav').stop().slideDown(500); 

	},function(){ 
		$(this).find('.subnav').stop().slideUp(100);
	});

	$("#top_nav li").click(function(){
		 $(this).find('.subnav').stop().slideDown(500); 

	},function(){ 
		$(this).find('.subnav').stop().slideUp(100);
	});

	
	/*
	  * TOGGLE PROJECT
	*/

	$("#btn_toggle").click(function () {
		$("#show_project").slideToggle(400);
	}).toggle(
	function(){
	  $(this).addClass("active");
	},
	function(){
	  $(this).removeClass("active")
	}); 

	
	/*
	  * LEFT MENU
	*/
	$('#left_nav > li').has('ul').append('<span class="arrow"></span>');
	$('#left_nav > li.last:not(:has(ul))').addClass('final');  
	  
	var current = $('#left_nav > li > a.current');
	$(current).next().slideDown("slow");
	$(current).parent().find('ul ul').show("fast");
	$(current).parent().children('.arrow').addClass('current');
	  
	$('#left_nav > li > a').click(function(){
		if ($(this).attr('class') != 'current'){
		  //toggle
		  $('#left_nav li ul').not($(this).next()).slideUp();
		  $('#left_nav li ul ul').hide("fast");
		  $(this).next().slideDown();
		  $('#left_nav li ul ul').show("slow");
		  //removal
		  $('#left_nav li a').removeClass('current');
		  $('#left_nav .arrow').removeClass('current');
		  //additional
		  $(this).addClass('current');
		  $(this).parent().children('.arrow').addClass('current');
		}
	});
	

});

/*
  * TOGGLE
*/

function toggle(){
	$('.toggle > li').append('<span class="arrow"></span>'); 
	  
	var current = $('.toggle > li > a.active');
	$(current).next().slideDown("slow");
	$(current).parent().children('.arrow').addClass('active');
	  
	$('.toggle > li > a').click(function(){
		if ($(this).attr('class') != 'active'){
		  //toggle
		  $('.toggle li div.sub').not($(this).next()).slideUp();
		  $(this).next().slideDown();
		  //removal
		  $('.toggle li a').removeClass('active');
		  $('.toggle .arrow').removeClass('active');
		  //additional
		  $(this).addClass('active');
		  $(this).parent().children('.arrow').addClass('active');
		}
	});
}

/*
  * OVERLAY CUSTOME
*/
function overlayFade(selector,box) {
	
	$(selector).bind("click", function(){
		
		var screenTop = $(document).scrollTop();
		$('.overlayOuter').css('top', screenTop+60);
		
		//-----------

		var externalPage = $(this).attr("rel");
		
		$('.overlayInner').load(externalPage, function(){ 
		  Cufon.replace('.overlayInner h1, .overlayInner h2, .overlayInner h3, .overlayInner h4, .overlayInner h5, .overlayInner #orderForm, .overlayInner #expoForm, .overlayInner #bizForm, .overlayInner .light_button', {hover: true});
		  $('#overlay').fadeIn('slow',function(){
			//$(box).stop().slideDown(300);
			$(box).fadeIn(300); 
			});
		});
	});
	$('.boxclose,#overlay').click(function(){
		//$(box).stop().slideUp(500,function(){
		$(box).fadeOut(500,function(){
			$('#overlay').fadeOut('fast');
		});
	});
}

function overlayPhoto(selector,box) {
	
	$(selector).bind("click", function(){
		
		var externalphoto = $(this).attr("rel");
		
		$('#overlay').fadeIn('slow',function(){
			$('.overlayInner').html('<img src="'+externalphoto+'" alt="" class="aligncenter" />'); 
			$(box).fadeIn(300); 
		});
	});
	$('.boxclose,#overlay').click(function(){
		$(box).fadeOut(500,function(){
			$('#overlay').fadeOut('fast');
		});
	});
}

function overlayFadeParam(selector,box) {
	
	$(selector).bind("click", function(){
		var screenTop = $(document).scrollTop();
		$('.overlayOuter').css('top', screenTop+60);
		//-----------
		var externalPage = $(this).attr("rel");
		var dataPage = $(this).attr("data");
		$.ajax({
		  type: "POST",
		  url: externalPage,
		  data: dataPage,
		  success: function(msg) {
			$('.overlayInner').html(msg);
			Cufon.replace('.textlink, .atm_screen, .subtopic, .topic, .overlayInner h1, .overlayInner span.sarabunnew, .overlayInner h2, .overlayInner h3, .overlayInner .keyword, .overlayInner .detail, .overlayInner .highlight', {hover: true});
			$('#overlay').fadeIn('slow',function(){
				//$(box).stop().slideDown(300);
				$(box).fadeIn(300); 
			});
		  }
		});
	});
	$('.boxclose,#overlay').click(function(){
		//$(box).stop().slideUp(500,function(){
		$(box).fadeOut(500,function(){
			$('#overlay').fadeOut('fast');
		});
	});
}

function overlayFadeInline(selector,box) {
	
	$(selector).bind("click", function(){	
		var screenTop = $(document).scrollTop();
		$('.overlayOuter').css('top', screenTop+60);
		//-----------
		var internalPage = $(this).attr("rel");
		$('.overlayInner').empty();
		$('.overlayInner').html($(internalPage).html());
		//Cufon.replace('a.alist, ul.pdf_list li a, .topic1, .textlink, .atm_screen, .subtopic, .topic, .overlayInner h1, .overlayInner h2, .overlayInner h3, .overlayInner h4, .overlayInner .heading, .overlayInner .keyword, .overlayInner .detail, .overlayInner .highlight, .overlayInner p.topic1, .overlayInner ul.item li', {hover: true});
		Cufon.replace('.overlayInner h1, .overlayInner h2, .overlayInner h3, .overlayInner h4, .overlayInner h5', {hover: true});
		$('#overlay').fadeIn('slow',function(){
			$(box).fadeIn(300); 
		});
	});
	$('.boxclose,#overlay').click(function(){
		$(box).fadeOut(500,function(){
			$('#overlay').fadeOut('fast');
		});
	});
}

function overlayFadeInline1(selector,box) {
	
	$(selector).bind("click", function(){	
		var screenTop = $(document).scrollTop();
		$('.overlayOuter1').css('top', screenTop+60);
		//-----------
		var internalPage = $(this).attr("rel");
		$('.overlayInner1').empty();
		$('.overlayInner1').html($(internalPage).html());
		Cufon.replace('a.alist, ul.pdf_list li a, .topic1, .textlink, .atm_screen, .subtopic, .topic, .overlayInner1 h1, .overlayInner1 h2, .overlayInner1 h3, .overlayInner1 h4, .overlayInner1 .heading, .overlayInner1 .keyword, .overlayInner1 .detail, .overlayInner1 .highlight, .overlayInner1 p.topic1, .overlayInner1 ul.item li', {hover: true});
		$('#overlay1').fadeIn('slow',function(){
			$(box).fadeIn(300); 
		});
	});
	$('.boxclose1,#overlay1').click(function(){
		$(box).fadeOut(500,function(){
			$('#overlay1').fadeOut('fast');
		});
	});
}

function overlayFadeOnly(selector,box) {
	
	$(selector).bind("click", function(){
		var screenTop = $(document).scrollTop();
		$(box).css('top', screenTop+60);
		$('#overlay').fadeIn('slow',function(){
			//$(box).stop().slideDown(300);
			$(box).fadeIn(300); 
		});
	});
	$('.boxclose,#overlay').click(function(){
		//$(box).stop().slideUp(500,function(){
		$(box).fadeOut(500,function(){
			$('#overlay').fadeOut('fast');
		});
	});
}


function openwin2(url) {
	w = window.open(url,'newwindow','width=800,height=600,menubar=0,status=0,scrollbars=1,resizable=1');
}

function changeSize(fsize) {
	$('.content_size').css('font-size', fsize);
}

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32703456-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

if (typeof jQuery != 'undefined') {
    jQuery(document).ready(function($) {
        var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3)$/i;
        var baseHref = '';
        if (jQuery('base').attr('href') != undefined)
            baseHref = jQuery('base').attr('href');
        jQuery('a').each(function() {
            var href = jQuery(this).attr('href');
            if (href && (href.match(/^https?\:/i)) && (!href.match(document.domain))) {
                jQuery(this).click(function() {
                    var extLink = href.replace(/^https?\:\/\//i, '');
                    _gaq.push(['_trackEvent', 'External', 'Click', extLink]);
                    if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
                        setTimeout(function() { location.href = href; }, 200);
                        return false;
                    }
                });
            }
            else if (href && href.match(/^mailto\:/i)) {
                jQuery(this).click(function() {
                    var mailLink = href.replace(/^mailto\:/i, '');
                    _gaq.push(['_trackEvent', 'Email', 'Click', mailLink]);
                });
            }
            else if (href && href.match(filetypes)) {
                jQuery(this).click(function() {
                    var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
                    var filePath = href;
                    _gaq.push(['_trackEvent', 'Download', 'Click-' + extension, filePath]);
                    if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
                        setTimeout(function() { location.href = baseHref + href; }, 200);
                        return false;
                    }
                });
            }
        });
    });
}
