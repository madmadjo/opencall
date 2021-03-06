<?php
return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          [17]\\d{6,9}|
          [2-69]\\d{7,9}|
          8\\d{6,8}
        ',
    'PossibleNumberPattern' => '\\d{7,10}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          (?:
            2(?:
              [025-79]|
              1[0189]|
              [348][01]
            )|
            3(?:
              [0136-9]|
              [25][01]
            )|
            4\\d|
            5(?:
              [01][01]|
              [2-9]
            )|
            6(?:
              [0-46-8]|
              5[01]
            )|
            7(?:
              [02-79]|
              [18][01]
            )|
            8[1-9]
          )\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{9,10}',
    'ExampleNumber' => '2101234567',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          (?:
            9\\d|
            1(?:
              2\\d|
              6[2-9]|
              8[68]|
              99
            )
          )\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{9,10}',
    'ExampleNumber' => '912345678',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '1800\\d{4,6}',
    'PossibleNumberPattern' => '\\d{8,10}',
    'ExampleNumber' => '1800123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '1900\\d{4,6}',
    'PossibleNumberPattern' => '\\d{8,10}',
    'ExampleNumber' => '1900123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => '
          [17]99\\d{4}|
          69\\d{5,6}
        ',
    'PossibleNumberPattern' => '\\d{7,8}',
    'ExampleNumber' => '1992000',
  ),
  'id' => 'VN',
  'countryCode' => 84,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '([17]99)(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[17]99',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '([48])(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[48]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '([235-7]\\d)(\\d{4})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2[025-79]|
            3[0136-9]|
            5[2-9]|
            6[0-46-8]|
            7[02-79]
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    3 => 
    array (
      'pattern' => '(80)(\\d{5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '80',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    4 => 
    array (
      'pattern' => '(69\\d)(\\d{4,5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '69',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    5 => 
    array (
      'pattern' => '([235-7]\\d{2})(\\d{4})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2[1348]|
            3[25]|
            5[01]|
            65|
            7[18]
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    6 => 
    array (
      'pattern' => '(9\\d)(\\d{3})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '9',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    7 => 
    array (
      'pattern' => '(1[2689]\\d)(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            1(?:
              [26]|
              8[68]|
              99
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    8 => 
    array (
      'pattern' => '(1[89]00)(\\d{4,6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '1[89]0',
      ),
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);