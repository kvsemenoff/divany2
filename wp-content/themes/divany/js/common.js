

$(document).ready(function(){
    var colornumber = 1;

    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });
    $('.window .dd-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 

    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    });

    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(this);
                }
            });
        }
        return false;
    });
    function cleanTnanks(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
        location = "thanks";
        // $('a[href=#thanks]').trigger('click');
    } 
    
    $('.dfopen1 a').click(function(evt) {        
       evt.preventDefault();        
       var imgPath = $(this).attr('href');         
       var oldImage = $('.dfimge1 img');              
       var newImage = $('<img src="' + imgPath +'">');         
       newImage.hide();           
       $('.dfimge1').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    });     
    $('.dfopen2 a').click(function(evt) {        
       evt.preventDefault();        
       var imgPath = $(this).attr('href');         
       var oldImage = $('.dfimge2 img');              
       var newImage = $('<img src="' + imgPath +'">');         
       newImage.hide();           
       $('.dfimge2').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    });     
    $('.dfopen3 a').click(function(evt) {        
       evt.preventDefault();        
       var imgPath = $(this).attr('href');         
       var oldImage = $('.dfimge3 img');              
       var newImage = $('<img src="' + imgPath +'">');         
       newImage.hide();           
       $('.dfimge3').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    });     

    $('#df-owl1').on('click', '.item', function(evt) {  
        evt.preventDefault(); 
        var bigimg =  $(this).find('img').attr('data-bigimg');
              
       var oldImage = $('.dfimge1 img');              
       var newImage = $('<img src="' + bigimg +'">');         
       newImage.hide(); 
        
       $('.dfimge1').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    });
    $('#df-owl2').on('click', '.item', function(evt) {  
        evt.preventDefault(); 
        var bigimg =  $(this).find('img').attr('data-bigimg');
              
       var oldImage = $('.dfimge2 img');              
       var newImage = $('<img src="' + bigimg +'">');         
       newImage.hide(); 
        
       $('.dfimge2').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    }); 
    $('#df-owl3').on('click', '.item', function(evt) { 
        evt.preventDefault(); 
        var bigimg =  $(this).find('img').attr('data-bigimg');
              
       var oldImage = $('.dfimge3 img');              
       var newImage = $('<img src="' + bigimg +'">');         
       newImage.hide(); 
        
       $('.dfimge3').prepend(newImage);          
       newImage.show(200);                    
       oldImage.hide(200,function(){
           $(this).remove();
       });
       $(this).addClass("   ");       
    });   
  



$('.item1, .item2, .item3').hide();

$('.model-link').on('click', function(e){

    e.preventDefault();         

    if ($('.tovar-item').is(':visible')) {
        $('.tovar-item').hide();
    } 
    

    $('.item1').slideDown();

    var text = $(this).find('.df-models__txt1_view').text();
    var priceold = $(this).find('.df-models__txt2_view').text();
    var pricetxt = $(this).find('.df-models__txt3_view').text();
    var attr = $(this).find('.df-models__img').find('img').attr('src');    

    $('.df-cartproduct__right').each(function(){

    });

    $('.df-input_view').each(function(){
      $('.df-innerh2').text(text);
      $('.dfopen1 .df-cartproduct__col_view a:first').attr('href', attr);
      $('.dfopen1 .df-cartproduct__col_view img:first').attr('src', attr);               

      $('.dfbold').text(text); 
      $('.df-add__img').find('img').attr('src', attr); 
      $('.df-price-box').find('.df-models__txt2_view').text(priceold);
      $('.df-price-box').find('.df-models__txt3_view').text(pricetxt);
      $('#price').text(pricetxt);

      $('.totalprice').val(pricetxt);
      $('.tovar').val(text);

     });   
   


          ////////////////////////////////////////////
                var mystr="";            
                
                    $('.dfopen1 a').on('click' , function(){
                      
                        $('#df-owl1 .item').remove(); 

                        var $owlitem1 = $('#df-owl1');
                        $owlitem1.trigger('destroy.owl.carousel');

                        var thisel = $(this).parents('.df-cartproduct__col').find('.df-sliderimages').html();
                        
                        mystr=""; 
                                                   
                        $(thisel).filter('img').each(function(e) {
                         
                            var newsrc =  $(this).attr('src');  
                            var newsrc2 =  $(this).attr('data-bigimg');                     
                
                            mystr = mystr + '<div class="item"><div class="df-cartproduct__prod df-cartproduct__prod_view"><img src="'+ newsrc + '" data-bigimg="'+ newsrc2 + '"></div></div>';

                             //$('#df-owl1 .item').owlCarousel('add', mystr).owlCarousel('refresh');
                                
                            $('#df-owl1').html(mystr); 
 
                           
                        }); 
                            
                                $owlitem1.html($owlitem1.find('.owl-stage-outer').html()).removeClass('owl-loaded');
                                $owlitem1.owlCarousel({
                                   
                                    loop:true,
                                    nav:true, 
                                    autoplay:false,
                                    smartSpeed:1000,
                                    margin:0,    
                                    navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
                                    responsive:{
                                      0:{
                                        items:1
                                      },
                                      410:{
                                         items: 2   
                                      },      
                                      700:{
                                        items:3
                                      },
                                      1000:{
                                        items:4
                                      }
                                    }

                                  });
                                // jQuery("#df-owl1").trigger('add.owl.carousel', mystr).trigger('refresh.owl.carousel');

                     }); 
        
                    $('.dfopen1 a:first').click();


////////////////////////////////////////////////             

           
       // var $owlitem1 = $('#df-owl1');
       //  $owlitem1.trigger('destroy.owl.carousel');

        // After destory, the markup is still not the same with the initial.
        // The differences are:
        //   1. The initial content was wrapped by a 'div.owl-stage-outer';
        //   2. The '.owl-carousel' itself has an '.owl-loaded' class attached;
        //   We have to remove that before the new initialization.

        // $owlitem1.html($owlitem1.find('.owl-stage-outer').html()).removeClass('owl-loaded');
        // $owlitem1.owlCarousel({
        //     // your initial option here, again.
        //     loop:true,
        //     nav:true, 
        //     autoplay:false,
        //     smartSpeed:1000,
        //     margin:0,    
        //     navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        //     responsive:{
        //       0:{
        //         items:1
        //       },
        //       410:{
        //          items: 2   
        //       },      
        //       700:{
        //         items:3
        //       },
        //       1000:{
        //         items:4
        //       }
        //     }

        //   });




        // var aTag = $("a[name='model']");
        // $('html,body').animate({scrollTop: aTag.offset().top-50}, 200);

});
 


  




  $('.model-link2').on('click', function(e){        
       e.preventDefault();   

        if ($('.tovar-item').is(':visible')) {
            $('.tovar-item').hide();
        }        
        $('.item2').slideDown();

        var text2 = $(this).find('.df-models__txt1_view').text();
        var priceold2 = $(this).find('.df-models__txt2_view').text();
        var pricetxt2 = $(this).find('.df-models__txt3_view').text();
        var attr2 = $(this).find('.df-models__img').find('img').attr('src');    
        
        $('.df-input_view').each(function(){
            $('.df-innerh2').text(text2);
            $('.dfopen2 .df-cartproduct__col_view a:first').attr('href', attr2);
            $('.dfopen2 .df-cartproduct__col_view img:first').attr('src', attr2);

            $('.dfbold').text(text2); 
            $('.df-add__img').find('img').attr('src', attr2); 
            $('.df-price-box').find('.df-models__txt2_view').text(priceold2);
            $('.df-price-box').find('.df-models__txt3_view').text(pricetxt2);
            $('#price').text(pricetxt2);

            $('.totalprice').val(pricetxt2);
            $('.tovar').val(text2);
            
        });   
       

                ////////////////////////////////////////////
                var mystr="";            
                
                    $('.dfopen2 a').on('click' , function(){
                      
                        $('#df-owl2 .item').remove(); 

                        var $owlitem2 = $('#df-owl2');
                        $owlitem2.trigger('destroy.owl.carousel');

                        var thisel = $(this).parents('.df-cartproduct__col').find('.df-sliderimages').html();
                        
                        mystr=""; 
                                                   
                        $(thisel).filter('img').each(function(e) {
                         
                        var newsrc =  $(this).attr('src');  
                        var newsrc2 =  $(this).attr('data-bigimg');                     
            
                        mystr = mystr + '<div class="item"><div class="df-cartproduct__prod df-cartproduct__prod_view"><img src="'+ newsrc + '" data-bigimg="'+ newsrc2 + '"></div></div>';

                                                   
                        $('#df-owl2').html(mystr); 
 
                           
                        }); 
                      
                        $owlitem2.html($owlitem2.find('.owl-stage-outer').html()).removeClass('owl-loaded');
                        $owlitem2.owlCarousel({                           
                            loop:true,
                            nav:true, 
                            autoplay:false,
                            smartSpeed:1000,
                            margin:0,    
                            navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
                            responsive:{
                              0:{
                                  items:1
                              },
                              410:{
                                 items: 2   
                              },        
                              700:{
                                  items:3
                              },
                              1000:{
                                  items:4
                              }
                          }

                      });                       

                     });          
                
                     $('.dfopen2 a:first').click();
////////////////////////////////////////////////    

});
 

  $('.model-link3').on('click', function(e){
       e.preventDefault();      

        if ($('.tovar-item').is(':visible')) {
            $('.tovar-item').hide();
        }  

        $('.item3').slideDown();

        var text3 = $(this).find('.df-models__txt1_view').text();
        var priceold3 = $(this).find('.df-models__txt2_view').text();
        var pricetxt3 = $(this).find('.df-models__txt3_view').text();
        var attr3 = $(this).find('.df-models__img').find('img').attr('src'); 
        
        $('.df-input_view').each(function(){
            $('.df-innerh2').text(text3);
            $('.dfopen3 .df-cartproduct__col_view a:first').attr('href', attr3);
            $('.dfopen3 .df-cartproduct__col_view img:first').attr('src', attr3);

            $('.dfbold').text(text3); 
            $('.df-add__img').find('img').attr('src', attr3); 
            $('.df-price-box').find('.df-models__txt2_view').text(priceold3);
            $('.df-price-box').find('.df-models__txt3_view').text(pricetxt3);
            $('#price').text(pricetxt3);

            $('.totalprice').val(pricetxt3);
            $('.tovar').val(text3);

            
        });   
        
        ////////////////////////////////////////////
                var mystr="";            
                
                    $('.dfopen3 a').on('click' , function(){
                      
                        $('#df-owl3 .item').remove(); 

                        var $owlitem3 = $('#df-owl3');
                        $owlitem3.trigger('destroy.owl.carousel');

                        var thisel = $(this).parents('.df-cartproduct__col').find('.df-sliderimages').html();
                        
                        mystr=""; 
                                                   
                        $(thisel).filter('img').each(function(e) {
                         
                            var newsrc =  $(this).attr('src');  
                            var newsrc2 =  $(this).attr('data-bigimg');                     
                
                            mystr = mystr + '<div class="item"><div class="df-cartproduct__prod df-cartproduct__prod_view"><img src="'+ newsrc + '" data-bigimg="'+ newsrc2 + '"></div></div>';

                            $('#df-owl3').html(mystr); 
  
                        }); 
                            
                            

                            $owlitem3.html($owlitem3.find('.owl-stage-outer').html()).removeClass('owl-loaded');
                            $owlitem3.owlCarousel({
                                // your initial option here, again.
                                loop:true,
                                nav:true, 
                                autoplay:false,
                                smartSpeed:1000,
                                margin:0,    
                                navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
                                responsive:{
                                  0:{
                                      items:1
                                  },
                                  410:{
                                     items: 2   
                                  },        
                                  700:{
                                      items:3
                                  },
                                  1000:{
                                      items:4
                                  }
                              }

                          });
                           // var aTag = $("a[name='model']");
                           // $('html,body').animate({scrollTop: aTag.offset().top-50}, 200);

                     }); 
         
                    $('.dfopen3 a:first').click();
////////////////////////////////////////////////             

    });

 
$('.df-cartproduct__right_view a').click(function(index,item){    

    $(".df-cartproduct__right_view a").each(function(){
        if ($(".df-cartproduct__right_view a").hasClass("df-active")) {
            $(".df-cartproduct__right_view a").removeClass("df-active");           
        }
    });
    $(this).addClass("df-active");

});

var $set = $('.df-cartproduct__right_view a');
    $('.df-cartproduct__right_view').on('click', 'a', function () {
        var n=$set.index(this);    
       $('.colornumber').val(n+1);
    });


    $('.burg').click(function(){        
        $('.db-container-div').slideToggle();
    });

    $('.df-cartproduct__prod_view a').click(function(e){
        e.preventDefault();
    });


  var owl3 = $(".df-treners-slider");
  owl3.owlCarousel({
    loop:true,
    nav:true, 
    autoplay:false,
    smartSpeed:1000,
    margin:0,    
    navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
    responsive:{
        0:{
          items:2
      },       
      1000:{
          items:4
      },
      1248:{
          items:6
      }
  }
});


$(".dfopen1 a").click(function() {
    $('html, body').animate({
        scrollTop: $(".dfimge1").offset().top - 170
    }, 500);
});
$(".dfopen2 a").click(function() {
    $('html, body').animate({
        scrollTop: $(".dfimge2").offset().top - 170
    }, 500);
});
$(".dfopen3 a").click(function() {
    $('html, body').animate({
        scrollTop: $(".dfimge3").offset().top - 170
    }, 500);
});  


$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});


$('.scrollToTop').click(function(){
   $('html, body').animate({scrollTop : 0},100);
   return false;
});

$('.db-container__menu li a[href^="#"]').click(function(){ 
  var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
  if($element.length == 1) { 
    $('html, body').animate({
        scrollTop: $element.offset().top - 50 
    }, 300); 
}     
return false;
});


});






function navigation_scroll(){
    var offset = $('.header-top').height() || $(window).height() || 150;
    var scroll = $(document).scrollTop();

    if (scroll < 50) {
        $('.header-top')
        .toggleClass('header-top', false)
        .toggleClass('header-fixed', false);
    }     
    else if (scroll >= offset) {
        $('.header-top')
        .toggleClass('header-top', false)
        .toggleClass('header-fixed', true);

    }
    else if (scroll < offset - 50) {
        $('.header-top')
        .toggleClass('header-fixed', true)
        .toggleClass('header-top', false);

    }
}


$(document).scroll(function(){
    navigation_scroll();
});
