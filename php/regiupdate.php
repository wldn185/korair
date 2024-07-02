<?php
  include('dbconn.php');

  $mb_id = trim($_POST['mb_id']);
  $mb_password = trim($_POST['mb_password']);
  $mb_name = trim($_POST['mb_name']);

  date_default_timezone_set('Asia/Seoul');
  $mb_datetime = date('Y-m-d H:i:s', time());

  // 전달받은 값을 출력해보기
  echo $mb_id . '<br>';
  echo $mb_password . '<br>';
  echo $mb_name . '<br>';
  echo $mb_datetime . '<br>';

  // 패스워드 암호화
  // $sql = "select PASSWORD('$mb_password') as pass";

  // 해시패스워드 암호화
  $mb_password = password_hash($mb_password, PASSWORD_DEFAULT);

  // 패스워드 암호화
  // $result = mysqli_query($conn, $sql); //데이터베이스에 자료입력한 결과를 변수에 담음
  // $row = mysqli_fetch_assoc($result);
  // $mb_password = $row['pass'];

  echo $mb_password; //암호화된 패스워드 출력

  // 변수값을 데이터 sql쿼리문 작성하여 데이터베이스에 자료 입력한다.
  $sql = "insert into korair_member(mb_id, mb_password, mb_name, mb_datetime) value ('$mb_id', '$mb_password', '$mb_name', '$mb_datetime')";
  //insert into korair_member(mb_id, mb_password, mb_name, mb_datetime) value('2222', '222', '222', '2024-06-24 12:50:11');

  $result = mysqli_query($conn, $sql);

  if($result){
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
  }else{
    echo "회원가입 실패 : " . mysqli_error($conn);
    mysqli_close($conn); //데이터베이스 접속 종료
  }

?>