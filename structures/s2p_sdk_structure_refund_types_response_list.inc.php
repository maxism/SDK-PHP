<?php

namespace S2P_SDK;

if( !defined( 'S2P_SDK_DIR_STRUCTURES' ) )
    die( 'Something went wrong.' );

include_once( S2P_SDK_DIR_STRUCTURES.'s2p_sdk_structure_refund_types_response.inc.php' );

class S2P_SDK_Structure_Refund_Types_Response_List extends S2P_SDK_Structure_Refund_Types_Response
{
    /**
     * Function should return array with full variable definition
     * @return array
     */
    public function get_definition()
    {
        return array(
            'name' => 'refundtypes',
            'external_name' => 'RefundTypes',
            'type' => S2P_SDK_VTYPE_BLARRAY,
            'structure' => $this->get_structure_definition(),
        );
    }

}