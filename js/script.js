$(document).ready(function(){
  // Размер шрифта
  $(".lv-fonts-1").click(function(){
      $('.some-text').css('font-size', '100%');
  });
  $(".lv-fonts-2").click(function(){
      $('.some-text').css('font-size', '130%');
  });
  $(".lv-fonts-3").click(function(){
      $('.some-text').css('font-size', '170%');
  });
  
  // Межбуквенный интервал
  $(".lv-intervals-1").click(function(){
      $('.some-text').css('letter-spacing', '0px');
  });
  $(".lv-intervals-2").click(function(){
      $('.some-text').css('letter-spacing', '2.4px');
  });
  $(".lv-intervals-3").click(function(){
      $('.some-text').css('letter-spacing', '4.8px');
  });
  
  // Цвет фона, текста
  $(".lv-colors-1").click(function(){
      $('.some-text').css('background', 'white');
      $('.some-text').css('color', '#333');
  });
  $(".lv-colors-2").click(function(){
      $('.some-text').css('background', '#212121');
      $('.some-text').css('color', 'white');
  });
  $(".lv-colors-3").click(function(){
      $('.some-text').css('background', '#9fd2fd');
      $('.some-text').css('color', '#333399');
  });
  
  // Кнопка "Сброс" 
   
  $('.icon-lw').click(function() {
      $('.lv-undo').css('display', 'inline');
  });
   $('.lv-undo').click(function() {
      location.reload();
  });
  
});