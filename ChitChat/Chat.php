<?php
class Chat extends Core
{

public function fetchMessages()
{
$this->query("SELECT `chat`.`time`,`chat`.`message`,`users`.UserName,`users`.`UserId` from  `chat` JOIN `users` on `chat`.`UserId` = `users`.`UserId` ORDER BY `chat`.`TimeStamp` ASC");
return $this->rows();
}

public function throwMessage($UserId,$message)
{
$this->query("INSERT INTO `chat` (`UserId`,`message`,`Timestamp`,`time`) values(".(int)$UserId.",'".$this->db->real_escape_string(htmlentities($message))."',UNIX_TIMESTAMP(),now())");
}

}