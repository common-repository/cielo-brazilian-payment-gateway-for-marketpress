<?php
/**
 * Plugin de gateway de pagamento Aura Crédito Cielo para MarketPress.
 * 
 * @author Phellipe Kelbert <pkelbert@gmail.com>
 */

/**
 * @see MP_Cielo_Gateway_Credito
 */
require_once 'credito.php';

/**
 * Plugin de gateway de pagamento Aura Crédito Cielo.
 * 
 * @author Phellipe Kelbert <pkelbert@gmail.com>
 */
class MP_Cielo_Gateway_Credito_Aura extends MP_Cielo_Gateway_Credito {
    
    /**
     * Slug privado do gateway.
     * @var string
     */
    public $plugin_name = 'aura-credito-cielo';
    
    /**
     * Nome da bandeira do cartão utilizado pela Cielo.
     * @var string
     */
    protected $_bandeira = 'aura';
    
}