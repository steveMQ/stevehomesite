<html>
	<head><script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script></head>
	<body>

<form>
	<input type="text" id="theName" value="Atticus White" />
	<input type="text" id="theEmail" value="contact@atticuswhite.com" />
	<textarea id="theMessage">My message</textarea>
	
	<input type="submit" id="submitButton" />
</form>

<div id="message" style="display:none;">Thanks for contacting us</div>


<script type="text/javascript">
	$(document).ready(function(){
	
		$("#submitButton").click(function(){
			var postObject = {
				action :	'contactForm',
				theName: $("#theName").val(),
				theEmail: $("#theEmail").val(),
				theMessage: $("#theMessage").val()
			};
			
			
			$("form").slideUp();
			$("#message").show();
			
			$.post('functions.php', postObject, function(resp){
				
			});
			
			// cod ehere
			
			return false;
		});
	
	
		
	});
</script>

</body>
</html>