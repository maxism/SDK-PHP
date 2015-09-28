<?php

namespace S2P_SDK;

if( !defined( 'S2P_SDK_DIR_STRUCTURES' ) )
    die( 'Something went wrong.' );

include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_customer.inc.php' );
include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_refund_details.inc.php' );

class S2P_SDK_Structure_Refund_Types_Response extends S2P_SDK_Scope_Structure
{
    /**
     * Function should return array with full variable definition
     * @return array
     */
    public function get_definition()
    {
        return array(
            'name' => 'refundtype',
            'external_name' => 'RefundType',
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
        $refund_details_obj = new S2P_SDK_Structure_Refund_Details();

        return array(
            array(
                'name' => 'name',
                'external_name' => 'Name',
                'display_name' => self::s2p_t( 'Refund type name' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'id',
                'external_name' => 'ID',
                'display_name' => self::s2p_t( 'Refund type ID' ),
                'type' => S2P_SDK_VTYPE_INT,
                'default' => 0,
                'regexp' => '^\d{1,12}$',
            ),
            array(
                'name' => 'allowspartialrefund',
                'external_name' => 'AllowsPartialRefund',
                'display_name' => self::s2p_t( 'Refund allows partial refund' ),
                'type' => S2P_SDK_VTYPE_BOOL,
                'default' => false,
            ),
            array(
                'name' => 'customer',
                'external_name' => 'Customer',
                'type' => S2P_SDK_VTYPE_BLOB,
                'default' => null,
                'structure' => $customer_obj->get_structure_definition(),
            ),
            array(
                'name' => 'details',
                'external_name' => 'Details',
                'type' => S2P_SDK_VTYPE_BLOB,
                'default' => null,
                'structure' => $refund_details_obj->get_structure_definition(),
            ),
        );
    }

}
