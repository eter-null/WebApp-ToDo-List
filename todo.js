document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById("addTask");
    const taskList = document.getElementById("taskList");


    addButton.addEventListener("click", function () {
        const task = document.getElementById("task").value;
        const date = document.getElementById("date").value;

        if (task === '') {
            alert("Please fill in the field.");
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "insert_task.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const updatedTasks = JSON.parse(xhr.responseText);
                updateTaskList(updatedTasks);
            }
        };
        xhr.send(`task=${encodeURIComponent(task)}&date=${encodeURIComponent(date)}`);
    });

    function updateTaskList(tasks) {
        taskList.innerHTML = '';
        tasks.forEach(task => {
            const li = document.createElement('li');
            li.innerHTML = `
    <div class="task">
      <button type="button" class="task__status" onclick="toggleTask(this)">
        <i class="material-icons">check_box_outline_blank</i>
      </button>
      <div class="task__title">${task.task}</div>
      <div class="task__ctrls">
        <button type="button"><i class="material-icons">edit</i></button>
        <button type="button"><i class="material-icons">delete</i></button>
      </div>
    </div>
  `;
            taskList.appendChild(li);
        });
    }
});
