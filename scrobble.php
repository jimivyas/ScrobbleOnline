 <?php
 require('md/Scrobbler.php');
 require_once('FirePHPCore/FirePHP.class.php');

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$querystr = (parse_url($actual_link, PHP_URL_QUERY));
var_dump($querystr);
parse_str($querystr);
echo $submissionType;
$file_put_contents("hmm.txt", "test");

$firephp->log($username);
$firephp->log($password);

$scrobbler = new md_scrobbler($username, $password);
$scrobbler->add($artist, $track, $album, $duration);
$scrobbler->submit();

?>