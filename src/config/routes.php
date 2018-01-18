<?php

switch ($_GET['q'])
{
    case 'lang':
        $block_content =  PATH_CONTROLLER.'lang_selector/lang.php';
        $load_template = false;
        break;
    case 'captcha/image':
        $block_content =  PATH_CONTROLLER.'captcha/image.php';
        $load_template = false;
        break;
    case 'about/history':
        $block_content =  PATH_CONTROLLER.'about/history.php';
        break;
    case 'about/who-we-are':
        $block_content =  PATH_CONTROLLER.'about/who-we-are.php';
        break;
    case 'about/portfolio':
        $block_content =  PATH_CONTROLLER.'about/portfolio.php';
        break;
    case 'about/clients':
        $block_content =  PATH_CONTROLLER.'about/clients.php';
        break;
    case 'hosting/basic':
        $block_content =  PATH_CONTROLLER.'hosting/basic.php';
        break;
    case 'hosting/developers':
        $block_content =  PATH_CONTROLLER.'hosting/developers.php';
        break;
    case 'hosting/enterprise':
        $block_content =  PATH_CONTROLLER.'hosting/enterprise.php';
        break;
    case 'hosting/domains':
        $block_content =  PATH_CONTROLLER.'hosting/domains.php';
        break;
    case 'hosting/reseller':
        $block_content =  PATH_CONTROLLER.'hosting/reseller.php';
        break;
    case 'development/websites':
        $block_content =  PATH_CONTROLLER.'development/websites.php';
        break;
    case 'development/mobile-apps':
        $block_content =  PATH_CONTROLLER.'development/mobile-apps.php';
        break;
    case 'development/open-source':
        $block_content =  PATH_CONTROLLER.'development/open-source.php';
        break;
    case 'services/consulting':
        $block_content =  PATH_CONTROLLER.'services/consulting.php';
        break;
    case 'services/support':
        $block_content =  PATH_CONTROLLER.'services/support.php';
        break;
    case 'contact/location':
        $block_content =  PATH_CONTROLLER.'contact/location.php';
        break;
    case 'contact/form':
        $block_content =  PATH_CONTROLLER.'contact/form.php';
        break;
    case 'contact/social':
        $block_content =  PATH_CONTROLLER.'contact/social.php';
        break;
    case 'contact/result':
        $block_content =  PATH_CONTROLLER.'contact/contact_result.php';
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
