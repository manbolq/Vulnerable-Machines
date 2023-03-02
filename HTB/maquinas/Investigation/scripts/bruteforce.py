#/usr/bin/python3


import os, string, subprocess

characters = string.ascii_letters + string.digits


if __name__ == "__main__":
    for char in characters:
        if subprocess.check_output(["sudo", "./binary", char]) == 'b\'Exiting... \n':
            
        
