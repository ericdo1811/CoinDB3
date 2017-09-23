$(document).ready(function ()
    {
              i=0;
      $('.td_entry').on('click', function()
      {
        i++;
        distance_bottom = $(this).offset().top;
        distance_left = $(this).offset().left;
        left  = $(this).position().left;
        this_object = $(this);
        id = this_object.attr("id");
        tr_id = this_object.parent().attr("id");
        tr = this_object.parent();

        console.log(tr_id);
        $(this).clone(true).addClass("td_entry").attr('id','2'+id).appendTo(tr);
        // $('#2'+id).css("position","absolute");
        $('#2'+id).css("opacity","0");
        $(this).animate(
          {
            right:distance_left - 35,
            bottom:distance_bottom - 90
          });
          setTimeout(function()
            {
              console.log(distance_left);
              // this_object.css("position","absolute");
            },500);

              setTimeout(function()
                {
                  this_object.css("display","none");
                  $(".dashboard_zoomin_theme_container").css("display","block");
                  $(".dashboard_zoomin_theme").css("display","block");
                  $(".dashboard_zoomin_text").css("display","block");
                  $(".dashboard_closebutton").css("display","block");
                },500);
      });

      $('.dashboard_closebutton').click(function ()
      {
        $(".dashboard_zoomin_theme_container").css("display","none");
        $(".dashboard_zoomin_theme").css("display","none");
        $(".dashboard_zoomin_text").css("display","none");
        $(".dashboard_closebutton").css("display","none");

        $("#"+id).remove();
         $("#2"+id).attr("id",id);
        $("#"+id).addClass("td_dashboard");
        $("#"+id).css("opacity","1");
      });
    });
