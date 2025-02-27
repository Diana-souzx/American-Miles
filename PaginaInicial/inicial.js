document.getElementById('perfil').addEventListener('click',function(){
    window.location.href = '../usuário/usuario.html';
});

//anuncios

document.getElementById('natura').addEventListener('click',function(){
    window.location.href = 'https://www.natura.com.br/?msockid=19b3e40b2bde6dee17fdf1792a256c11';
});

document.getElementById('eudora').addEventListener('click',function(){
    window.location.href = 'https://www.eudora.com.br/?gclid=72289a614bc1101fdec9fdf8083d7a19&gclsrc=3p.ds&msclkid=72289a614bc1101fdec9fdf8083d7a19&utm_source=bing&utm_medium=cpc&utm_campaign=%5Be-com%5D%20%5BPerformance%5D%20%5BInstitucional%5D%20-%20PSQ%20Eudora%20%5BE%5D&utm_term=eudora&utm_content=%5BTexto%5D%20Eudora%20-%20Brand%20-%20Puro%20-%20%20%5BE%5D';
});

document.getElementById('jequiti').addEventListener('click',function(){
    window.location.href = 'https://www.jequiti.com.br/?utm_source=mais&utm_medium=maisplataforma&utm_campaign=ederwagner&msclkid=600efe308cec1987d9b799941b0b0938';
});

//passagens


    document.addEventListener('DOMContentLoaded', function() { 
        const carrinhoBotao = document.getElementById('carrinho'); 
        const janelaCar = document.getElementById('janelaCar'); 
        const fecharCarrinho = document.getElementById('fecharCarrinho'); 
        const carrinhoContainer = document.getElementById("itens-carrinho"); 
    
        carrinhoBotao.addEventListener('click', function() { 
            janelaCar.classList.toggle('open'); 
        });
    
        fecharCarrinho.addEventListener('click', function() {
            janelaCar.classList.remove('open'); 
        });
    
        function atualizarCarrinho() {
            carrinhoContainer.innerHTML = ""; 
    
            carrinho.forEach(item => {
                const li = document.createElement("li");
                li.innerHTML = `
                    <strong>País:</strong> ${item.nomePais}   
                    <strong>Tipo:</strong> ${item.tipoPassagem} <br>
                    <strong>Valor:</strong> R$ ${item.preçoTotal.toFixed(2)} 
                    <strong>Data:</strong> ${item.dataIda} <br>
                    <strong>Quantidade de Dias:</strong> ${item.qtdDias} <br>
                    <strong>Nome do Hotel:</strong> ${item.nomeHotel} <br>
                `;
                carrinhoContainer.appendChild(li);
            });
        }
    
        if (carrinho.length > 0) {
            atualizarCarrinho();
        }
    
        const botoesComprar = document.querySelectorAll(".buttoncompra");
        botoesComprar.forEach(botao => {
            botao.addEventListener("click", function() {
                const destino = this.getAttribute("data-nome_pais");
                const valor = parseFloat(this.getAttribute("data-preçoTotal"));
                const tipoPassagem = this.getAttribute("data-tipo_passagem");
                const dataIda = this.getAttribute("data-dataIda");
                const qtdDias = parseInt(this.getAttribute("data-qtdDias"));
                const nomeHotel = this.getAttribute("data-nome_hotel");
    
                const item = {
                    nomePais: destino,
                    tipoPassagem: tipoPassagem,
                    preçoTotal: valor,
                    dataIda: dataIda,
                    qtdDias: qtdDias,
                    nomeHotel: nomeHotel
                };
    
                carrinho.push(item);
    
                atualizarCarrinho();
            });
        });
    
    });
    





document.getElementById('botaoFinalizar').addEventListener('click',function(){
    window.location.href = '../Pagamento/pagamento.html';
});

document.addEventListener('DOMContentLoaded', function() { 
    const botao1 = document.getElementById('botao1'); 
    const sobrenos = document.getElementById('sobrenos');
    const fecharsobre= document.getElementById('fecharsobre');
    
    botao1.addEventListener('click', function() { 
        sobrenos.classList.toggle('open');
    });

    fecharsobre.addEventListener('click', function(){
        sobrenos.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição = document.getElementById('descrição'); 
    const pais = document.getElementById('pais');
    const fechardesc= document.getElementById('fechardesc');
    
    descrição.addEventListener('click', function() { 
        pais.classList.toggle('open');
    });

    fechardesc.addEventListener('click', function(){
        pais.classList.remove('open');
        
    });

});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição1 = document.getElementById('descrição1'); 
    const pais1 = document.getElementById('pais1');
    const fechardesc1= document.getElementById('fechardesc1');
    
    descrição1.addEventListener('click', function() { 
        pais1.classList.toggle('open');
    });

    fechardesc1.addEventListener('click', function(){
        pais1.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição2 = document.getElementById('descrição2'); 
    const pais2 = document.getElementById('pais2');
    const fechardesc2= document.getElementById('fechardesc2');
    
    descrição2.addEventListener('click', function() { 
        pais2.classList.toggle('open');
    });

    fechardesc2.addEventListener('click', function(){
        pais2.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição3 = document.getElementById('descrição3'); 
    const pais3 = document.getElementById('pais3');
    const fechardesc3= document.getElementById('fechardesc3');
    
    descrição3.addEventListener('click', function() { 
        pais3.classList.toggle('open');
    });

    fechardesc3.addEventListener('click', function(){
        pais3.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição4 = document.getElementById('descrição4'); 
    const pais4 = document.getElementById('pais4');
    const fechardesc4= document.getElementById('fechardesc4');
    
    descrição4.addEventListener('click', function() { 
        pais4.classList.toggle('open');
    });

    fechardesc4.addEventListener('click', function(){
        pais4.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição5 = document.getElementById('descrição5'); 
    const pais5 = document.getElementById('pais5');
    const fechardesc5= document.getElementById('fechardesc5');
    
    descrição5.addEventListener('click', function() { 
        pais5.classList.toggle('open');
    });

    fechardesc5.addEventListener('click', function(){
        pais5.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição6 = document.getElementById('descrição6'); 
    const pais6 = document.getElementById('pais6');
    const fechardesc6= document.getElementById('fechardesc6');
    
    descrição6.addEventListener('click', function() { 
        pais6.classList.toggle('open');
    });

    fechardesc6.addEventListener('click', function(){
        pais6.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição7 = document.getElementById('descrição7'); 
    const pais7 = document.getElementById('pais7');
    const fechardesc7= document.getElementById('fechardesc7');
    
    descrição7.addEventListener('click', function() { 
        pais7.classList.toggle('open');
    });

    fechardesc7.addEventListener('click', function(){
        pais7.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição8 = document.getElementById('descrição8'); 
    const pais8 = document.getElementById('pais8');
    const fechardesc8= document.getElementById('fechardesc8');
    
    descrição8.addEventListener('click', function() { 
        pais8.classList.toggle('open');
    });

    fechardesc8.addEventListener('click', function(){
        pais8.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição9 = document.getElementById('descrição9'); 
    const pais9 = document.getElementById('pais9');
    const fechardesc9= document.getElementById('fechardesc9');
    
    descrição9.addEventListener('click', function() { 
        pais9.classList.toggle('open');
    });

    fechardesc9.addEventListener('click', function(){
        pais9.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição10 = document.getElementById('descrição10'); 
    const pais10 = document.getElementById('pais10');
    const fechardesc10= document.getElementById('fechardesc10');
    
    descrição10.addEventListener('click', function() { 
        pais10.classList.toggle('open');
    });

    fechardesc10.addEventListener('click', function(){
        pais10.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição11 = document.getElementById('descrição11'); 
    const pais11 = document.getElementById('pais11');
    const fechardesc11= document.getElementById('fechardesc11');
    
    descrição11.addEventListener('click', function() { 
        pais11.classList.toggle('open');
    });

    fechardesc11.addEventListener('click', function(){
        pais11.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição18 = document.getElementById('descrição18'); 
    const pais18 = document.getElementById('pais18');
    const fechardesc18= document.getElementById('fechardesc18');
    
    descrição18.addEventListener('click', function() { 
        pais18.classList.toggle('open');
    });

    fechardesc18.addEventListener('click', function(){
        pais18.classList.remove('open');
    });
});

//pacotes

document.addEventListener('DOMContentLoaded', function() { 
    const descrição12 = document.getElementById('descrição12'); 
    const pais12 = document.getElementById('pais12');
    const fechardesc12= document.getElementById('fechardesc12');
    
    descrição12.addEventListener('click', function() { 
        pais12.classList.toggle('open');
    });

    fechardesc12.addEventListener('click', function(){
        pais12.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição13 = document.getElementById('descrição13'); 
    const pais13 = document.getElementById('pais13');
    const fechardesc13= document.getElementById('fechardesc13');
    
    descrição13.addEventListener('click', function() { 
        pais13.classList.toggle('open');
    });

    fechardesc13.addEventListener('click', function(){
        pais13.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição14 = document.getElementById('descrição14'); 
    const pais14 = document.getElementById('pais14');
    const fechardesc14= document.getElementById('fechardesc14');
    
    descrição14.addEventListener('click', function() { 
        pais14.classList.toggle('open');
    });

    fechardesc14.addEventListener('click', function(){
        pais14.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição15 = document.getElementById('descrição15'); 
    const pais15 = document.getElementById('pais15');
    const fechardesc14= document.getElementById('fechardesc15');
    
    descrição15.addEventListener('click', function() { 
        pais15.classList.toggle('open');
    });

    fechardesc15.addEventListener('click', function(){
        pais15.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição16 = document.getElementById('descrição16'); 
    const pais16 = document.getElementById('pais16');
    const fechardesc16= document.getElementById('fechardesc16');
    
    descrição16.addEventListener('click', function() { 
        pais16.classList.toggle('open');
    });

    fechardesc16.addEventListener('click', function(){
        pais16.classList.remove('open');
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    const descrição17 = document.getElementById('descrição17'); 
    const pais17 = document.getElementById('pais17');
    const fechardesc17= document.getElementById('fechardesc17');
    
    descrição17.addEventListener('click', function() { 
        pais17.classList.toggle('open');
    });

    fechardesc17.addEventListener('click', function(){
        pais17.classList.remove('open');
    });
});

//preço aleatório
