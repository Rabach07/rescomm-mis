<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function compress() {

    ini_set("pcre.recursion_limit", "16777");
    $CI =& get_instance();
    $buffer = $CI->output->get_output();

    $re = '%# Collapse whitespace everywhere but in blacklisted elements.
        (?>             # Match all whitespans other than single space.
          [^\S ]\s*     # Either one [\t\r\n\f\v] and zero or more ws,
        | \s{2,}        # or two or more consecutive-any-whitespace.
        ) # Note: The remaining regex consumes no text at all...
        (?=             # Ensure we are not in a blacklist tag.
          [^<]*+        # Either zero or more non-"<" {normal*}
          (?:           # Begin {(special normal*)*} construct
            <           # or a < starting a non-blacklist tag.
            (?!/?(?:textarea|pre|yudev|script|code)\b)
            [^<]*+      # more non-"<" {normal*}
          )*+           # Finish "unrolling-the-loop"
          (?:           # Begin alternation group.
            <           # Either a blacklist start tag.
            (?>textarea|pre|yudev|script|code)\b
          | \z          # or end of file.
          )             # End alternation group.
        )  # If we made it here, we are not in a blacklist tag.
        %Six';

    $new_buffer = preg_replace($re, " ", $buffer);

    // We are going to check if processing has working
    if ($new_buffer === null) {
        $new_buffer = $buffer;
    }

    $CI->output->set_output($new_buffer);
    $CI->output->_display();

    /*$CI =& get_instance();
    $buffer = $CI->output->get_output();

    $inline_scripts=array();
    if (preg_match_all('|([removed]]*?&gt;.*?<\/script>)|is', $buffer, $pock)) {
      foreach ($pock[1] as $key=>$content) {
        $inline_scripts['INLINE_SCRIPT_'.$key]=$content;
      }
      $buffer=str_replace(array_values($inline_scripts), array_keys($inline_scripts), $buffer);
    }

    $search = array(
      '/\>[^\S ]+/s',
      '/[^\S ]+\</s',
      '/(\s)+/s',
    );
    $replace = array(
      '>',
      '<',
      '\\1',
    );

    $buffer = preg_replace($search, $replace, $buffer);

    if (count($inline_scripts)>0) {
      buffer=str_replace(array_keys($inline_scripts), array_values($inline_scripts), $buffer);
    }

    $CI->output->set_output($buffer);
    $CI->output->_display();*/

    /* old method
      $CI =& get_instance();
      $buffer = $CI->output->get_output();

      $search = array(
          '/\>[^\S ]+/s',    //strip whitespaces after tags, except space
          '/[^\S ]+\</s',    //strip whitespaces before tags, except space
          '/(\s)+/s'    // shorten multiple whitespace sequences
          );
      $replace = array(
          '>',
          '<',
          '\\1'
          );
      $buffer = preg_replace($search, $replace, $buffer);

      $CI->output->set_output($buffer);
      $CI->output->_display();
    **/
}

/* End of file compress.php */
/* Location: ./system/application/hooks/compress.php */