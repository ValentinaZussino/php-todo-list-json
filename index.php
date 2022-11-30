<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="./js/script.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <!-- header -->
        <header class="vz_header">
            <div class="vz_header-content">
                <a href="" class="vz_logo">
                    <img src="./img/Logo.png" alt="logo boolean">
                </a>
                <ul class="mb-0 d-flex align-items-center justify-content-center list-unstyled vz_menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Todo</a></li>
                    <li><a href="#">Altro</a></li>
                    <li><a href="#">Altro</a></li>
                </ul>
                <div class="vz_hamburger" @click="toggleHamburger">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <!-- list -->
        <div class="green-rectangle"></div>
        <div class="app-container">
            <h1 class="text-center fw-bold mb-4">Todolist</h1>
            <!-- input per aggiungere -->
            <div class="add-div">
                <span class="fw-bold d-block">New Todo:</span>
                <input v-model="newTodoText" name="newTodoText" type="text" class="me-3" @keyup.enter="addTodo">
                <button class="vz_btn" @click="addTodo">Add</button>
            </div>
            <!-- lista aggiunte -->
            <div class="list-div">
                <ul v-if="todoList.length > 0" class="mt-3 list-unstyled">
                    <li v-for="(todo, index) in todoList" :key="index" class="mb-2">
                        <span class="vz_cross pe-3" @click="cancellaTodo(index)"><i class="fa-regular fa-trash-can"></i></span>
                        <span :class="todo.done ? 'vz_done-true' : ''" @click="toggleTodo(index)">{{todo.text}}</span>
                    </li>
                </ul>
                <div v-else>Your list is empty</div>
            </div>

        </div>
    </div>
</body>
</html>