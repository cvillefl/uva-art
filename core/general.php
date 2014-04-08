<?php

function clean_input($input) {
  return addslashes(htmlentities($input, ENT_QUOTES, 'UTF-8'));
}

// Clean path info array
function format_path($array_value) {
    return strtolower(clean_input(basename($array_value)));
}

function share() {
	echo '<div id="sharing_container">
            <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                <a class="addthis_button_email"></a>
                <a class="addthis_button_facebook"></a>
                <a class="addthis_button_twitter"></a>
                <div class="fb-like" data-href="http://www.lydiagasmanarchives.org/" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-526a07dd1d7ddc9e"></script>
        </div>';
}

// Returns the current OS's default carriage return
function get_eol() {
    if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
        return "\r\n"; 
    } elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
        return "\r"; 
    } else { 
        return "\n"; 
    }
}

// Sends an email
function send_email($from_name, $from_email, $to, $subject, $body) {
    $eol = get_eol();
    $now = time();          
    $headers  = 'From: '.$from_name.' <'.$from_email.'>'.$eol; 
    $headers .= 'Reply-To: '.$from_name.' <'.$from_email.'>'.$eol; 
    $headers .= 'Return-Path: '.$from_name.' <'.$from_email.'>'.$eol; 
    $headers .= "Organization: '.$from_name.'".$eol;
    $headers .= "MIME-Version: 1.0".$eol;
    $headers .= "X-Priority: 3".$eol;
    $headers .= "Message-ID:<".$now.$from_email.">".$eol; 
    $headers .= "X-Mailer: php".$eol;         
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . $eol;
    //ini_set(sendmail_from,$from_email); 
    if (mail($to, $subject, $body, $headers, "-f ".$from_email)) {
        $successful_send = 1;
    } else {
        $successful_send = 0;
    }
    //ini_restore(sendmail_from);
}
?>
