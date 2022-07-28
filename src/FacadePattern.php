<?php
/**   
 * Facade Pattern 
 * @version 1.0   
 * @package Facade
 * @subpackage FacadePattern  
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/

namespace DesignPatterns;

use DesignPatterns\ConversorMP4;
use DesignPatterns\ConversorAVI;


class FacadePattern
{
    protected $ConversorMP4;

    protected $ConversorAVI;

    /**
     * Método Construtor dos Objetos
    */
    public function __construct(
        ConversorMP4 $ConversorMP4 = null,
        ConversorAVI $ConversorAVI = null
    ) {
        $this->ConversorMP4 = $ConversorMP4 ?: new ConversorMP4();
        $this->ConversorAVI = $ConversorAVI ?: new ConversorAVI();
    }

    /**
     * Os métodos do Padrão Facade atuarão como atalhos para sofisticados
     * serviços, APIs, ou uma classe de serviço complexa, tornando o código
     * mais limpo e eficiente.
    */
    public function conversao(): string
    {
        $resultado = "Facade initializa as classes de API ou Serviços:\n";
        $resultado .= $this->ConversorMP4->conversao1();
        $resultado .= $this->ConversorAVI->conversao2();
        $resultado .= "Facade realiza a ação de Conversão dos Arquivos:\n";
        $resultado .= $this->ConversorMP4->conversaoMP4();
        $resultado .= $this->ConversorAVI->conversaoAVI();

        return $resultado;
    }
}