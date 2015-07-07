// when the document loads, check the screen width
// if it falls within the range of mobile sizes then change the navlist width to 100%

$(window).load(function(){

	var windowWidth = $(window).width();

		if (windowWidth >= 768) {

			$('.myDropdown li').removeClass("col-xs-12");
		}

		else if (windowWidth < 768 && windowWidth >= 320) {


			$('.myDropdown li').addClass("col-xs-12");

			/*

			//target these specific classes and remove touch support on ios devices
			$('.slidearea, .skillset').on('touchstart touchmove', function(e){
				//prevent native touch activity like scrolling
				e.preventDefault();

			*/

			//set the height of the dropdown menu
			$('.navbar-collapse .in').css("height", ($(window).height()) );

		}

		if (windowWidth < 992) {
			$('.macpic').css("display", "none");
		}

		if (windowWidth >= 992) {
			$('.macpic').css("display", "block");
		}


});

$(document).ready(function() {

	var xsMargin = parseInt($('section').css('margin-bottom'));
	var navbarHeight = $('.navbar').height();
	var myOffset = navbarHeight + xsMargin;

	//cool scrolling effect for the navigation anchors
	$('.myDropdown li a, .q-img').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top - myOffset
    }, 1500);
    return false;

	});

	//lets talk button > contact me area
	$('#lets-talk').click(function() {
		$('html, body').animate( {

			scrollTop: $('#contact').offset().top - myOffset

		}, 1500);


	});

	// when another nav is clicked, remove all active states and make the clicked anchor active
	$('.navbar-nav>li>a').click(function() {

		$('.navbar-nav>li>a').removeClass("nav-active");

		$(this).addClass("nav-active");

		$('#bs-example-navbar-collapse-1').removeClass('in');


		$('#bs-example-navbar-collapse-1').addClass('collapse');

	});

	// change styling on the dropdown list if
	$(window).on('resize', function(event) {

		var windowWidth = $(window).width();

		if (windowWidth > 568) {

			$('.myDropdown li').removeClass("col-xs-12");
		}

		else if (windowWidth <= 568 && windowWidth >= 320) {
			$('.myDropdown li').addClass("col-xs-12");
		}

		if (windowWidth < 992) {
			$('.macpic').css("display", "none");
		}

		if (windowWidth >= 992) {
			$('.macpic').css("display", "block");
		}

	});	//end of resize


	/*

	var myArray = ['#skill-nav', '#home'];
	var count = 0;

	$('#next-button').click(function() {

		$('#next-button').attr("href", myArray[count]);
		count++;
		console.log("the count is..." + count);

		$('html, body').animate({

       	 scrollTop: $( $(this).attr('href') ).offset().top

	   	 }, 1000);

	   	 return false;

	});

	*/

	var navHeight = $('.navbar-header').height();

	// php email section

	$("#submit-button").click(function(){

			var postObject = {
				action :	'contactForm',
				data: {
					name: $("#theName").val(),
					email: $("#theEmail").val(),
					subject: $("#theSubject").val(),
					message: $("#input-msg").val()
				}
			}
			//$("form").slideUp();
		//	$("#contact-description").css("display", "none");
		//	$("#message").show();

			$.post('/wp-admin/admin-ajax.php', postObject, function(response){
				console.log(response);
			}, 'json');


			return false;
		});




});	//end of code
