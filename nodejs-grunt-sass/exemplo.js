var http = require('http');
http.createServer(function (req, res) {
	res.writeHead(200, {'Content-Type': 'text/html; charset=utf-8'});
	res.end('<h2>Olá Mundo</h2>');
}).listen(1337, '127.0.0.1');
console.log('Server running at http://127.0.0.1:1337/. Ctrl+C to finish...');