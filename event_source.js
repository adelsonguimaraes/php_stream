if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("flush.php", {
        withCredentials: true // adicionando suporte a cors
    });
    source.onmessage = function(event) {
        let data = JSON.parse(event.data);
        if (data.monster === 'SIM') {
            if ( document.getElementById("monster").style.display === 'block') return false;
            document.getElementById("monster").style.display = 'block';
            document.getElementById("msg").innerHTML = "<h1>UM MOB APARECEU!</h1>";
            let audio = new Audio('epic song.mp3');
            audio.volume = 0.05;
            audio.play();

            // setTimeout(()=>{
            //     document.getElementById("monster").style.display = 'none';
            //     document.getElementById("msg").innerHTML = "";
            // }, 5000);

        }else{
            document.getElementById("monster").style.display = 'none';
            document.getElementById("msg").innerHTML = "";
        }
    };
    source.addEventListener('teste', function(e) {
        console.warn('ok');
    });
  } else {
    // Sorry! No server-sent events support..
  }

  
// document.getElementById("monster").style.display = 'block';
//             document.getElementById("msg").innerHTML = "<h1>UM MOB APARECEU!</h1>";
//             let audio = new Audio('epic song.mp3');