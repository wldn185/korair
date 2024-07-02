<?php
// dbconn.php
  $mysql_host = 'localhost';
  $mysql_user = 'wldn185';
  $mysql_password = 'wldn02400#';
  $mysql_db = 'wldn185';

  // db 연결변수 만들기
  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  if(!$conn){ //db연결 실패하면 오류메세지 표시하고 종료한다.
    die('연결실패 : ' . mysqli_connect_error());
  }

  //세션시작, 사용자가 로그인한 정보를 기록했다가 페이지가 넘어가도 로그인이 유지되도록 함.
  session_start(); 
?>