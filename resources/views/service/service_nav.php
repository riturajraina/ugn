<div class="scrollmenu_serve">
    <ul>
        <li class="<?php echo stristr($_SERVER['REQUEST_URI'], 'flight') ? 'active' : '';?>">
			<a href="/flightsearch">Flights</a>
		</li>
        <li class="<?php echo stristr($_SERVER['REQUEST_URI'], 'hotel') ? 'active' : '';?>">
			<a href="/hotelsearch">Hotels</a>
		</li>
        <li class="<?php echo stristr($_SERVER['REQUEST_URI'], 'cab') ? 'active' : '';?>">
			<a href="/cabsearch">Cab</a>
		</li>
    </ul>
</div>