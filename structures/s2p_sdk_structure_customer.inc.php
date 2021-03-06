<?php

namespace S2P_SDK;

if( !defined( 'S2P_SDK_DIR_STRUCTURES' ) )
    die( 'Something went wrong.' );

class S2P_SDK_Structure_Customer extends S2P_SDK_Scope_Structure
{
    /**
     * Function should return array with full variable definition
     * @return array
     */
    public function get_definition()
    {
        return array(
            'name' => 'customer',
            'external_name' => 'Customer',
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
        return array(
            array(
                'name' => 'id',
                'external_name' => 'ID',
                'display_name' => self::s2p_t( 'Customer ID' ),
                'type' => S2P_SDK_VTYPE_INT,
                'default' => 0,
                'regexp' => '^\d{1,12}$',
            ),
            array(
                'name' => 'merchantcustomerid',
                'external_name' => 'MerchantCustomerID',
                'display_name' => self::s2p_t( 'Merchant assigned customer ID' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'email',
                'external_name' => 'Email',
                'display_name' => self::s2p_t( 'Customer email' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
                'regexp' => '^[a-zA-Z0-9._%+-]{1,100}@[a-zA-Z0-9.-]{1,40}\.[a-zA-Z]{1,8}$',
            ),
            array(
                'name' => 'firstname',
                'external_name' => 'FirstName',
                'display_name' => self::s2p_t( 'Customer first name' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'lastname',
                'external_name' => 'LastName',
                'display_name' => self::s2p_t( 'Customer last name' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'gender',
                'external_name' => 'Gender',
                'display_name' => self::s2p_t( 'Customer gender' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'socialsecuritynumber',
                'external_name' => 'SocialSecurityNumber',
                'display_name' => self::s2p_t( 'Customer social security number' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'phone',
                'external_name' => 'Phone',
                'display_name' => self::s2p_t( 'Customer phone' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'company',
                'external_name' => 'Company',
                'display_name' => self::s2p_t( 'Customer company' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'default' => '',
            ),
            array(
                'name' => 'inputdatetime',
                'external_name' => 'InputDateTime',
                'display_name' => self::s2p_t( 'Customer creation date' ),
                'type' => S2P_SDK_VTYPE_DATETIME,
                'default' => '',
            ),
        );
    }

}
