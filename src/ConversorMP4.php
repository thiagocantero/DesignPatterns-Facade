<?php
/**   
 * Facade Pattern 
 * @version 1.0   
 * @package ConversorMP4
 * @subpackage FacadePattern  
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/

namespace DesignPatterns;

class ConversorMP4
{
    public function conversao1(): string
    {
        return "Conversão1: Arquivo enviado para converter ao formato MP4!\n";
    }

    // ...

    public function conversaoMP4(): string
    {
        return "Conversão para MP4: Finalizado!\n";
    }
}