<?php
include ('../header-planning.php');
?>

		<div id="content">
			<h1>TRANSPORTATION</h1>

			<div class="row">
				<h3>SUMMARY</h3>
				<div class="col-md-4 summary">
					<i class="icon-flight"></i>
					<h2>flight</h2>
					<ul class="transport">
						<li>London &#8594; Rome</li>
						<li>Prague &#8594; Paris</li>
					</ul>
				</div>
				
				<div class="col-md-4 summary">
					<i class="icon-train"></i>
					<h2>train</h2>
					<ul class="transport">
						<li>Brussels &#8594; London</li>
						<li>Rome &#8594; Florence</li>
						<li>Florence &#8594; Venice</li>
						<li>Venice &#8594; Budapest</li>
						<li>Budapest &#8594; Vienna</li>
						<li>Prague &#8592;&#8594; Dresden</li>
					</ul>
				</div>


				<div class="col-md-4 summary">
					<i class="icon-bus"></i>
					<h2>bus</h2>
					<ul class="transport">
						<li>Paris &#8594; Brussels</li>
						<li>London &#8592;&#8594; Oxford</li>
						<li>Vienna &#8594; Český Krumlov</li>
						<li>Český Krumlov &#8594; Prague</li>
					</ul>
				</div>
			</div><!--row-->

			<div class="row">
				<h3 class='trans trans-det'>DETAILS</h3>

				<div class="col-md-4 details">
					<h2>london &#8594; rome</h2>
					<h4><i class="icon-flight"></i> FLIGHT</h4>
					<p>Easy Jet <span class="line">|</span> 5 hrs <span class="line">|</span> € 180.24</p>

					<h2>prague &#8594; paris</h2>
					<h4><i class="icon-flight"></i> FLIGHT</h4>
					<p>Easy Jet <span class="line">|</span> 1.5 hrs <span class="line">|</span> € 71.34</p>
				</div>

				<div class="col-md-4 details">
					<h2>brussels &#8594; london</h2>
					<h4><i class="icon-train"></i> TRAIN</h4>
					<p>Eurostar <span class="line">|</span> 2 hrs <span class="line">|</span> € 31.00<p>

					<h2>rome &#8594; florence</h2>
					<h4><i class="icon-train"></i> TRAIN</h4>
					<p>Tran Italia <span class="line">|</span> 1.5 hrs <span class="line">|</span> € 24.00<p>

					<h2>florence &#8594; venice</h2>
					<h4><i class="icon-train"></i> TRAIN</h4>
					<p>Tran Italia <span class="line">|</span> 2 hrs <span class="line">|</span> € 17.00<p>

					<h2>venice &#8594; budapest</h2>
					<h4><i class="icon-train"></i> NIGHT TRAIN (venice &#8594; vienna)</h4>
					<p>11 hrs <span class="line">|</span> € 69.00<p>
					<h4><i class="icon-train"></i> TRAIN (vienna &#8594; budapest)</h4>
					<p>2.5 hrs <span class="line">|</span> € 22.82<p>

					<h2>budapest &#8594; vienna</h2>
					<h4><i class="icon-train"></i> TRAIN (venice &#8594; vienna)</h4>
					<p>Eurostar <span class="line">|</span> 2.5 hrs <span class="line">|</span> € 13.00<p>

					<h2>Prague &#8592;&#8594; Dresden</h2>
					<h4><i class="icon-train"></i> TRAIN (venice &#8594; vienna)</h4>
				</div>

				<div class="col-md-4 details">
					<h2>paris &#8594; brussels</h2>
					<h4><i class="icon-bus"></i> BUS</h4>
					<p>MeinFernbus <span class="line">|</span> 4 hrs <span class="line">|</span> € 20.00</p>

					<h2>london &#8592;&#8594; oxford</h2>
					<h4><i class="icon-bus"></i> BUS</h4>
					
					<h2>vienna &#8594; Český Krumlov</h2>
					<h4><i class="icon-bus"></i> SHUTTLE BUS</h4>
					<p>MeinFernbus <span class="line">|</span> 3.5 hrs <span class="line">|</span> € 12.00</p>

					<h2>Český Krumlov &#8594; Prague</h2>
					<h4><i class="icon-bus"></i> BUS</h4>
				</div>
			</div><!--row-->

		</div><!--content-->

<?php
include ('../footer.php');
?>