<div class="container">
	<div class="row row-centered fadeInDown wow">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
			<div class="card type-5 ">
				<div class="top ">
				</div>
				<div class="image">
					<img class="img-responsive" src="../images/netwerk-hexagon.png">
				</div>
				<div class="information ">
					<h4> {{ $data['netwerk']->title }} </h4>
					<div class="verdeler"> </div>
					<p> {{ $data['netwerk']->description }}</p>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
			<div class="card type-5 ">
				<div class="top ">
				</div>
				<div class="image">
					<img class="img-responsive" src="../images/ontplooing-hexagon.png">
				</div>
				<div class="information ">
					<h4> {{ $data['zelfontplooing']->title }} </h4>
					<div class="verdeler"> </div>
					<p> {{ $data['zelfontplooing']->description }}</p>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
			<div class="card type-5 ">
				<div class="top ">
				</div>
				<div class="image">
					<img class="img-responsive" src="../images/cv-hexagon.png">
				</div>
				<div class="information ">
					<h4> {{ $data['cv_building']->title }} </h4>
					<div class="verdeler"> </div>
					<p> {{ $data['cv_building']->description }}</p>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  ">
			<div class="card type-5 ">
				<div class="top ">
				</div>
				<div class="image">
					<img class="img-responsive" src="../images/gezelligheid-hexagon.png">
				</div>
				<div class="information ">
					<h4> {{ $data['gezelligheid']->title }} </h4>
					<div class="verdeler"> </div>
					<p> {{ $data['gezelligheid']->description }}</p>
				</div>
				<div style="clear:both; "></div>
			</div>
		</div>
		<div class="col-lg-12 space-outside-lg">
			<a class="btn-standard bg-accent text-color-dark uppercase space-outside-up-lg " href="/over-ons"> over ons  </a>
		</div>
		<div class="col-lg-12">
			<div class="divider bg-accent "></div>
		</div>
	</div>
</div>