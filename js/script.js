alert("WELCOME TO KALKULATOR JS")

function kosong1() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "";
}

function kosong2() {
    let frm = document.getElementById("formulir");
    frm.a2.value = "";
}


function kosongAll() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "";
    frm.a2.value = "";
    frm.hasil.value = "";
}


// pertambahan
function pertambahan() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value;

    if (isNaN(a1) || a1 == '') {
        alert("Harap isi data berupa angka");
    } else
    if (isNaN(a2) || a2 == '') {
        alert("Harap isi data berupa angka");
    } else {

        let total = parseInt(a1) + parseInt(a2);
        frm.hasil.value = total;
    }
}


// pengurangan
function pengurangan() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value

    if (isNaN(a1) || a1 == '') {
        alert("Harap isi data berupa angka");
    } else
    if (isNaN(a2) || a2 == '') {
        alert("Harap isi data berupa angka");
    } else {

        let total = parseInt(a1) + -parseInt(a2);
        frm.hasil.value = total;
    }
}


// perkalian
function perkalian() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value

    if (isNaN(a1) || a1 == '') {
        alert("Harap isi data berupa angka");
    } else
    if (isNaN(a2) || a2 == '') {
        alert("Harap isi data berupa angka");
    } else {

        let total = parseInt(a1) * parseInt(a2);
        frm.hasil.value = total;
    }
}


// pembagian
function pembagian() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value

    if (isNaN(a1) || a1 == '') {
        alert("Harap isi data berupa angka");
    } else
    if (isNaN(a2) || a2 == '') {
        alert("Harap isi data berupa angka");
    } else {

        let total = parseInt(a1) / parseInt(a2);
        frm.hasil.value = total;
    }
}


// pangkat
function pangkat() {
    let frm = document.getElementById("formulir");
    let a1 = frm.a1.value;
    let a2 = frm.a2.value

    if (isNaN(a1) || a1 == '') {
        alert("Harap isi data berupa angka");
    } else
    if (isNaN(a2) || a2 == '') {
        alert("Harap isi data berupa angka");
    } else {

        let total = Math.pow(parseInt(a1), parseInt(a2));
        frm.hasil.value = total;
    }
}