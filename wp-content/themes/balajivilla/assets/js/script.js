jQuery(document).ready(function(){
    jQuery('.slider').bxSlider({
     pager: false
    });
  
});

jQuery(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				jQuery(".group1").colorbox({rel:'group1'});

            });
            
            
              jQuery(document).ready(function() {
                jQuery('.owl-carousel').owlCarousel({
                  loop: true,
                  margin: 10,
                  responsiveClass: true,
                  responsive: {
                    0: {
                      items: 1,
                      nav: true,
                      margin: 50
                       
                    },
                    600: {
                      items: 3,
                      nav: false,
                      margin: 20
                    },
                    1000: {
                      items: 4,
                      nav: true,
                      loop: false,
                      margin: 20
                    },
                    1900: {
                      items: 5,
                      nav: true,
                      loop: false,
                      margin: 20
                    }
                  }
                })
              })

            function playPause(btn, vid){
                var vid = document.getElementById(vid);
        
                if(vid.paused){
                  vid.play();
                  btn.innerHTML = '<i class="fa fa-pause-circle"></i>';
                }else{
                  vid.pause();
                  btn.innerHTML = '<i class="fa fa-play-circle"></i>';
                }
              }
             
              
              



             
               

                
     
     