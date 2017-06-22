$(document).ready(function(){
	   var $form = $('form');
	   $form.submit(function(){
	      $.post($(this).attr('action'), $(this).serialize(), function(response){
	            $.alert("Success");
	      },'json');
	      return false;
	   });
	});