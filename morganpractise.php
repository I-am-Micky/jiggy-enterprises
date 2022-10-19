<div class="container">
	<div class="row">
		<div class="col-6" >
			<button type="button" class="btn btn-success" id="button">Click Me</button>
		</div>
		<div class="col-6" id="con">
			
			<!-- this is where the new page will appear 
			practise with this and you are good to go, just like jquery -->
		</div>
	</div>
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="Javascript">
	



	$(document).ready(function(){
			$("#button").click(function(){

				$.ajax({
					url:"newpage.php",//you are to create this new page 
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
		

			

				

			})
		});
</script>