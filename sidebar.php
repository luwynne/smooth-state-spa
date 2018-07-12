<?php include('header.php'); ?>

<div id="main" class="m-scene">
  <header class="page-header page-header--homepage scene-nav" id="page-header">
    <nav class="page-nav">
      <span id="closeBtn" style="text-align:right;float:right;color:white;padding:10px;font-size:22px;"><b>X</b></span>
      <ul class="page-nav__list">
        <li id="li1" class="page-nav__item"><a href="index.php" class="page-nav__link <?php if($_SERVER['REQUEST_URI'] == '/sidebar/index.php'){ echo 'is-active'; } ?>">First page</a></li>
        <li id="li2" class="page-nav__item"><a href="second-page.php" class="page-nav__link <?php if($_SERVER['REQUEST_URI'] == '/sidebar/second-page.php'){ echo 'is-active'; } ?>">Second page</a></li>
        <li id="li3" class="page-nav__item"><a href="third-page.php" class="page-nav__link <?php if($_SERVER['REQUEST_URI'] == '/sidebar/third-page.php'){ echo 'is-active'; } ?>">Third page</a></li>
        <li id="li4" class="page-nav__item"><a href="fourth-page.php" class="page-nav__link <?php if($_SERVER['REQUEST_URI'] == '/sidebar/fourth-page.php'){ echo 'is-active'; } ?>">Fourth page</a></li>
      </ul>
    </nav>
    <button class="sidebarBtn">
      <span></span>
    </button>
  </header>

  <!-- / page-header-->

  <script language="JavaScript" type="text/javascript">

  $('.sidebarBtn').click(function(){
    ($('#page-header').addClass('active'));
    $('.sidebarBtn').addClass('hidden');
    setTimeout(function(){$("#li1").fadeIn('slow');},800);
    setTimeout(function(){$("#li2").fadeIn('slow');},900);
    setTimeout(function(){$("#li3").fadeIn('slow');},1000);
    setTimeout(function(){$("#li4").fadeIn('slow');},1100);
  });

  $('#closeBtn').click(function(){
    setTimeout(function(){$("#li4").fadeOut();},400);
    setTimeout(function(){$("#li3").fadeOut();},450);
    setTimeout(function(){$("#li2").fadeOut();},500);
    setTimeout(function(){$("#li1").fadeOut();},550);
    setTimeout(function(){$('#page-header').removeClass('active');},1050);
    setTimeout(function(){$('.sidebarBtn').removeClass('hidden');},1200);
  });

  </script>
