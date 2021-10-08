window.onload = function() {
    var url = document.location.href,
    para = url.split('?')[1].split('&'),
    data = {}, tmp;

    for (var i = 0, l = para.length; i < l; i++) {
        tmp = para[i].split('=');
        data[tmp[0]] = tmp[1];
    }
    document.getElementById('result').innerHTML = data.title + data.name + data.email + data.phoneno + data.zipcode;
}