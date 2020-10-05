if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("flush.php", {
        withCredentials: true // adicionando suporte a cors
    });
    source.onmessage = function(event) {
        document.getElementById("result").innerHTML += event.data + "<br>";
    };
    source.addEventListener('teste', function(e) {
        console.warn('ok');
    });
  } else {
    // Sorry! No server-sent events support..
  }