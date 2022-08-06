<?php
//Texto recebido do formulário.
$texto = $_GET['texto'];

//Letras e caracteres que podem existir no texto recebido. 
$entrada = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'ä', 'ã', 'à', 'á', 'â', 'ê', 'ë', 'è', 'é', 'ï', 'ì', 'í', 'ö', 'õ', 'ò', 'ó', 'ô', 'ü', 'ù', 'ú', 'û', 'À', 'Á', 'Ã', 'Â', 'Ä', 'É', 'Ê', 'Ë', 'È', 'Í', 'Î', 'Ì', 'Ï', 'Ó', 'Ò', 'Ö', 'Õ', 'Ô', 'Ú', 'Ù', 'Ü', 'Û', 'ñ', 'Ñ', 'ç', 'Ç', ' ', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '@', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º', '.', "'");

//As letras maiúsculas serão substituídas por minúsculas e os caracteres e espaços por “_”. 
$saida = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'n', 'n', 'c', 'c', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', "_");

//Pega o texto e gera uma url sem espaços ou caracters como definido nas matrizes a cima. 
$urlGerada = str_replace($entrada, $saida, $texto);

//Remove todos os "_" da url gerada e serpara as palavas em intens. 
$itens = explode('_', $urlGerada);

//Junta os intens e coloca um "-" para separa-los.
$i = 0;
foreach($itens as $item){
    if($i == 0){
        $i++;
        $url = $item;
    }
    else{
        if($item != ""){
            $url = $url . "-" . $item;
        }
    }
}

//Retorna a url para a página.
header ('location:form.php?url='.$url);
