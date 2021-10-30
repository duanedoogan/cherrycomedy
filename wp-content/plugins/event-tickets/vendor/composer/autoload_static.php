<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite60f8fc7c83c1a84be23eb057da9810a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tribe\\Tickets\\' => 14,
            'TEC\\Tickets\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tribe\\Tickets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tribe',
        ),
        'TEC\\Tickets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tickets',
        ),
    );

    public static $classMap = array (
        'TEC\\Tickets\\Assets' => __DIR__ . '/../..' . '/src/Tickets/Assets.php',
        'TEC\\Tickets\\Commerce' => __DIR__ . '/../..' . '/src/Tickets/Commerce.php',
        'TEC\\Tickets\\Commerce\\Abstract_Settings' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Abstract_Settings.php',
        'TEC\\Tickets\\Commerce\\Assets' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Assets.php',
        'TEC\\Tickets\\Commerce\\Attendee' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Attendee.php',
        'TEC\\Tickets\\Commerce\\Cart' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Cart.php',
        'TEC\\Tickets\\Commerce\\Cart\\Cart_Interface' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Cart/Cart_Interface.php',
        'TEC\\Tickets\\Commerce\\Cart\\Unmanaged_Cart' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Cart/Unmanaged_Cart.php',
        'TEC\\Tickets\\Commerce\\Checkout' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Checkout.php',
        'TEC\\Tickets\\Commerce\\Communications\\Email' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Communication/Email.php',
        'TEC\\Tickets\\Commerce\\Currency' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Currency.php',
        'TEC\\Tickets\\Commerce\\Editor\\Metabox' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Editor/Metabox.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Archive_Attendees' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Archive_Attendees.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Decrease_Stock' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Decrease_Stock.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Flag_Action_Abstract' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Flag_Action_Abstract.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Flag_Action_Handler' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Flag_Action_Handler.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Flag_Action_Interface' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Flag_Action_Interface.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Generate_Attendees' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Generate_Attendees.php',
        'TEC\\Tickets\\Commerce\\Flag_Actions\\Increase_Stock' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Flag_Actions/Increase_Stock.php',
        'TEC\\Tickets\\Commerce\\Gateways\\Abstract_Gateway' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/Abstract_Gateway.php',
        'TEC\\Tickets\\Commerce\\Gateways\\Interface_Gateway' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/Interface_Gateway.php',
        'TEC\\Tickets\\Commerce\\Gateways\\Manager' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/Manager.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Assets' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Assets.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Buttons' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Buttons.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Client' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Client.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Gateway' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Gateway.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Hooks' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Hooks.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Merchant' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Merchant.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\On_Boarding_Redirect_Handler' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/On_Boarding_Redirect_Handler.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Provider' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Provider.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\REST' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/REST.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\REST\\On_Boarding_Endpoint' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/REST/On_Boarding_Endpoint.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\REST\\Order_Endpoint' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/REST/Order_Endpoint.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\REST\\Webhook_Endpoint' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/REST/Webhook_Endpoint.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Refresh_Token' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Refresh_Token.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Settings' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Settings.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Signup' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Signup.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Status' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Status.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Tickets_Form' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Tickets_Form.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Webhooks' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Webhooks.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Webhooks\\Events' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Webhooks/Events.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\Webhooks\\Handler' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/Webhooks/Handler.php',
        'TEC\\Tickets\\Commerce\\Gateways\\PayPal\\WhoDat' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Gateways/PayPal/WhoDat.php',
        'TEC\\Tickets\\Commerce\\Hooks' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Hooks.php',
        'TEC\\Tickets\\Commerce\\Legacy_Compat' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Legacy_Compat.php',
        'TEC\\Tickets\\Commerce\\Models\\Attendee_Model' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Models/Attendee_Model.php',
        'TEC\\Tickets\\Commerce\\Models\\Order_Model' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Models/Order_Model.php',
        'TEC\\Tickets\\Commerce\\Models\\Ticket_Model' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Models/Ticket_Model.php',
        'TEC\\Tickets\\Commerce\\Module' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Module.php',
        'TEC\\Tickets\\Commerce\\Order' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Order.php',
        'TEC\\Tickets\\Commerce\\Provider' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Provider.php',
        'TEC\\Tickets\\Commerce\\Reports\\Attendance_Totals' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Reports/Attendance_Totals.php',
        'TEC\\Tickets\\Commerce\\Reports\\Event' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Reports/Event.php',
        'TEC\\Tickets\\Commerce\\Reports\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Reports/Ticket.php',
        'TEC\\Tickets\\Commerce\\Repositories\\Attendees_Repository' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Repositories/Attendees_Repository.php',
        'TEC\\Tickets\\Commerce\\Repositories\\Order_Repository' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Repositories/Order_Repository.php',
        'TEC\\Tickets\\Commerce\\Repositories\\Tickets_Repository' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Repositories/Tickets_Repository.php',
        'TEC\\Tickets\\Commerce\\Settings' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Settings.php',
        'TEC\\Tickets\\Commerce\\Shortcodes\\Checkout_Shortcode' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Shortcodes/Checkout_Shortcode.php',
        'TEC\\Tickets\\Commerce\\Shortcodes\\Shortcode_Abstract' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Shortcodes/Shortcode_Abstract.php',
        'TEC\\Tickets\\Commerce\\Shortcodes\\Success_Shortcode' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Shortcodes/Success_Shortcode.php',
        'TEC\\Tickets\\Commerce\\Status\\Action_Required' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Action_Required.php',
        'TEC\\Tickets\\Commerce\\Status\\Approved' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Approved.php',
        'TEC\\Tickets\\Commerce\\Status\\Completed' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Completed.php',
        'TEC\\Tickets\\Commerce\\Status\\Created' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Created.php',
        'TEC\\Tickets\\Commerce\\Status\\Denied' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Denied.php',
        'TEC\\Tickets\\Commerce\\Status\\Not_Completed' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Not_Completed.php',
        'TEC\\Tickets\\Commerce\\Status\\Pending' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Pending.php',
        'TEC\\Tickets\\Commerce\\Status\\Refunded' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Refunded.php',
        'TEC\\Tickets\\Commerce\\Status\\Reversed' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Reversed.php',
        'TEC\\Tickets\\Commerce\\Status\\Status_Abstract' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Status_Abstract.php',
        'TEC\\Tickets\\Commerce\\Status\\Status_Handler' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Status_Handler.php',
        'TEC\\Tickets\\Commerce\\Status\\Status_Interface' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Status_Interface.php',
        'TEC\\Tickets\\Commerce\\Status\\Undefined' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Undefined.php',
        'TEC\\Tickets\\Commerce\\Status\\Voided' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Status/Voided.php',
        'TEC\\Tickets\\Commerce\\Success' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Success.php',
        'TEC\\Tickets\\Commerce\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Ticket.php',
        'TEC\\Tickets\\Commerce\\Tickets_View' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Tickets_View.php',
        'TEC\\Tickets\\Commerce\\Traits\\Has_Mode' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Traits/Has_Mode.php',
        'TEC\\Tickets\\Commerce\\Utils\\Price' => __DIR__ . '/../..' . '/src/Tickets/Commerce/Utils/Price.php',
        'TEC\\Tickets\\Event' => __DIR__ . '/../..' . '/src/Tickets/Event.php',
        'TEC\\Tickets\\Hooks' => __DIR__ . '/../..' . '/src/Tickets/Hooks.php',
        'TEC\\Tickets\\Provider' => __DIR__ . '/../..' . '/src/Tickets/Provider.php',
        'TEC\\Tickets\\Settings' => __DIR__ . '/../..' . '/src/Tickets/Settings.php',
        'Tribe\\Tickets\\Admin\\Manager\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Admin/Manager/Service_Provider.php',
        'Tribe\\Tickets\\Admin\\Settings\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Admin/Settings/Service_Provider.php',
        'Tribe\\Tickets\\Editor\\Warnings' => __DIR__ . '/../..' . '/src/Tribe/Editor/Warnings.php',
        'Tribe\\Tickets\\Events\\Attendees_List' => __DIR__ . '/../..' . '/src/Tribe/Events/Attendees_List.php',
        'Tribe\\Tickets\\Events\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Events/Service_Provider.php',
        'Tribe\\Tickets\\Events\\Views\\V2\\Hooks' => __DIR__ . '/../..' . '/src/Tribe/Events/Views/V2/Hooks.php',
        'Tribe\\Tickets\\Events\\Views\\V2\\Models\\Tickets' => __DIR__ . '/../..' . '/src/Tribe/Events/Views/V2/Models/Tickets.php',
        'Tribe\\Tickets\\Events\\Views\\V2\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Events/Views/V2/Service_Provider.php',
        'Tribe\\Tickets\\Migration\\Queue' => __DIR__ . '/../..' . '/src/Tribe/Migration/Queue.php',
        'Tribe\\Tickets\\Migration\\Queue_4_12' => __DIR__ . '/../..' . '/src/Tribe/Migration/Queue_4_12.php',
        'Tribe\\Tickets\\Promoter\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Service_Provider.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Builders\\Attendee_Trigger' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Builders/Attendee_Trigger.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Contracts\\Attendee_Model' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Contracts/Attendee_Model.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Contracts\\Builder' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Contracts/Builder.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Contracts\\Triggered' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Contracts/Triggered.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Director' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Director.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Dispatcher' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Dispatcher.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Factory' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Factory.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Models\\Attendee' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Models/Attendee.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Observers\\Commerce' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Observers/Commerce.php',
        'Tribe\\Tickets\\Promoter\\Triggers\\Observers\\RSVP' => __DIR__ . '/../..' . '/src/Tribe/Promoter/Triggers/Observers/RSVP.php',
        'Tribe\\Tickets\\Repositories\\Order' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Order.php',
        'Tribe\\Tickets\\Repositories\\Order\\Commerce' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Order/Commerce.php',
        'Tribe\\Tickets\\Repositories\\Post_Repository' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Post_Repository.php',
        'Tribe\\Tickets\\Repositories\\Traits\\Event' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Traits/Event.php',
        'Tribe\\Tickets\\Repositories\\Traits\\Post_Attendees' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Traits/Post_Attendees.php',
        'Tribe\\Tickets\\Repositories\\Traits\\Post_Tickets' => __DIR__ . '/../..' . '/src/Tribe/Repositories/Traits/Post_Tickets.php',
        'Tribe\\Tickets\\Service_Providers\\Customizer' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Customizer.php',
        'Tribe\\Tickets\\Shortcodes\\Tribe_Tickets_Checkout' => __DIR__ . '/../..' . '/src/Tribe/Shortcodes/Tribe_Tickets_Checkout.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite60f8fc7c83c1a84be23eb057da9810a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite60f8fc7c83c1a84be23eb057da9810a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite60f8fc7c83c1a84be23eb057da9810a::$classMap;

        }, null, ClassLoader::class);
    }
}
