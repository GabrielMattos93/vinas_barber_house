<?php 

// Chamando título em cada página do site

function titulo(){
    (isset($_GET['url'])) ? $pagina = $_GET['url'] : $pagina='home'; 

    switch($pagina):
        case 'home':
            $titulo = "Vina´s Barber House  - Barbearia Climatizada com Ótimo Ambiente - barbearia.com.br"; 
            break; 
        case 'sobre-nos':
            $titulo = "Sobre Nós - Vina´s Barber House - barbearia.com.br "; 
            break; 
        case 'servicos':
            $titulo = "Serviços - Vina´s Barber House - barbearia.com.br"; 
            break; 
        case 'precos':
            $titulo = "Preços - Vina´s Barber House - barbearia.com.br"; 
            break; 
        case 'equipe': 
            $titulo = "Equipe - Vina´s Barber House - barbearia.com.br"; 
            break; 
        case 'contato':
            $titulo  = "Contato - Vina´s Barber House - barbearia.com.br"; 
            break; 
        endswitch; 
        return $titulo; 
}