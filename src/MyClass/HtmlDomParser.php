<?php
namespace Sudo\Htmldomparser\MyClass;

require 'PhpSimpleHtmlDom'.DIRECTORY_SEPARATOR.'simple_html_dom.php';

class HtmlDomParser {
    
    public static function file_get_html() {
    	return file_get_html(func_get_args()[0] ?? '');
    }

    public static function str_get_html() {
    	return str_get_html(func_get_args()[0] ?? '');
    }

}