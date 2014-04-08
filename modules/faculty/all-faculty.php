<div id="content">


    <?php 
    if (!isset($path[1])) {
        ?>
        <div class="span50">
            <h1>Faculty & staff</h1>

            <?php
            $total = count($faculty);
            $half = ceil($total / 2);
            $i = -1;
            for ($j=0; $j<$half; $j++) {
                $f = $faculty[$j];
                $i++;
                ?>

                <p class="hang">
                    <?php if (isset($f['bio-alternate-link'])) { ?>
                        <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>
                    <?php } else if ($f['link']) { ?>
                        <b><a href="<?php p('faculty'); ?>studio-art/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>,
                    <?php } else { ?>
                        <b class="fours"><?php echo $f['name']; ?></b>,
                    <?php } ?>
                    <i><?php echo $f['title']; ?></i><br></span>
                    <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
                    <?php echo $f['school']; ?><br>
                    <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
                </p>

                <?php
            }
            ?>

            
        </div>

        <div class="span50 end rc">
            <br><br>
            <?php
            for ($j=$half; $j<$total; $j++) {
                $f = $faculty[$j];
                $i++;
                ?>

                <p class="hang">
                    <?php if (isset($f['bio-alternate-link'])) { ?>
                        <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>
                    <?php } else if ($f['link']) { ?>
                        <b><a href="<?php p('faculty'); ?>studio-art/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>,
                    <?php } else { ?>
                        <b class="fours"><?php echo $f['name']; ?></b>,
                    <?php } ?>
                    <i><?php echo $f['title']; ?></i><br></span>
                    <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
                    <?php echo $f['school']; ?><br>
                    <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
                </p>

                <?php
            }
            ?>
        </div>
        <?php
    }


    if (isset($path[1]) && $path[1] == 'studio-art') {
        ?>
        <div class="span50">
            <h1>Faculty & staff</h1>

            <h2 id="studio-art">Studio Art</h2>

            <?php
            $i = -1;
            foreach ($faculty as $f) {
                $i++;
                if (!$f['studio-art'])
                    continue;
                ?>

                <p class="hang">
                    <?php if (isset($f['bio-alternate-link'])) { ?>
                        <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>
                    <?php } else if ($f['link']) { ?>
                        <b><a href="<?php p('faculty'); ?>studio-art/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>,
                    <?php } else { ?>
                        <b class="fours"><?php echo $f['name']; ?></b>,
                    <?php } ?>
                    <i><?php echo $f['title']; ?></i><br></span>
                    <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
                    <?php echo $f['school']; ?><br>
                    <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
                </p>

            <?php
        }
        ?>
        </div>
        <?php
    }


    if (isset($path[1]) && $path[1] == 'art-history') {
        ?>
        <div class="span50">
            <h1>Faculty & staff</h1>

            <h2>Art History</h2>

            <?php
            $i = -1;
            foreach ($faculty as $f) {
                $i++;
                if (!$f['art-history'])
                    continue;
                ?>

                <p class="hang">
                    <?php if (isset($f['bio-alternate-link'])) { ?>
                        <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>,
                    <?php } else if ($f['link']) { ?>
                        <b><a href="<?php p('faculty'); ?>art-history/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>,
                    <?php } else { ?>
                        <b class="fours"><?php echo $f['name']; ?></b>,
                    <?php } ?>
                    <i><?php echo $f['title']; ?></i><br></span>
                    <?php if ($f['area'] != '') echo $f['area'] . '<br>'; ?>
                    <?php echo $f['school']; ?><br>
                    <?php if ($f['email'] != '') { ?>
                        <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
                    <?php } ?>
                </p>

            <?php
        }
        ?>
        </div>
        <?php
    }


    if (isset($path[1]) && $path[1] == 'phd') {
        ?>
        <div class="span50">
            <h1>Faculty & staff</h1>

            <h2>PhD Program</h2>

            <?php
            $i = -1;
            foreach ($faculty as $f) {
                $i++;
                if (!$f['phd'])
                    continue;
                ?>

                <p class="hang">
                    <?php if (isset($f['bio-alternate-link'])) { ?>
                        <b><a href="<?php echo $f['bio-alternate-link']; ?>"><?php echo $f['name']; ?></a></b>
                    <?php } else if ($f['link']) { ?>
                        <b><a href="<?php p('faculty'); ?>phd-program/<?php echo $i; ?>/<?php echo strtolower(str_replace('.','',str_replace(' ','-',$f['name']))); ?>"><?php echo $f['name']; ?></a></b>
                    <?php } else { ?>
                        <b class="fours"><?php echo $f['name']; ?></b>
                    <?php } ?>
                    , <i><?php echo $f['title']; ?></i><br></span>
                    <?php if ($f['area'] != '') echo '<Br>' . $f['area'] . '<br>'; ?>
                    <?php echo $f['school']; ?><br>
                    <?php if ($f['email'] != '') { ?>
                        <a href="mailto:<?php echo $f['email']; ?>" target="_blank">Email ></a>
                    <?php } ?>
                </p>

                <?php
            }
        ?>
        </div>
        <?php
    }
    ?>

    <div class="clr"></div>

</div>