if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("flush.php", {
        withCredentials: true // adicionando suporte a cors
    });
    source.onmessage = function(event) {
        let data = JSON.parse(event.data);
        document.getElementById("result").innerHTML += data.nome + "<br>";
    };
    source.addEventListener('teste', function(e) {
        console.warn('ok');
    });
  } else {
    // Sorry! No server-sent events support..
  }