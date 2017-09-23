$(document).scroll(function ()
    {

        if ($(document).scrollTop() > 26)
        {
            $('.navbar').css('opacity','0.8');
            $('.navbar').css('-webkit-animation-name','navbar')
            $('.navbar').css('height','35px');
            $('.icon_coindb').css('-webkit-animation-name','CoinDBicon')
            $('.icon_coindb').css('height','25px');
            $('.navbar_a').css('-webkit-animation-name','icon')
            $('.navbar_a').css('top','1px');
            $('.navbar_a').css('font-size','0px');
        }
        else if ($(document).scrollTop() < 26)
        {
            $('.navbar').css('opacity','1');
            $('.navbar').css('-webkit-animation-name','navbar_back')
            $('.navbar').css('height','60px');
            $('.icon_coindb').css('-webkit-animation-name','CoinDBicon_back')
            $('.icon_coindb').css('height','50px');
            $('.navbar_a').css('-webkit-animation-name','icon_back')
            $('.navbar_a').css('top','20px');
            $('.navbar_a').css('font-size','20px');
        }
      }
    );

    $(document).ready(function()
    {
          f=0;

        $(".tutorial_navigation_button").click(function()
          {
            f++;

            if(f%2 == 0)
            {
              $(".tutorial_navigation").animate(
                {
                  height: "1px"
                }, 1000, "swing"
              );
              setTimeout(function()
                {
                  $(".tutorial_navigation").css("display","none");
                },1000
              );
            }
            else
            {
              $(".tutorial_navigation").css("display","block");
              $(".tutorial_navigation").animate(
                {
                  height: "100%"
                }, 1000, "swing"
              );
            }
          }
        );
    });
