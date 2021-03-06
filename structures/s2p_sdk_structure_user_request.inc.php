<?php

namespace S2P_SDK;

if( !defined( 'S2P_SDK_DIR_STRUCTURES' ) )
    die( 'Something went wrong.' );

class S2P_SDK_Structure_User_Request extends S2P_SDK_Scope_Structure
{
    const USER_PASS_REGEXP = '(?=^.{12,100}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_\-+}{":;\'?\/>.<,])(?!.*\s).*$',
          USER_EMAIL_REGEXP = '^[a-zA-Z0-9._%+-]{1,100}@[a-zA-Z0-9.-]{1,40}\.[a-zA-Z]{1,8}$';

    /**
     * Function should return array with full variable definition
     * @return array
     */
    public function get_definition()
    {
        return array(
            'name' => 'user',
            'external_name' => 'User',
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
                'name' => 'name',
                'external_name' => 'Name',
                'display_name' => self::s2p_t( 'Account username' ),
                'type' => S2P_SDK_VTYPE_STRING,
            ),
            array(
                'name' => 'password',
                'external_name' => 'Password',
                'display_name' => self::s2p_t( 'Account password' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'regexp' => self::USER_PASS_REGEXP,
            ),
            array(
                'name' => 'email',
                'external_name' => 'Email',
                'display_name' => self::s2p_t( 'Account email' ),
                'type' => S2P_SDK_VTYPE_STRING,
                'regexp' => self::USER_EMAIL_REGEXP,
            ),
            array(
                'name' => 'siteid',
                'external_name' => 'SiteID',
                'display_name' => self::s2p_t( 'Site ID attached to this account' ),
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^\d{1,12}$',
            ),
            array(
                'name' => 'roleid',
                'external_name' => 'RoleID',
                'display_name' => self::s2p_t( 'Role ID assigned to user account' ),
                'type' => S2P_SDK_VTYPE_INT,
                'regexp' => '^\d{1,12}$',
            ),
       );
    }

}
