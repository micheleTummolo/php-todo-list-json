<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vue Js cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Todo list</title>
    <link rel="shortcut icon" href="./img/icon-todo.png" type="image/x-icon">
</head>
<body class="bg-primary-subtle">
    <div id="app">
         <div class="container w-50"> 
            <div class="row mt-5">
                <div class="col">
                    <h1>Todo list</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="(item) in list">{{item}}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex">
                    <input class="form-control me-2" type="text" v-model="text">
                    <button class="btn btn-primary" @click="add">Aggiungi</button>
                </div>
            </div>
         </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>