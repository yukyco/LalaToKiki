$(function () {
  $('#big').attr('src', $('#list img:first').attr('src'));
  $('#list img').click(function () {
	  var img=$(this);    
			    $('#big')
			    .hide(1000, function (){
				    $(this).attr('src', img.attr('src'));
			    })
			    .show(2000);
      });
   });