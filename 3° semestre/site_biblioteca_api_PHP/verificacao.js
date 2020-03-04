//retornando o dia e o ano atual
var dNow = new Date();
var localdate = "Jundiai, " + dNow.getDate() + " de Setembro de " + dNow.getFullYear();

var tempo = dNow;
var localdate2 = new Date();
localdate2.setDate(tempo.getDate() + 7); // Adiciona 7 dias

var texto = localdate2.getDate() + " de Setembro de " + dNow.getFullYear();

document.getElementById("localdate").value = localdate;
document.getElementById("localdate2").value = texto;
// altera o valor de "value" que está nulo para o valor "localdate" após o form ser carregado, por isso o js no final do codigo

function save() {
    alert("Recibo efetuado com sucesso!");
}
function validar() {
    
    var count = 0;

    var nome = document.getElementById('nome').value;

    var pagamento = 0;
    // validando radio buton pagamento
    if(document.getElementById('pagamento1').checked == true)   {             
        pagamento++; 
    }
    if(document.getElementById('pagamento2').checked == true)   {             
        pagamento++; 
    }
    if(document.getElementById('pagamento3').checked == true)   {             
        pagamento++; 
    }

    // validando checjbox lista de produtos
    if(document.getElementById('checkbox1').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox2').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox3').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox4').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox5').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox6').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox7').checked == true)   {             
        count++; 
    }
    if(document.getElementById('checkbox8').checked == true)   {             
        count++; 
    }

    // validação final
    if (!nome){
        alert("Digite o seu nome");
        return false;
    } else{
        if (pagamento == 0){
            alert("Escolha uma forma de pagamento");
            return false;
        } else{
            if(count == 0){
                alert("Escolha um produto da lista");
                return false;
            }
            else{
                save();
            }
        }
    }
}

/* formatando o numero do carrinho em Js */
numeral.defaultFormat('$0,0.00');
// load a locale
numeral.register('locale', 'pt-br', {
delimiters: {
    thousands: '.',
    decimal: ','
},
abbreviations: {
    thousand: 'k',
    million: 'm',
    billion: 'b',
    trillion: 't'
},
ordinal : function (number) {
    return number === 1 ? 'er' : 'ème';
},
currency: {
    symbol: 'R$'
}
});
// switch between locales
numeral.locale('pt-br');

function calcularC(){

    var valor = 0;

    if(document.getElementById('checkbox1').checked == true)   {             
        valor += 170;
    }
    if(document.getElementById('checkbox2').checked == true)   {             
        valor += 350;
    }
    if(document.getElementById('checkbox3').checked == true)   {             
        valor += 80;
    }
    if(document.getElementById('checkbox4').checked == true)   {             
        valor += 40;
    }
    if(document.getElementById('checkbox5').checked == true)   {             
        valor += 42;
    }
    if(document.getElementById('checkbox6').checked == true)   {             
        valor += 100;
    }
    if(document.getElementById('checkbox7').checked == true)   {             
        valor += 51;
    }
    if(document.getElementById('checkbox8').checked == true)   {             
        valor += 400;
    }
    // var myNumeral = numeral(valor).format('0,0.0');

    valor = numeral(valor).format('$0,0.00');
        
    document.getElementById('compra').value = valor;
    
}

