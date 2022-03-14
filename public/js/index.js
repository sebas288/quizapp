function timer() {
    let sec = 3600;
    let time = 0;
    let timer = setInterval(function () {
        let min = time / 60;
        let customParse = parseInt(time / 60) * 60;
        let seconds = time - customParse;
        if (min >= 1)
            document.getElementById("minDisplay").innerHTML =
                parseInt(min) + "";
        document.getElementById("safeTimerDisplay").innerHTML =
            parseInt(time / 60) < 1 ? ":" + time + "" : ":" + seconds + "";

        sec--;
        time++;
        if (sec < 0) {
            clearInterval(timer);
        }
    }, 1000);
}

const terms = document.getElementById("terms");
const tabs = document.getElementById("parentTab");
const finalForm = document.getElementById("finalForm");

//click in elements the DOM
document.addEventListener(
    "click",
    function (event) {
        //end questions
        if (event.target.matches(".end-questions")) {
            event.preventDefault();
            tabs.classList.add("d-none");
            finalForm.classList.remove("d-none");

            const step_1 = JSON.parse(window.localStorage.getItem("step_1"));
            const step_2 = JSON.parse(window.localStorage.getItem("step_2"));
            const step_3 = JSON.parse(window.localStorage.getItem("step_3"));

            if (
                Object.keys(step_1).length &
                Object.keys(step_2).length &
                Object.keys(step_3).length
            ) {
                const finalData = [step_1, step_2, step_3];
                let points = 0;
                finalData.forEach((element) => {
                    console.log(element);
                    points = points + parseInt(element.point);
                });
                console.log(points);
                document.getElementById("score").innerHTML =
                    "Puntos: " + points;
                alert("Puntaje: " + points);
            }
        }
        //create object for responses
        if (event.target.matches(".form-check-input")) {
            window.localStorage.setItem(
                event.target.dataset.step,
                JSON.stringify({
                    name: event.target.name,
                    value: event.target.value,
                    label: event.target.dataset.label,
                    point: event.target.dataset.value,
                })
            );
        }
        //change of experience
        if (event.target.matches(".autorization")) {
            if (event.target.name == "si") {
                terms.classList.add("d-none");
                tabs.classList.remove("d-none");
                timer();
            }
        }
        // handle tabs for step
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
            deSelect(
                e.target.classList[1]
                    ? e.target.classList[1]
                    : e.target.classList[0]
            );
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
