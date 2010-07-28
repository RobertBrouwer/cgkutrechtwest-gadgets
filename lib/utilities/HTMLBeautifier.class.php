<?php // jEdit :folding=indent: :collapseFolds=1: :noTabs=true:
/**
* contains class {@link HTMLBeautifier}
* @package utilities
* @author Tobias Schlatter, Thomas Katzlberger
*/

/**
* class to beautify html
*
* this class is useful for debugging html generated by php scripts, which is often quite unreadable.
* using {@link HTMLBeautifier} the html becomes more beautiful
* @package utilities
*/
class HTMLBeautifier {
    
    /**
    * beautify html
    * @param string $html html to beautify
    * @return string beautified html
    * @static
    */
function beautify($html) {
        
        $depth = 0;
        $inTag = 0;
        /* 0 = not in tag
        *  1 = in opening tag
        *  2 = in closing tag
        */
        $html = trim($html);
        $newHTML = '';
        
        while ($html != '') {
            $c = mb_substr($html,0,1);
            $html = mb_substr($html,1);
            
            if ($inTag == 1 && $c == '>') {
                $html = trim($html);
                $inTag = 0;
                $depth++;
                $newHTML .= ">";
                if (mb_substr($html,0,1) != '<')
                     $newHTML .= "\n" . str_repeat(' ', 4 * $depth);
                continue;
            }
            
            if ($inTag == 1 && $c == '/' && mb_substr($html,0,1) == '>') {
                $html = trim(mb_substr($html,1));
                $inTag = 0;
                $newHTML .= "/>";
                if (mb_substr($html,0,1) != '<')
                     $newHTML .= "\n" . str_repeat(' ', 4 * $depth);
                continue;
            }
            
            if ($inTag == 2 && $c == '>') {
                $html = trim($html);
                $inTag = 0;
                $newHTML .= ">";
                if (mb_substr($html,0,1) != '<')
                     $newHTML .= "\n" . str_repeat(' ', 4 * $depth);
                continue;
            }
            
            if ($inTag == 0 && $c == '<') {
                if (mb_substr($html,0,1) == '/') {
                    $depth--;
                    $inTag = 2;
                } else
                    $inTag = 1;
                $newHTML .= "\n" . str_repeat(' ', 4 * $depth) . '<';
                continue;
            }
                
            $newHTML .= $c;
            
        }
        
        return $newHTML;
        
    }
    
}

?>
