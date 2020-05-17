
	var ratedIndex = -1;

	
        $('.fa-star').on('click', function () {
             ratedIndex = parseInt($(this).data('index'));
             $('#rating').val(ratedIndex+1); 
        }) ;

        $("#myform").submit( function() {
        	return false;             
        });

        $('.submit').click(function () {
        	console.log($("#rating").attr("value"));
        	console.log($("#review").val());

        	if(($("#rating").attr("value") > 0) && ($("#review").val() != "")) {
        		$.post( $("#myform").attr("action"), { rating: $("#rating").attr("value"), 
        		                                   review: $("#review").val(),
        		                                   prodname: $("#prodname").attr("value") } , function(info) {
        		$("#result").html(info);
        	    });

        		clearInput();
        	} else {
        		$("#result").html("Both Rating and Review fields are mandatory");
        	}
        	
        });

		$('.fa-star').mouseover(function (){
			var currentindex = parseInt($(this).data('index'));

			setStars(currentindex);

		});

		$('.fa-star').mouseleave(function (){
			resetToNormal();

			if(ratedIndex > -1)
				setStars(ratedIndex);
		});

	

	function clearInput() {
		ratedIndex = -1;
		$("#rating").attr("value","");
		resetToNormal();
		$("#review").val('');
	}


	function setStars(starCount) {
		for(var i=0; i <= starCount; i++)
			$('.fa-star:eq('+i+')').css('color','black');
	}

	function resetToNormal() {
		$('.fa-star').css({"font-size":"30px", "color": "#F0F0F0", "display": "inline-block", "text-shadow": "0 0 2px #666666"});
	}