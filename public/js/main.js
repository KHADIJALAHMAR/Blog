$(function() {
     // blur event
  $(".email").on("blur", function() {
     // Check If The Input Value Is Less Than 10 Carracter
     if ($(this).val().length < 10) {
          // If So Change Border To Red Color
         $(this).css("border", "1px solid #F00");
          // And Show The Error Message
          $(this).parent().find(".custom-alert").fadeIn(200);
     } else {
          // If Not Change Border To Green Color
         $(this).css("border", "1px solid #080");
          // And Hide The Error Message
         $(this).parent().find(".custom-alert").fadeOut(200);
     }
  });

  $(".password").on("blur", function() {
    // Check If The Input Value Is Less Than 10 Carracter
    if ($(this).val().length < 5) {
         // If So Change Border To Red Color
        $(this).css("border", "1px solid #F00");
         // And Show The Error Message
         $(this).parent().find(".custom-alert").fadeIn(200);
    } else {
         // If Not Change Border To Green Color
        $(this).css("border", "1px solid #080");
         // And Hide The Error Message
        $(this).parent().find(".custom-alert").fadeOut(200);
    }
 });
  
});

