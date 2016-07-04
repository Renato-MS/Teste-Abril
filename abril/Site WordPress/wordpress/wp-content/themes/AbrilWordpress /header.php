
<?php
/**
 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    
    <title>TESTE PARA DESENVOLVEDOR FRONT-END</title>
    <meta charset="utf-8">

    



    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>//style.css" type="text/css"> 
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>//CSS/bootstrap/css/bootstrap.css">
    
    <script src="<?php bloginfo( 'template_directory' ); ?>//JS/Jquery/jquery-3.0.0.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>//JS/menu.js"></script>
    
        
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
    
<body>
    
<section id="TodoConteudo">
    

<header> 

<div class="logoMenuNavegacao">
    <img src="<?php bloginfo( 'template_directory' ); ?>//img/pesquisa.png" id="icon_pesquisa" width="30px" height="30px" id="icon_quatroRodas">
    <img src="<?php bloginfo( 'template_directory' ); ?>//img/logo.png" width="100px" height="48px" id="icon_quatroRodas">
      <a href="#" class="botao"><img src="<?php bloginfo( 'template_directory' ); ?>//img/menuCelular.png" width="30px" height="30px"/></a>
       
</div> 
    
<div id="MenuFixo">


    <div id="logo">
        <img src="<?php bloginfo( 'template_directory' ); ?>//img/logo.png">
    </div> 

    
    
<nav>
    
 
  
    

    
    
<ul class="menu_de_navegacao">  
    
    
    
    <li> <a href="#">CARROS</a>
       
        
        <ul class="subMenu">
            
           
            <div id="menu_verTodosOsCarros">
                <p>Ver Todos os Carros</p>
            </div>
            
            <div id="menu_ListaMarcas">
                
                
                <li>Audi</li>
                <li>Bentley</li>
                <li>BMW</li>
                <li>Chevrolet</li>
            
            
                <li>Chrysler</li>
                <li>Chevrolet</li>
                <li>Dodge</li>
                <li>Ferrari</li>
            
                
                <li>Fiat</li>
                <li>Ford</li>
                <li>Honda</li>
                <li>Hyundai</li>
              
                
                <li>JAC Motos</li>
                <li>Jaguar</li>
                <li>Jeep</li>
                <li>Kia</li>
            
                
                <li>Lamborghini</li>
                <li>Mecedes-Benz</li>
                <li>Mitsubishi</li>
                <li>Volkswagem</li>
            
            
            </div>
        </ul>
    </li>
    
    
    
    <li><a href="#">TESTES</a>
        <ul class="subMenu">
           
            
        <div id="menu_VerTudoDeTestes">
            <p>Ver Tudo de Testes</p>
            <p>Comparativos</p>
            <p>Impressões</p>
            <p>Longa duração</p>
            <p>Teste de pista</p>
        </div>
        
        <div id="TESTE_subMenu">
           <img src="<?php bloginfo( 'template_directory' ); ?>//img/menu_Testes/FOCUS.png" />
            <img src="<?php bloginfo( 'template_directory' ); ?>//img/menu_Testes/audiPreto.png" />
            <img src="<?php bloginfo( 'template_directory' ); ?>//img/menu_Testes/ka.png" />
            <img src="<?php bloginfo( 'template_directory' ); ?>//img/menu_Testes/audi.png" />
            <img src="<?php bloginfo( 'template_directory' ); ?>//img/menu_Testes/bmw.png" />
        </div>           
        
        </ul>   
    </li>
    
    <li><a href="#" >NOTÍCIAS</a></li>
    <li><a href="#">AUTO SERVIÇO</a></li>
    <li><a href="#">GUIA DE COMPRAS</a></li>
    <li><a href="#">TABELA FIPE</a></li>
    <li><a href="#">ASSINE</a> </li>
    <form>
        <input id="pesquisar" type="text" value="PESQUISAR" />
    </form>
   
</ul>
    

    
</nav>
    </div>

<div id="maisAcessados">
    <a href="#"><span>+ACESSADOS</span><img src="<?php bloginfo( 'template_directory' ); ?>//img/detalheSeta.png" width="37px" ></a>
    <a href="#">RENEGADE</a>
    <a href="#">NOVO SANDERO</a>
    <a href="#">NOVO FOX</a>
    <a href="#">NOVO KA</a>
    <a href="#">HB 20</a>
    <a href="#">DUSTER</a>
    <a href="#">GOLF</a>
    <a href="#">COROLLA</a>
    <a href="#">CIVIC</a>
    <a href="#">| A-Z |</a>
</div>

   
</header>