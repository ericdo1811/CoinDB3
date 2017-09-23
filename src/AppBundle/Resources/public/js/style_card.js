$(document).ready(function()
{
    $(".more").click(function()
    {
        id = $(this).attr("id");
        this_id = $("#" + id).parent().parent().parent().parent().attr("id");


          $("#" + this_id + "> .card").addClass('flipped');
          $("#" + this_id + "> .card > .font").css("z-index",0);
          $("#" + this_id + "> .card > .font").css("display","none");
          $("#" + this_id + "> .card > .back").css("z-index",1);
          $("#" + this_id + "> .card > .back").css('display', 'block');
          $("#" + this_id + "> .card").addClass('noanimation');

  });
    $(".closebutton").click(function()
    {
      $("#" + this_id + "> .card").removeClass('flipped');
      $("#" + this_id + "> .card > .font").css('display', 'block');
      $("#" + this_id + "> .card > .font").css("z-index",1);
      $("#" + this_id + "> .card > .back").css("z-index",0);
      $("#" + this_id + "> .card").removeClass("noanimation");
      setTimeout(function()
      {
        $("#" + this_id + "> .card > .back").css('display', 'none');
      }, 300);
    });

  $(".edit").click(function()
  {
    id = $(this).attr("id");
    i = id.toString().replace("edit","");
    this_id = $("#" + id).parent().parent().parent().parent().attr("id");
    card_distance = $("#" + this_id + "> .card").offset().left;

    $("#" + this_id + "> .card").addClass("noanimation");
    if(card_distance < 700)
    {
      $("#" + this_id + "> .card").addClass('card_zoomin_left');
    }
    else
    {
      $("#" + this_id + "> .card").addClass('card_zoomin_right');
    }
    $("#container" + i).css("z-index","4");
    $("#" + this_id + "> .card > .font").css('display', 'none');
    setTimeout(function()
  {
    $("#" + this_id + "> .card > .card_zoomin_content").css('display', 'block');
  }, 500);
  });

  $(".delete").click(function()
  {
    id = $(this).attr("id");
    this_id = $("#" + id).parent().parent().parent().parent().attr("id");

    $("#" + this_id + "> .card").addClass('card_delete');
    setTimeout(function()
    {
      $("#" + this_id + "> .card").remove();
    },500);
  });

  $(".close_zoomin").click(function()
  {
    if(card_distance >700)
    {
      $("#" + this_id + "> .card").css('right',0);
    }

    $("#" + this_id + "> .card").removeClass('card_zoomin_right');
    $("#" + this_id + "> .card").removeClass('card_zoomin_left');
    $("#" + this_id + "> .card").removeClass('noanimation');
    $("#container" + i).css("z-index","1");
    $("#" + this_id + "> .card > .card_zoomin_content").css('display', 'none');
    setTimeout(function()
    {
      $("#" + this_id + "> .card > .font").css('display', 'block');;
    },500);
  });

  $(".text_edit").click(function()
  {
    $(this).css('padding-left', '20px !important;');
    $(this).parent().siblings().removeClass('text_edit_unclick');
    $(this).parent().siblings().addClass('text_edit_click');
  });

  $(".text_edit").blur(function()
  {
    $(this).parent().siblings().addClass('text_edit_unclick');
    $(this).parent().siblings().removeClass('text_edit_click');
  });

  $(".page").click(function()
  {
    this_page_id = $(this).attr("id");

    console.log(this_page_id);
    $(".page").removeClass("click_page");
    $("#" + this_page_id).addClass("click_page");
  });

  $("#previous").click(function()
  {
    $(".page").removeClass("click_page");

    new_id = parseInt(this_page_id) - 1;
    this_page_id = new_id;
    console.log(new_id);
    $("#" + new_id).addClass("click_page");
  });

  $("#next").click(function()
  {
    $(".page").removeClass("click_page");

    new_id = parseInt(this_page_id) + 1;
    this_page_id = new_id;
    console.log(new_id);
    $("#" + new_id).addClass("click_page");
  });

  $(".button_create").click(function()
  {
    $(".card_create").css("opacity","1");
    $(".card_create").css("z-index",3);
    $(".card_create").addClass("card_zoomin_left");
    setTimeout(function()
    {
      $(".zoomin_create").css("display","block");
    },500);
  });

  $(".close_zoomin_create").click(function()
  {
    $(".zoomin_create").css("display","none");
    $(".card_create").removeClass("card_zoomin_left");
    $(".card_create").css("opacity",0);
    setTimeout(function()
    {
      $(".card_create").css("z-index",0);
    },500);
  });
});
