<?php

switch ($_GET['q'])
{
    case 'lang':
        $block_content =  PATH_CONTROLLER.'lang_selector/lang.php';
        $load_template = false;
        break;
    case 'about/history':
        $block_content =  PATH_CONTROLLER.'about/history.php';
        break;
    case '':
        $block_content =  PATH_CONTROLLER.'default.php';
        //$load_template = false;
        break;
    default:
        $block_content = PATH_CONTROLLER.'page_not_found.php';
        //$template_name = 'blank';
        // $load_template = false;
        break;
}
