
<!DOCKTYPE>
<html>
<head>

	<title>Головна сторінка</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
    <meta property="og:title" content="Google" />
    <meta property="og:description" content="This is Google!" />
    <meta property="og:url" content="http://google.com" />
    <meta property="og:image" content="https://www.google.co.uk/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" />

    <link rel="stylesheet" href="sharetastic.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="sharetastic.js"></script>
	<style>
	@import url("style.css")
	</style>
</head>
<body>
<!-- <script>
let d = new Date();
document.body.innerHTML = "<h4 > Час: " + d.getHours() 
+ ":" + d.getMinutes() + ":" + d.getSeconds()
"</h4>"
</script> -->

<header>
 <h4>   <img src="12.jpg" alt="Иллюстрация" 
style="position:absolute;top:15px;right:0px width="300" height="170" class="rightpic"> 
<script type="text/javascript">
i=0;
dt=new Array("white", "A00000", "00A000", "00A0A0", "A000A0", "A0A000");
function cl() // эта функция будет менять цвет текста
{document.getElementById("web").style.color=dt[i++];
if (i>dt.length) i=0;
setTimeout("cl()",1000);}
</script>
<h1 id='web'  font-style: italic>КПІ ІНФО </h1>

<script type="text/javascript">
cl();	// первый вызов размещаю после определения объекта
</script>

</h4>
 
 </header>


   
     <div class="container ">
	 <span>
	 <div class = "navv tip" data = "Тематичні розділи">
	 <nav>
      <ul>
	  <li>
          <a href="#">Новини</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#">Події</a>
            </li>
            <li>
              <a href="#">Навчання</a>
            </li>
            <li>
              <a href="#">Їжа</a>
            </li>
			
			 </ul>

        <li>
          <a href="#" >Текстовий редактор</a>
        </li>
	
		<li>
          <a href="forma.html">Форма зворотнього зв*зку</a>
        </li>
		<li>
          <a href="table.php">Ресурси</a>
        </li>
	
		
      </ul>
	  </nav>
	  </div>
	  <script  src="3.js"></script>
	  </span>
	  <span id = "search" >
	  <div class="search-box tip" data = "Пошук на сторінці"  >
        <input type="text" placeholder=" " /><span ></span>
		</div>
	  </span>
	 </div>
     
	<!-- <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script> -->
  <!-- <div onmouseover="mOver(this)" onmouseout="mOut(this)">Розділ 1</div>
  <script>
function mOver(obj) {
    obj.innerHTML = "Тимчасово не працює"
}

function mOut(obj) {
    obj.innerHTML = "Розділ 1"
}
</script>
  <div> <a href="editor.html" style = "color: white;">Створення статті</a></div>
  <div>Розділ 3</div> --> 
  <a href="?lang=fr "><img src="France-Flag.png" style = "background-color:  #81C0AA; position:absolute;top:10px;left:10px "></a>
<a href="?lang=da "><img src="Denmark-Flag.png" style = "background-color:  #81C0AA; position:absolute;top:10px;left:55px"></a>
<a href="?lang=it "><img src="Italy-Flag.png" style = "background-color:  #81C0AA; position:absolute;top:10px;left:100px"></a>
<a href="?lang=de "><img src="Germany-Flag.png" style = "background-color:  #81C0AA; position:absolute;top:10px;left:145px"></a>

  <?php
	function setLang(){
		if(isset($_GET['lang'])){
			$lang = $_GET['lang'];
		}
		else{		$lang = "de";}
		setcookie ( 'language', $lang, time() + 60*60*24*182, '/','localhost');
		if($_COOKIE['language'] == "fr"){
			echo "<p style='position:absolute;top:60px;left:10px; font-size: 14pt;'> Langue choisie: français</p>";
		}
		if($_COOKIE['language'] == "da"){
			echo "<p style='position:absolute;top:60px;left:10px; font-size: 14pt;'> Valgt sprog: dansk</p>";
		}
		if($_COOKIE['language'] == "it"){
			echo "<p style='position:absolute;top:60px;left:10px; font-size: 14pt;'> Lingua selezionata: italiano</p>";
		}
		if($_COOKIE['language'] == "de"){
			echo "<p style='position:absolute;top:60px;left:10px; font-size: 14pt;'> Ausgewählte Sprache: Deutsch</p>";
		}
	}
	setLang();
?>
<div style="position: absolute; top:100px; left: 10px">
<form method="post" action="auto.php">
   <p style='font-size: 14pt;'>Логін<input type = "text" name = "login" value="<?php    if(isset($_SESSION["login"])){echo $_SESSION["login"];}?>" width="80px"></p>
    <p style='font-size: 14pt;'>Пароль<input type = "password" name = "passwd" value="<?php    if(isset($_SESSION["passwrd"])){echo $_SESSION["passwrd"];}?>" width="30px"></p>
    <Input  class = "sub" type = "submit" name = "go" value = "Зайти" style="  position:relative; float:left;width:80px;margin-top:10px;background:#3498db;color:#fff;font-weight:400;text-shadow:1px 1px 0px #2d7baf;box-shadow:0px 3px 0px #2d7baf;">
  </form> 
 </div> 
<section>

  <nav>
  
<!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-120x45.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_5_1660190373">
<div style="width:130px; height:45px; margin: 0 auto;"><a href="https://hotelmix.com.ua/time/kiev-18881">Київ</a><br/></div>
</div> <script type="text/javascript"> function setWidgetData_1660190373(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1660190373 = -1; </script> 
<script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=&type=5&id=1660190373&scode=124&city_id=18881&wlangid=29&mode=1&details=0&background=ffffff&color=32323b&add_background=a0a1a1&add_color=ffffff&head_color=ffffff&border=0&transparent=0"></script>
<!-- clock widget end --><br>

<!-- Minfin.com.ua currency informer 275x120 yellow-->
<div id="minfin-informer-m1Fn-currency">Загружаем 
<a href="https://minfin.com.ua/currency/" target="_blank">курсы валют</a> 
от minfin.com.ua</a></div><script>var iframe = '<ifra'+'me width="275" height="120" fram'+'eborder="0" src="https://informer.minfin.com.ua/gen/course/?color=yellow" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:275px;height:120px;ove'+'rflow:hidden;"></iframe>';var cl = 'minfin-informer-m1Fn-currency';document.getElementById(cl).innerHTML = iframe; </script><noscript>
<img src="https://informer.minfin.com.ua/gen/img.png" width="1" height="1" alt="minfin.com.ua: курсы валют" title="Курс валют" border="0" /></noscript><br>
<!-- Minfin.com.ua currency informer 275x120 yellow-->

<!--weather-->
<div id="MeteoInformerWrapOuther">
<div id="MeteoInformerWrap">
<script type="text/javascript" src="https://meteo.ua/var/informers.js"></script>
<script type="text/javascript">
makeMeteoInformer("https://meteo.ua/informer/get.php?cities=34&w=210&lang=ua&rnd=1&or=vert&clr=0&dt=today&style=classic",200,150);
</script>
</div><a href="https://meteo.ua/34/kiev/14-days" style = "color: black;">Meteo.ua</a></div>

  </nav>

  <article>
  <main class="main columns">
  <section class="column main-column">
    <a class="article first-article" href="#">
      <figure class="article-image is-4by3">
        <img src="13.jpg" alt="">
      </figure>
      <div class="article-body tip" data = "Основна стаття">


        <h2 class="article-title">
          Привіт дистанційка!
        </h2>
        <p class="article-content">
          Процес дистанційного навчання у КПІ ім. Ігоря Сікорського щораз удосконалюють. Останній апдейт стосується формування та заповнення відомостей, в яких фіксуються результати семестрового контролю.

Раніше викладачі заповнювали усі відомості у паперовому вигляді та відносили до деканатів, де оцінки вручну заносились працівниками до системи АС «Деканат». Тепер процес значно спростився: представники деканатів формують електронні відомості в системі «Електронний кампус», після чого відомості відображаються в модулі «Сесія» в особистих кабінетах тих викладачів, які здійснюють семестровий контроль. Після проведення заліку чи екзамену викладач заповнює е-відомість, зберігає дані і вони вже є доступними для працівників деканату. Передача даних між двома системами «Електронний кампус» та АС «Деканат» буде здійснюватись автоматично. Такий механізм не тільки полегшує життя викладачам, а й дає можливість не змінювати графік проведення семестрового контролю навіть в умовах карантину.
«Це допоможе витримати терміни проведення заліків та екзаменів, які заплановані за графіком», - пояснює керівник відділу навчально-виховної роботи ДНВР Тетяна Хижняк.

Оновлення успішно протестували й застосували на заліковій сесії студентів 3-го курсу (скорочений термін навчання, вступ після технікумів/коледжів) та 4-го курсу – відомості по заліках, курсових роботах/проектах вже надійшли до деканатів. Фахівці «Електронного кампуса» розробляють можливість автоматичного відображення результатів іспитів та заліків в особистому кабінеті студента – так само, як там відображаються результати поточного контролю з дисциплін.

Функцію електронного заповнення відомостей планують застосовувати не лише у період дистанційного навчання, а й надалі.
        </p>
        <footer class="article-info">
          <span>Автор ...</span>
          <span>0 коментарів</span>
        </footer>
      </div>
    </a>

    
  </section>

  <section class="column">
    <a class="article" href="#">
      <figure class="article-image is-3by2">
        <img src="17.jpg" alt="">
      </figure>
      <div class="article-body tip" data = "Інші новини">
        <h2 class="article-title">
          Онлайн заходи тижня
        </h2>
        <p class="article-content">На період карантинних заходів Науково-технічна бібліотека КПІ ім. Ігоря Сікорського розширила діапазон послуг та ресурсів, які можна отримати віддалено, – онлайн чи на телефон.Одним з напрямків роботи стало забезпечення бібліотекою підтримки дистанційного навчання через проведення онлайн-заходів. Нещодавно за участю бібліотеки було проведено засідання філософського клубу "Гармата", вебінар платформи Єднання "Онлайн-практики для створення, управління та розвитку вашої команди", онлайн-сесія з вивчення німецької мови "Deutsch zu sprechen und Brettspiel Tabuzu spielen!",шаховий онлайн-турнір клубу "Табія".
        </p>
        <footer class="article-info">
          <span>Автор ...</span>
          <span>0 коментарів</span>
        </footer>
      </div>
    </a>
    <a class="article" href="#">
  <figure class="article-image is-3by2">
        <img src="15.jpg" alt="">
      </figure>
      <div class="article-body tip" data = "Інші новини">
        <h2 class="article-title">
          Програмісти створили мобільний додаток з екскурсіями-квестами по містах України
        </h2>
        <p class="article-content">
          В Україні створили мобільний додаток, який сам складає екскурсійні маршрути відповідно до зацікавлень людини та її вільного часу. Про це повідомляє The Village.
Мобільний додаток з екскурсіями-іграми називається WalQlike. Користувач вводить назву міста, кількість людей, свої інтереси та кількість вільного часу. А програма розробляє маршрут. Для того, щоб дістатись від одного пункту до іншого, треба виконати певні завдання, наприклад порахувати фігурки котів чи відгадати загадку.
Для того, щоб запустити додаток у дію, автори проекту шукають фінансування на краудфандинговій платформі Bigidea. Першими містами, де будуть створені екскурсії-квести, стануть Київ та Львів. Додаток дозволить користувачам долучитись до створення власних маршрутів та квестів. Також передбачаються знижки в кафе, сувенірних крамничках і музеях.


https://zaxid.net/news/
        </p>
        <footer class="article-info">
          <span>Автор ...</span>
          <span>0 коментарів</span>
        </footer>
      </div>
    </a>
    

  </article>
</section>

<footer>
<div id = "media">
<div class="sharetastic"></div>           </div>
<script>
	$('.sharetastic').sharetastic();
</script>
	<div class = "form tip" data = "Отримуй новини на електронну пошту">
        <h3><b>Підписатися на </b><i>розсилку</i></h3>
        <form id="subscribe" method="post" >
                <input class= "input" type="text" placeholder="Введіть e-mail" value="" name="email">
                <input class= "submit" type="submit" value="Підписатися" id="subscribe_submit" name="submit">
        </form>
		</div>
</footer>

 <script language="javascript" type="text/javascript">
var xoff = 0; 
var yoff = 30; 
$(".tip").unbind().hover(function(e){
  this.top = (e.pageY + yoff);
  this.left = (e.pageX + xoff);
  var data = $(this).attr("data");
  if(typeof(data)!='undefined'){
    var tipcontainer = '<div class="tip" id="tipcontainer">'+data+'<div>';
    $('body').append(tipcontainer);
    $("#tipcontainer").css({"position":"absolute","top":this.top + "px","left":this.left + "px"}).fadeIn("fast");
  }
},function(){
   $("#tipcontainer").fadeOut("slow").remove();
}).mousemove(
  function (e) {
    this.top = (e.pageY + yoff);
    this.left = (e.pageX + xoff);
    $("#tipcontainer").css({"position":"absolute","top":this.top + "px","left":this.left + "px"});
  }
);        
</script>
</body>

</html>
</!DOCKTYPE>