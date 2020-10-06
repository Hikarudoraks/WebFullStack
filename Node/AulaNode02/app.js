var http = require("http");
var operacoes = require("./operacoes");

http.createServer(function (req, res) {
  res.writeHead(200, {"Content-Type": "text/html"});
  res.write(
  	"A soma de 7 + 7 eh: " + operacoes.adicao(7, 7) + 
  	"<br>A soma de 7 - 7 eh: " + operacoes.subtracao(7,7)
   );
  res.write("<br>A soma de 7 x 7 eh: " + operacoes.multiplicacao(7, 7));
  res.write("<br>A soma de 7 / 7 eh: " + operacoes.divisao(7, 7));
  res.end();
}).listen(8081);