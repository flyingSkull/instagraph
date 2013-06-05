<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ric
 * Date: 05.06.13
 * Time: 13:01
 * To change this template use File | Settings | File Templates.
 */

require '../lib/Instagraph/Instagraph.php';

$instagraph = new Instagraph;
/*$instagraph->setInput('images/input/HHE-6.jpg');
$instagraph->setOutput('images/output/test.jpg');
$instagraph->process('Lomo');*/

$instagraph->testConvert('images/input/HHE-6.jpg', 'images/output/1.jpg');