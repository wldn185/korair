<?php
  include('./php/dbconn.php');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대한항공 - 회원가입</title>
    <style>
      #id_check{color:red}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        //중복확인 버튼을 하고 싶으면 아래처럼
        // $('#btn).on('click', function(){});

        // id에 키보드를 누르면 바로 함수가 실행됨.
        $('#mb_id').on('keyup', function(){
          let self = $(this);
          let mb_id;
          // id가 일치하면(아이디입력폼에 id값이 일치하면)
          if(self.attr("id") === "mb_id"){
            mb_id = self.val(); //입력한 값을 변수에 담는다.
          }
          $.post(
            "./php/id_check.php", 
            {mb_id:mb_id},
            function(data){
              if(data){
                self.parent().parent().find('div').html(data);
                self.parent().parent().find('div').addClass('id_check');
              }
            }
          )
        });
      });
    </script>
  </head>
  <body>
    <main>
      <section>
        <h2>회원가입</h2>
        <form name="join" method="post" action="./php/regiupdate.php" onsubmit="return form_check();">
          <!-- no, mb_id, mb_password, mb_name, mb_datetitme -->
          <p>
            <label for="mb_id">아이디 : </label>
            <input type="text" max-length="16" placeholder="아이디" id="mb_id" name="mb_id">
            <!-- <input type="button" value="중복확인" id="id_check"> -->
            <div id="id_check">아이디가 실시간으로 검사됩니다.</div>
          </p>
          <p>
            <label for="mb_password">비밀번호 : </label>
            <input type="password" max-length="16" placeholder="비밀번호" id="mb_password" name="mb_password">
          </p>
          <p>
            <label for="mb_name">이름 : </label>
            <input type="text" max-length="16" placeholder="이름" id="mb_name" name="mb_name">
          </p>
          <p>
            <input type="submit" value="가입하기" id="sub_btn">
            <input type="reset" value="취소하기" id="reset_btn">
          </p>
        </form>
      </section>
    </main>

    <script>
      function form_check(){
        let id = document.getElementById('mb_id');
        let pw = document.getElementById('mb_password');
        let name = document.getElementById('mb_name');
        if(id.value.length<1){
          alert('아이디를 입력하지 않았습니다.');
          id.focus();
          return false;
        }
        if(pw.value.length<1){
          alert('비밀번호를 입력하지 않았습니다.');
          pw.focus();
          return false;
        }
        if(name.value.length<1){
          alert('이름을 입력하지 않았습니다.');
          name.focus();
          return false;
        }
      }
    </script>
  </body>
</html>