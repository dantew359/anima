$(function(){
    $( ".tattoo" ).resizable();
    
    
    
    $('.leftmenu, .rightmenu').css({
       position: 'relative',
       bottom:'550px' 
    });
    $('.header').css({top:'900px'}).animate({
        top: '100px'
    },function(){
        $('.leftmenu').animate({
            bottom:'-=550px'
        },function(){
            $('.rightmenu').animate({
            bottom:'-=550px'
        })
        })
    });
    //прайс
//    $('.five').mouseover(function(){
//        $('.price').animate({
//            top:'150px'
//        }).rotate(0);
//        $('.gol_aa').css({
//            animationIterationCount: '1'
//        })
//    });
    
    
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
 e.preventDefault();
 
var target = this.hash,
 $target = $(target);
 
$('html, body').stop().animate({
 'scrollTop': $target.offset().top
 }, 500, 'swing', function () {
 window.location.hash = target;
 });
 });
    
 //Анимация тату
    
    
      $(window).scroll(function() { 
        if($(window).scrollTop() >= 1000) {  
            $(".tattoo1").animate({right:'-90px',
                                  top:'100px'},1500);
            
        } 
        if($(window).scrollTop() >= 1100){ 
        
            $(".tattoo2").animate({right:'-40px',
                                  top:'129px'},1000)
            
        } 
           
        if($(window).scrollTop() >= 1200){ 
        
            $(".tattoo3").animate({left:'97px',
                                top:'224px'},1300)
            
        } 
          if($(window).scrollTop() >= 1300){ 
        
            $(".tattoo4").animate({left:'61px',
                                top:'-30px'},1100)
            
        } 
          if($(window).scrollTop() >= 1400){ 
        
            $(".tattoo5").animate({left:'141px',
                                top:'-62px'},900)
            
        } 
          if($(window).scrollTop() >= 1500){ 
        
            $(".tattoo6").animate({left:'69px',
                                top:'143px'},1400)
            
        } 
          if($(window).scrollTop() >= 3000){ 
        
           $('.price').animate({
            top:'150px'
        });
           $('.price').rotate(0);   
        $('.gol_aa').css({
            animationIterationCount: '1'
        })
            
        } 
          
            
            
            });
    
    
})