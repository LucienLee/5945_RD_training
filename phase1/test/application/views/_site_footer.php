<div class="footer">
        <p>&copy; Company 2012</p>
      </div>

	</div>
</body>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script>
	
		window.checkForm = function(){
			$('.btn').bind('click',function(){
				if( $('input[name="name"]').val()=="" ){
					alert("你沒有名字");
				}
				if( $(textarea).text() === "" )
					alert("你沒有留言");
			});
		};

</script>
</html>