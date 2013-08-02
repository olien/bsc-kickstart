<?php
/**
 * basecondition ~ less-framework ~ v2.2.2
 * 
 * @link       git.io/OJYZgw
 * @copyright  copyright 2013 ~ www.basecondition.com
 * @autor      Joachim Doerr ~ hello@basecondition.com
 * @license    licensed under MIT or GPLv3
 */

/**
 * check $_REQEUST and initialize process
 * 
 * @param  string $_REQUEST['f']    $folder . $filname
 * @return string                   getBscUnitFile::getIt
 */
if ($_REQUEST['f'] != '') {
    require_once(dirname( __FILE__ ) . "/processor/lib/getFile.php");
    $objFile = new getBscUnitFile();
    print $objFile->getIt($_REQUEST['f']);
}