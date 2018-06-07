<?PHP

$clientURL = "http://bb.dataii.com:8080";


require_once('classes/Rest.class.php');
require_once('classes/Token.class.php');

$rest = new Rest($clientURL);
$token = new Token();


$token = $rest->authorize();
$access_token = $token->access_token;

$AllUsers = $rest->readAllUsers($access_token);
$u=$AllUsers->results;

foreach($u as $row)
{
        if (($row->institutionRoleIds[0] != "STAFF") && ($row->name->given != "admin" && $row->name->given != "Blackboard")){
         echo $row->name->given." ";
         echo $row->name->family."<br />";
    }
}

?>