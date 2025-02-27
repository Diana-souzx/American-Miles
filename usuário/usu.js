document.getElementById('formulario').addEventListener('submit', function(event){
    event.preventDefault();

    

    const foto = document.getElementById('foto'); 
    const imagemPerfil = document.getElementById('imagemPerfil');

    if (foto.files && foto.files[0]) { 
        const reader = new FileReader(); 
        
        reader.onload = function(e) { 
            imagemPerfil.src = e.target.result; 
        } 
        reader.readAsDataURL(foto.files[0]); 
    }
    
});




