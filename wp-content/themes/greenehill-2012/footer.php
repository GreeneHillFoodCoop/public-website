<div id="subfooter"><div class="content">
<?php wp_nav_menu(array( ));?> 


<div class="clear"></div>

</div></div>


<div id="footer"><div class="content"><div align="center"><a href="#top"> -- BACK TO TOP</a> | <a href="http://www.greenehillfood.coop/wp-admin/" target="_blank">ADMIN LOGIN</a></div></div></div>
<?php wp_footer(); ?>

<script type="text/javascript">
 /*
 
 Lucas Monaco 
 8/18/14
 For use on the FAQ Page
 
 Will break if page ID is changed!

 */

 var FaqMaker = {
	pageID: '#post-179',
	add : function(){
		c = 0;
		list = '';
		$(this.pageID).find('h2').each(function(){ 
			$(this).after('<a id="' + c + '"></a>');
			list += '<li><a href="#' + c + '" title="'+ $(this).html() +'">'+ $(this).html() +'</a></li>';
			c++;
		});
		$('h1').after(list);
	} 
}

$(function() {
	if($('body').hasClass('page-id-179')){
		if(FaqMaker){ FaqMaker.add(); }
	}else{
		//console.log('Wrong Page. Done ');		
	}
}());
 
</script>

</body>
</html>