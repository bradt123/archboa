var  http = require("http");

http.createServer(function(request, response){
	response.writeHead(200, {"conect-Type": "text/html"});
	response.write("Hellow world!");
	response.end();	
}).listen(8888);



