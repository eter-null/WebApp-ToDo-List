
const taskStatusButtons = document.querySelectorAll('.task__status');


taskStatusButtons.forEach(button => {
    button.addEventListener('click', function() {

        const checkboxIcon = button.querySelector('i.material-icons');
        if (checkboxIcon.textContent === 'check_box_outline_blank') {
            checkboxIcon.textContent = 'check_box';
        } else {
            checkboxIcon.textContent = 'check_box_outline_blank';
        }

        const taskTitle = button.parentNode.querySelector('.task__title');
        taskTitle.classList.toggle('crossout');
    });
});
