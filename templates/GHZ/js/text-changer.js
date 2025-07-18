$(document).ready(function() {
  var pos = 0, a = 0;
  var html = "";

  function displayText() {
      if (pos >= animatedTextHeader.length) pos = 0;
      console.log(pos);
      console.log(animatedTextHeader[pos].length);
      if (a < animatedTextHeader[pos].length) {
          html += animatedTextHeader[pos].charAt(a);
          $(".text-change").html(html);
          a++;
      } else {
          a = 0;
          pos++;
          html = "";
      }
  }

  setInterval(displayText, 200); 
});