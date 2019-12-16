<?php
 
namespace VoelknerPayment\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use VoelknerPayment\Helper\VoelknerPaymentHelper;
 
/**
 * Class VoelknerPaymentServiceProvider
 * @package VoelknerPayment\Providers
 */
class VoelknerPaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
 
    }
 
    /**
     * Boot additional services for the payment method
     *
     * @param VoelknerPaymentHelper $paymentHelper
     * @param PaymentMethodContainer $payContainer
     * @param Dispatcher $eventDispatcher
     */
    public function boot( VoelknerPaymentHelper $paymentHelper,
                          PaymentMethodContainer $payContainer,
                          Dispatcher $eventDispatcher)
    {
        // Create the ID of the payment method if it doesn't exist yet
        $paymentHelper->createMopIfNotExists();
   }
}
