var howOften = 3;
var current = 1;
var current2 = 1;
var current3 = 1;

function show_desc(val){
	$('.hide-it').hide();
	$('#'+val+' .hide-it').show();
	$('.work-img').removeClass('hover');
	$('#' + val.replace('desc_','') + ' .work-img').addClass('hover');
}

function rotater() {
	var pos = (current-1)*((current-1!=0)?$('#acad_slider_'+(current-1)).width():0);
	var pos2 = (current2-1)*((current2-1!=0)?$('#proj_slider_'+(current2-1)).width():0);
	var pos3 = (current3-1)*((current3-1!=0)?$('#work_slider_'+(current3-1)).width():0);

	$('#acad_list').animate({marginLeft:(-1)*pos});
	$('#proj_list').animate({marginLeft:(-1)*pos2});
//	$('#work_list').animate({marginLeft:(-1)*pos3});

	current = (current==$('#acad_list').attr('count')) ? 1 : current + 1; //increment or reset
	current2 = (current2==$('#proj_list').attr('count')) ? 1 : current2 + 1; //increment or reset
	current3 = (current3==$('#work_list').attr('count')) ? 1 : current3 + 1; //increment or reset

	setTimeout("rotater()",howOften*1000);
}
