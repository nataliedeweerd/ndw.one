jQuery(function($) {
	
	var name = getUrlVars()['name'];
	
	
	if(typeof name == "undefined"){
		name = "NATALIE";
	} else {
		name = name.replace(/%20/g, " ");
	}
	
	$('#name').val(name);
		
    $('#png').attr('src','https://ndw.one/playground/dynamic-php-images/png/main-png.php?name='+name);
	$('#gif').attr('src','https://ndw.one/playground/dynamic-php-images/gif/gif.php?name='+name);
	/*$('#jpg').attr('src','https://ndw.one/playground/dynamic-php-images/jpg/main-jpg.php?name='+name);
	$('#png2').attr('src','https://ndw.one/playground/dynamic-php-images/png2/main-png.php?name='+name);*/
	
	$('#name').bind('keypress', function(e) {
		if(e.keyCode==13){
			$('button').trigger("click");
		}
	});
	
	$('button').click(function(){
		var inputName = $('#name').val();
		window.location.href = "https://ndw.one/playground/dynamic-php-images/?name="+inputName;
	});
	
});

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}