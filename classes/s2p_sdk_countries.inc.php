<?php

namespace S2P_SDK;

class S2P_SDK_Countries extends S2P_SDK_Language
{
    private static $COUNTRIES_ARR = array(
        'AD' => 'Andorra',
        'AE' => 'United Arab Emirates',
        'AF' => 'Afghanistan',
        'AG' => 'Antigua and Barbuda',
        'AI' => 'Anguilla',
        'AL' => 'Albania',
        'AM' => 'Armenia',
        'AN' => 'Netherlands Antilles',
        'AO' => 'Angola',
        'AQ' => 'Antarctica',
        'AR' => 'Argentina',
        'AS' => 'American Samoa',
        'AT' => 'Austria',
        'AU' => 'Australia',
        'AW' => 'Aruba',
        'AZ' => 'Azerbaijan',
        'BA' => 'Bosnia & Herzegowina',
        'BB' => 'Barbados',
        'BD' => 'Bangladesh',
        'BE' => 'Belgium',
        'BF' => 'Burkina Faso',
        'BG' => 'Bulgaria',
        'BH' => 'Bahrain',
        'BI' => 'Burundi',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BN' => 'Brunei Darussalam',
        'BO' => 'Bolivia',
        'BR' => 'Brazil',
        'BS' => 'Bahamas',
        'BT' => 'Bhutan',
        'BV' => 'Bouvet Island',
        'BW' => 'Botswana',
        'BY' => 'Belarus',
        'BZ' => 'Belize',
        'CA' => 'Canada',
        'CC' => 'Cocos (Keeling) Islands',
        'CD' => 'Congo, Democratic Republic of the',
        'CF' => 'Central African Republic',
        'CG' => 'Congo',
        'CH' => 'Switzerland',
        'CI' => 'Ivory Coast',
        'CK' => 'Cook Islands',
        'CL' => 'Chili',
        'CM' => 'Cameroon',
        'CN' => 'China',
        'CO' => 'Colombia',
        'CR' => 'Costa Rica',
        'CS' => 'Serbia and Montenegro',
        'CU' => 'Cuba',
        'CV' => 'Cape Verde',
        'CX' => 'Christmas Island',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DE' => 'Germany',
        'DJ' => 'Djibouti',
        'DK' => 'Denmark',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'DZ' => 'Algeria',
        'EC' => 'Ecuador',
        'EE' => 'Estonia',
        'EG' => 'Egypt',
        'EH' => 'Western Sahara',
        'ER' => 'Eritrea',
        'ES' => 'Spain',
        'ET' => 'Ethiopia',
        'FI' => 'Finland',
        'FJ' => 'Fiji Islands',
        'FK' => 'Falkland Islands',
        'FM' => 'Micronesia, Federated States of',
        'FO' => 'Faroe Islands',
        'FR' => 'France',
        'FX' => 'France, Metropolitan',
        'GA' => 'Gabon',
        'GB' => 'United Kingdom',
        'GD' => 'Grenada',
        'GE' => 'Georgia',
        'GF' => 'French Guiana',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GL' => 'Greenland',
        'GM' => 'Gambia',
        'GN' => 'Guinea',
        'GP' => 'Guadeloupe',
        'GQ' => 'Equatorial Guinea',
        'GR' => 'Greece',
        'GS' => 'South Georgia and the South Sandwich Islands',
        'GT' => 'Guatemala',
        'GU' => 'Guam',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HK' => 'Hong Kong',
        'HM' => 'Heard and McDonald Islands',
        'HN' => 'Honduras',
        'HR' => 'Croatia',
        'HT' => 'Haiti',
        'HU' => 'Hungary',
        'ID' => 'Indonesia',
        'IE' => 'Ireland',
        'IL' => 'Israel',
        'IN' => 'India',
        'IO' => 'British Indian Ocean Territory',
        'IQ' => 'Iraq',
        'IR' => 'Iran, Islamic Republic of',
        'IS' => 'Iceland',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JO' => 'Jordan',
        'JP' => 'Japan',
        'KE' => 'Kenya',
        'KG' => 'Kyrgyzstan',
        'KH' => 'Cambodia (formerly Kampuchea)',
        'KI' => 'Kiribati',
        'KM' => 'Comoros',
        'KN' => 'Saint Kitts (Christopher) and Nevis',
        'KP' => 'Korea, Democratic People\'s Republic of (North Korea)',
        'KR' => 'Korea, Republic of (South Korea)',
        'KW' => 'Kuwait',
        'KY' => 'Cayman Islands',
        'KZ' => 'Kazakhstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LB' => 'Lebanon',
        'LC' => 'Saint Lucia',
        'LI' => 'Liechtenstein',
        'LK' => 'Sri Lanka',
        'LR' => 'Liberia',
        'LS' => 'Lesotho',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'LV' => 'Latvia',
        'LY' => 'Libyan Arab Jamahiriya',
        'MA' => 'Morocco',
        'MC' => 'Monaco',
        'MD' => 'Moldova, Republic of',
        'MG' => 'Madagascar',
        'MH' => 'Marshall Islands',
        'MK' => 'Macedonia, the Former Yugoslav Republic of',
        'ML' => 'Mali',
        'MM' => 'Myanmar',
        'MN' => 'Mongolia',
        'MO' => 'Macao',
        'MP' => 'Northern Mariana Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MS' => 'Montserrat',
        'MT' => 'Malta',
        'MU' => 'Mauritius',
        'MV' => 'Maldives',
        'MW' => 'Malawi',
        'MX' => 'Mexico',
        'MY' => 'Malaysia',
        'MZ' => 'Mozambique',
        'NA' => 'Namibia',
        'NC' => 'New Caledonia',
        'NE' => 'Niger',
        'NF' => 'Norfolk Island',
        'NG' => 'Nigeria',
        'NI' => 'Nicaragua',
        'NL' => 'Netherlands',
        'NO' => 'Norway',
        'NP' => 'Nepal',
        'NR' => 'Nauru',
        'NU' => 'Niue',
        'NZ' => 'New Zealand',
        'OM' => 'Oman',
        'PA' => 'Panama',
        'PE' => 'Peru',
        'PF' => 'French Polynesia',
        'PG' => 'Papua New Guinea',
        'PH' => 'Philippines',
        'PK' => 'Pakistan',
        'PL' => 'Poland',
        'PM' => 'St Pierre and Miquelon',
        'PN' => 'Pitcairn Island',
        'PR' => 'Puerto Rico',
        'PT' => 'Portugal',
        'PW' => 'Palau',
        'PY' => 'Paraguay',
        'QA' => 'Qatar',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'SA' => 'Saudi Arabia',
        'SB' => 'Solomon Islands',
        'SC' => 'Seychelles',
        'SD' => 'Sudan',
        'SE' => 'Sweden',
        'SG' => 'Singapore',
        'SH' => 'St Helena',
        'SI' => 'Slovenia',
        'SJ' => 'Svalbard and Jan Mayen Islands',
        'SK' => 'Slovakia',
        'SL' => 'Sierra Leone',
        'SM' => 'San Marino',
        'SN' => 'Senegal',
        'SO' => 'Somalia',
        'SR' => 'Suriname',
        'ST' => 'Sco Tomé and Prkncipe',
        'SU' => 'Union of Soviet Socialist Republics',
        'SV' => 'El Salvador',
        'SY' => 'Syrian Arab Republic',
        'SZ' => 'Swaziland',
        'TC' => 'Turks and Caicos Islands',
        'TD' => 'Chad',
        'TF' => 'French Southern and Antarctic Territories',
        'TG' => 'Togo',
        'TH' => 'Thailand',
        'TJ' => 'Tajikistan',
        'TK' => 'Tokelau',
        'TM' => 'Turkmenistan',
        'TN' => 'Tunisia',
        'TO' => 'Tonga',
        'TP' => 'East Timor',
        'TR' => 'Turkey',
        'TT' => 'Trinidad and Tobago',
        'TV' => 'Tuvalu',
        'TW' => 'Taiwan, Province of China',
        'TZ' => 'Tanzania, United Republic of',
        'UA' => 'Ukraine',
        'UG' => 'Uganda',
        'UM' => 'United States Minor Outlying Islands',
        'US' => 'United States of America',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VA' => 'Holy See',
        'VC' => 'Saint Vincent and the Grenadines',
        'VE' => 'Venezuela',
        'VG' => 'Virgin Islands (British)',
        'VI' => 'Virgin Islands (US)',
        'VN' => 'Viet Nam',
        'VU' => 'Vanautu',
        'WF' => 'Wallis and Futuna Islands',
        'WS' => 'Samoa',
        'XO' => 'West Africa',
        'YE' => 'Yemen',
        'YT' => 'Mayotte',
        'ZA' => 'South Africa',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
        'RS' => 'Serbia',
        'AA' => 'International',
    );

    public static function get_countries()
    {
        static $sorted = false;

        if( $sorted === false )
        {
            asort( self::$COUNTRIES_ARR );
            $sorted = true;
        }

        return self::$COUNTRIES_ARR;
    }

    public static function valid_country_arr( $countries_arr )
    {
        if( empty( $countries_arr ) or !is_array( $countries_arr ) )
            return false;

        $all_countries = self::get_countries();
        $return_arr = array();
        foreach( $countries_arr as $country_iso )
        {
            $country_iso = strtoupper( trim( $country_iso ) );
            if( empty( $all_countries[$country_iso] ) )
                continue;

            $return_arr[$country_iso] = $all_countries[$country_iso];
        }

        return (empty( $return_arr )?false:$return_arr);
    }

    public static function valid_country( $country )
    {
        if( empty( $country )
         or !($countries_arr = self::get_countries()) or empty( $countries_arr[$country] ) )
            return false;

        return $countries_arr[$country];
    }

    public static function guess_from_term( $term )
    {
        $all_terms_arr = self::get_countries();

        $found_terms = array();
        foreach( $all_terms_arr as $key => $val )
        {
            if( stristr( $term, $key ) === false
             or stristr( $term, $val ) === false )
                continue;

            $found_terms[$key] = $val;
        }

        return $found_terms;
    }
}
