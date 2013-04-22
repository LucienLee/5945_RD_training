<div class="footer">
        <p>&copy; Company 2012</p>
      </div>

	</div>
</body>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="<?=base_url("/js/bootstrap.min.js")?>"></script>
<script>
	
		window.checkForm = function(){
			$('.btn').bind('click',function(e){
				if( $('input[name="name"]').val()=="" ){
					alert("你沒有名字");
					e.preventDefault();
				}
				if( $(textarea).text() === "" ){
					alert("你沒有留言");
					e.preventDefault();
				}
			});
		};

</script>
</html>