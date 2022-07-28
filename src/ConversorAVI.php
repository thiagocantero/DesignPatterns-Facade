<?php
/**   
 * Facade Pattern 
 * @version 1.0   
 * @package ConversorAVI
 * @subpackage FacadePattern  
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/

namespace DesignPatterns;

class ConversorAVI
{
    public function conversao2(): string
    {
        return "Conversão2: Arquivo enviado para converter ao formato AVI!\n";
    }

    // ...

    public function conversaoAVI(): string
    {
        return "Conversão para AVI: Finalizado!\n";
    }
}