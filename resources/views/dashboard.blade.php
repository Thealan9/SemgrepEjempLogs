<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Log Example</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.lgrckt-in.com/LogRocket.min.js" crossorigin="anonymous"></script>
    <script>window.LogRocket && window.LogRocket.init('lqgrmu/seguridad');</script>
</head>
<body>
   <div class="card">
    <img src="https://via.placeholder.com/300x200" alt="Producto">
    <h2>Audífonos Bluetooth</h2>
    <p>Sonido envolvente, batería de larga duración y diseño ergonómico.</p>
    <div class="price">$599 MXN</div>
    <div class="buttons">
      <button class="btn-cart" onclick="showConsole('PRODUCTO AÑADIDO AL CARRITO')" >Agregar al carrito</button>
      <button class="btn-details" onclick="showConsole('Redireccionando a los detalles')">Ver detalles</button>
    </div>
  </div>

<!-- <script src="https://cdn.lgrckt-in.com/LogRocket.min.js" crossorigin="anonymous"></script> -->
<script>
    if(typeof LogRocket !== 'undefined'){
        LogRocket.init('lqgrmu/seguridad');
    }else{
        console.error('LogRocket no se ha cargado correctamente');
    }
    function showConsole(id){
        if(typeof LogRocket !== 'undefined'){
            LogRocket.identify(id);
            console.log(id);
        }
    }

    function logMessage(message){
        console.log(message);
        if(typeof LogRocket !== 'undefined'){
            LogRocket.log(message);
        }
        fetch('log.php',{
            method:'POST',
            headers:{'Content-Type':'application/json'},
            body: JSON.stringify({message})
        })
        .then(response=> response.text())
        .then(data => console.log(data));
    }
</script>
</body>
</html>
</x-app-layout>
