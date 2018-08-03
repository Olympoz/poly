<?


function cleanString($text) {
    $utf8 = array(
        '/[áàâãªä]/u'       =>   'a',
        '/[ÁÀÂÃÄ]/u'        =>   'A',
        '/[ÍÌÎÏ]/u'         =>   'I',
        '/[íìîï]/u'         =>   'i',
        '/[éèêë]/u'         =>   'e',
        '/[ÉÈÊË]/u'         =>   'E',
        '/[óòôõºö]/u'       =>   'o',
        '/[ÓÒÔÕÖ]/u'        =>   'O',
        '/[úùûü]/u'         =>   'u',
        '/[ÚÙÛÜ]/u'         =>   'U',
        '/ç/'               =>   'c',
        '/Ç/'               =>   'C',
        '/ñ/'               =>   'n',
        '/Ñ/'               =>   'N',
        '/–/'               =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'        =>   '', // Literally a single quote
        '/[“”\'\'«»„]/u'    =>   '', // Double quote
        '/ /'               =>   '', // nonbreaking space (equiv. to 0x160)
        '/\//'              =>   '',
        '/\(/'              =>   '',
        '/\)/'              =>   '',
        '/\#/'              =>   '',
        '/\:/'              =>   '',
        '/\;/'              =>   '',
        '/\&/'              =>   '',
        '/\=/'              =>   '',
        '/\+/'              =>   '',
        '/\-/'              =>   '',
        '/\?/'              =>   '',
        '/\%/'              =>   '',
        '/\§/'              =>   '',
        '/\!/'              =>   '',
        '/\°/'              =>   '',
        '/\_/'              =>   '',
        '/\*/'              =>   '',
        '/\$/'              =>   '',
        '/\^/'              =>   '',


    );
    
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
  };


function normalizeString ($str = '')
{
    $str = strip_tags($str); 
    $str = preg_replace('/[\r\n\t ]+/', ' ', $str);
    $str = preg_replace('/[\"\*\/\:\<\>\?\'\|]+/', ' ', $str);
    $str = strtolower($str);
    $str = html_entity_decode( $str, ENT_QUOTES, "utf-8" );
    $str = htmlentities($str, ENT_QUOTES, "utf-8");
    $str = preg_replace("/(&)([a-z])([a-z]+;)/i", '$2', $str);
    $str = str_replace(' ', '-', $str);
    $str = rawurlencode($str);
    $str = str_replace('%', '-', $str);
    return $str;
}