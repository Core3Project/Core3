$(function(){
		$("p.notice span").click(function() {  // Whenever someone clicks the litte X on the notice message do the following
			$('p.notice').slideUp('slow');     // Fade out the whole paragraph
			$('p.notice span').hide('fast');   // And hide the X 
		});
		$("p.info span").click(function() {
			$('p.info').slideUp('slow');
			$('p.info span').hide('fast');
		});
		$("p.success span").click(function() {
			$('p.success').slideUp('slow');
			$('p.success span').hide('fast');
		});
		$("p.error span").click(function() {
			$('p.error').slideUp('slow');
			$('p.error span').hide('fast');
		});
		$("p.todoitem a.close").click(function() { // Whenever someone clicks on a the X in a To-do item do this:
			$(this).hide('fast');				   // Hide the X - FAST!
			$(this).parent().slideUp('slow');      // Slide Up the to-do item.
		});	
});