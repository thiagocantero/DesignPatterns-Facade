<?php
/**   
 * Facade Pattern 
 * @version 1.0   
 * @package Index
 * @subpackage FacadePattern  
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/

require_once("vendor/autoload.php");

use DesignPatterns\ConversorAVI;
use DesignPatterns\ConversorMP4;
use DesignPatterns\FacadePattern;

function ConversaoFacade(FacadePattern $facade)
{
    

    echo $facade->conversao();

    
}

/**
 * Nossa Entrypoint de implementação do Facade, serve apenas para criarmos e instaciamos os objetos
 * para realizar as suas respectivas complexidades, isto fica a cargo do Padrão Facade.
 */
$ConversorMP4 = new ConversorMP4();
$ConversorAVI = new ConversorAVI();
$facade = new FacadePattern($ConversorMP4, $ConversorAVI);
ConversaoFacade($facade);