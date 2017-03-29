$(document).ready(function(){
  $("input[name='EmailRegisto']").blur(function(){

    var email = $("input[name='EmailRegisto']").val();

      $.get("index.php/PaginaInicial/ValidarEmail?email="+email, function(data,status){
        var arr = $.parseJSON(data);
console.log(arr);
        if(arr == 0){//pode registar
          $("input[name='EmailRegisto']").css("border-color","green");
        }else{//nao pode registar
          $("input[name='EmailRegisto']").css("border-color","red");
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
