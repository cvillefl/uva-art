<style>
#panels .a, #panels .b, #panels .c, #panels .d {float:left;margin:0 20px 20px 0;box-sizing:border-box;}
#panels .a{width:146px;height:180px;}
#panels .b {width:703px;height:180px;}
#panels .c {width:324px;height:180px;}
#panels .d {width:522px;height:180px;}
</style>

<div id="panels">
    <a href="<?php echo HOME . $path[0]; ?>/bio/">
        <div class="a">
            <img src="<?php p('img'); ?>betzer/betzer_b.jpg">
            <div class="info">bio <i class="fa fa-chevron-circle-right"></i></div>
        </div>
    </a>
    <a href="<?php echo HOME . $path[0]; ?>/publications/">
        <div class="b end">
            <img src="<?php p('img'); ?>betzer/2.jpg">
            <div class="info">publications <span>books | articles | review articles</span> <i class="fa fa-chevron-circle-right"></i></div>
        </div>
    </a>
    <a href="<?php echo HOME . $path[0]; ?>/projects/">
        <div class="c">
            <img src="<?php p('img'); ?>betzer/3.jpg">
            <div class="info">projects <i class="fa fa-chevron-circle-right"></i></div>
        </div>
    </a>
    <a href="<?php echo HOME . $path[0]; ?>/conferences/">
        <div class="d end">
            <img src="<?php p('img'); ?>betzer/4.jpg">
            <div class="info">conferences <i class="fa fa-chevron-circle-right"></i></div>
        </div>
    </a>
    <a href="<?php echo HOME . $path[0]; ?>/courses">
        <div class="b bottom">
            <img src="<?php p('img'); ?>betzer/betzer_c.jpg">
            <div class="info">courses <i class="fa fa-chevron-circle-right"></i></div>
        </div>
    </a>
    <a>
        <div class="a bottom end">
            <img src="<?php p('img'); ?>betzer/6.jpg">
            <div class="info">&nbsp;</div>
        </div>
    </a>

    <div class="clr"></div>
</div>