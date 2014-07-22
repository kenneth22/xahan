<!DOCTYPE html>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="hubSubmit.js"></script>

</head>
<body>
	<form id="comment-test">
		<div id="error-holder"></div><br/>
		<label>Name:</label><input type="text" name="name"><br/>
		<label>Email:</label><input type="text" name="email"><br/>
		<label>Phone:</label><input type="text" name="phone"><br/>
		<label>Comment:</label><textarea name="comment"></textarea><br/>
		<input type="hidden" name="form_id" value="2325">
		<input type="hidden" name="redirect_url" value="travelcampstore.com/thankyoupage">
		<input type="button" class="breezehub-btn" data-submit ="comment-test" value="Submit Comment" name="btn-submit">
	</form>
</body>

</html>	