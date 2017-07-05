
<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php");?>
<body>

<!-- login -->
	<div class="login">
		<div class="container">
			<h3>Login</h3>
			<form action="login_view.php" method="post">
				<span class="input input--kuro">
					<input class="input__field input__field--kuro kuro_w3" type="text" id="input-7" name="login_user" placeholder="" required="">
					<label class="input__label input__label--kuro" for="input-7">
						<span class="input__label-content input__label-content--kuro">Username</span>
					</label>
				</span>
				<span class="input input--kuro">
					<input class="input__field input__field--kuro kuro_w3" type="password" id="input-8" name="login_pass" placeholder="" required="">
					<label class="input__label input__label--kuro" for="input-8">
						<span class="input__label-content input__label-content--kuro">Password</span>
					</label>
				</span>
				
				<input type="submit" value="Submit">
				<input type="hidden" name="act" value="check_login">
			</form>
			
			
			<div class="w3l_login_form_bottom1">
				<h5>For New People</h5>
				<a href="sign-up.php">Register Now!</a>
			</div>
		</div>
	</div>
<!-- //login -->
<!-- footer -->

<!-- //footer -->
<!-- stacked-graph -->
	<script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/jquery.enumerable.js"></script>
    <script type="text/javascript" src="js/jquery.tufte-graph.js"></script>
	 <script type="text/javascript">
      $(document).ready(function () {

        jQuery('#stacked-graph').tufteBar({
          data: [
            [[1.5, 1.0, 0.51], {label: '2013'}],
            [[2.0, 1.03, 0.6], {label: '2014'}],
            [[2.4, 0.9,  2.0], {label: '2015'}],
            [[1.5, 2.6, 0.45], {label: '2016'}]
          ],
          barLabel:  function(index) {
            amount = ($(this[0]).sum() * 10000).toFixed(0);
            return '$' + $.tufteBar.formatNumber(amount);
          },
          axisLabel: function(index) { return this[1].label },
          legend: {
            data: ["Finance", "Metal", "Telecom"]
          }
        });
      });
    </script>
<!-- //stacked-graph -->
<!-- script for marque -->
	<script>
	  $('.marquee').marquee({
		gap: 100,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});
	</script>
	
<!-- //script for marque -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>