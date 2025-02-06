#!/usr/bin/php
<?PHP     ###>   Richard Eric Walts. Auto header from new-script.sh
##########################################################################################
###> New x php -> add_var.php  -> Initial creation user => eric => 2024-12-01_17:22:01 ###
##########################################################################################
#_#>

###> CLI colors
# $Red='\e[0;31m'; $BRed='\e[1;31m'; $BIRed='\e[1;91m'; $Gre='\e[0;32m'; $BGre='\e[1;32m'; $BBlu='\e[1;34m'; $BWhi='\e[1;37m'; $RCol='\e[0m';
$__dir__=__dir__; function fail( $str){  print( "\e[0;31m".$str."\e[0m\n");}  function pass( $str){     echo "\e[1;32m".$str ."\e[0m"."\n"; }
###>	$pass=false;
###>	if( !$pass){   fail( $Msg);  }else{     pass( $Msg); }

$file = trim(readline("File to read: "));
$inv=yaml_parse_file($file,0);
foreach($inv as $key => $val){
    $go=trim(readline("Add var to group $key?"));
    if(preg_match('/y/i',$go)){
	
	$var = trim(readline("Variable name: "));
	$val = trim(readline("Var value: "));
	$inv[$key]['vars'][$var] = $val;
    }
}
$yml=yaml_emit($inv, YAML_UTF8_ENCODING, YAML_ANY_BREAK);
echo "$yml";
$h=fopen('new_inventory.yml', 'w');
fwrite($h,$yml);

print_r($inv);
#echo 'file='.$file.' var='.$var.' val='.$val."\n";
