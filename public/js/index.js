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
            const step_4 = JSON.parse(window.localStorage.getItem("step_4"));
            const step_5 = JSON.parse(window.localStorage.getItem("step_5"));
            const step_6 = JSON.parse(window.localStorage.getItem("step_6"));
            const step_7 = JSON.parse(window.localStorage.getItem("step_7"));
            const step_8 = JSON.parse(window.localStorage.getItem("step_8"));
            const step_9 = JSON.parse(window.localStorage.getItem("step_9"));
            const step_10 = JSON.parse(window.localStorage.getItem("step_10"));
            const step_11 = JSON.parse(window.localStorage.getItem("step_11"));
            const step_12 = JSON.parse(window.localStorage.getItem("step_12"));
            const step_13 = JSON.parse(window.localStorage.getItem("step_13"));
            const step_14 = JSON.parse(window.localStorage.getItem("step_14"));
            const step_15 = JSON.parse(window.localStorage.getItem("step_15"));
            const step_16 = JSON.parse(window.localStorage.getItem("step_16"));
            const step_17 = JSON.parse(window.localStorage.getItem("step_17"));
            const step_18 = JSON.parse(window.localStorage.getItem("step_18"));
            const step_19 = JSON.parse(window.localStorage.getItem("step_19"));
            const step_20 = JSON.parse(window.localStorage.getItem("step_20"));
            const step_21 = JSON.parse(window.localStorage.getItem("step_21"));
            const step_22 = JSON.parse(window.localStorage.getItem("step_22"));
            const step_23 = JSON.parse(window.localStorage.getItem("step_23"));
            const step_24 = JSON.parse(window.localStorage.getItem("step_24"));
            const step_25 = JSON.parse(window.localStorage.getItem("step_25"));
            const step_26 = JSON.parse(window.localStorage.getItem("step_26"));

            if (
                Object.keys(step_1).length &
                Object.keys(step_2).length &
                Object.keys(step_3).length &
                Object.keys(step_4).length &
                Object.keys(step_5).length &
                Object.keys(step_6).length &
                Object.keys(step_7).length &
                Object.keys(step_8).length &
                Object.keys(step_9).length &
                Object.keys(step_10).length &
                Object.keys(step_11).length &
                Object.keys(step_12).length &
                Object.keys(step_13).length &
                Object.keys(step_14).length &
                Object.keys(step_15).length &
                Object.keys(step_16).length &
                Object.keys(step_17).length &
                Object.keys(step_18).length &
                Object.keys(step_19).length &
                Object.keys(step_20).length &
                Object.keys(step_21).length &
                Object.keys(step_22).length &
                Object.keys(step_23).length &
                Object.keys(step_24).length &
                Object.keys(step_25).length &
                Object.keys(step_26).length
            ) {
                const finalData = [step_1, step_2, step_3, step_4, step_5, step_6, step_7, step_8, step_9, step_10, step_11, step_12, step_13, step_14, step_15, step_16, step_17, step_18, step_19, step_20, step_21, step_22, step_23, step_24, step_25, step_26 ];
                let points = 0;
                finalData.forEach((element) => {
                    console.log(element);
                    points = points + parseInt(element.point);
                });
                console.log(points);
                document.getElementById("score").innerHTML =
                    "Puntos: " + points;
                alert("Puntaje: " + points);
                document.getElementById("counter").classList.add("d-none");
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
    document.getElementsByClassName("step_4"),
    document.getElementsByClassName("step_5"),
    document.getElementsByClassName("step_6"),
    document.getElementsByClassName("step_7"),
    document.getElementsByClassName("step_8"),
    document.getElementsByClassName("step_9"),
    document.getElementsByClassName("step_10"),
    document.getElementsByClassName("step_11"),
    document.getElementsByClassName("step_12"),
    document.getElementsByClassName("step_13"),
    document.getElementsByClassName("step_14"),
    document.getElementsByClassName("step_15"),
    document.getElementsByClassName("step_16"),
    document.getElementsByClassName("step_17"),
    document.getElementsByClassName("step_18"),
    document.getElementsByClassName("step_19"),
    document.getElementsByClassName("step_20"),
    document.getElementsByClassName("step_21"),
    document.getElementsByClassName("step_22"),
    document.getElementsByClassName("step_23"),
    document.getElementsByClassName("step_24"),
    document.getElementsByClassName("step_25"),
    document.getElementsByClassName("step_26"),
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
