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
			<p><input type="text" name="name" class="form-control" placeholder="Your name"/></p>
			<p><input type="text" name="email" class="form-control" placeholder="Email"/></p>
			<p><a id="btnsubscribe" class="btn btn-default" >Subscribe Newsletter</a></p>	
			<p class="glyphicon glyphicon-refresh spin"></p>
			<p class="txtsuccess">Thank you for subscribe</p>	
		</form>
	</div>
</div>

<script type="text/javascript">
	insert_subscriber();
</script>
