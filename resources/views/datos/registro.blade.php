<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combo dinamico</title>
    <script src="{{asset('jquery-3.3.1.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script>
        $(document).ready(function(){
           $("#estados").on('change', function(){
                var estados_id = $(this).find(":selected").val();
                console.log(estados_id);
                if (estados_id==0) {
                    $("#municipios").html('<option value="0"> --- Seleccione antes un estado --- </option>');
                }else{
                    $("#municipios").load('ver_municipios?estados_id=' + estados_id);
                }
           });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Formulario</h1>

        <hr>

        <select name="estados" id="estados" >
            <option value="0">--- Seleccione un estado ----</option>
            @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->nombre}}</option>
            @endforeach
        </select>
        <hr>
        <select name="municipios" id="municipios" >
            <option value="0">--- Seleccione un estado antes ----</option>
        </select>
        <br>
    </div>
</body>
</html>