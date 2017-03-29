$(document).ready(function(){
  $('input[name=Email]').blur(function(){
    var email = $('input[name=Email]').val();
      $.get("index.php/PaginaInicial/ValidarEmail?email="+email, function(data,status){
        var arr = $.parseJSON(data);


        console.log(arr);
        if(arr.lenght == 1){//pode registar
                alert("1");
        }else{//nao pode registar
              alert("2");
        }
      })

  });

	$("input[name=PalavraChave]").keypress(function()
	{
		var value = $("input[name=PalavraChave]").val;

		var size=value.lenght;
console.log(size);
		if(size>6)
		{
			alert("Password Curta de mais");
		}
	});
});


function ContNums(){
  //alert(email);


}
