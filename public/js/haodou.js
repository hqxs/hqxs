var style = {backgroundColor:'#6a9700',color:'#fff'};
$('#category_nav a').first().css(style);
$('#category_nav a').click(function (){
	var style_two = {backgroundColor:'#fff',color:'#333'};
	$('#category_nav a').css(style_two);
	$(this).css(style);
})


