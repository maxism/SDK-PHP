<?php

namespace S2P_SDK;

if( !defined( 'S2P_SDK_DIR_STRUCTURES' ) )
    die( 'Something went wrong.' );

include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_customer.inc.php' );
include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_address.inc.php' );
include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_article.inc.php' );

class S2P_SDK_Structure_Payment_Request extends S2P_SDK_Scope_Structure
{
    /**
     * Function should return array with full variable definition
     * @return array
     */
    public function get_definition()
    {
        return array(
            'name' => 'payment',
            'external_name' => 'Payment',
            'type' => S2P_SDK_VTYPE_BLOB,
            'structure' => $this->get_structure_definition(),
        );
    }

    /**
     * Function should return structure definition for blobs or array variables
     * @return array
     */
    public function get_structure_definition()
    {
        $customer_obj = new S2P_SDK_Structure_Customer();
        $address_obj = new S2P_SDK_Structure_Address();
        $article_obj = new S2P_SDK_Structure_Article();

        return array(
            array(
                'name' => 'merchanttransactionid',
                'external_name' => 'MerchantTransactionID',
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
                'regexp' => '^[0-9a-zA-Z_-]{1,50}$',
            ),
            array(
                'name' => 'amount',
                'external_name' => 'Amount',
                'type' => S2P_SDK_VTYPE_INT,
                'default' => 0,
                'regexp' => '^\d{1,12}$',
            ),
            array(
                'name' => 'currency',
                'external_name' => 'Currency',
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
                'regexp' => '^[A-Z]{3}$',
            ),
            array(
                'name' => 'returnurl',
                'external_name' => 'ReturnURL',
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
                'regexp' => '^(http(s)?(:\/\/|%3A%2F%2F).+){1,512}$',
            ),
            array(
                'name' => 'methodid',
                'external_name' => 'MethodID',
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^([0-9]{1,10})$',
            ),
            array(
                'name' => 'methodoptionid',
                'external_name' => 'MethodOptionID',
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^([0-9]{1,10})$',
            ),
            array(
                'name' => 'siteid',
                'external_name' => 'SiteID',
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^([0-9]{1,10})$',
            ),
            array(
                'name' => 'description',
                'external_name' => 'Description',
                'type' => S2P_SDK_VTYPE_STRING,
                'regexp' => '^.{1,255}$',
            ),
            array(
                'name' => 'customer',
                'external_name' => 'Customer',
                'type' => S2P_SDK_VTYPE_BLOB,
                'default' => null,
                'structure' => $customer_obj->get_structure_definition(),
            ),
            array(
                'name' => 'billingaddress',
                'external_name' => 'BillingAddress',
                'type' => S2P_SDK_VTYPE_BLOB,
                'default' => null,
                'structure' => $address_obj->get_structure_definition(),
            ),
            array(
                'name' => 'shippingaddress',
                'external_name' => 'ShippingAddress',
                'type' => S2P_SDK_VTYPE_BLOB,
                'default' => null,
                'structure' => $address_obj->get_structure_definition(),
            ),
            array(
                'name' => 'articles',
                'external_name' => 'Articles',
                'type' => S2P_SDK_VTYPE_ARRAY,
                'default' => null,
                'structure' => $article_obj->get_structure_definition(),
            ),
            array(
                'name' => 'tokenlifetime',
                'external_name' => 'TokenLifetime',
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^\d{1,12}$',
            ),
        );
    }

}