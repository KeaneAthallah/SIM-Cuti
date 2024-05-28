document.getElementById("jenis-cuti");
addEventListener("click", tampilCuti);

function tampilCuti() {
    let jenis = document.getElementById("jenis-cuti").value;
    console.log(jenis);

    if (jenis == "tahunan") {
        let hak = document.getElementById("hak").value;
        if (hak == 1) {
            document.getElementById("totalCuti").value = "12";
        } else if (hak == 2) {
            document.getElementById("totalCuti").value = "18";
        } else {
            document.getElementById("totalCuti").value = "24";
        }
    } else if (jenis == "besar") {
        document.getElementById("totalCuti").value = "90";
    } else if (jenis == "sakit") {
        document.getElementById("totalCuti").value = "14";
    } else if (jenis == "alasanPenting") {
        document.getElementById("totalCuti").value = "30";
    } else if (jenis == "luarTanggunganNegara") {
        document.getElementById("totalCuti").value = "1095";
    }
}
