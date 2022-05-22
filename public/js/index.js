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
                "⏳ " + parseInt(min) + "";
        document.getElementById("safeTimerDisplay").innerHTML =
            parseInt(time / 60) < 1 ? "⏳ " + time + "" : ":" + seconds + "";

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
const nsteps = 26; //26

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
        }
        //request back
        if (event.target.matches(".endBackend")) {
            event.preventDefault();
            //loading btn
            document.getElementById("endBackend").style.display = "none";
            document.getElementById("loading").innerHTML = "Cargando...";

            //get email
            //const institucion = document.getElementById("institucion").value;
            const nombre = document.getElementById("nombre").value;
            const celular = document.getElementById("celular").value;
            const comunas = document.getElementById("comunas").value;
            const barrio = $("#select2-barrio-container").text();
            const institucion = $("#select2-institucion-container").text();
            const other = $("#other").val();
            const date = document.getElementById("date").value;
            const tipo_documento =
                document.getElementById("tipo_documento").value;
            const dni = document.getElementById("dni").value;
            const email = $("#email").val();
            if (
                nombre == "" ||
                celular == "" ||
                comunas == "" ||
                barrio == "" ||
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

                document.getElementById("endBackend").style.display = "block";
                document.getElementById("loading").innerHTML = "";
                return;
            }
            const dataBack = {
                ...JSON.parse(window.localStorage.getItem("requestTest")),
                nombre: nombre,
                celular: celular,
                comunas: comunas,
                barrio: barrio,
                institucion: institucion,
                other: other,
                date: date,
                tdni: tipo_documento,
                dni: dni,
                email: email,
            };
            const { points, rezago, template } = handleRulesAndValues(dataBack);
            dataBack["points"] = points;
            dataBack["rezago"] = rezago;
            dataBack["template"] = template;

            window.localStorage.setItem("boxemail", JSON.stringify(dataBack));
            httpPost(JSON.stringify(dataBack), "/api/test");
        }
        const obj = {};
        //end questions
        if (event.target.matches(".end-questions")) {
            event.preventDefault();

            const task1 = window.localStorage.getItem("step_0")
                ? JSON.parse(window.localStorage.getItem("step_0"))
                : { label: null };
            const task4 = window.localStorage.getItem("step_4")
                ? JSON.parse(window.localStorage.getItem("step_4"))
                : { label: null };

            if (task4 && task1?.label == "No" && parseInt(step) == 5)
                add = add + 1;

            for (let i = 0; i <= nsteps; i++) {
                if (!task1 || (task1?.label == "Hombre" && i == 26)) break;
                //if (!task4 || (task4?.label == "No" && i == 4)) break;

                obj["step_" + i] = window.localStorage.getItem("step_" + i)
                    ? JSON.parse(window.localStorage.getItem("step_" + i))
                    : {};
            }

            let vforms = true;
            for (let i = 0; i <= nsteps; i++) {
                if (!task1 || (task1?.label == "Hombre" && i == 26)) break;
                //if (!task4 || (task4?.label == "No" && i == 4)) break;
                if (!Object.keys(obj["step_" + i]).length) {
                    //validación final cuando es mujer
                    if (
                        task1?.label == "Hombre" &&
                        i !== 5 &&
                        !Object.keys(obj["step_" + 5]).length
                    )
                        vforms = false;
                }
            }

            if (vforms) {
                tabs.classList.add("d-none");
                finalForm.classList.remove("d-none");
                if (obj["step_0"]?.label == "Hombre") {
                    selectGenero("men");
                } else if (obj["step_0"]?.label == "Mujer") {
                    selectGenero("woman");
                } else {
                    selectGenero("otro");
                }

                let points = 0; //cuando es hombre se setea este valor
                let template = 1;

                Object.entries(obj).map((stp) => {
                    if (typeof stp[1].point !== "undefined")
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
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Para continuar debes responder todas las preguntas",
                    footer: '<a href="">Ayuda?</a>',
                });
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

            let add = 1;
            let less = 1;

            const menstruacion = bussineRules("menstruacion", step);
            const tienes_hijos = bussineRules("tienes_hijos", step);
            if (menstruacion) add = menstruacion?.add;
            if (tienes_hijos) {
                add = tienes_hijos?.add;
                less = tienes_hijos?.less;
            }

            if (menstruacion?.next && parseInt(step) == 25)
                $(".end-questions").click();

            const counter = event.target.matches(".next")
                ? parseInt(step) + add
                : parseInt(step) - less;
            //validaciones en las preguntas
            if (window.localStorage.getItem("step_" + step) === null) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Debes seleccionar alguna opción para continuar",
                    footer: '<a href="">Ayuda?</a>',
                });
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

function bussineRules(rule, step) {
    let add = 1;
    let less = 1;
    switch (rule) {
        case "menstruacion":
            const task0 = window.localStorage.getItem("step_0")
                ? JSON.parse(window.localStorage.getItem("step_0"))
                : { label: null };
            if (
                (task0?.label == "Hombre" || task0?.label == "Otro") &&
                parseInt(step) == 25
            )
                add = 2;

            return { add: add, less, next: add === 2 ? true : false };
        case "tienes_hijos":
            const task4 = window.localStorage.getItem("step_4")
                ? JSON.parse(window.localStorage.getItem("step_4"))
                : { label: null };
            if (task4 && task4?.label == "No" && parseInt(step) == 4) add = 2;
            if (task4 && task4?.label == "No" && parseInt(step) == 6) less = 2;
            return { add: add, less, next: true };

        default:
            return {
                add: 1,
                less: 1,
                next: false,
            };
    }
}

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
            if (data.status)
                Swal.fire({
                    icon: "success",
                    title: "Respuestas enviadas",
                    text: "Gracias por participar, las respuestas fueron enviadas a tu correo",
                    footer: '<a href="">Ayuda?</a>',
                });
            document.getElementById("endBackend").style.display = "block";
            document.getElementById("loading").innerHTML =
                "<p class='text-center'>Gracias por participar , dale clic en ver respuesta para conocer el resultado</p>";

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
        hideGenero(cls);
    }
}
function hideGenero(cls) {
    const genero = cls == "men" ? "woman" : "men";
    var ele = document.getElementsByClassName(genero);
    for (var i = 0; i < ele.length; i++) {
        ele[i].classList.add("d-none");
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

function handleRulesAndValues(data) {
    const boxemail = data;
    send_data_content.classList.add("d-none");

    let points = boxemail.points;
    let rezago = "NO";
    //obtener el id en loclastorade de la pregunta 9
    const task9 = window.localStorage.getItem("step_9")
        ? JSON.parse(window.localStorage.getItem("step_9"))?.label
        : null;
    //obtener el id y elemento de la pregunta de la edad
    const dateAge = $("#date").val();
    const age = Edad(dateAge);
    //hacemos el if o la estrucruda condicional y sumamos el punto a points
    if (task9 == "0°")
        if (age !== 5) {
            points = points + 1;
            rezago = "SI";
        }

    if (
        task9 == "1°" ||
        task9 == "2°" ||
        task9 == "3°" ||
        task9 == "4°" ||
        task9 == "5°"
    ) {
        if (age >= 6 && age <= 10) {
        } else {
            points = points + 1;
            rezago = "SI";
        }
    }
    if (task9 == "6°" || task9 == "7°" || task9 == "8°" || task9 == "9°") {
        if (age >= 11 && age <= 14) {
        } else {
            points = points + 1;
            rezago = "SI";
        }
    }
    if (task9 == "10°" || task9 == "11°") {
        if (age >= 15 && age <= 16) {
        } else {
            points = points + 1;
            rezago = "SI";
        }
    }

    let genero = null;
    let template = 0;
    let task = JSON.parse(window.localStorage.getItem("step_0")) ?? null;
    if (task) genero = task.label;
    switch (true) {
        case points <= 7: //riesgo bajo
            document.getElementById("resp_2").classList.remove("d-none");
            //if (genero == "Hombre") template = 1;
            template = 0;
            break;
        case points <= 14: //riesgo medio
            document.getElementById("resp_1").classList.remove("d-none");
            template = 1;
            break;
        case points <= 26: //riesgo alto
            document.getElementById("resp_0").classList.remove("d-none");
            template = 2;
            break;

        default:
            break;
    }

    if (genero == "Hombre") {
        selectGenero("men");
    } else if (genero == "Mujer") {
        selectGenero("woman");
    } else {
        selectGenero("otro");
    }
    document.getElementById("sendemail-content").classList.remove("d-none");
    const newBoxEmail = {
        ...boxemail,
        points: points,
        rezago: rezago,
        template: template,
    };
    window.localStorage.setItem("boxemail", JSON.stringify(newBoxEmail));

    return {
        points,
        rezago,
        template,
    };
}
