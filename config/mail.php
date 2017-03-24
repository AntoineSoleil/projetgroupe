<?php
return array(
  "driver" => "smtp",
  "host" => "mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "f76930a1e34cdf",
  "password" => "7cb4e043db92a6",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);