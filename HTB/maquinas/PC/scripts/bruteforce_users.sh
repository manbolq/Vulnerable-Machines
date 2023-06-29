#!/bin/bash

while read -r username; 
do
  echo $username
  grpc_cli call 10.10.11.214:50051 RegisterUser "username: '$username', password: 'tetas'"
done < $1
