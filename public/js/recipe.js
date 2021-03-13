function addIngredientLine() {
    var ingredientTemplate = document.getElementById("ingredientsTemplate");
    document.getElementById("ingredients").append(ingredientTemplate.content.cloneNode(true));
}

function deleteIngredientLine() {
    var ingredients = document.getElementById("ingredients");
    ingredients.removeChild(ingredients.lastElementChild);
}

function addTaskLine() {
    var taskTemplate = document.getElementById("tasksTemplate");
    document.getElementById("tasks").append(taskTemplate.content.cloneNode(true));
}

function deleteTaskLine() {
    var tasks = document.getElementById("tasks");
    tasks.removeChild(tasks.lastElementChild);
}


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
  });

//javascript is such a fucking language, just trial and error to success, go fuck yourself ECMASCRIPT