<?php
/**
 *  Return a list of states by country.
 * 
 *  Use these methods to quickly pull an associative array of 
 *  states and ISO code values into your application.
 * 
 *  Current Countries / States:
 *  Australia - australia()
 *  USA - usa()
 * 
 *  @author Adam Terry <adam@advite.com.au>
 */
class States
{
    public function australia(){

        $australianStates = array(
            'ACT' => 'AUSTRALIAN CAPITAL TERRITORY',
            'NSW' => 'NEW SOUTH WALES',
            'NT' => 'NORTHERN TERRITORY',
            'QLD' => 'QUEENSLAND',
            'SA' => 'SOUTH AUSTRALIA',
            'TAS' => 'TASMANIA',
            'VIC' => 'VICTORIA',
            'WA' => 'WESTERN AUSTRALIA'
        );
        
        return $australianStates;
    }

    public function usa(){

        $usaStates = array(
            'AL' => 'ALABAMA',
            'AK' => 'ALASKA',
            'AZ' => 'ARIZONA',
            'AR' => 'ARKANSAS',
            'CA' => 'CALIFORNIA',
            'CO' => 'COLORADO',
            'CT' => 'CONNECTICUT',
            'DE' => 'DELAWARE',
            'DC' => 'DISTRICT OF COLUMBIA',
            'FL' => 'FLORIDA',
            'GA' => 'GEORGIA',
            'HI' => 'HAWAII',
            'ID' => 'IDAHO',
            'IL' => 'ILLINOIS',
            'IN' => 'INDIANA',
            'IA' => 'IOWA',
            'KS' => 'KANSAS',
            'KY' => 'KENTUCKY',
            'LA' => 'LOUISIANA',
            'ME' => 'MAINE',
            'MD' => 'MARYLAND',
            'MA' => 'MASSACHUSETTS',
            'MI' => 'MICHIGAN',
            'MN' => 'MINNESOTA',
            'MS' => 'MISSISSIPPI',
            'MO' => 'MISSOURI',
            'MT' => 'MONTANA',
            'NE' => 'NEBRASKA',
            'NV' => 'NEVADA',
            'NH' => 'NEW HAMPSHIRE',
            'NJ' => 'NEW JERSEY',
            'NM' => 'NEW MEXICO',
            'NY' => 'NEW YORK',
            'NC' => 'NORTH CAROLINA',
            'ND' => 'NORTH DAKOTA',
            'OH' => 'OHIO',
            'OK' => 'OKLAHOMA',
            'OR' => 'OREGON',
            'PA' => 'PENNSYLVANIA',
            'RI' => 'RHODE ISLAND',
            'SC' => 'SOUTH CAROLINA',
            'SD' => 'SOUTH DAKOTA',
            'TN' => 'TENNESSEE',
            'TX' => 'TEXAS',
            'UT' => 'UTAH',
            'VY' => 'VERMONT',
            'VA' => 'VIRGINIA',
            'WA' => 'WASHINGTON',
            'WV' => 'WEST VIRGINIA',
            'WI' => 'WISCONSIN',
            'WY' => 'WYOMING'
        );
        
        return $usaStates;
    }
}