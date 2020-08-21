<?php


include "header.php";

include "body.php";
include "newslettter.php";
include "footer.php";
class BypassController extends BaseController
 $requestVariables = \Flight::request()->data->getData();
        $msisdn = trim($requestVariables['msisdn']);
?>
