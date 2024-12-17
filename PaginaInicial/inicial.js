document.getElementById('perfil').addEventListener('click',function(){
    window.location.href = '../usuário/usuario.html';
});
document.addEventListener('DOMContentLoaded', function() { 
    const carrinho = document.getElementById('carrinho'); 
    const janelaCar = document.getElementById('janelaCar');
    const fecharCarrinho= document.getElementById('fecharCarrinho');
    
    carrinho.addEventListener('click', function() { 
        janelaCar.classList.toggle('open');
    });

    fecharCarrinho.addEventListener('click', function(){
        janelaCar.classList.remove('open');
    });
});
document.getElementById('botaoFinalizar').addEventListener('click',function(){
    window.location.href = '../Pagamento/pagamento.html';
});