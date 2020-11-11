$(document).ready(function(){
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
		scrollTop: $(hash).offset().top
	      }, 900, function(){
	   
		// Add hash (#) to URL when done scrolling (default click behavior)
		window.location.hash = hash;
	      });
	    } // End if
  });
  

  // added align model center

      function alignModal(){

        var modalDialog = $(this).find(".modal-dialog");

        // Applying the top margin on modal dialog to align it vertically center 

        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));

    }

    // Align modal when it is displayed

    $(".modal").on("shown.bs.modal", alignModal);

    // Align modal when user resize the window

    $(window).on("resize", function(){

        $(".modal:visible").each(alignModal);

    }); 



	  $(window).scroll(function() {
	    $(".slideanim").each(function(){
	      var pos = $(this).offset().top;

	      var winTop = $(window).scrollTop();
		if (pos < winTop + 600) {
		  $(this).addClass("slide");
		}
	    });
	  });

	/***************************** try ************************/


    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




	    $(window).resize(function () {
		ResCarouselSize();
	    });

	    //this function define the size of the items
	    function ResCarouselSize() {
		var incno = 0;
		var dataItems = ("data-items");
		var itemClass = ('.item');
		var id = 0;
		var btnParentSb = '';
		var itemsSplit = '';
		var sampwidth = $(itemsMainDiv).width();
		var bodyWidth = $('body').width();
		$(itemsDiv).each(function () {
		    id = id + 1;
		    var itemNumbers = $(this).find(itemClass).length;
		    btnParentSb = $(this).parent().attr(dataItems);
		    itemsSplit = btnParentSb.split(',');
		    $(this).parent().attr("id", "MultiCarousel" + id);


		    if (bodyWidth >= 1200) {
		        incno = itemsSplit[3];
		        itemWidth = sampwidth / incno;
		    }
		    else if (bodyWidth >= 992) {
		        incno = itemsSplit[2];
		        itemWidth = sampwidth / incno;
		    }
		    else if (bodyWidth >= 768) {
		        incno = itemsSplit[1];
		        itemWidth = sampwidth / incno;
		    }
		    else {
		        incno = itemsSplit[0];
		        itemWidth = sampwidth / incno;
		    }
		    $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
		    $(this).find(itemClass).each(function () {
		        $(this).outerWidth(itemWidth);
		    });

		    $(".leftLst").addClass("over");
		    $(".rightLst").removeClass("over");

		});
	    }


	    //this function used to move the items
	    function ResCarousel(e, el, s) {
		var leftBtn = ('.leftLst');
		var rightBtn = ('.rightLst');
		var translateXval = '';
		var divStyle = $(el + ' ' + itemsDiv).css('transform');
		var values = divStyle.match(/-?[\d\.]+/g);
		var xds = Math.abs(values[4]);
		if (e == 0) {
		    translateXval = parseInt(xds) - parseInt(itemWidth * s);
		    $(el + ' ' + rightBtn).removeClass("over");

		    if (translateXval <= itemWidth / 2) {
		        translateXval = 0;
		        $(el + ' ' + leftBtn).addClass("over");
		    }
		}
		else if (e == 1) {
		    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
		    translateXval = parseInt(xds) + parseInt(itemWidth * s);
		    $(el + ' ' + leftBtn).removeClass("over");

		    if (translateXval >= itemsCondition - itemWidth / 2) {
		        translateXval = itemsCondition;
		        $(el + ' ' + rightBtn).addClass("over");
		    }
		}
		$(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
	    }

	    //It is used to get some elements from btn
	    function click(ell, ee) {
		var Parent = "#" + $(ee).parent().attr("id");
		var slide = $(Parent).attr("data-slide");
		ResCarousel(ell, Parent, slide);
	    }

	   $('[data-toggle="tooltip"]').tooltip();  
 /*
	 	$("#login-id").submit(function(event){
			submitForm();
			return false;
		});
*/
		$("#loginForm").submit(function(event){
				submitForm();
				return false;
			});
		$("#signupForm").submit(function(event){
				signupForm();
				return false;
			});

});// document.ready end


//list of country



function submitForm(){
	 $.ajax({
		type: "POST",
		url: "login.php",
		cache:false,
		data: $('form#loginForm').serialize(),
		success: function(response){
			$("#login").html(response)
			$("#login-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}

function signupForm(){
	 $.ajax({
		type: "POST",
		url: "signup.php",
		cache:false,
		data: $('form#signupForm').serialize(),
		success: function(response){
			$("#signup").html(response)
			$("#signup-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}

function viewmoreFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function form_submit() {
    document.getElementById("login-id").submit();
   } 
/*
function submitForm(){
         alert("hellow in submitform");
	 $.ajax({
		type: "POST",
		url: "data.php",
		cache:false,
		data: $('form#login-id').serialize(),
		success: function(response){
			$("#login-but-div").html(response)
			$("#login-modal").modal('hide');
                        alert("success");
		},
		error: function(){
			alert("Error");
		}
	});
}

function loginForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var email = $('#email').val();
    var pass = $('#pass').val();
    if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#email').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#email').focus();
        return false;
    }else{
        alert("Submitting !");
        $.ajax({
            type:'POST',
            url:'data.php',
            data:'loginSubmit=1&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
		alert("before send");
            },
            success:function(msg){
		alert("after send");
                if(msg == 'ok'){
                    $('#email').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}*/


