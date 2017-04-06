$(document).ready(function(){

  $("input[name='Email']", "#Registo").blur(function(){
    var sel = $(this);
    var email = sel.val();


    if (!AvaliaEmail(email, sel))
      return;


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

    var quality = 0;
    var text = "Password Inválida";


      if (size>=7){
        quality = 2;
        text = "Password Fraca";


        if (nCaps >= 1 && nLow >= 1 && nNums >= 1){
          quality = 3;
          text = "Password Razoavel";


          if(size >=10 && nNums >= 2 && nCaps >= 2){
            quality = 4;
            text = "Password Boa";

            }
        }
      }
    $("#QualidadePassword").text(text);
    AvaliaPassword();
	});



  $("input[name=ConfirmarPalavraChave]", "#Registo").keypress(function(e)
	{
    AvaliaPassword();
  });



});

//input: string do email, elemento do input do email (para mudar a cor)
//output: false -> se email nao valido, true -> se email valido
function AvaliaEmail(email, sel){
  var spl = email.split("@");
  if (spl[0]== "" || spl[1] == "" || spl.length < 2  ){
    sel.css("border-color","red");
    return false;

  }
  return true;

}

function AvaliaPassword(){
  var pass1 = $("input[name=ConfirmarPalavraChave]", "#Registo").val()+String.fromCharCode(e.keyCode || e.which);
  var pass2 = $("input[name=PalavraChave]", "#Registo").val();

  if (pass1 == pass2)
    $("input[name=ConfirmarPalavraChave]", "#Registo").css("border-color", "green");
  else
    $("input[name=ConfirmarPalavraChave]", "#Registo").css("border-color", "red");
}

function ContNums(str){
  return str.replace(/[^0-9]/g,"").length;
}
function ContCaps(str){
  return str.replace(/[^A-Z]/g,"").length;
}
function ContLow(str){
  return str.replace(/[^a-z]/g,"").length;
}
