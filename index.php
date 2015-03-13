<?php
  $sum = 0;
  $loser_list = '';
  $sum_show = 0;
  $pressd = array();
  $loser_arr = array(1 => array('tag' => '從來沒有出國過', 'point' => 3), 
                    2 => array('tag' => '要幫家人還貸款或欠債', 'point' => 6),
                    3 => array('tag' => '人生幾乎沒什麼大起大落', 'point' => 2),
                    4 => array('tag' => '考不上全球前百名大學', 'point' => 3),
                    5 => array('tag' => '長相普通或很醜', 'point' => 5),
                    6 => array('tag' => '交友圈狹小', 'point' => 3),
                    7 => array('tag' => '去精品店只能看不能買', 'point' => 3),
                    8 => array('tag' => '存款餘額時常不足五位數', 'point' => 6),
                    9 => array('tag' => '沒有智慧型手機', 'point' => 3),
                    10 => array('tag' => '就學時期曾打工補貼生活開銷', 'point' => 4),
                    11 => array('tag' => '英文不好中文也不佳', 'point' => 4),
                    12 => array('tag' => '當過家裡蹲或伸手族', 'point' => 4),
                    13 => array('tag' => '沒機車也沒汽車', 'point' => 6),
                    14 => array('tag' => '家裡沒有請傭人', 'point' => 5),
                    15 => array('tag' => '服裝飾品都是便宜貨', 'point' => 4),
                    16 => array('tag' => '曾為省錢不吃飯', 'point' => 5),
                    17 => array('tag' => '成績或考績不好或普通', 'point' => 3),
                    18 => array('tag' => '有辦過就學貸款', 'point' => 4),
                    19 => array('tag' => '只能租屋或賴在父母家住', 'point' => 5),
                    20 => array('tag' => '沒有或很少出身上流社會的朋友', 'point' => 3),
                    21 => array('tag' => '因為沒錢讀國立學校', 'point' => 5),
                    22 => array('tag' => '為了省電到有冷氣的公眾場所打發時間', 'point' => 3),
                    23 => array('tag' => '沒有男或女朋友', 'point' => 6),
                    24 => array('tag' => '父母很窮', 'point' => 5),
                    );

  if (!empty($_GET['token']) && $_GET['token'] != '')
  {
    $token = base64_decode( $_GET['token'] );
    $pressd = explode("-", $token);
    $sum_show = 1;
  }
  foreach ($loser_arr as $key => $value)
  {
    $press_style = ( in_array($key,$pressd) ) ? ' press' : '';
    $loser_list .= '<div class="col-xs-6 col-md-3 colstyle">
                      <div  id="tag_'.$key.'"  data-key="'.$key.'" data-point="'.$value['point'].'" class="listdiv'.$press_style.'">
                        <p class="tagtext">'.$value['tag'].'</p>
                      </div>
                    </div>';
    $sum += $value['point'];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="argos" />
    <meta name="dcterms.rightsHolder" content="jazamila.com/loser/" />
    <meta name="description" content="從來沒出過國？長相普通或很醜？沒機車也沒汽車？曾為了省電，跑去有冷氣的公眾場所打發時間？想知道你有多魯蛇嗎？趕快來試一試魯蛇指數吧！" />
    <meta name="robots" content="all" />
    <meta name="googlebot" content="all" />
    
    <meta property="og:title" content="魯蛇指數"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://jazamila.com/loser/madao.jpg"/>
    <meta property="og:url" content="http://jazamila.com/loser/"/>
    <meta property="og:description" content="從來沒出過國？長相普通或很醜？沒機車也沒汽車？曾為了省店，跑去有冷氣的公眾場所打發時間？想知道你有多魯蛇嗎？趕快來試一試魯蛇指數吧！"/>
    
    <link rel="icon" href="favicon.ico">

    <title>魯蛇指數</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      body{
        background-color: #333;
        background-image: url("low_contrast_linen.png");
        background-repeat: repeat;
        text-align: center;
      }
      .container{
        max-width: 700px;
      }
      .header{
        margin: 40px 0px;
        min-height: 60px;
      }
      .brand{
        line-height: 0.6;
        text-align: left;
        color: #DDD;
        font-size: 30px;
        float: left;
      }
      .brand span{
        float: none;
        font-size: 13px;
        color: #DDD;
      }
      .brand a{
        color: #DDD;
        -webkit-transition: all 0.1s ease;
        -moz-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease
      }
      .brand a:hover{
        color: #FFF;
        text-decoration: none;
      }
      .nav{
        background: transparent;
        float: right;
        margin-top: 34px;
      }
      .nav>li>a{
        padding: 0px 5px;
        opacity: 0.7;

        -webkit-transition: all 0.1s ease;
        -moz-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease
      }
      .nav>li>a:focus, .nav>li>a:hover{
        background: transparent;
        opacity: 1.0;
      }
      .nav img{
        width: 25px;
        height: 25px;
      }
      .colstyle{
        height: 100px;
        position: relative;
        margin-bottom: 20px;
      }
      .listdiv{
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 8px;
        padding: 5px;
        color: #111;
        width: 90%;
        height: 100px;
        display: block;
        background-color: #DDD;
        border-radius: 4px;
        box-shadow: 0px 0px 20px -5px rgba(10%,10%,10%,0.6);
        border-bottom: 5px solid #999;
        font-size: 0;
        margin-top: 0px;

        -webkit-transition: all 0.1s ease;
        -moz-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;
      }
      .press{
        margin-top: 2px;
        background-color:#555;
        color: #AAA;
        border-bottom: 0px;
      }
      .listdiv:before{
        content: '';
        display: inline-block;
        vertical-align: middle;
        width: 0;
        height: 100%;
      }
      .tagtext{
        display: inline-block;
        font-size:20px;
        font-weight: bold;
        vertical-align: middle;
      }
      .listdiv:hover{
        background-color: #EFEFEF;
      }
      .row{
        min-height: 150px;
      }
      .row .btn{
        position: absolute;
        left: 8px;
        top: 50px;
      }
      .col-xs-12{
        min-height: 100px;
      }
      .btn-success{
        font-size:30px;
        font-weight: bold;
        background-color: #4cae4c;
        border-bottom: 5px solid #327332;
      }
      .btn-success:hover{
        background-color: #5cb85c;
        border-bottom: 5px solid #327332;
      }
      .btn-success:active{
        margin-top: 3px;
        border-bottom: 0px;
      }
      .sumarea{
        display: none;
        text-align: right;
        padding: 0px;
        font-size: 100px;
        color: #F9BF45;
        text-shadow:rgba(2, 2, 2, 0.6) 2px 4px 15px;
      }
      .footer {
        margin-top: 50px;
        color: #DDD;
      }
      .footer a{
        color: #AAA;
        text-decoration: underline;
      }
      .footer a:hover{
        color: #DDD;
      }

      @media screen and (max-width: 767px) {
          .tagtext{
            font-size: 15px;
          }
          .row .btn{
            position: relative;
            left: 0px;
          }
          .sumarea{
            margin-top: 10px;
            text-align: center;
          }  
      }
      @media screen and (max-width: 500px) {
          .nav{
            clear: both;
            margin-top: 10px;
            margin-bottom: 20px;
          }  
      }
    </style>
  </head>

<body>

  <div class="container" id="container">
      
      <div class="header">
        <a href="http://jazamila.com/loser/">
          <h3 class="brand">魯蛇指數<br><span>How You Know You Are A Loser</spna></h3>
        </a>
        <nav>
          <ul class="nav nav-pills">
            <li>
              <a href="javascript:void(0);" onclick="window.open('http://twitter.com/?status='+document.URL)" title="分享至Twitter">
                <img src="share/twitter.png" title="分享至Twitter" alt="Twitter share"/>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" onclick="window.open('http://www.plurk.com/?qualifier=shares&amp;status='+document.URL)" title="分享至PLURK">
                <img src="share/plurk.png" title="分享至Plurk" alt="Plurk share"/>
              </a>
            </li>
            <li>
              <a target="_blank" href="javascript:void(0);" onclick="window.open('https://plus.google.com/share?url='+document.URL,'Google','width=500,height=400');">
                <img src="share/googleplus.png" title="分享至Google+" alt="Google PLus share"/>
              </a>
            </li>
            <li>
              <a id="lineshare" href="http://line.naver.jp/R/msg/text/?jazamila.com/loser/">
                <img src="share/line.png">
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" onclick='window.open("https://www.facebook.com/sharer.php?u="+document.URL);' title="分享至Facebook">
                <img src="share/fb.png" title="分享至Facebook" alt="Facebook share"/>
              </a>
            </li>
            <li>
              <a href="http://www.tumblr.com/share" title="分享至Tumblr">
                <img src="share/tumblr.png" title="分享至Tumblr" alt="Tumblr share"/>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    <div class="row">
        <?php
          echo $loser_list;
        ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <a href="javascript:;" id="tagsubmit" class="btn btn-success" onclick="show_result()">結算你的魯蛇指數</a>
      </div>
      <div class="col-xs-12 col-sm-6 sumarea">
          <span class="sum" id="sum"></span><span class="persent">%</span>
      </div>
    </div>

    <footer class="footer">
      <p>Made by <a href="http://argoskenny.tumblr.com/" target="_blank">kEnny</a>, Cover template for <a href="http://getbootstrap.com/"  target="_blank">Bootstrap</a>, by <a href="https://twitter.com/mdo" target="_blank">@mdo</a>.<br/>
        If you have any question, please do not hesitate to <a href="contact.html" style="font-weight:bold;color:orange;">CONTACT ME</a>. Cheers :)
      </p>
    </footer>
  </div>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//getbootstrap.com/assets/js/docs.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script type="text/javascript" src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript" src="http://platform.tumblr.com/v1/share.js"></script>
  <script type="text/javascript" src="countUp.min.js"></script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" data-original-title="Copy to clipboard">      
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         
    <param name="movie" value="http://getbootstrap.com/assets/flash/ZeroClipboard.swf?noCache=1424332805846">         
    <param name="allowScriptAccess" value="sameDomain">         
    <param name="scale" value="exactfit">         
    <param name="loop" value="false">         
    <param name="menu" value="false">         
    <param name="quality" value="best">         
    <param name="bgcolor" value="#ffffff">         
    <param name="wmode" value="transparent">         
    <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         
    <embed src="http://getbootstrap.com/assets/flash/ZeroClipboard.swf?noCache=1424332805846" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">
  </object>
</div>
<input type="hidden" id="sum_show" value="<?php echo $sum_show;?>">
<script type="text/javascript">
 $(document).ready(function(){
    if ($('#sum_show').val() == 1)
    {
      show_result();
    };

    $('.listdiv').click(function () {
      var thistag = $('#tag_' + $(this).attr('data-key') );
      thistag.toggleClass("press");
      
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        if (thistag.hasClass("press"))
        {
          thistag.css("background-color", "#555");
        }
        else
        {
          thistag.css("background-color", "#DDD");
        }
      }
      
      var token = '';
      $(".press").each(function() {
        token += $(this).attr("data-key") + '-';
      });
      token = window.btoa(token);
      token = 'index.php?token='+token;
      window.history.pushState("","", token);

      // Line
      $('#lineshare').attr("href", "http://line.naver.jp/R/msg/text/?"+document.URL);

      // Facebook
      $("meta[property='og\\:url']").attr("content", document.URL);
    });
  });

function show_result()
{
  var total = 0,
      startnum = 0;
  $('.sumarea').animate({
    opacity:  'show'
  },500,"linear");

  if ( $(".press").size() > 0)
  {
    $(".press").each(function() {
      total += parseInt($(this).attr("data-point"));
    });
  };
  if($('#sum').html() != '')
  {
    startnum = parseInt($('#sum').html());
  }
  var numcount = new countUp("sum", startnum, total);
  numcount.start();
}
</script>
</body>
</html>