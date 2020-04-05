<?php
error_reporting(0);
echo 'Soon...';
$user = strip_tags($_GET["usr"]);
$pass = md5($_GET["pass"]);

$user2 = strip_tags("1234");
$pass2 = md5("1234");
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  die("Server ".strtoupper(substr(PHP_OS, 0, 3))." | Script Was Not Run on ".strtoupper(substr(PHP_OS, 0, 3))." Server");
} elseif(strtoupper(substr(PHP_OS, 0, 3)) === 'Linux') {

$tara = intval($_GET["tara"]);
if($user == $user2 || $pass == $pass2) {
session_start();
$_SESSION["uptrepo"] == true;
} else {
  die("Invalid Pass");
}

if(isset($_SESSION["uptrepo"])) {
if($tara == 1) {
if(fileperms("Packages") == "0755") {
  echo 'Chmod: OK<br>';
} else {
  chmod("Packages", 0755);
}
exec("rm -f Packages*");
exec("dpkg/dpkg-scanpackages -m ./TR /dev/null > Packages");
exec("bzip2 Packages");
} else {
die("Repo Update System v1<br>");
}
} else {
  session_destroy();
  die("Invalid Login<br>");
}

} elseif(strtoupper(substr(PHP_OS, 0, 3)) === 'FreeBSD') {

  $tara = intval($_GET["tara"]);
  if($user == $user2 || $pass == $pass2) {
  session_start();
  $_SESSION["uptrepo"] == true;
  } else {
    die("Invalid Pass");
  }

  if(isset($_SESSION["uptrepo"])) {
  if($tara == 1) {
  if(fileperms("Packages") == "0755") {
    echo 'Chmod: OK<br>';
  } else {
    chmod("Packages", 0755);
  }
  exec("rm -f Packages*");
  exec("dpkg/dpkg-scanpackages -m ./TR /dev/null > Packages");
  exec("bzip2 Packages");
  } else {
  die("Repo Update System v1");
  }
  } else {
    session_destroy();
    die("Invalid Login");
  }

} else {
  die("Server ".strtoupper(substr(PHP_OS, 0, 3))." | Script Was Not Run on ".strtoupper(substr(PHP_OS, 0, 3))." Server");
}
?>
