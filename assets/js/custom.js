$(document).ready(function(){
	//featured work carousel
	$('.carousel').carousel()

	//menu mobile
	$("#menuMobile").mmenu();

	$(".campaign a.show-detail").on("click", function(e){
		e.preventDefault();
		$(".campaign-detail").slideToggle("slow");
		$(this).find("span i").removeClass().toggleClass("fa fa-chevron-circle-up");
	});

	var countCampaign = 1;
	$(".campaign-container .add-campaign a.btn-cta").on("click", function(e){
		countCampaign += 1;
		$(".campaign-container").append("<div class=\"row no-margin campaign\">"
									+"<div class=\"col-xs-12 col-md-12\">"
										+"<h3 class=\"text-capitalize\">campaign name "+ countCampaign +" <a href=\"#\" class=\"show-detail\"><span class=\"text-right\"><i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i></span></a>"
									+"</div>"
									+"<div class=\"col-xs-12 col-md-12\">"
										+"<div class=\"row no-margin campaign-info\">"
											+"<div class=\"col-xs-12 col-md-12 no-padding\">"
												+"<img src=\"http://lorempixel.com/150/150/abstract\" class=\"img-circle\">"
												+"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod"
												+"tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"
												+"quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"
												+"consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"
												+"cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
												+"proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>"
												+"<div class=\"clearfix\"></div>"
												+"<h4>Version 2.0 / File Size 5.0 MB / lorem ipsum dolor sit amet.</h4>"
												+"<a href=\"#\" class=\"text-uppercase btn-cta\">download all </a>"
											+"</div>"
										+"</div>"
										+"<div class=\"row no-margin campaign-detail\">"
											+"<div class=\"col-xs-3 col-md-3\">"
												+"<i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i>"
											+"</div>"
											+"<div class=\"col-xs-9 col-md-9\">"
											+"<h5>Title of File</h5>"
												+"<div class=\"row no-margin\">"
													+"<div class=\"col-xs-12 col-md-8 no-padding\">"
														+"<strong>File Type:</strong> ZIP <span class=\"light\">Expires November 2017</span>"
													+"</div>"
													+"<div class=\"col-xs-12 col-md-4 no-padding text-right\">"
														+"<a href=\"#\">Download <span>2MB</span> <i class=\"fa fa-download\" aria-hidden=\"true\"></i></a>"
													+"</div>"
												+"</div>"
											+"</div>"
										+"</div>"
										+"<div class=\"row no-margin campaign-detail last-campaign\">"
											+"<div class=\"col-xs-3 col-md-3\">"
												+"<i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i>"
											+"</div>"
											+"<div class=\"col-xs-9 col-md-9\">"
												+"<h5>Title of File</h5>"
												+"<div class=\"row no-margin\">"
													+"<div class=\"col-xs-12 col-md-8 no-padding\">"
														+"<strong>File Type:</strong> ZIP <span class=\"light\">Expires November 2017</span>"
													+"</div>"
													+"<div class=\"col-xs-12 col-md-4 no-padding text-right\">"
														+"<a href=\"#\">Download <span>2MB</span> <i class=\"fa fa-download\" aria-hidden=\"true\"></i></a>"
													+"</div>"
												+"</div>"
											+"</div>"
										+"</div>"
										+"</div>"
								+"</div>");
	e.preventDefault();
	});


});
