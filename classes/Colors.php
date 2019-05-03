<?php
/**
 *  Return a list of over 140 HTML/HEX color codes.
 *  Class contains individual methods for each color group as well as
 *  a single method to grab them all.
 * 
 *  Use these methods to quickly pull an associative array of 
 *  HTML color code names & matching hexadecimal values into your application.
 * 
 *  Available color pallettes and associated method name:
 *  White - hexWhite()
 *  Gray - hexGray()
 *  Red - hexRed()
 *  Pink - hexPink()
 *  Orange - hexOrange()
 *  Yellow - hexYellow()
 *  Purple - hexPurple()
 *  Green - hexGreen()
 *  Blue - hexBlue()
 *  Brown - hexBrown()
 *  All Colors - hexAll()
 * 
 *  @author Adam Terry <adam@advite.com.au>
 */
class Colors
{
    /**
     *  Return a list of WHITE html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $whiteColors
     */
    public function hexWhite(){
        
        $whiteColors = array(
            'WHITE' => '#FFFFFF',
            'SNOW' => '#FFFAFA',
            'HONEYDEW' => '#F0FFF0',
            'MINTCREAM' => '#F5FFFA',
            'AZURE' => '#F0FFFF',
            'ALICEBLUE' => '#F0F8FF',
            'GHOSTWHITE' => '#F8F8FF',
            'WHITESMOKE' => '#F5F5F5',
            'SEASHELL' => '#FFF5EE',
            'BEIGE' => '#F5F5DC',
            'OLDLACE' => '#FDF5E6',
            'FLORALWHITE' => '#FFFAF0',
            'IVORY' => '#FFFFF0',
            'ANTIQUEWHITE' => '#FAEBD7',
            'LINEN' => '#FAF0E6',
            'LAVENDERBLUSH' => '#FFF0F5',
            'MISTYROSE' => '#FFE4E1'
            );
            
            return $whiteColors;
        
    }
    
    /**
     *  Return a list of GRAY html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $grayColors
     */
    public function hexGray(){
        
        $grayColors = array(
            'GAINSBORO' => '#DCDCDC',
            'LIGHTGRAY' => '#D3D3D3',
            'SILVER' => '#C0C0C0',
            'DARKGRAY' => '#A9A9A9',
            'GRAY' => '#808080',
            'DIMGRAY' => '#696969',
            'LIGHTSLATEGRAY' => '#778899',
            'SLATEGRAY' => '#708090',
            'DARKSLATEGRAY' => '#2F4F4F',
            'BLACK' => '#000000'
            );
            
            return $grayColors;
        
    }
    
    /**
     *  Return a list of RED html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $redColors
     */
    public function hexRed(){
        
        $redColors = array(
            'INDIANRED' => '#CD5C5C',
            'LIGHTCORAL' => '#F08080',
            'SALMON' => '#FA8072',
            'DARKSALMON' => '#E9967A',
            'LIGHTSALMON' => '#FFA07A',
            'CRIMSON' => '#DC143C',
            'RED' => '#FF0000',
            'FIREBRICK' => '#B22222',
            'DARKRED' => '#8B0000'
            );
            
            return $redColors;
        
    }
    
    /**
     *  Return a list of PINK html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $pinkColors
     */
    public function hexPink(){
        
        $pinkColors = array(
            'PINK' => '#FFC0CB',
            'LIGHTPINK' => '#FFB6C1',
            'HOTPINK' => '#FF69B4',
            'DEEPPINK' => '#FF1493',
            'MEDIUMVIOLETRED' => '#C71585',
            'PALEVIOLETRED' => '#DB7093'
            );
            
            return $pinkColors;
        
    }
    
    /**
     *  Return a list of ORANGE html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $orangeColors
     */
    public function hexOrange(){
        
        $orangeColors = array(
            'LIGHTSALMON' => '#FFA07A',
            'CORAL' => '#FF7F50',
            'TOMATO' => '#FF6347',
            'ORANGERED' => '#FF4500',
            'DARKORANGE' => '#FF8C00',
            'ORANGE' => '#FFA500'
            );
            
            return $orangeColors;
        
    }

    /**
     *  Return a list of YELLOW html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $yellowColors
     */
    public function hexYellow(){

        $yellowColors = array(
            'GOLD' => '#FFD700',
            'YELLOW' => '#FFFF00',
            'LIGHTYELLOW' => '#FFFFE0',
            'LEMONCHIFFON' => '#FFFACD',
            'LIGHTGOLDENRODYELLOW' => '#FAFAD2',
            'PAPAYAWHIP' => '#FFEFD5',
            'MOCCASIN' => '#FFE4B5',
            'PEACHPUFF' => '#FFDAB9',
            'PALEGOLDENROD' => '#EEE8AA',
            'KHAKI' => '#F0E68C',
            'DARKKHAKI' => '#BDB76B'
        );

        return $yellowColors;

    }

    /**
     *  Return a list of PURPLE html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $purpleColors
     */
    public function hexPurple(){

        $purpleColors = array(
            'LAVENDER' => '#E6E6FA',
            'THISTLE' => '#D8BFD8',
            'PLUM' => '#DDA0DD',
            'VIOLET' => '#EE82EE',
            'ORCHID' => '#DA70D6',
            'FUCHSIA' => '#FF00FF',
            'MAGENTA' => '#FF00FF',
            'MEDIUMORCHID' => '#BA55D3',
            'MEDIUMPURPLE' => '#9370DB',
            'REBECCAPURPLE' => '#663399',
            'BLUEVIOLET' => '#8A2BE2',
            'DARKVIOLET' => '#9400D3',
            'DARKORCHID' => '#9932CC',
            'DARKMAGENTA' => '#8B008B',
            'PURPLE' => '#800080',
            'INDIGO' => '#4B0082',
            'SLATEBLUE' => '#6A5ACD',
            'DARKSLATEBLUE' => '#483D8B',
            'MEDIUMSLATEBLUE' => '#7B68EE'
        );

        return $purpleColors;
        
    }

    /**
     *  Return a list of GREEN html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $greenColors
     */
    public function hexGreen(){

        $greenColors = array(
            'GREENYELLOW' => '#ADFF2F',
            'CHARTREUSE' => '#7FFF00',
            'LAWNGREEN' => '#7CFC00',
            'LIME' => '#00FF00',
            'LIMEGREEN' => '#32CD32',
            'PALEGREEN' => '#98FB98',
            'LIGHTGREEN' => '#90EE90',
            'MEDIUMSPRINGGREEN' => '#00FA9A',
            'SPRINGGREEN' => '#00FF7F',
            'MEDIUMSEAGREEN' => '#3CB371',
            'SEAGREEN' => '#2E8B57',
            'FORESTGREEN' => '#228B22',
            'GREEN' => '#008000',
            'DARKGREEN' => '#006400',
            'YELLOWGREEN' => '#9ACD32',
            'OLIVEDRAB' => '#6B8E23',
            'OLIVE' => '#808000',
            'DARKOLIVEGREEN' => '#556B2F',
            'MEDIUMAQUAMARINE' => '#66CDAA',
            'DARKSEAGREEN' => '#8FBC8B',
            'LIGHTSEAGREEN' => '#20B2AA',
            'DARKCYAN' => '#008B8B',
            'TEAL' => '#008080'
        );

        return $greenColors;
        
    }

    /**
     *  Return a list of BLUE html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $blueColors
     */
    public function hexBlue(){

        $blueColors = array(
            'AQUA' => '#00FFFF',
            'CYAN' => '#00FFFF',
            'LIGHTCYAN' => '#E0FFFF',
            'PALETURQUOISE' => '#AFEEEE',
            'AQUAMARINE' => '#7FFFD4',
            'TURQUOISE' => '#40E0D0',
            'MEDIUMTURQUOISE' => '#48D1CC',
            'DARKTURQUOISE' => '#00CED1',
            'CADETBLUE' => '#5F9EA0',
            'STEELBLUE' => '#4682B4',
            'LIGHTSTEELBLUE' => '#B0C4DE',
            'POWDERBLUE' => '#B0E0E6',
            'LIGHTBLUE' => '#ADD8E6',
            'SKYBLUE' => '#87CEEB',
            'LIGHTSKYBLUE' => '#87CEFA',
            'DEEPSKYBLUE' => '#00BFFF',
            'DODGERBLUE' => '#1E90FF',
            'CORNFLOWERBLUE' => '#6495ED',
            'MEDIUMSLATEBLUE' => '#7B68EE',
            'ROYALBLUE' => '#4169E1',
            'BLUE' => '#0000FF',
            'MEDIUMBLUE' => '#0000CD',
            'DARKBLUE' => '#00008B',
            'NAVY' => '#000080',
            'MIDNIGHTBLUE' => '#191970'
        );

        return $blueColors;
        
    }

    /**
     *  Return a list of BROWN html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $brownColors
     */
    public function hexBrown(){

        $brownColors = array(
            'CORNSILK' => '#FFF8DC',
            'BLANCHEDALMOND' => '#FFEBCD',
            'BISQUE' => '#FFE4C4',
            'NAVAJOWHITE' => '#FFDEAD',
            'WHEAT' => '#F5DEB3',
            'BURLYWOOD' => '#DEB887',
            'TAN' => '#D2B48C',
            'ROSYBROWN' => '#BC8F8F',
            'SANDYBROWN' => '#F4A460',
            'GOLDENROD' => '#DAA520',
            'DARKGOLDENROD' => '#B8860B',
            'PERU' => '#CD853F',
            'CHOCOLATE' => '#D2691E',
            'SADDLEBROWN' => '#8B4513',
            'SIENNA' => '#A0522D',
            'BROWN' => '#A52A2A',
            'MAROON' => '#800000'
        );

        return $brownColors;
        
    }

    /**
     *  Return a list of ALL html/hex codes
     * 
     *  @author Adam Terry <adam@advite.com.au>
     *  @return array $allColors
     */
    public function hexAll(){

        $allColors = array(
            'WHITE' => '#FFFFFF',
            'SNOW' => '#FFFAFA',
            'HONEYDEW' => '#F0FFF0',
            'MINTCREAM' => '#F5FFFA',
            'AZURE' => '#F0FFFF',
            'ALICEBLUE' => '#F0F8FF',
            'GHOSTWHITE' => '#F8F8FF',
            'WHITESMOKE' => '#F5F5F5',
            'SEASHELL' => '#FFF5EE',
            'BEIGE' => '#F5F5DC',
            'OLDLACE' => '#FDF5E6',
            'FLORALWHITE' => '#FFFAF0',
            'IVORY' => '#FFFFF0',
            'ANTIQUEWHITE' => '#FAEBD7',
            'LINEN' => '#FAF0E6',
            'LAVENDERBLUSH' => '#FFF0F5',
            'MISTYROSE' => '#FFE4E1',
            'GAINSBORO' => '#DCDCDC',
            'LIGHTGRAY' => '#D3D3D3',
            'SILVER' => '#C0C0C0',
            'DARKGRAY' => '#A9A9A9',
            'GRAY' => '#808080',
            'DIMGRAY' => '#696969',
            'LIGHTSLATEGRAY' => '#778899',
            'SLATEGRAY' => '#708090',
            'DARKSLATEGRAY' => '#2F4F4F',
            'BLACK' => '#000000',
            'INDIANRED' => '#CD5C5C',
            'LIGHTCORAL' => '#F08080',
            'SALMON' => '#FA8072',
            'DARKSALMON' => '#E9967A',
            'LIGHTSALMON' => '#FFA07A',
            'CRIMSON' => '#DC143C',
            'RED' => '#FF0000',
            'FIREBRICK' => '#B22222',
            'DARKRED' => '#8B0000',
            'PINK' => '#FFC0CB',
            'LIGHTPINK' => '#FFB6C1',
            'HOTPINK' => '#FF69B4',
            'DEEPPINK' => '#FF1493',
            'MEDIUMVIOLETRED' => '#C71585',
            'PALEVIOLETRED' => '#DB7093',
            'LIGHTSALMON' => '#FFA07A',
            'CORAL' => '#FF7F50',
            'TOMATO' => '#FF6347',
            'ORANGERED' => '#FF4500',
            'DARKORANGE' => '#FF8C00',
            'ORANGE' => '#FFA500',
            'GOLD' => '#FFD700',
            'YELLOW' => '#FFFF00',
            'LIGHTYELLOW' => '#FFFFE0',
            'LEMONCHIFFON' => '#FFFACD',
            'LIGHTGOLDENRODYELLOW' => '#FAFAD2',
            'PAPAYAWHIP' => '#FFEFD5',
            'MOCCASIN' => '#FFE4B5',
            'PEACHPUFF' => '#FFDAB9',
            'PALEGOLDENROD' => '#EEE8AA',
            'KHAKI' => '#F0E68C',
            'DARKKHAKI' => '#BDB76B',
            'LAVENDER' => '#E6E6FA',
            'THISTLE' => '#D8BFD8',
            'PLUM' => '#DDA0DD',
            'VIOLET' => '#EE82EE',
            'ORCHID' => '#DA70D6',
            'FUCHSIA' => '#FF00FF',
            'MAGENTA' => '#FF00FF',
            'MEDIUMORCHID' => '#BA55D3',
            'MEDIUMPURPLE' => '#9370DB',
            'REBECCAPURPLE' => '#663399',
            'BLUEVIOLET' => '#8A2BE2',
            'DARKVIOLET' => '#9400D3',
            'DARKORCHID' => '#9932CC',
            'DARKMAGENTA' => '#8B008B',
            'PURPLE' => '#800080',
            'INDIGO' => '#4B0082',
            'SLATEBLUE' => '#6A5ACD',
            'DARKSLATEBLUE' => '#483D8B',
            'MEDIUMSLATEBLUE' => '#7B68EE',
            'GREENYELLOW' => '#ADFF2F',
            'CHARTREUSE' => '#7FFF00',
            'LAWNGREEN' => '#7CFC00',
            'LIME' => '#00FF00',
            'LIMEGREEN' => '#32CD32',
            'PALEGREEN' => '#98FB98',
            'LIGHTGREEN' => '#90EE90',
            'MEDIUMSPRINGGREEN' => '#00FA9A',
            'SPRINGGREEN' => '#00FF7F',
            'MEDIUMSEAGREEN' => '#3CB371',
            'SEAGREEN' => '#2E8B57',
            'FORESTGREEN' => '#228B22',
            'GREEN' => '#008000',
            'DARKGREEN' => '#006400',
            'YELLOWGREEN' => '#9ACD32',
            'OLIVEDRAB' => '#6B8E23',
            'OLIVE' => '#808000',
            'DARKOLIVEGREEN' => '#556B2F',
            'MEDIUMAQUAMARINE' => '#66CDAA',
            'DARKSEAGREEN' => '#8FBC8B',
            'LIGHTSEAGREEN' => '#20B2AA',
            'DARKCYAN' => '#008B8B',
            'TEAL' => '#008080',
            'AQUA' => '#00FFFF',
            'CYAN' => '#00FFFF',
            'LIGHTCYAN' => '#E0FFFF',
            'PALETURQUOISE' => '#AFEEEE',
            'AQUAMARINE' => '#7FFFD4',
            'TURQUOISE' => '#40E0D0',
            'MEDIUMTURQUOISE' => '#48D1CC',
            'DARKTURQUOISE' => '#00CED1',
            'CADETBLUE' => '#5F9EA0',
            'STEELBLUE' => '#4682B4',
            'LIGHTSTEELBLUE' => '#B0C4DE',
            'POWDERBLUE' => '#B0E0E6',
            'LIGHTBLUE' => '#ADD8E6',
            'SKYBLUE' => '#87CEEB',
            'LIGHTSKYBLUE' => '#87CEFA',
            'DEEPSKYBLUE' => '#00BFFF',
            'DODGERBLUE' => '#1E90FF',
            'CORNFLOWERBLUE' => '#6495ED',
            'MEDIUMSLATEBLUE' => '#7B68EE',
            'ROYALBLUE' => '#4169E1',
            'BLUE' => '#0000FF',
            'MEDIUMBLUE' => '#0000CD',
            'DARKBLUE' => '#00008B',
            'NAVY' => '#000080',
            'MIDNIGHTBLUE' => '#191970',
            'CORNSILK' => '#FFF8DC',
            'BLANCHEDALMOND' => '#FFEBCD',
            'BISQUE' => '#FFE4C4',
            'NAVAJOWHITE' => '#FFDEAD',
            'WHEAT' => '#F5DEB3',
            'BURLYWOOD' => '#DEB887',
            'TAN' => '#D2B48C',
            'ROSYBROWN' => '#BC8F8F',
            'SANDYBROWN' => '#F4A460',
            'GOLDENROD' => '#DAA520',
            'DARKGOLDENROD' => '#B8860B',
            'PERU' => '#CD853F',
            'CHOCOLATE' => '#D2691E',
            'SADDLEBROWN' => '#8B4513',
            'SIENNA' => '#A0522D',
            'BROWN' => '#A52A2A',
            'MAROON' => '#800000'
        );

        return $allColors;
        
    }
}