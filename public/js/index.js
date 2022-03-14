//click in elements the DOM
document.addEventListener(
    "click",
    function (event) {
        // next step
        if (event.target.matches(".next") || event.target.matches(".back")) {
            event.preventDefault();
            const step = event.target.id.replace("step_", "");
            const currenTab = document.getElementById("step_" + step);
            const counter = event.target.matches(".next")
                ? parseInt(step) + 1
                : parseInt(step) - 1;
            let nextTab = null;
            if (document.getElementById("step_" + counter))
                nextTab = document.getElementById("step_" + counter);
            if (nextTab) {
                nextTab.classList.add("d-block");
                currenTab.classList.remove("d-block");
                currenTab.classList.add("d-none");
            }
        }
    },
    false
);
//click en el chekcbos seleccionado
const selectedSteps = [
    document.getElementsByClassName("step_1"),
    document.getElementsByClassName("step_2"),
    document.getElementsByClassName("step_3"),
    document.getElementsByClassName("autorization"),
];
//recorremos todos los check con la misma clase, les quitamos el checked y luego solo lo agremos al que estamos clickeando
for (let r = 0; r < selectedSteps.length; r++) {
    const element = selectedSteps[r];
    for (var i = 0; i < element.length; i++) {
        element[i].onclick = function (e) {
            deSelect(e.target.classList[1]?e.target.classList[1]:e.target.classList[0]);
            e.target.checked = true;
        };
    }
}
//para deseleccionar todos los check con la misma clase
function deSelect(cls) {
    var ele = document.getElementsByClassName(cls);
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == "checkbox") ele[i].checked = false;
    }
}
