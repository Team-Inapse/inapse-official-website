<?php
  $date = date("YmdHis", time());
  @ $db = new mysqli('DB호스트명', '아이디', '비밀번호', 'DB명');
  if(mysqli_connect_errno())
  {
      echo "DB 오류가 발생하였습니다.";
      exit;
  }

  $query = "INSERT INTO no1 (timestamp, team_name, team_link)
  VALUES ('$date', '$_POST[team_name]', '$_POST[team_link]');";
  $result = $db->query($query);
  if(!$result)
  {
      echo "DB 업로드에 실패하였습니다.";
      exit;
  }

  $db->close();

  echo "<script>alert('업로드 성공');";
  echo "history.back();</script>";
?>
