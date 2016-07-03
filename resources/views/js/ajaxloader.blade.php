<script>
		//Add listener to window object to watch for hash change
		window.onhashchange = loadContent;
		/*
		*  Loads the correct content based on the current url hash with ajax
		*/
		function loadContent() {
			var hash = window.location.hash.substring(1);
			ajaxUrl = "/members/ajax/"+hash;
			ajaxTarget = $('#ajax');
			console.log(window.location.hash);
			
			//Map hashes to ajax urls
			ajaxTarget = ajaxTarget.empty();

			//Loading icon
			ajaxTarget.html("<div class=\"preloader-wrapper big active\">"+
			"<div class=\"spinner-layer spinner-blue-only\">"+
				"<div class=\"circle-clipper left\">"+
					"<div class=\"circle\"></div>"+
				"</div><div class=\"gap-patch\">"+
					"<div class=\"circle\"></div>"+
				"</div><div class=\"circle-clipper right\">"+
					"<div class=\"circle\"></div>"+
			"</div></div></div>");

			setTimeout(function() {
				ajaxTarget= ajaxTarget.empty();
				//load html. Optionally send which view in the request here.  
				var html = $.ajax({
					url: ajaxUrl, 
					type: "GET", 
					success: function(data) {
						$data = $(data);
						ajaxTarget.html($data).fadeIn();
					}
				});
			}, 700);
		}

		//load content on first visit
		loadContent();

</script>