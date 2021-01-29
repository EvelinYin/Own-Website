<!DOCTYPE html>

<html>

<head>
  <link rel= "stylesheet" href = "./index.css">
  <meta charset="utf-8" />
  <title></title>

</head>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
  var index2 = 0;/*初始化一个变量 指向下彪*/
  //点击点
    $(".tab-btn .btn").click(function(){
    index2 = $(this).index();//获取点击该元素下彪
    $(this).addClass("active").siblings().removeClass("active");
    $(".item").eq(index2).fadeIn().siblings().fadeOut();
  });
    //点击切换效果
    $(".lr-tab .right").click(function () {
      index2 ++;
      if (index2 >4){ index2 = 0;}
      $(".item").eq(index2).fadeIn().siblings().fadeOut();
      $(".tab-btn.btn").eq(index2).addClass("active").siblings().removeClass("active");
    });
    $(".lr-tab .left").click(function () {
      index2 --;
      if(index2 < 0){index2 = 4;}
      $(".item").eq(index2).fadeIn().siblings().fadeOut();
      $(".tab-btn.btn").eq(index2).addClass("active").siblings().removeClass("active");
    });
    var time2 = setInterval(function () {
      index2 ++;
      if (index2 >4){ index2 = 0;}
      $(".item").eq(index2).fadeIn().siblings().fadeOut();
      $(".tab-btn.btn").eq(index2).addClass("active").siblings().removeClass("active");
    },4000); //定时器 重复
  </script>

  <body style="background-color:rgba(137,255,196,0.3);text-align:center">

    <!-- top part -->
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <input type = "submit" value = "Submit">
      <input type="text" placeholder="Search...">
    </div>

    <div class = "logo">
     <h1>Youth from Zero</h1>
   </div>


   <!-- image carousel -->
   <div class="advertise">

    <div class = "carousel-set">
      <ul>
        <li class="item" style="display: block">
          <a href="https://www.baidu.com"><img src="adv1.jpeg" alt="广告1" class="carousel"></a>
        </li>

        <li class="item">
          <a href="https://www.baidu.com"><img src="adv2.jpeg" alt="广告2" class="carousel"></a>
        </li>

        <li class="item">
          <a href="https://www.baidu.com"><img src="adv3.jpg" alt="广告3" class="carousel"></a>
        </li>

      </ul>

    </div><!-- carousel-set -->

    <div class="lr-tab">
      <div class="left btn"></div>
      <div class="right btn"></div>
    </div>

    <div class="tab-btn">
      <ul>
        <li class="btn"></li>
        <li class="btn"></li>
        <li class="btn"></li>
      </ul>
    </div>



  </div><!-- 最外层adv -->





</body>


</html>
