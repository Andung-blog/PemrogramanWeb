const todoInput = document.getElementById("todo-input");
const todoList = document.getElementById("todo-list");

function addTodo() {
  const task = todoInput.value.trim();

  if (task === "") {
    alert("Masukkan Task Dahulu");
    return;
  }

  const li = document.createElement("li");

  const input = document.createElement("input");
  input.type = "text";
  input.value = task;
  input.setAttribute("readonly", "readonly");
  input.classList.add("task-input");

  const editButton = document.createElement("button");
  editButton.textContent = "Edit";
  editButton.addEventListener("click", () => {
    if (editButton.textContent === "Edit") {
      input.removeAttribute("readonly");
      input.focus();
      editButton.textContent = "Save";
    } else {
      input.setAttribute("readonly", "readonly");
      editButton.textContent = "Edit";
    }
  });

  const deleteButton = document.createElement("button");
  deleteButton.textContent = "Delete";
  deleteButton.addEventListener("click", () => {
    todoList.removeChild(li);
  });

  li.appendChild(input);
  li.appendChild(editButton);
  li.appendChild(deleteButton);
  todoList.appendChild(li);

  todoInput.value = "";
}
