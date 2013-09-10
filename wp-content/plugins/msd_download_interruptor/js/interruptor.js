jQuery(document).ready(function($) {	
	var df = $('.download-form_wrapper');
	var inlineId = df.attr('id');
	$('a.download').addClass('thickbox').each(function(){
		var file = $(this).attr('href');
		$(this).attr('rel',file);
		$(this).attr('pdfurl',file);
		df.find('#input_2_8').val(file);
		df.find('#input_3_8').val(file);
	});
	$('a.download').click(function(){
		$(this).attr('href','#TB_inline?height=300&amp;width=400&amp;inlineId='+inlineId);
	});
	jQuery(document).bind('gform_confirmation_loaded', function(event, form_id){
		self.parent.tb_remove();
	});
});



jQuery(document).ready(function($) {
	// inline labels for form text fields.
	$('.entry-content #gform_wrapper_2 form input[type="text"],.entry-content #gform_wrapper_2 form textarea,.entry-content #gform_wrapper_3 form input[type="text"],.entry-content #gform_wrapper_3 form textarea').attr('placeholder',function(index,value){
		var ret = '';
		$(this).siblings('label').css('display','none');
		$(this).parents().siblings('label').css('display','none');
		if($(this).siblings('label').html()){
			ret = $(this).siblings('label').html().toLowerCase();
		}
		if(ret!=''){
			ret = ret + ' ';
		} 
		if($(this).parents().siblings('label').html()){
			ret = ret + $(this).parents().siblings('label').html().toLowerCase();
		}
		ret = ret.replace(/<(?:.|\n)*?>/gm, '');
		return ret;
	});
});