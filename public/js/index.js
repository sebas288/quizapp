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

function validateEmail(email) {
    var filter =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!filter.test(email.value)) {
        alert("Please provide a valid email address");
        email.focus;
        return false;
    }
    return true;
}

//click in elements the DOM
document.addEventListener(
    "click",
    function (event) {
        //send enail
        if (event.target.matches(".email")) {
            event.preventDefault();
            const mail = document.getElementById("mail");
            const validate = validateEmail(mail);
            if (!validate) return;
            let backData = {
                ...JSON.parse(window.localStorage.getItem("boxemail")),
                email: mail.value,
            };
            /*  backData.email = mail;
            backData["email"] = mail; */
            httpPost(JSON.stringify(backData), "/api/sendmail");
            console.log(mail, mail.value, validate);
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
            const institucion = document.getElementById("institucion").value;
            const date = document.getElementById("date").value;
            const tipo_documento =
                document.getElementById("tipo_documento").value;
            const dni = document.getElementById("dni").value;
            const email = null;
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

        //end questions
        if (event.target.matches(".end-questions")) {
            event.preventDefault();

            const step_0 = window.localStorage.getItem("step_0")
                ? JSON.parse(window.localStorage.getItem("step_0"))
                : {};
            const step_1 = window.localStorage.getItem("step_1")
                ? JSON.parse(window.localStorage.getItem("step_1"))
                : {};
            const step_2 = window.localStorage.getItem("step_2")
                ? JSON.parse(window.localStorage.getItem("step_2"))
                : {};
            /*const step_3 = window.localStorage.getItem("step_3")
                ? JSON.parse(window.localStorage.getItem("step_3"))
                : {};
            const step_4 = window.localStorage.getItem("step_4")
                ? JSON.parse(window.localStorage.getItem("step_4"))
                : {};
            const step_5 = window.localStorage.getItem("step_5")
                ? JSON.parse(window.localStorage.getItem("step_5"))
                : {};
            const step_6 = window.localStorage.getItem("step_6")
                ? JSON.parse(window.localStorage.getItem("step_6"))
                : {};
            const step_7 = window.localStorage.getItem("step_7")
                ? JSON.parse(window.localStorage.getItem("step_7"))
                : {};
            const step_8 = window.localStorage.getItem("step_8")
                ? JSON.parse(window.localStorage.getItem("step_8"))
                : {};
            const step_9 = window.localStorage.getItem("step_9")
                ? JSON.parse(window.localStorage.getItem("step_9"))
                : {};
            const step_10 = window.localStorage.getItem("step_10")
                ? JSON.parse(window.localStorage.getItem("step_10"))
                : {};
            const step_11 = window.localStorage.getItem("step_11")
                ? JSON.parse(window.localStorage.getItem("step_11"))
                : {};
            const step_12 = window.localStorage.getItem("step_12")
                ? JSON.parse(window.localStorage.getItem("step_12"))
                : {};
            const step_13 = window.localStorage.getItem("step_13")
                ? JSON.parse(window.localStorage.getItem("step_13"))
                : {};
            const step_14 = window.localStorage.getItem("step_14")
                ? JSON.parse(window.localStorage.getItem("step_14"))
                : {};
            const step_15 = window.localStorage.getItem("step_15")
                ? JSON.parse(window.localStorage.getItem("step_15"))
                : {};
            const step_16 = window.localStorage.getItem("step_16")
                ? JSON.parse(window.localStorage.getItem("step_16"))
                : {};
            const step_17 = window.localStorage.getItem("step_17")
                ? JSON.parse(window.localStorage.getItem("step_17"))
                : {};
            const step_18 = window.localStorage.getItem("step_18")
                ? JSON.parse(window.localStorage.getItem("step_18"))
                : {};
            const step_19 = window.localStorage.getItem("step_19")
                ? JSON.parse(window.localStorage.getItem("step_19"))
                : {};
            const step_20 = window.localStorage.getItem("step_20")
                ? JSON.parse(window.localStorage.getItem("step_20"))
                : {};
            const step_21 = window.localStorage.getItem("step_21")
                ? JSON.parse(window.localStorage.getItem("step_21"))
                : {};
            const step_22 = window.localStorage.getItem("step_22")
                ? JSON.parse(window.localStorage.getItem("step_22"))
                : {};
            const step_23 = window.localStorage.getItem("step_23")
                ? JSON.parse(window.localStorage.getItem("step_23"))
                : {};
            const step_24 = window.localStorage.getItem("step_24")
                ? JSON.parse(window.localStorage.getItem("step_24"))
                : {};
            const step_25 = window.localStorage.getItem("step_25")
                ? JSON.parse(window.localStorage.getItem("step_25"))
                : {};
            const step_26 = window.localStorage.getItem("step_26")
                ? JSON.parse(window.localStorage.getItem("step_26"))
                : {}; */

            if (
                Object.keys(step_0).length &
                Object.keys(step_1).length &
                Object.keys(step_2).length /* &
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
                Object.keys(step_26).length */
            ) {
                tabs.classList.add("d-none");
                finalForm.classList.remove("d-none");
                if (step_0.label == "Hombre") {
                    selectGenero("men");
                } else {
                    selectGenero("woman");
                }
                const finalData = [
                    step_0,
                    step_1,
                    step_1,
                    step_2 /* ,
                    step_3,
                    step_4,
                    step_5,
                    step_6,
                    step_7,
                    step_8,
                    step_9,
                    step_10,
                    step_11,
                    step_12,
                    step_13,
                    step_14,
                    step_15,
                    step_16,
                    step_17,
                    step_18,
                    step_19,
                    step_20,
                    step_21,
                    step_22,
                    step_23,
                    step_24,
                    step_25,
                    step_26, */,
                ];
                let points = 0;
                let template = 1;
                finalData.forEach((element) => {
                    points = points + parseInt(element.point);
                });

                //la variable {genero} viene con Hombre o Mujer
                let genero = null;
                let task =
                    JSON.parse(window.localStorage.getItem("step_0")) ?? null;
                if (task) genero = task.label;

                const dsataBackend = JSON.stringify({
                    points: points,
                    finalTime: finalTime,
                    finalData: finalData,
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
const selectedSteps = [
    document.getElementsByClassName("step_0"),
    document.getElementsByClassName("step_1"),
    document.getElementsByClassName("step_2") /* ,
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
    document.getElementsByClassName("step_26") */,
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
