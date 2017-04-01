$(document).ready(function(){

  $("input[name='Email']", "#Registo").blur(function(){
    var sel = $(this);
    var email = sel.val();

      $.get("index.php/PaginaInicial/ValidarEmail?email="+email, function(data,status){
        var arr = $.parseJSON(data);
        if(arr == 0){//pode registar
          sel.css("border-color","green");
        }else{//nao pode registar
          sel.css("border-color","red");
        }
      })

  });

	$("input[name=PalavraChave]", "#Registo").keypress(function(e)
	{
		var str = $(this).val()+String.fromCharCode(e.keyCode || e.which);

		var size= str.length;

    var nNums = ContNums(str);
    var nCaps = ContCaps(str);
    var nLow = ContLow(str);

    console.log(nNums);
    console.log(nCaps);
    console.log(nLow);



    // if(size>6)
		// {
		// 	alert("Password Curta de mais");
		// }
	});
});


function ContNums(str){
  return str.replace(/[^0-9]/g,"").length;
}
function ContCaps(str){
  return str.replace(/[^A-Z]/g,"").length;
}
function ContLow(str){
  return str.replace(/[^a-z]/g,"").length;
}
