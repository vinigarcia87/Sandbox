<?php
// Fixing migration errors on Wordpress - wp_options invalid data serialization
// Source: http://stackoverflow.com/a/10152996/1003020
// Source: http://stackoverflow.com/a/21389439/1003020
function findSerializeError($data1) {
    echo "<pre>";
    //$data2 = preg_replace ( '!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'",$data1 );
	$data2 = preg_replace_callback ( '!s:(\d+):"(.*?)";!', function($match) {      
				return ($match[1] == strlen($match[2])) ? $match[0] : 's:' . strlen($match[2]) . ':"' . $match[2] . '";';
			}, $data1 );
    $max = (strlen ( $data1 ) > strlen ( $data2 )) ? strlen ( $data1 ) : strlen ( $data2 );

    echo $data1 . PHP_EOL;
    echo $data2 . PHP_EOL;

    for($i = 0; $i < $max; $i ++) {

        if (@$data1 {$i} !== @$data2 {$i}) {

            echo "Diffrence ", @$data1 {$i}, " != ", @$data2 {$i}, PHP_EOL;
            echo "\t-> ORD number ", ord ( @$data1 {$i} ), " != ", ord ( @$data2 {$i} ), PHP_EOL;
            echo "\t-> Line Number = $i" . PHP_EOL;

            $start = ($i - 20);
            $start = ($start < 0) ? 0 : $start;
            $length = 40;

            $point = $max - $i;
            if ($point < 20) {
                $rlength = 1;
                $rpoint = - $point;
            } else {
                $rpoint = $length - 20;
                $rlength = 1;
            }

            echo "\t-> Section Data1  = ", substr_replace ( substr ( $data1, $start, $length ), "<b style=\"color:green\">{$data1 {$i}}</b>", $rpoint, $rlength ), PHP_EOL;
            echo "\t-> Section Data2  = ", substr_replace ( substr ( $data2, $start, $length ), "<b style=\"color:red\">{$data2 {$i}}</b>", $rpoint, $rlength ), PHP_EOL;
        }

    }

}
$data = 'a:35:{i:0;b:0;s:15:"protopress_logo";s:84:"http://localhost:8080/FotoInternacional/wp-content/uploads/2016/04/foto_internacional.png";s:29:"protopress_hide_title_tagline";i:1;s:29:"protopress_main_slider_enable";i:1;s:28:"protopress_main_slider_count";s:1:"3";s:21:"protopress_box_enable";i:1;s:20:"protopress_box_title";s:16:"Nossos Serviços";s:23:"protopress_slider_title";s:11:"Promoções";s:23:"protopress_slider_count";s:1:"3";s:22:"protopress_blog_layout";s:4:"grid";s:32:"protopress_disable_sidebar_front";i:1;s:21:"protopress_custom_css";s:579:"#masthead {\n    min-height: 180px;\n}\n#site-navigation {\n    background: #001E63;\n}\n#site-navigation ul li a {\n    color: #FFFFFF;\n}\n#site-navigation ul li a:hover {\n    color: #001E63;\n}\n.menu .menu-item br,\n.menu br {\n    display:none;\n}\n.nivo-caption .slide-title {\n    color: #FFFFFF;\n}\n.nivo-caption .slide-desc {\n    border-left: 4px solid #e10d0d;\n}\n.nivo-caption .slide-desc span {\n    color: #FFFFFF;\n    background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0 !important;\n}\n#colophon {\n	background: #bebebe none repeat scroll 0 0;\n}\n.site-info {\n    margin-bottom: 10px;\n}";s:22:"protopress_footer_text";s:66:"Copyright 2016 - Foto Internacional. Todos os Direitos reservados.";s:22:"protopress_grid_enable";i:1;s:21:"protopress_grid_title";s:16:"Nossos Serviços";s:20:"protopress_grid_rows";s:1:"5";s:19:"protopress_social_1";s:8:"facebook";s:22:"protopress_social_url1";s:1:"#";s:19:"protopress_social_2";s:11:"google-plus";s:22:"protopress_social_url2";s:1:"#";s:21:"protopress_slide_img1";s:78:"http://localhost:8080/FotoInternacional/wp-content/uploads/2016/04/bookinfantil.jpg";s:23:"protopress_slide_title1";s:13:"Book Infantil";s:22:"protopress_slide_desc1";s:33:"Registre momentos dos seus filhos";s:21:"protopress_slide_img2";s:78:"http://localhost:8080/FotoInternacional/wp-content/uploads/2016/04/book_adulto1.jpg";s:23:"protopress_slide_title2";s:11:"Book Adulto";s:22:"protopress_slide_desc2";s:27:"Faça o seu book dos sonhos";s:21:"protopress_slide_img3";s:75:"http://localhost:8080/FotoInternacional/wp-content/uploads/2016/04/promocao1.jpg";s:23:"protopress_slide_title3";s:24:"Confira nossos serviços";s:22:"protopress_slide_desc3";s:28:"Aproveite nossas promoções";s:18:"nav_menu_locations";a:2:{s:7:"primary";i:7;s:3:"top";i:8;}s:21:"protopress_title_font";s:9:"Open Sans";s:20:"protopress_body_font";s:6:"Ubuntu";s:18:"protopress_box_cat";s:1:"9";s:21:"protopress_slider_cat";s:1:"6";s:22:"protopress_center_logo";i:1;}';
echo '<h2>Find Serialize Error</h2>';
findSerializeError( $data );
echo '<hr/>';
echo '<h2>Error Fixed</h2>';
$data = preg_replace_callback ( '!s:(\d+):"(.*?)";!', function($match) {      
				return ($match[1] == strlen($match[2])) ? $match[0] : 's:' . strlen($match[2]) . ':"' . $match[2] . '";';
			}, $data );
storms_debug( $data );
echo '<hr/>';
echo '<h2>Testing If OK</h2>';
$data = unserialize( $data );
storms_debug( $data );
echo '<hr/>';

exit();