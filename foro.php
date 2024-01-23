
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo-foro.css">
    <title>FORO</title>
</head>

<body>
    <div id="head-top"></div>

    <div id="head-menu">
        <button id="otroDiv"> +DIV </button>
    </div>

    <div id="foro-container">



        <div id="postUltimo" class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primiiiiiiiiiii   Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>






        <div id="postPenultimo" class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primer Post Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>







        <div id="postAntepenUltimo"class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primer Post Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>









        <div id="postTRansAntepenUltimo" class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primer Post Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>








        <div id="postTTApUltimo" class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primer Post Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>







        <div id="postuuttapUltimo" class="post">
            <div class="miniatura">
                <img src="tecnologia.jpg" alt="Imagen del post">
            </div>
            <div class="contenidoMin">
                <div class="tiuloCajaPost">
                    <h2 class="tituloPost">Primer Post Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </div>
                <div class="postCajaFecha">
                    <p class="fechapost">55055055</p>
                </div>
                <div class="nota">
                    <p class="articuloCont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto eos minus, veritatis
                        similique harum inventore...
                    </p>
                </div>
                <div class="leer-mas" onclick="expandirNota('nota1')">Leer más . . . </div>
            </div>
        </div>

        
    </div>

    <script>

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            
          if(this.readyState == 4 && this.status == 200){
            
            var post = JSON.parse(this.responseText);
  
            document.querySelector('#postUltimo .tituloPost').innerText = post.titulo;
            document.querySelector('#postUltimo .fechapost').innerText = post.fecha;     
            document.querySelector('#postUltimo .articuloCont').innerText = post.contenido;
  
          }
        };
  
        xhr.open('GET', 'cargando.php');
        xhr.send();
  
      </script>
    
    
    
</body>

</html>