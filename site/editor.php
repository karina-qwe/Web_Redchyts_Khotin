<!DOCKTYPE>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Текстовий редактор</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_edit.css">
	
	<SCRIPT>
	var st
function time_scroll()
{
var d = new Date();
 st= d.getHours() +":"+d.getMinutes() +":"+
d.getSeconds();
setTimeout('time_scroll();',50);
return(d);
}
</SCRIPT>
</head>
<body onload= "time_scroll()">

<script>
let d = new Date();
document.body.innerHTML = "<h4 > Час: " + d.getHours() 
+ ":" + d.getMinutes() + ":" + d.getSeconds()
"</h4>"
</script>

<header>
 <h4>   <img src="12.jpg" alt="Иллюстрация" 
style="position:absolute;top:70px;right:0px width="300" height="190" class="rightpic">
<script type="text/javascript">
i=0;
dt=new Array("0000A0", "A00000", "00A000", "00A0A0", "A000A0", "A0A000");
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
<div class="flex-container">
  <div><a href="main page(2).html" style = "color: white;">Головна сторінка</a></div>
  <div>Розділ 2</div>
  <div>Розділ 3</div> 

</div>
<section>
  <nav>
    <ul>
	  <li id="opa"><a href="JavaScript:alert('На жаль, сторінка зараз в розробці');">
	  Про нас</a></li>
      <li id="opa"><a href="#">Реклама</a></li>
    </ul>
  </nav>

  <article>
<div class="container">
	<div class="jumbotron">
		<div class="container">
			<h2>Редактор статті</h2>
			

	<div class="container">
		<div class="row"><br>
				<div class="buttons">
			</div>
			</div>
    <div class="row" contentEditable="true">
      <div class="col-md-3">
        <img src="13.jpg" alt="" class="img-responsive" ></div>
      <div class="col-md-9">
        
        <div class="row" contentEditable="true">
          <div class="col-md-12">
            <h3>Привіт дистанційка!</h3>
           <div > <p> Процес дистанційного навчання у КПІ ім. Ігоря Сікорського щораз удосконалюють. Останній апдейт стосується формування та заповнення відомостей, в яких фіксуються результати семестрового контролю.
		   Раніше викладачі заповнювали усі відомості у паперовому вигляді та відносили до деканатів, де оцінки вручну заносились працівниками до системи АС «Деканат». Тепер процес значно спростився: представники деканатів формують електронні відомості в системі «Електронний кампус», після чого відомості відображаються в модулі «Сесія» в особистих кабінетах тих викладачів, які здійснюють семестровий контроль. Після проведення заліку чи екзамену викладач заповнює е-відомість, зберігає дані і вони вже є доступними для працівників деканату. Передача даних між двома системами «Електронний кампус» та АС «Деканат» буде здійснюватись автоматично. Такий механізм не тільки полегшує життя викладачам, а й дає можливість не змінювати графік проведення семестрового контролю навіть в умовах карантину. «Це допоможе витримати терміни проведення заліків та екзаменів, які заплановані за графіком», - пояснює керівник відділу навчально-виховної роботи ДНВР Тетяна Хижняк. Оновлення успішно протестували й застосували на заліковій сесії студентів 3-го курсу (скорочений термін навчання, вступ після технікумів/коледжів) та 4-го курсу – відомості по заліках, курсових роботах/проектах вже надійшли до деканатів. Фахівці «Електронного кампуса» розробляють можливість автоматичного відображення результатів іспитів та заліків в особистому кабінеті студента – так само, як там відображаються результати поточного контролю з дисциплін. Функцію електронного заповнення відомостей планують застосовувати не лише у період дистанційного навчання, а й надалі.</p>
            </div>
           </div>
      </div>
    </div>
	</div>
</div>
<script type="text/javascript" src="edit.js"></script>


  </article>
</section>

<footer>
        <h3><b>Підписатися на </b><i>розсилку</i></h3>
        <form id="subscribe" method="post" >
                <input type="text" placeholder="Введіть e-mail" value="" name="email">
                <input type="submit" value="Підписатися" id="subscribe_submit" name="submit">
        </form>
</footer>

</body>

</html>
</!DOCKTYPE>