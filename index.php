<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
  <link rel="stylesheet" href="todo-style.css">
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
  <title>To-do List</title>
  <script src="todo.js"></script>



</head>

<body>

<div class="todo-body">
  <div class="todo">
    <div class="todo__ctrls">
      <input type="text" id="task" name="task" placeholder="Task Name..." value="">
      <input type="date" id="date" name="date" value="">
      <button type="button" id="addTask"><i class="material-icons">playlist_add</i></button>
    </div>


    <div class="todo__list">
      <ul id="taskList">

      </ul>
    </div>
  </div>
</div>




<script src="todoScript.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.1/umd/react.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.1/umd/react-dom.production.min.js"></script>
</body>
</html>
