
<div class="container">
	<div class="header">
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="social-media">
				<a target="_blank" href="https://twitter.com/hmvactis"> 
					<img src="../images/twitter.png">
				</a>
				<a target="_blank" href="https://www.facebook.com/hmvactis"> 
					<img src="../images/facebook.png">
				</a>
				<a target="_blank" href="https://www.linkedin.com/company/hmv-actis"> 
					<img src="../images/linkedin.png">
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="logo">
					<a href='../../../'><img src='../images/logo.png' ></a>
			</div>
		</div>

	</div>
@if (Auth::check())
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 space-inside-down-sm text-right">
		<p><strong>Ingelogd als: </strong>{{ Auth::user()->name }}</p>
		@if($profiel->isEmpty())<br/>
			<a href='lid-worden'>Word lid!</a>
		@endif
	</div>
@endif
</div>