$(document).ready(function() {

	$('form').submit(function(event){
		
		$('#name' + '.throw_error').empty();
		$('#comment' + '.throw_error').empty();
		$('#success').empty();
		
		var postForm = {
			'name': $('#name').val(),
			'comments': $('#comment').val()
		};
	
	$.ajax({
		type: 'POST',
		url: 'post.php',
		data: postForm,
		dataType: 'json',
		success: function(data) {
			console.log(data);
			if(!data.success){
				if(data.errors.name){
					console.log(data.errors.name);
					//$('#name + .throw_error').fadeIn(1000).html(data.errors.name);
					
					$('#name_error').fadeIn(1000).removeClass('d-none').html(data.errors.name).fadeOut(2000);
				}
				if(data.errors.comments){
					console.log(data.errors.comments);
					//$('#comment + .throw_error').fadeIn(1000).html(data.errors.comments);
					$('#comment_error').fadeIn(1000).removeClass('d-none').html(data.errors.comments).fadeOut(2000);
				}
			}else{
				$('#name').val('');
				$('#comment').val('');
				checkdatabase();
				$('#success').fadeIn(1000).removeClass('d-none').append('<p>'+data.posted+'</p>');
				$('#success').fadeOut(3000);
			}
		}
	});
	
		event.preventDefault();
		
	});

function checkdatabase(){
	//Empty the output area
	$('#output').empty(); 
	
	// Make the request for data
	$.ajax({
		url: 'data.php',
		dataType: 'json',
		cache:false,
		success: function(data) {
			
			var i = 0;
			
			$.each(data, function(index){
				i++;
				console.log(data[index]);
				$('#output').append("<li class='list-group-item new'>" + i + ". <span class='badge badge-primary'>Name:&nbsp;</span>&nbsp;"+data[index].username + "&nbsp;&nbsp;<span class='badge badge-success'>Comment:&nbsp;</span>&nbsp;"+data[index].comment + "</li>");
			});
			
			return data;
		}
		
	});
}

checkdatabase();


});
