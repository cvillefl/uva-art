<?php
include "core/common.php";
       
$path = (!isset($_GET['path']) ? 
         array('') : 
         array_map('format_path', explode("/",  $_GET['path'])));

if(end($path) == "") {
    array_pop($path);
}

$title = 'McIntire Department of Art';
foreach ($path as $key => $value) {
    if ($key == 0 || $value == 'home')                                          // Key 0 is always blank
        continue;
    $separator = ($key == 1 ? ' | ' : ' - ');
    $title .= $separator . ucwords(str_replace('-','', $value));
}  

$faculty_with_site = array('betzer','fordham','dakouri-hild','smith','johnson-roehr')
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link href="<?php p('css'); ?>general.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php p('img'); ?>favicon.ico" rel="shortcut icon" type="image/png">
</head>
<body>
    <!-- Facebook init --><div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
    <div id="header" <?php if (in_array($path[0], $faculty_with_site) ) echo "class='".$path[0]."'"; ?>>
        <p>
            <a href="<?php p('studio-art'); ?>" <?php if (isset($path[0]) && $path[0] == 'studio-art') echo 'class="active"'; ?>>Studio Art</a> |
            <a href="<?php p('art-history'); ?>" <?php if (isset($path[0]) && $path[0] == 'art-history') echo 'class="active"'; ?>>Art History</a> |
            <a href="<?php p('phd-program'); ?>" <?php if (isset($path[0]) && $path[0] == 'phd-program') echo 'class="active"'; ?>>PhD Program</a> |
            <a href="<?php p('events'); ?>" <?php if (isset($path[0]) && $path[0] == 'events') echo 'class="active"'; ?>>Events</a> |
            <a href="<?php p('faculty'); ?>" <?php if (isset($path[0]) && ($path[0] == 'faculty' || in_array($path[0], $faculty_with_site))) echo 'class="active"'; ?>>Faculty</a> |
            <a href="<?php p('news'); ?>" <?php if (isset($path[0]) && $path[0] == 'news') echo 'class="active"'; ?>>News</a> |
            <a href="<?php p('resources'); ?>" <?php if (isset($path[0]) && $path[0] == 'resources') echo 'class="active"'; ?>>Resources</a>
        </p>

        <?php if (in_array($path[0], $faculty_with_site) ) { ?>

        <a href="<?php echo HOME . $path[0] ?>">
            <div id="fac_fac_link"></div>
        </a>
        <a href="<?php p('home'); ?>">
            <div id="fac_home_link"></div>
        </a>

        <?php } else { ?>
        
        <a href="<?php p('home'); ?>">
            <div id="home_link"></div>
        </a>

        <?php } ?>
        
        <div id="search" <?php if (in_array($path[0], $faculty_with_site) ) echo 'class="fac"'; ?>>
            <form action="<?php p('search'); ?>" method="get" name="searchbox_014728021570599571416:h6hoor1qoko" id="searchbox_014728021570599571416:h6hoor1qoko">
                <input type="hidden" name="cx" value="014728021570599571416:h6hoor1qoko">
                <input type="hidden" name="cof" value="FORID:11">
                <input type="submit" id="submit" value="Search" name="sa">
                <input type="text" name="q" value="">
            </form>
        </div>
    </div>
    <div id="page" class="shadow <?php if ($path[0] == '' || $path[0] == 'home') { echo 'home'; } else { echo 'secondary'; } ?>">
        
        <?php if (isset($path[0]) && ($path[0] == 'studio-art' || ($path[0] == 'faculty' && $path[1] == 'studio-art' && isset($path[2])))) { ?>
            <div id="sidebar">
                <h3>Undergraduate Studio Art</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('studio-art'); ?>" <?php if ($path[0] == 'studio-art' && !isset($path[1])) echo 'class="active"'; ?>>About</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/maj-min'); ?>" <?php if (isset($path[1]) && $path[1] == 'majors-minors') echo 'class="active"'; ?>>Majors & minors</a>
                </div>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/dm'); ?>" <?php if (isset($path[1]) && $path[1] == 'distinguished-majors') echo 'class="active"'; ?>>Distinguished Majors </a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/courses'); ?>" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Course offerings</a>
                </div>

                <?php if (isset($path[1]) && $path[1] == 'courses') { ?>

	                <div class="nav_child">
	                    <div class="nav_icon">></div>
	                    <a href="https://sisuva.admin.virginia.edu/psp/epprd/EMPLOYEE/EMPL/h/?tab=PAPP_GUEST" target="_blank">Course Offering<span class="line2_child">Directory</span></a>
	                </div>

	                <div class="nav_child">
	                    <div class="nav_icon">></div>
	                    <a href="http://records.ureg.virginia.edu/" target="_blank">Undergraduate <span class="line2_child">Record</span></a>
	                </div>

	            <?php } ?>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/intl'); ?>" <?php if (isset($path[1]) && $path[1] == 'international-programs') echo 'class="active"'; ?>>International Programs</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/faculty'); ?>" <?php if (isset($path[1]) && $path[1] == 'faculty' || isset($path[0]) && $path[0] == 'faculty') echo 'class="active"'; ?>>Faculty</a>
                </div>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/visiting-a'); ?>" <?php if (isset($path[1]) && $path[1] == 'visiting-artists') echo 'class="active"'; ?>>Visiting artists</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/ruffin-a'); ?>" <?php if (isset($path[1]) && $path[1] == 'ruffin-artist') echo 'class="active"'; ?>>Ruffin Distinguished<span class="line2">Artist in Residence</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/anspaugh'); ?>" <?php if (isset($path[1]) && $path[1] == 'anspaugh-fellowship') echo 'class="active"'; ?>>Anspaugh Fifth Year<span class="line2">Fellowship</span></a>
                </div>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/ruffin-gallery'); ?>" <?php if (isset($path[1]) && $path[1] == 'ruffin-gallery') echo 'class="active"'; ?>>Ruffin Gallery</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('sa/safety'); ?>" <?php if (isset($path[1]) && $path[1] == 'safety') echo 'class="active"'; ?>>Studio safety</a>
                </div>

                <?php share(); ?>
                
            </div>
        <?php } else if (isset($path[0]) && ($path[0] == 'art-history' || ($path[0] == 'faculty' && $path[1] == 'art-history' && isset($path[2])))) { ?>
            <div id="sidebar">
                <h3>Undergraduate Art History</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('art-history'); ?>" <?php if ($path[0] == 'art-history' && !isset($path[1])) echo 'class="active"'; ?>>About</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('ah/maj-min'); ?>" <?php if (isset($path[1]) && $path[1] == 'majors-minors') echo 'class="active"'; ?>>Majors & minors</a>
                </div>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('ah/dm'); ?>" <?php if (isset($path[1]) && $path[1] == 'distinguished-majors') echo 'class="active"'; ?>>Distinguished Majors </a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('ah/courses'); ?>" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Course offerings</a>
                </div>

                <?php if (isset($path[1]) && $path[1] == 'courses') { ?>

	                <div class="nav_child">
	                    <div class="nav_icon">></div>
	                    <a href="https://sisuva.admin.virginia.edu/psp/epprd/EMPLOYEE/EMPL/h/?tab=PAPP_GUEST" target="_blank">Course Offering<span class="line2_child">Directory</span></a>
	                </div>

	                <div class="nav_child">
	                    <div class="nav_icon">></div>
	                    <a href="http://records.ureg.virginia.edu/" target="_blank">Undergraduate <span class="line2_child">Record</span></a>
	                </div>

	            <?php } ?>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('ah/intl'); ?>" <?php if (isset($path[1]) && $path[1] == 'international-programs') echo 'class="active"'; ?>>International Programs</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('ah/faculty'); ?>" <?php if (isset($path[1]) && $path[1] == 'faculty' || isset($path[0]) && $path[0] == 'faculty') echo 'class="active"'; ?>>Faculty</a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'events')) { ?>
            <div id="sidebar">
                <h3>Events</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('events'); ?>" <?php if ($path[0] == 'events' && !isset($path[1])) echo 'class="active"'; ?>>Lectures</a>
                </div>
                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('events'); ?>" <?php if ($path[0] == 'events' && !isset($path[1])) echo 'class="active"'; ?>>McIntire</a>
                    </div>

                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('events/aia'); ?>" <?php if ($path[0] == 'events' && isset($path[1]) && $path[1] == 'aia-lectures') echo 'class="active"'; ?>>AIA</a>
                    </div>


                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('events/ruffin-gallery'); ?>" <?php if (isset($path[1]) && $path[1] == 'ruffin-gallery') echo 'class="active"'; ?>>Ruffin Gallery</a>
                </div>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('events/visiting-a'); ?>" <?php if (isset($path[1]) && $path[1] == 'visiting-artists') echo 'class="active"'; ?>>Visiting artists/lecturers</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://www.virginia.edu/artmuseum/" target="_blank">The Fralin Museum <span>of Art</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://www.arch.virginia.edu/" target="_blank">School of Architecture</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://www.virginia.edu/arts/" target="_blank">UVA Arts</a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'news')) { ?>
            <div id="sidebar">
                <h3>News</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('news'); ?>" <?php if ($path[0] == 'news' && (!isset($path[1]) || isset($path[1]) && $path[1] == 'faculty-publications')) echo 'class="active"'; ?>>In the News</a>
                </div>
                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('news'); ?>" <?php if ($path[0] == 'news' && !isset($path[1])) echo 'class="active"'; ?>>Faculty publications</a>
                    </div>

                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('news/fac-exh'); ?>" <?php if (isset($path[1]) && $path[1] == 'faculty-exhibitions') echo 'class="active"'; ?>>Faculty exhibitions</a>
                    </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('news/newsletter'); ?>" <?php if (isset($path[1]) && ($path[1] == 'newsletter' || $path[1] == 'ruffin-gallery')) echo 'class="active"'; ?>>Department <span>publications</span></a>
                </div>
                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('news/newsletter'); ?>" <?php if (isset($path[1]) && $path[1] == 'newsletter') echo 'class="active"'; ?>>Newsletter</a>
                    </div>

                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('news/ruffin-gallery'); ?>" <?php if (isset($path[1]) && $path[1] == 'ruffin-gallery') echo 'class="active"'; ?>>Ruffin Gallery</a>
                    </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('news/releases'); ?>" <?php if (isset($path[1]) && $path[1] == 'releases') echo 'class="active"'; ?>>News releases</a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'resources')) { ?>
            <div id="sidebar">
                <h3>Resources</h3>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('resources'); ?>" <?php if (!isset($path[1])) echo 'class="active"'; ?>>Visual Resource <span>Center</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="https://www.library.virginia.edu/blog/libraries/fine-arts/" target="_blank">Fiske Kimball <span>Fine Arts Library</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://www.virginia.edu/artmuseum/" target="_blank">The Fralin Museum <span>of Art</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://www.kluge-ruhe.org/" target="_blank">Kluge-Ruhe Aboriginal <span>Art Collection</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">></div>
                    <a href="http://opengrounds.virginia.edu/" target="_blank">OpenGrounds</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'faculty')) { ?>
            <div id="sidebar">
                <h3>Faculty</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>faculty/studio-art/" <?php if (isset($path[1]) && $path[1] == 'studio-art') echo 'class="active"'; ?>>Studio Art faculty</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>faculty/art-history/" <?php if (isset($path[1]) && $path[1] == 'art-history') echo 'class="active"'; ?>>Art History faculty</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>faculty/phd/" <?php if (isset($path[1]) && $path[1] == 'phd') echo 'class="active"'; ?>>PhD Program Faculty</a>
                </div>

                <?php share(); ?>

            </div>


        <?php } else if (isset($path[0]) && ($path[0] == 'betzer') && isset($path[1])) { ?>
            <div id="sidebar">
                <h3>Sarah Betzer</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>betzer/bio" <?php if (isset($path[1]) && $path[1] == 'bio') echo 'class="active"'; ?>>Bio</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>betzer/publications" <?php if (isset($path[1]) && $path[1] == 'publications') echo 'class="active"'; ?>>Publications</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>betzer/projects" <?php if (isset($path[1]) && $path[1] == 'projects') echo 'class="active"'; ?>>Projects</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>betzer/conferences" <?php if (isset($path[1]) && $path[1] == 'conferences') echo 'class="active"'; ?>>Conferences</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>betzer/courses" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Courses</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'fordham') && isset($path[1])) { ?>
            <div id="sidebar">
                <h3>Douglas Fordham</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>fordham/bio" <?php if (isset($path[1]) && $path[1] == 'bio') echo 'class="active"'; ?>>Bio</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>fordham/publications" <?php if (isset($path[1]) && $path[1] == 'publications') echo 'class="active"'; ?>>Publications</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>fordham/projects" <?php if (isset($path[1]) && $path[1] == 'projects') echo 'class="active"'; ?>>Projects</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>fordham/conferences" <?php if (isset($path[1]) && $path[1] == 'conferences') echo 'class="active"'; ?>>Conferences</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>fordham/courses" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Courses</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'dakouri-hild') && isset($path[1])) { ?>
            <div id="sidebar">
                <h3>Sarah Betzer</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>dakouri-hild/bio" <?php if (isset($path[1]) && $path[1] == 'bio') echo 'class="active"'; ?>>Bio</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>dakouri-hild/publications" <?php if (isset($path[1]) && $path[1] == 'publications') echo 'class="active"'; ?>>Publications</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>dakouri-hild/projects" <?php if (isset($path[1]) && $path[1] == 'projects') echo 'class="active"'; ?>>Projects</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>dakouri-hild/research-interests" <?php if (isset($path[1]) && $path[1] == 'research-interests') echo 'class="active"'; ?>>Research Interests</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>dakouri-hild/teaching" <?php if (isset($path[1]) && $path[1] == 'teaching') echo 'class="active"'; ?>>Teaching</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'smith') && isset($path[1])) { ?>
            <div id="sidebar">
                <h3>Tyler Jo Smith</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>smith/bio" <?php if (isset($path[1]) && $path[1] == 'bio') echo 'class="active"'; ?>>Bio</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>smith/publications" <?php if (isset($path[1]) && $path[1] == 'publications') echo 'class="active"'; ?>>Publications</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>smith/projects" <?php if (isset($path[1]) && $path[1] == 'projects') echo 'class="active"'; ?>>Projects</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>smith/courses" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Courses</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && ($path[0] == 'johnson-roehr') && isset($path[1])) { ?>
            <div id="sidebar">
                <h3>Susan Johnson-Roehr</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>johnson-roehr/bio" <?php if (isset($path[1]) && $path[1] == 'bio') echo 'class="active"'; ?>>Bio</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>johnson-roehr/publications" <?php if (isset($path[1]) && $path[1] == 'publications') echo 'class="active"'; ?>>Publications</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>johnson-roehr/conferences" <?php if (isset($path[1]) && $path[1] == 'conferences') echo 'class="active"'; ?>>Conferences</span></a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php echo HOME; ?>johnson-roehr/courses" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Courses</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } else if (isset($path[0]) && $path[0] == 'phd-program' || ($path[0] == 'faculty' && $path[1] == 'phd-program')) { ?>
            <div id="sidebar">
                <h3>PhD in Art &<br>Architectural History</h3>
               
                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd-program'); ?>" <?php if (!isset($path[1])) echo 'class="active"'; ?>>About</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/prospective'); ?>" <?php if (isset($path[1]) && $path[1] == 'prospective-students') echo 'class="active"'; ?>>Prospective students</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/curriculum'); ?>" <?php if (isset($path[1]) && $path[1] == 'curriculum') echo 'class="active"'; ?>>Curriculum & <span>course offerings</span></a>
                </div>
                <?php if (isset($path[1]) && $path[1] == 'curriculum' || $path[1] == 'courses') { ?>
                    <div class="nav_child">
                        <div class="nav_icon">-</div>
                        <a href="<?php p('phd/courses'); ?>" <?php if (isset($path[1]) && $path[1] == 'courses') echo 'class="active"'; ?>>Courses</a>
                    </div>

                    <div class="nav_child">
                        <div class="nav_icon">></div>
                        <a href="https://sisuva.admin.virginia.edu/psp/epprd/EMPLOYEE/EMPL/h/?tab=PAPP_GUEST" target="_blank">Course Offering <span style="margin-left:14px;">Directory</span></a>
                    </div>

                    <div class="nav_child">
                        <div class="nav_icon">></div>
                        <a href="http://records.ureg.virginia.edu/index.php" target="_blank">Graduate Record</span></a>
                    </div>
                <?php } ?>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/faculty'); ?>" <?php if (isset($path[1]) && $path[1] == 'faculty' || isset($path[0]) && $path[0] == 'faculty') echo 'class="active"'; ?>>Graduate faculty</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/students'); ?>" <?php if (isset($path[1]) && $path[1] == 'current-students') echo 'class="active"'; ?>>Current students</a>
                </div>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/alumni'); ?>" <?php if (isset($path[1]) && $path[1] == 'alumni') echo 'class="active"'; ?>>Alumni</a>
                </div>

                <h3 style="margin-top:30px;margin-bottom:10px">Specialized programs</h3>

                <div class="nav_parent">
                    <div class="nav_icon">+</div>
                    <a href="<?php p('phd/caa'); ?>" <?php if (isset($path[1]) && $path[1] == 'classical-art-archaeology') echo 'class="active"'; ?>>Program in Classical <span>Art & Archaeology</span></a>
                </div>

                <?php share(); ?>

            </div>

        <?php } ?>


        <?php route($path); ?>

        <div class="clr"></div>

    </div>

    <div id="footer" class="shadow">
        <div class="col1">
            <div class="uva">
                <a href="http://www.virginia.edu/" target="_blank"><img src="<?php p('img'); ?>uva.jpg" width="153" height="39"></a>
            </div>
            Last Modified: Saturday, December 15, 2013 23:02 EST<br>
            &copy; Copyright 2013
        </div>
        <div class="col2">
            <a href="mailto:artdept@virginia.edu" target="_blank">Contact us ></a>
 
            University of Virginia<br>
            McIntire Department of Art<br>
            P.O. Box 400130<br>
            Charlottesville, VA 22904
        </div>
        <div class="clr"></div>
    </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php p('js'); ?>nivo/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php p('js'); ?>cycle.js"></script>
<script>var PATH0='<?php echo (isset($path[0]) ? $path[0] : ''); ?>', PATH1='<?php echo (isset($path[1]) ? $path[1] : ''); ?>', PATH2='<?php echo (isset($path[2]) ? $path[2] : ''); ?>';</script>
<script src="<?php p('js'); ?>general.js"></script>
</html>