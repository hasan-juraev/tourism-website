$(document).ready(function(){
  
    $('.shortDescription').each(function (f) {
  
        var newstr = $(this).text().substring(0,130);
        $(this).text(newstr);
  
      });
  })