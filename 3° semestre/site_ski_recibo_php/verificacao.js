 //retornando o dia e o ano atual
 var dNow = new Date();
 var localdate = "Jundiai, " + dNow.getDate() + " de Setembro de " + dNow.getFullYear();
 
 var tempo = dNow;
 var localdate2 = new Date();
 localdate2.setDate(tempo.getDate() + 7); // Adiciona 7 dias
 
 var texto = localdate2.getDate() + " de Setembro de " + dNow.getFullYear();
 
 document.getElementById("localdate").value=localdate; 
 document.getElementById("localdate2").value=texto;
 // altera o valor de "value" que está nulo para o valor "localdate" após o form ser carregado, por isso o js no final do codigo
 
 
