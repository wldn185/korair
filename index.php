<?php
  include('./php/dbconn.php');
  if(isset($_SESSION['ss_mb_id'])){
    $mb_id = $_SESSION['ss_mb_id'];
  }
  
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대한항공-모바일웹(앱)</title>
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <!-- 초기화서식 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <!-- common.css -->
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <!-- main.css -->
  <link rel="stylesheet" href="./css/main.css" type="text/css">
  <!-- swiper 서식 -->
  <link rel="stylesheet" href="./css/swiper.css" type="text/css">

</head>
<body>
  <header>
    <h1>
      <a href="index.php" title="상단로고">
        <img src="./images/txt_logo.png" alt="상단로고">
      </a>
    </h1>
    <!-- 토글버튼 클릭시 nav 나오게 하기
      1. css로 체크박스에 체크하면 nav나오게 하기
      2. javascript, jquery = span태그(햄버거 아이콘) 클릭시 nav나오게 하기
    -->
    <a href="#none" title="토글버튼" class="toggle_btn">전체메뉴</a>
    <nav class="h_gnb">
      <span class="toggle_btn2"></span>
      <div class="user">
        <?php
        
          if(isset($mb_id)){
            // echo "<a href='#none' title='로그인' class='login_btn' style='text-align:center; line-height: 40px; color: #fff'> <br> <b>$mb_id</b> 님</a>";       
            echo $mb_id . '님. 안녕하세요. <br>';
            echo "<a href='./php/logout.php' title='로그아웃'>로그아웃</a>";
          }else{
            echo "<a href='login.php' title='로그인'>로그인</a>";
          }
        ?>
      </div>
      <ul class="gnb">
        <li><a href="#none" title="메뉴1">메뉴1</a></li>
        <li><a href="#none" title="메뉴2">메뉴2</a></li>
        <li><a href="#none" title="메뉴3">메뉴3</a></li>
        <li><a href="#none" title="메뉴4">메뉴4</a></li>
        <li><a href="#none" title="메뉴5">메뉴5</a></li>
        <li><a href="#none" title="메뉴6">메뉴6</a></li>
        <li><a href="#none" title="메뉴7">메뉴7</a></li>
      </ul>
    </nav>

    <?php
      if(isset($mb_id)){
        // echo "<a href='#none' title='로그인' class='login_btn' style='text-align:center; line-height: 40px; color: #fff'> <br> <b>$mb_id</b> 님</a>";
        echo "<a href='#none' title='회원정보' class='login_btn'>회원정보</a>";
        // echo $mb_id . '님';
      }else{
        echo "<a href='login.php' title='로그인' class='login_btn'>로그인하기</a>";
      }
    ?>
    
  </header>
  <main>
    <section class="g_con">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#none"><img src="./images/banner01.jpg" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="#none"><img src="./images/banner02.jpg" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="#none"><img src="./images/banner03.jpg" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="#none"><img src="./images/banner04.jpg" alt=""></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div>
        <a href="#none"><img src="./images/m_img01.jpg" alt=""></a>
      </div>
      <div>
        <a href="#none"><img src="./images/m_img02.jpg" alt=""></a>
      </div>
      <div>
        <a href="#none"><img src="./images/m_img03.jpg" alt=""></a>
      </div>
      <div>
        <a href="#none"><img src="./images/m_img04.jpg" alt=""></a>
      </div>
      <div>
        <a href="#none"><img src="./images/m_img05.jpg" alt=""></a>
      </div>
    </section>


    <section class="login">
      <img src="./images/skypass.jpg" alt="로그인사진">
    </section>

  </main>
  <footer>
    <nav class=f_lnb>
      <ul>
        <li><a href="#none" title="개인정보처리방침"><strong>개인정보처리방침</strong></a></li>
        <li><a href="#none" title="PC버전보기">PC버전보기</a></li>
        <li><a href="#none" title="앱다운로드">앱다운로드</a></li>
      </ul>
    </nav>
    <address>
      COPYRIGHT ⓒ KOREAN AIR ALL RIGHTS RESERVED.<br>
      사업자등록번호 0000-000-0000 통신판매업 신고번호 : 강서 제00-000
    </address>
  </footer>

  <!-- 스와이퍼 스크립트 -->
  <script src="./script/swiper.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    //스와이퍼
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        autoplay: {
        delay: 2500,
        },
        loop: true,
      },
    });

    // 제이쿼리
    $(document).ready(function(){

      // 토글 메뉴
      $('.toggle_btn').click(function(){
        // alert('dfadsf');
        $('.h_gnb').animate({
          left: '0%',
        }, 500);
      });
    });
    $(document).ready(function(){
      $('.toggle_btn2').click(function(){
        // alert('dfadsf');
        $('.h_gnb').animate({
          left: '-100%',
        }, 500);
      });

    });
  </script>
</body>
</html>