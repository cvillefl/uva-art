<?php

function p($page,$echo=true) {
	$p = array();

	$p['home'] = HOME;
	$p['img']  = $p['home'] . "img/";
	$p['css']  = $p['home'] . "css/";
	$p['js']   = $p['home'] . "js/";
	$p['ajax'] = $p['home'] . "ajax/";
	$p['pdf']  = $p['home'] . "pdf/";


	$p['studio-art'] = $p['home'] . "studio-art/";
		$p['sa/maj-min']            = $p['studio-art'] . "majors-minors/";
		$p['sa/dm']                 = $p['studio-art'] . "distinguished-majors/";
		$p['sa/courses']            = $p['studio-art'] . "courses/";
		$p['sa/faculty']            = $p['studio-art'] . "faculty/";
		$p['sa/visiting-a']         = $p['studio-art'] . "visiting-artists/";
		$p['sa/ruffin-a']           = $p['studio-art'] . "ruffin-artist/";
		$p['sa/anspaugh']           = $p['studio-art'] . "anspaugh-fellowship/";
		$p['sa/ruffin-gallery']     = $p['studio-art'] . "ruffin-gallery/";
		$p['sa/safety']             = $p['studio-art'] . "safety/";
		$p['sa/intl']               = $p['studio-art'] . "international-programs/";
	  
	$p['art-history']  = $p['home'] . "art-history/";
		$p['ah/maj-min']            = $p['art-history'] . "majors-minors/";
		$p['ah/dm']                 = $p['art-history'] . "distinguished-majors/";
		$p['ah/courses']            = $p['art-history'] . "courses/";
		$p['ah/faculty']            = $p['art-history'] . "faculty/";
		$p['ah/intl']               = $p['art-history'] . "international-programs/";
	
	$p['phd-program'] = $p['home'] . "phd-program/";
		$p['phd/prospective']       = $p['phd-program'] . "prospective-students/";
		$p['phd/curriculum']        = $p['phd-program'] . "curriculum/";
		$p['phd/courses']           = $p['phd-program'] . "courses/";
		$p['phd/faculty']           = $p['phd-program'] . "faculty/";
		$p['phd/students']          = $p['phd-program'] . "current-students/";
		$p['phd/alumni']            = $p['phd-program'] . "alumni/";
		$p['phd/caa']               = $p['phd-program'] . "classical-art-archaeology/";

	$p['events'] = $p['home'] . "events/";
		$p['events/aia']            = $p['events'] . "aia-lectures/";
		$p['events/ruffin-gallery'] = $p['events'] . "ruffin-gallery/";
		$p['events/visiting-a']     = $p['events'] . "visiting-artists/";

	$p['faculty'] = $p['home'] . "faculty/";

	$p['news'] = $p['home'] . "news/";
		$p['news/fac-exh']         = $p['news'] . "faculty-exhibitions/";
		$p['news/newsletter']       = $p['news'] . "newsletter/";
		$p['news/ruffin-gallery']   = $p['news'] . "ruffin-gallery/";
		$p['news/releases']         = $p['news'] . "releases/";

	$p['resources'] = $p['home'] . "resources/";

	$p['search'] = $p['home'] . "search-results/";

	// Output
	if ($echo == true) {
		echo $p[$page];
	} else {
		return $p[$page];
	}
}

?>