<div class="featured">
	<section class="widget">
		<h4>Treatments</h4>
		<ul class="treatments">
			<li><a href="">Diet & Lifestyle</a></li>
			<li><a href="cupping.php">Cupping</a></li>
			<li><a href="moxibustion.php">Moxibustion</a></li>
			<li><a href="tuina.php">Tuina</a></li>
			<li><a href="">Health Funds</a></li>
			<li><a href="article.php">Media Articles</a></li>
		</ul>
	</section>

	<!-- Subscribe letter -->
	<div class="subscribe">
		<h4>Subscribe Newsletter</h4>
		<form id="subscribe" method="post" action="insert.php">
			<p><input type="text" class="name form-control" placeholder="Your name"/></p>
			<p><input type="text" class="email form-control" placeholder="Email"/></p>
			<p><a alt="Subscribe Newsletter" class="btnsubscribe btn btn-default" >Subscribe Newsletter</a></p>	
		</form>
	</div>
</div>

<script type="text/javascript">
	jQuery(".btnsubscribe").click(function(e){
		e.preventDefault();
		// fetch where we want to submit the form to
		var url = jQuery('#subscribe').attr('action');
		alert(url);
		// fetch the data for the form
		var data = jQuery('#subscribe').serializeArray();

		// setup the ajax request
		jQuery.ajax({
		    url: url,
		    data: data,
		    dataType: 'json',
		    success: function() {
			if(resp.success) {
			    alert('form has been posted successfully');
			}
		    }
		});

		// return false so the form does not actually
		// submit to the page
		return false;
	});
</script>
