$(document).ready(function()
{
  $("#button_generalstats").click(function()
  {
    $("#div_singlestats").css("display","none");
    $("#div_generalstats").css("display","block");
  });

  $("#button_singlestats").click(function()
  {
    $("#div_singlestats").css("display","block");
    $("#div_generalstats").css("display","none");
  });
});
