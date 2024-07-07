    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	 <script src="https://code.jquery.com/jquery.js"></script>
	 <!-- Include all compiled plugins (below), or include individual files
	 as needed -->
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/bootstrap.js"></script>
	 <script src="js/jquery.js"></script>
	 <script>
		$(document).ready(function() {
			setTimeout(function() {
				$('.alert').remove();
			}, 5000);
		});
	 </script>
	 <script>
		var moreNotice = document.getElementById('moreNotice');
		moreNotice.addEventListener('click', function() {
			alert('No more notice yet...');
		});
	 </script>
	 <script>
		var moreLetter = document.getElementById('moreLetter');
		moreLetter.addEventListener('click', function() {
			alert('No more letter yet...');
		});
	 </script>
</body>
</html>