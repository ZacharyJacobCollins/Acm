<script>
	(function() {
		/*
		* @param {itemName} returns inner html of clicked item
		* @param {ev} returns the actual event object
		*/
		function loadContent(ev, itemName) {
			ajaxUrl = "";
			ajaxTarget = $('#content');
			console.log(itemName);
			//Map item names to ajax urls
			switch(itemName) {
				case "Create":
					ajaxUrl = "/meeting/create";
					break;
				case "View":
					ajaxUrl = "/meeting/index";
					break;
				default:
					console.log(error+" Could not get nav bar ajax url");
			}			
			ev.preventDefault();
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
	})();
</script>