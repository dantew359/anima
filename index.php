<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallary.css">
    <link href="https://fonts.googleapis.com/css?family=Underdog" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.lightbox-0.5.css"> 
    
    
    <link rel="stylesheet" href="js/jquery-ui.min.css">
  <link rel="stylesheet" href="js/jquery-ui.theme.min.css">
  
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.lightbox-0.5.pack.js"></script>
    <script src="js/jqueryrotate.2.1.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="videodiv clear">
          <video width="100%" height="" loop="loop" autoplay >
           
            <source src="video/tattoo2.mp4" type="video/mp4">
            
          </video>
          <div class="leftmenu">
              <div class="inmenu menu_main"></div>
              <div class="inmenu menu_sale"><a href="#sale"></a></div>
              <div class="inmenu menu_photo"><a href="#photo"></a></div>
          </div>
          <div class="header"></div>
          <div class="rightmenu">
              <div class="inmenu menu_price"><a href="#price"></a></div>
              <div class="inmenu menu_about"><a href="#about"></a></div>
          </div>
        </div>
        <div class="two" id="sale">
            <div class="star star_a"></div>
            <div class="star star_b"></div>
            <div class="star star_c"></div>
            <div class="vagina">
                <div class="vagina_img"></div>
                <div class="vagina_txt">
                    
                    <p class="action">
                        Внимание Акция !!
                    </p>
                    <p class="action_text">
                        Приведи друга (а лучше подругу) 
                        и получи скидку для друга на 5%,
                        а также для тебя,на целых 10%!
                    </p>
                </div>
            </div>
        </div>
        <div class="three">
            <div class="woman">
                <div class="girl">
                    <div id="resizable" class="tattoo tattoo1 "></div>
                    <div class="tattoo tattoo2 "></div>
                    <div class="tattoo tattoo3"></div>
                    <div class="tattoo tattoo4"></div>
                    <div class="tattoo tattoo5"></div>
                    <div class="tattoo tattoo6"></div>
                </div>
                <p>
                
                 Стань кем хочешь!  &uarr;
                
                </p>
            </div>
            
        </div>
        <div class="four" id="photo">
          <div class="cradle"></div>
           <div class="gallary" >
            <?php

$directory = 'gallery';

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

while ($file = readdir($dir_handle)) 
{
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);
	
	$nomargin='';
	
	if(in_array($ext,$allowed_types))
	{
		if(($i+1)%4==0) $nomargin='nomargin';
	
		echo '
		<div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>';
		
		$i++;
	}
}

closedir($dir_handle);

?>
       </div>
        </div>
        
        <div class="four-two">
            <?php

$directory = 'gallery2';

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

while ($file = readdir($dir_handle)) 
{
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);
	
	$nomargin='';
	
	if(in_array($ext,$allowed_types))
	{
		if(($i+1)%4==0) $nomargin='nomargin';
	
		echo '
		<div class="pic2 '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>';
		
		$i++;
	}
}

closedir($dir_handle);

?>
        </div>
        
        
        <div class="five" id="price">
          <div class="tattoo-anima"></div>
           <div class="line"></div>
            <div class="price">
              <div class="gol gol_aa gol1"></div>
              <div class="gol gol_aa gol2"></div>
              <div class="gol gol_aa gol3"></div>
              <div class="gol gol_aa gol4"></div>
                <P class="price_p">
                Меня зовут Вадим.
                Первую татуировку сделал 19 октября и с тех пор активно практикую это занятие :3
                Цена сеанса от 3000р.
                Работаю в основном в чёрном цвете в випшейдинге, графике, гравюре.
                Живу Творю, короч. Ну ты понял.    
                    
                </P>
            </div>
        </div>
        <div class="six" id="about">
           <div class="star star_a"></div>
            <div class="star star_b"></div>
            <div class="star star_c"></div>
            <div class="arrow"></div>
            <div class="six_text">
              <div class="gol gol1"></div>
              <div class="gol gol2"></div>
              <div class="gol gol3"></div>
              <div class="gol gol4"></div>
               <P class="how">КАК НАС НАЙТИ:</P>
                <p>Обитель физического преображения и храм боли по совместительству находится по адресу: метро Таганская(выход с кольцевой) Шелапутинский переулок 6 строение 3, нужно зайти через проходную !!!!которая находится возле арки со шлагбаумом!!!, потом в 1-ый подъезд (он с левой стороны во дворе, стеклянные двери), подняться на 4-ый этаж, пойти по правому коридору и дойти до первой чёрной двери с левой стороны, на которой будет стикер "татуируюсь как хочу". Как и до всех замечательных мест на планете, добраться туда непросто.</p>
            </div>
            <div class="six_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.6621168910888!2d37.661768116091054!3d55.7469994999067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54aeb96911975%3A0x681b894e642c7a91!2z0KjQtdC70LDQv9GD0YLQuNC90YHQutC40Lkg0L_QtdGA0LXRg9C70L7Qug!5e0!3m2!1sru!2sru!4v1495031474334" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="footer">
            <a href="http://www.dantew.ru">dantew.ru 2017</a>
        </div>
    </div>
    
</body>
</html>