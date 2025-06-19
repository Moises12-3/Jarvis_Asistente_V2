

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asistente Jarvis</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"><i class="menu-icon fa fa-home"></i>Inicio</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-cube"></i>Productos
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-cube"></i><a href="VerProductos.php">Ver Productos</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="AgregarProductos.php">Agregar Productos</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-users"></i>Usuarios
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-users"></i><a href="VerUsuario.php">Ver Usuarios</a></li>
                        <li><i class="menu-icon fa fa-user-plus"></i><a href="AgregarUsuario.php">Agregar Usuario</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-users"></i>Clientes
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-address-book"></i><a href="VerClientes.php">Ver Clientes</a></li>
                        <li><i class="menu-icon fa fa-user-plus"></i><a href="AgregarClientes.php">Nuevo Cliente</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-shopping-cart"></i>Vender
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="Ventas.php">Vender</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-pie-chart"></i>Reportes de ventas
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map"></i><a href="VerReportes.php">Visualizar Reportes</a></li>                    
                        <li><i class="menu-icon fa fa-file-invoice"></i><a href="ver_facturas.php">Ver facturas</a></li>                
                        <li><i class="menu-icon fa fa-clock"></i><a href="verfechavencimiento.php">Ver Fecha Vencimiento</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-cogs"></i>Configuración
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-money"></i><a href="AjusteMoneda.php">Moneda</a></li>
                        <li><i class="fa fa-credit-card"></i><a href="AjustesTipoPago.php">Tipo Pago</a></li>
                        <li><i class="fa fa-balance-scale"></i><a href="AjusteUnidad.php">Unidad de peso</a></li>
                        <li><i class="fa fa-calculator"></i><a href="AjustesImpuestos.php">Impuestos</a></li>
                        <li><i class="fa fa-building"></i><a href="ConfigurarEmpresas.php">Configurar Empresas</a></li>
                    </ul>
                </li>
            </ul>

            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">


                        
                        <div class="dropdown for-message">
                            <a class="nav-link" href="#" onclick="toggleFullscreen(event)">
                                <i class="fa fa-expand" id="fullscreenIcon"></i> Ver Pantalla completa
                            </a>                   
                        </div>

                        <script>
                        function toggleFullscreen(event) {
                            event.preventDefault();

                            if (!document.fullscreenElement) {
                                document.documentElement.requestFullscreen()
                                    .then(() => {
                                        sessionStorage.setItem('fullscreenActive', 'true');
                                        updateIcon(true);
                                    })
                                    .catch((err) => {
                                        alert(`Error: ${err.message} (${err.name})`);
                                    });
                            } else {
                                document.exitFullscreen()
                                    .then(() => {
                                        sessionStorage.setItem('fullscreenActive', 'false');
                                        updateIcon(false);
                                    });
                            }
                        }

                        function updateIcon(isFullscreen) {
                            const icon = document.getElementById('fullscreenIcon');
                            if (isFullscreen) {
                                icon.classList.remove('fa-expand');
                                icon.classList.add('fa-compress');
                            } else {
                                icon.classList.remove('fa-compress');
                                icon.classList.add('fa-expand');
                            }
                        }

                        // Al cargar la página, verifica si el usuario quería pantalla completa
                        document.addEventListener('DOMContentLoaded', () => {
                            if (sessionStorage.getItem('fullscreenActive') === 'true') {
                                // Solo se puede activar tras interacción, así que muestra un mensaje o botón para que el usuario lo active
                                // Aquí solo actualizamos el icono para reflejar la intención
                                updateIcon(true);
                                // Opcional: mostrar mensaje para pedir que active pantalla completa manualmente
                                console.log("Recuerda activar pantalla completa con el botón si quieres continuar.");
                            }
                        });

                        // Detecta cambios en pantalla completa para actualizar el icono
                        document.addEventListener('fullscreenchange', () => {
                            updateIcon(!!document.fullscreenElement);
                            if (!document.fullscreenElement) {
                                sessionStorage.setItem('fullscreenActive', 'false');
                            }
                        });
                        </script>


                    </div>

                    <div class="user-area dropdown float-right">

                        <?php
                        require 'Conexion/conex.php'; // Conexión a la base de datos
                        // session_start(); // Asegúrate de tener esto activado si usas sesiones

                        $id_usuario = $_SESSION['id'] ?? null;

                        $foto = 'images/favicon.png'; // Imagen por defecto

                        if ($id_usuario) {
                            $sql = "SELECT foto_perfil FROM usuarios WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id_usuario);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result && $row = $result->fetch_assoc()) {
                                if (!empty($row['foto_perfil'])) {
                                    $foto = $row['foto_perfil']; // Usar la ruta guardada en la base de datos
                                }
                            }
                            $stmt->close();
                        }
                        ?>

                        <a href="MyProfile.php" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo htmlspecialchars($foto); ?>" alt="Foto de perfil">
                        </a>


                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="MyProfile.php"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="cerrar_sesion.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-body">
    <script src="js/Ajax.js"></script>
<style>

h1 {
    text-align: center;
    color: #333;
}

.chat-box {
    width: 100%;
    max-width: 600px;
    height: 400px;
    margin: 20px auto;
    background-color: #fff;
    border: 2px solid #ccc;
    border-radius: 10px;
    overflow-y: auto;
    padding: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.message {
    margin: 10px 0;
    padding: 10px 15px;
    border-radius: 20px;
    max-width: 70%;
    clear: both;
}

.message.user {
    background-color: #DCF8C6;
    float: right;
    text-align: right;
}

.message.bot {
    background-color: #E5E5EA;
    float: left;
    text-align: left;
}

.input-container {
    width: 100%;
    max-width: 600px;
    margin: auto;
    display: flex;
    gap: 10px;
}

#mensaje {
    flex-grow: 1;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid #ccc;
    outline: none;
}

#enviarBtn {
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#enviarBtn:hover {
    background-color: #45a049;
}

#respuesta {
    width: 100%;
    max-width: 600px;
    height: 200px;         /* altura fija para que aparezca el scroll */
    margin: 0 auto;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 15px;
    background-color: #fff;
    overflow-y: auto;      /* Scroll vertical automático */
    overflow-x: hidden;    /* Evita scroll horizontal */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

</style>
    <h1>Jarvis Asistente Virtual</h1>
    <br>

    <video id="video" width="320" height="240" autoplay style="display:none;"></video>
    <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
    <!-- Aquí mostraremos la respuesta del servidor -->
    <div id="respuesta"></div>

    <hr>
    <!-- Caja para escribir mensaje y botón -->
    <div class="input-container">
        <input type="text" id="mensaje" placeholder="Escribe tu mensaje aquí...">
        <button id="enviarBtn">Enviar</button>
        <button id="vozBtn">🎤 Hablar</button>


    </div>



 


        <script>
$(document).ready(function() {
    actualizarHistorial(); // Carga el historial al abrir la página

function enviarMensaje() {
    var texto = $('#mensaje').val().trim();
    actualizarHistorial(); // Carga el historial al abrir la página

    if(texto === '') {
        alert('Por favor, escribe un mensaje');
        actualizarHistorial(); // Carga el historial al abrir la página
        return;
    }
    $.ajax({
        url: 'enviar.php',
        method: 'POST',
        data: { mensaje: texto },
        success: function(response) {
            try {
                var data = JSON.parse(response);
                if(data.tipo === 'foto') {
                    // Mostrar mensaje de cámara
                    //alert(data.mensaje);
                    actualizarHistorial(); // Carga el historial al abrir la página
                    // Solo tomar foto si el servidor indica que sí
                    setTimeout(tomarFoto, 1000);
                    actualizarHistorial(); // Carga el historial al abrir la página
                } else if(data.tipo === 'texto') {
                    // Mostrar respuesta normal
                    $('#respuesta').html(data.html);
                    if(data.ultima_respuesta) {
                        hablar(data.ultima_respuesta);
                        actualizarHistorial(); // Carga el historial al abrir la página
                    }
                }
            } catch(e) {
                // Si la respuesta no es JSON, la mostramos cruda
                $('#respuesta').html(response);
            }

            $('#mensaje').val('');
            $('#respuesta').scrollTop(0);
        },
        error: function() {
            const errorMsg = "Error en el servidor.";
            $('#respuesta').append('<div class="message bot">' + errorMsg + '</div>');
            hablar(errorMsg);
        }
    });
    actualizarHistorial(); // Carga el historial al abrir la página
}

    // Enviar al hacer click en el botón
    $('#enviarBtn').click(function() {
        enviarMensaje();
    });

    // Enviar al presionar Enter dentro del textarea
    $('#mensaje').keydown(function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();  // Evita el salto de línea
            enviarMensaje();
        }
    });
    
});

document.getElementById('vozBtn').addEventListener('click', function () {
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        alert("Tu navegador no soporta reconocimiento de voz. Usa Google Chrome o Microsoft Edge (basado en Chromium).");
        return;
    }

    const reconocimiento = new SpeechRecognition();
    reconocimiento.lang = 'es-ES';
    reconocimiento.interimResults = false;

    reconocimiento.onstart = function () {
        console.log("🎙️ Escuchando...");
    };

    reconocimiento.onresult = function (event) {
        const texto = event.results[0][0].transcript;
        document.getElementById('mensaje').value = texto;
        document.getElementById('enviarBtn').click(); // Simula enviar
    };

    reconocimiento.onerror = function (event) {
        let msg = "Error al reconocer la voz. ";
        switch (event.error) {
            case 'not-allowed':
                msg += "Permiso denegado. Activa el micrófono.";
                break;
            case 'network':
                msg += "Error de red.";
                break;
            case 'no-speech':
                msg += "No se detectó voz.";
                break;
            default:
                msg += "Intenta de nuevo.";
        }
        alert(msg);
    };

    reconocimiento.start();
});



function hablar(texto) {
    const voz = new SpeechSynthesisUtterance(texto);
    voz.lang = 'es-ES'; // Español
    speechSynthesis.speak(voz);
}

function actualizarHistorial() {
    $.ajax({
        url: 'ver_historial.php',
        method: 'GET',
        dataType: 'json',  // Importante para recibir JSON
        success: function(data) {
            $('#respuesta').html(data.html);
            $('#respuesta').scrollTop(0);  // Ajusta el scroll

            if(data.ultima_respuesta) {
                //hablar(data.ultima_respuesta);
            }
        },
        error: function() {
            $('#respuesta').html("<div class='message bot'>Error al cargar el historial.</div>");
        }
    });
}

function tomarFoto() {
  const video = document.getElementById('video');
  const canvas = document.getElementById('canvas');

  // Mostrar video y pedir cámara
  video.style.display = 'block';
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;

      setTimeout(() => {
        // Capturar imagen
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        const fotoBase64 = canvas.toDataURL('image/jpeg');

        // Parar cámara
        stream.getTracks().forEach(track => track.stop());
        video.style.display = 'none';

        // Enviar foto al servidor
        fetch('guardar_foto.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: 'foto=' + encodeURIComponent(fotoBase64)
        })
        .then(response => response.json())
        .then(data => {
          if (data.exito) {
            //alert('Foto guardada en: ' + data.ruta);
            // Aquí puedes actualizar el historial o hacer lo que quieras
            actualizarHistorial(); // Carga el historial al abrir la página
          } else {
            alert('Error al guardar la foto: ' + (data.error || 'desconocido'));
          }
        });
      }, 3000); // Esperar 3 segundos

    })
    .catch(err => {
      alert('Error acceso a cámara: ' + err.message);
    });
    actualizarHistorial(); // Carga el historial al abrir la página
}

// En tu función que recibe la respuesta del PHP:
function manejarRespuesta(data) {
  if(data.tipo === 'foto') {
    tomarFoto();
    actualizarHistorial(); // Carga el historial al abrir la página
  } else {
    // Procesar otros tipos de respuesta normales...
  }
}




</script>



                                    </div>
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2025 Aaron Carrasco
                    </div>
                    <div class="col-sm-6 text-right">
                        Desarrollado por <a href="https://colorlib.com">Aaron Moises Carrasco Thomas</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

</body>
</html>
