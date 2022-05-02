const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

let finalTime = {
    min: 0,
    sec: 0,
};
//limpiar la cache o localstorage mk al inicial la app
window.localStorage.clear();
function timer() {
    let sec = 3600;
    let time = 0;
    let timer = setInterval(function () {
        let min = time / 60;
        let customParse = parseInt(time / 60) * 60;
        let seconds = time - customParse;
        if (min >= 1)
            document.getElementById("minDisplay").innerHTML =
                "Tiempo: " + parseInt(min) + "";
        document.getElementById("safeTimerDisplay").innerHTML =
            parseInt(time / 60) < 1
                ? "Tiempo: " + time + ""
                : ":" + seconds + "";

        finalTime["min"] = parseInt(min);
        finalTime["sec"] =
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
const send_data_content = document.getElementById("send_data_content");
const nsteps = 1;

//click in elements the DOM
document.addEventListener(
    "click",
    function (event) {
        //send enail
        if (event.target.matches(".email")) {
            event.preventDefault();
            //const mail = document.getElementById("mail");
            const mail = window.localStorage.getItem("boxemail")
                ? JSON.parse(window.localStorage.getItem("boxemail"))?.email
                : null;
            const validate = validateEmail(mail);
            if (!validate) return;
            let backData = {
                ...JSON.parse(window.localStorage.getItem("boxemail")),
                email: mail,
            };
            httpPost(JSON.stringify(backData), "/api/sendmail");
            console.log(mail, validate);
        }
        //request back
        //end questions
        if (event.target.matches(".see_responses")) {
            event.preventDefault();
            const boxemail = JSON.parse(
                window.localStorage.getItem("boxemail")
            );
            send_data_content.classList.add("d-none");

            let points = boxemail.points;
            //obtener el id en loclastorade de la pregunta 9
            const task9 = window.localStorage.getItem("step_9")
                ? JSON.parse(window.localStorage.getItem("step_9"))?.label
                : null;
            //obtener el id y elemento de la pregunta de la edad
            const dateAge = $("#date").val();
            const age = Edad(dateAge);
            console.log("edad para sebas");
            //hacemos el if o la estrucruda condicional y sumamos el punto a points
            if (
                task9 == "6°" ||
                task9 == "7°" ||
                task9 == "8°" ||
                task9 == "9°" ||
                task9 == "10°"
            ) {
                if (age >= 6 || age <= 10) {
                    alert("sebas sumele");
                    //points = points + 1
                }
            }
            let genero = null;
            let task =
                JSON.parse(window.localStorage.getItem("step_0")) ?? null;
            if (task) genero = task.label;
            switch (true) {
                case points <= 7: //riesgo bajo
                    document
                        .getElementById("resp_2")
                        .classList.remove("d-none");
                    if (genero == "Hombre") {
                        template = 0;
                    } else {
                        template = 0;
                    }
                    break;
                case points <= 14: //riesgo medio
                    document
                        .getElementById("resp_1")
                        .classList.remove("d-none");
                    if (genero == "Hombre") {
                        template = 1;
                    } else {
                        template = 1;
                    }
                    break;
                case points <= 26: //riesgo alto
                    document
                        .getElementById("resp_0")
                        .classList.remove("d-none");
                    if (genero == "Hombre") {
                        template = 2;
                    } else {
                        template = 2;
                    }
                    break;

                default:
                    template = 1;
                    break;
            }
            console.log(genero, points);
            if (genero == "Hombre") {
                selectGenero("men");
            } else {
                selectGenero("woman");
            }
            document
                .getElementById("sendemail-content")
                .classList.remove("d-none");
            //alert("venteke");
        }
        if (event.target.matches(".endBackend")) {
            event.preventDefault();
            //loading btn
            document.getElementById("endBackend").style.display = "none";
            document.getElementById("loading").innerHTML = "Cargando...";

            //get email
            //const institucion = document.getElementById("institucion").value;
            const institucion = $("#select2-institucion-container").text();
            const other = $("#other").val();
            const date = document.getElementById("date").value;
            const tipo_documento =
                document.getElementById("tipo_documento").value;
            const dni = document.getElementById("dni").value;
            const email = $("#email").val();
            if (
                institucion == "" ||
                date == "" ||
                tipo_documento == "" ||
                dni == "" ||
                email == ""
            ) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Debes de llenar todos los campos!",
                    footer: '<a href="">Ayuda?</a>',
                });
                console.log("institucion ", institucion, other);
                document.getElementById("endBackend").style.display = "block";
                document.getElementById("loading").innerHTML = "";
                return;
            }
            const dataBack = {
                ...JSON.parse(window.localStorage.getItem("requestTest")),
                institucion: institucion,
                date: date,
                tipo_documento: tipo_documento,
                dni: dni,
                email: email,
            };
            window.localStorage.setItem("boxemail", JSON.stringify(dataBack));
            httpPost(JSON.stringify(dataBack), "/api/test");
        }
        const obj = {};
        //end questions
        if (event.target.matches(".end-questions")) {
            event.preventDefault();
            for (let i = 0; i <= nsteps; i++) {
                obj["step_" + i] = window.localStorage.getItem("step_" + i)
                    ? JSON.parse(window.localStorage.getItem("step_" + i))
                    : {};
            }

            let vforms = true;
            for (let i = 0; i <= nsteps; i++) {
                if (!Object.keys(obj["step_" + i]).length) vforms = false;
            }

            if (vforms) {
                tabs.classList.add("d-none");
                finalForm.classList.remove("d-none");
                if (obj["step_0"].label == "Hombre") {
                    selectGenero("men");
                } else {
                    selectGenero("woman");
                }

                let points = 0;
                let template = 1;

                Object.entries(obj).map((stp) => {
                    points = points + parseInt(stp[1].point);
                });

                //la variable {genero} viene con Hombre o Mujer
                let genero = null;
                let task =
                    JSON.parse(window.localStorage.getItem("step_0")) ?? null;
                if (task) genero = task.label;

                const dsataBackend = JSON.stringify({
                    points: points,
                    finalTime: finalTime,
                    finalData: obj,
                    template: template,
                    genero: genero,
                });

                window.localStorage.setItem("requestTest", dsataBackend);
                if (document.getElementById("score")) {
                    document.getElementById("score").innerHTML =
                        "Puntos: " + points;
                }

                //document.getElementById("counter").classList.add("d-none");
            } else {
                alert("Debes contestar todas las preguntas");
            }
        }
        //create object for responses
        if (event.target.matches(".form-check-input")) {
            window.localStorage.setItem(
                event.target.dataset.step,
                JSON.stringify({
                    title: event.target.dataset.title,
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
        //modal del no
        if (event.target.matches(".autorization")) {
            if (event.target.name == "no") {
                $("#myModal2").modal("show");
                //timer();
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
            //validaciones en las preguntas
            if (window.localStorage.getItem("step_" + step) === null) {
                alert("Debes seleccionar una respuesta para continuar");
                return;
            }
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
let selectedSteps = [];
for (let i = 0; i <= nsteps; i++) {
    selectedSteps = [
        ...selectedSteps,
        document.getElementsByClassName("step_" + i),
    ];
}
selectedSteps = [
    ...selectedSteps,
    document.getElementsByClassName("autorization"),
];

//send data backend
function httpPost(request, url) {
    //endBackend
    const xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (this.readyState != 4) return;

        if (this.status == 200) {
            const data = JSON.parse(this.responseText);
            if (data.status) alert("proceso exitoso");
            document.getElementById("endBackend").style.display = "block";
            document.getElementById("loading").innerHTML =
                "<p>Gracias por participar , los resultados se han enviado al correo registrado.</p><p>... y recuera ...Y Recuerda ¡No creas en mitos!</p>";

            document.getElementById("see_responses").classList.remove("d-none");
            //window.localStorage.clear();
            return data;
            // we get the returned data
        }
        // end of state change: it can be after some time (async)
    };
    xhr.send(request);
}

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

function selectGenero(cls) {
    var ele = document.getElementsByClassName(cls);
    for (var i = 0; i < ele.length; i++) {
        ele[i].classList.remove("d-none");
    }
}

function Edad(FechaNacimiento) {
    let fechaNace = new Date(FechaNacimiento);
    let fechaActual = new Date();

    let mes = fechaActual.getMonth();
    let dia = fechaActual.getDate();
    let año = fechaActual.getFullYear();

    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(año);

    let edad = Math.floor(
        (fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365
    );

    return edad;
}

function validateEmail(email) {
    var filter =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!filter.test(email)) {
        alert("Please provide a valid email address");
        return false;
    }
    return true;
}
