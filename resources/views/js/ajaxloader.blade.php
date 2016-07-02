<script>
		/*
		*  Loads the correct content based on the current url hash with ajax
		*/
		function loadContent() {
			var hash = window.location.hash.substring(1);
			ajaxUrl = "";
			ajaxTarget = $('#content');
			console.log(hash);
			
			//Map item names to ajax urls
			switch(hash) {
				case "Create":
					ajaxUrl = "/meeting/create";
					break;
				case "View":
					ajaxUrl = "/meeting/index";
					break;
				default:
					console.log(" Could not get nav bar ajax url");
			}			
			closeMenu();
			ajaxTarget = ajaxTarget.empty();
			ajaxTarget.addClass('content--loading');
			setTimeout(function() {
				ajaxTarget.removeClass('content--loading');
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

		loadContent();
</script>