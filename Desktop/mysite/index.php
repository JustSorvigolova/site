<?php
$dbc = mysqli_connect('localhost', 'root', '', 'register');
if(!isset($_COOKIE['user_id'])) {
  if(isset($_POST['submit'])) {
    $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    if(!empty($user_username) && !empty($user_password)) {
      $query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_assoc($data);
        setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
        setcookie('username', $row['username'], time() + (60*60*24*30));
        $home_url = 'http://' . $_SERVER['HTTP_HOST'];
        header('Location: '. $home_url);
      }
      else {
        echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
      }
    }
    else {
      echo 'Извините вы должны заполнить поля правильно';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../mysite/assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat+Alternates:400,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
         <link rel="shortcut icon" href="/assets/images/" type="image/x-icon">
        <title>Gestureslearn.com</title></head>
    <body>
<!----------------- это часть header-------------------------------->
<script >
    alert ("Спасибо за регистрацию красавчик(-ца)!");
</script>
        <header class="header">
        <div class="container">
            <div class="header__inner">
            <div class="header__logo"><a class="nav__link" href="../mysite/index.php">Gestureslearn</a></div>
                <nav class="nav">
                  <a class="nav__link active" href="../mysite/slider/index2.php">галерея жестов</a>
                    <a class="nav__link active" href="../mysite/Color.php">Цвета</a>
                    <a class="nav__link" href="../mysite/Emotion.php">Эмоции</a>
                    <a class="nav__link" href="../mysite/Verbs.php">Глаголы</a>
                    <a class="nav__link" href="../mysite/hello.php">Приветсвие и общие фразы</a>
                </nav>
              </div>
            </div>
        </header>
 <!-- --------это часть header--------------------------------------->
            <div class="intro">
             <div class="container"><div class="intro__inner">
                 <h2 class="intro__suptitle">Добро пожаловать в</h2>
                 <h1 class ="intro__title">Gestureslearn </h1>
                 <a class="btn" href="../mysite/ABC.php"><strong>Алфавит</strong></a>
                 </div>
             </div>
            </div>
        
        <section class="section">
          <div class="container">
             <div class="section__header">
                 <h3 class ="section__suptitle">История которую можно только</h3>
                 <h2 class="section__title">Увидеть!</h2>
            <div class="section__text">
                 <p>Сегодня мы делимся с вами вдохновляющей историей 16-летнего Садыка Казиева. У Садыка сильный стойкий характер. Он целеустремленный, жизнерадостный парниша, который излучает свет. Садык учится в 11 классе средней образовательной школы №40 в городе Бишкек. Он исполняет песни на языке жестов для глухонемых. Садык часто публикует каверы на своей странице в инстаграм. Кто-то не понимает его, а кто-то восхищается им. Садык рассказал Limon.KG о том, как появилась эта идея, почему он выучил язык жестов и поделился мечтой снять видео с известными людьми шоу-бизнеса.</p>
                 
                 </div>
              </div>
            
          <div class="about">
             <div class="about__item"><div class="about__img"><img src="../mysite/assets/images/1.jpg" alt=""></div></div>
                <div class="about__item"><div class="about__img"><img src="../mysite/assets/images/3.jpg" alt=""></div></div>
                <div class="about__item"><div class="about__img"><img src="../mysite/assets/images/2.jpg" alt=""></div>
                </div>
              </div>
        
            
            </div>
        </section>
        
        <div class="static">
            <div class="container">
                
            <div class="stat">
                  <div class="stat__item">
                      <div class="stat__count">2018</div>
                      <div class="stat__text">Статистика в кыргызстане</div>
                </div>
                      <div class="stat__item"><div class="stat__count">4241</div>
                      <div class="stat__text">число немых</div></div>
                
                      <div class="stat__item"><div class="stat__count">42142</div>
                      <div class="stat__text">число глухих</div></div>
                
                      <div class="stat__item"><div class="stat__count">8942</div><div class="stat__text">число глухо-немых</div>
                </div>
            </div>
                
            </div>
        </div><!--contaier-->
        <section class="section section__dev">
         <div class="container">
             
             <div class="section__header">
                 <h3 class ="section__suptitlej">Маленькая</h3>
                 <h1 class="section__titlej"><strong>Биография</strong></h1>
              <div class="section__text"><img src ="../mysite/assets/images/88.jpg" width="350" height="250">
                 <p><strong>«Я родом из Иссык-Куля. Семья у меня небольшая: я, братишка и родители. Братишка учится в 5 классе. Маму зовут Нуриля, а отца Сыргак. Они с раннего детства глухонемые. В то время, в 1976 году, по словам родителей, была эпидемия менингита, из-за которого они потеряли слух. Их отправили учиться в школу для глухих имени Ворошилова в Бишкеке. Там родителей обучили языку жестов. Мои родители познакомились в этой школе. Мама с отцом вместе с 6-го класса. Они всегда на позитиве, всегда стараются быть со мной и младшим на одной волне и не отставать от мира. Мы с братишкой помогаем им в этом.</strong></p>
                  <p><strong>Язык жестов я выучил благодаря родителям. Ему я обучался практически с рождения. Родственники родителей обучали меня речи и также языку жестов. Так как родители потеряли слух с раннего детства, родня неплохо понимала язык жестов, общаясь с ними. Родственники помогали во многом и мне. Уже с 2 лет я выучил алфавит жестов и мог без затруднений «разговаривать» с родителями. Почти с самого детства я был ушами и речью родителей. Я много ездил с ними по делам в качестве переводчика.</strong></p>
                  <p><strong> Идея с каверами пришла ко мне, когда я захотел внести в инстаграм что-то новое и интересное. Также это была некая поддержка глухонемой аудитории соцсети. Я хотел передать смысл песен. Через видео я стараюсь передать свои эмоции, настроение, духовное состояние</strong></p>
                 
                 </div>
              </div>
            </div>
        </section>
        <!--верхняя часть закончилась-->
        <section class="section">
            <div class="container">
            
             <div class="section__header">
                 <h3 class ="section__suptitle">Первое</h3>
                 <h2 class="section__titles"><strong>Видео</strong></h2>
                 <div class="section__text">
                 <p>Когда я впервые закинул видео, не ожидал такой реакции. Было очень много эмоций со стороны зрителей. Кто-то думал, что я шарлатан и просто машу руками, кому-то очень нравилось и они оставляли лестные комментарии. Многие поначалу не понимали, что я делаю. И в первом же своём видео в описании я дал всем понять, что это перевод песни на язык жестов, что все это я делаю для глухонемых пользователей инстаграма. Мне начали писать глухонемые дети и люди постарше со словами благодарности. Им было приятно. Они меня поддерживали и давали слова напутствия. С каждым видео людям нравилось все больше и больше. Но, конечно, не обходится без хейтеров, которые оставляют неприятные комментарии, мол, я не знаю языка жестов и делаю это ради собственного пиара. Нет. Я просто хочу внести что-то новенькое и помочь людям. Вот и все. Мне и самому интересно видеть реакцию людей и их эмоции. Это бесценно. Так я создал некий контент у себя на странице.</p>
                 
                 </div>
                </div>
                <div></div>
                <div class="wedo">
                   <div class="wedo_item"><iframe width="640" height="360" src="https://www.youtube.com/embed/hVTYTk6Vv5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div class="wedo__item1">Мои родители не сразу узнали о том, что я снимаю такие видео. Но так как сейчас век технологий мое видео дошло и до них. Мама, узнав об этом, расплакалась, это были слезы счастья, наверное. А папа просто стоял рядом, обняв маму и улыбался. Позже об этом узнали и родственники. Они отнеслись очень положительно. Было приятно, что хоть чуть-чуть я могу порадовать людей. Им понравилась моя задумка (улыбается). Иногда, когда я не знаю жест, обозначающий определенное слово, мне помогают родители.<big>«Любите и цените своих родителей, так самозабвенно и искренне любить могут только они!»</big></div></div>
            </div>
        </section>
    
       
        <footer>
      <div class="footer">
            <div class="footer__block"> 
                <div class="links"><a href="https://www.youtube.com/user/jestovnet">Links</a>
                    <div class="Contact1"><a href="https://www.instagram.com/akbar_6565/?hl=ru">Instagram</a>
                        <div class="Contact2"><a href="https://t.me/Akbar_Rustanov00">Telegram</a></div>
                        <div class="location"><a href="https://2gis.kg/geo/15763616603045889/74.738047%2C42.984697?m=74.9667%2C42.9%2F11">Location</a></div></div>
                    </div>
                    <h1 class="Logon">Gestureslearn.com</h1>
               <h2 class="myname">Rustanov Akbar IT-119 </h2>
                <?php
  if(empty($_COOKIE['username'])) {
?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="username">Логин:</label>
  <input type="text" name="username">
  <label for="password">Пароль:</label>
  <input type="password" name="password">
  <button type="submit" name="submit">Вход</button>
  <a href="signup.php">Регистрация</a>
  </form>
<?php
}
else {
  ?>
  <p><a href="myprofile.php">Мой профиль</a></p>
  <p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php 
}
?>
 
                </div>
          </div>
    </footer>
        <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
         </body>
</html>
