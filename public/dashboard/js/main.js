document.getElementById("jenis-cuti");
addEventListener("click", tampilCuti);

function tampilCuti() {
    let jenis = document.getElementById("jenis-cuti").value;
    console.log(jenis);

    if (jenis == "tahunan") {
        document.getElementById("totalCuti").value = "10";
    }
    if (jenis == "besar") {
        document.getElementById("totalCuti").value = "90";
    }
    if (jenis == "sakit") {
        document.getElementById("totalCuti").value = "14";
    }
    if (jenis == "alasanPenting") {
        document.getElementById("totalCuti").value = "30";
    }
    if (jenis == "tahunan") {
        document.getElementById("totalCuti").value = "90";
    }
    if (jenis == "tahunan") {
        document.getElementById("totalCuti").value = "10 hari";
    }
}
