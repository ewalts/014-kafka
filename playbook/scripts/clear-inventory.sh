#!/bin/bash
##################################################################################################
###> New x bash -> clear-inventory.sh  -> Initial creation user => eric => 2024-02-26_12:12:23 ###
##################################################################################################
#_#>
# CLI Colors
Red='\e[0;31m'; BRed='\e[1;31m'; BIRed='\e[1;91m'; Gre='\e[0;32m'; BGre='\e[1;32m'; BBlu='\e[1;34m'; BWhi='\e[1;37m'; RCol='\e[0m';

cp "$1/playbook/inventory/inventory.yml_bkp"  "$1/playbook/inventory/inventory.yml"

#echo "$1/playbook/inventory/invbentory.yml_bkp"
