let dataError = "Vous avez tapé un format de nombre invalide. Veuillez recommencer. You typed in an invalid number format! please correct.";
let salleSimple = 0;
let salleDouble = 0;
let salleGommage = 0;
let salleBain = 0;
let sallePalapa = 0;

function totalSalles() {
    let salleSimple = +document.getElementById("salle_simple").value;
    let salleDouble = +document.getElementById("salle_double").value;
    let salleGommage = +document.getElementById("salle_gommage").value;
    let salleBain = +document.getElementById("salle_bain").value;
    let sallePalapa = +document.getElementById("salle_palapa").value;
    let sum = salleSimple + salleDouble * 1.25 + salleGommage + salleBain + sallePalapa;
    document.getElementById("idTotalSalle").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError);
    };
};

let caIcSpa = 0;
let caIcWeb = 0;
let caIcAutre = 0;

let nbIcSpa = 0;
let nbIcWeb = 0;
let nbIcAutre = 0;

let caSoinSp = 0;
let caSoinHp = 0;
let caAbo = 0;
let caPrivate = 0;
let caMemb = 0;
let caSoinAutre = 0;

let nbSoinSp = 0;
let nbSoinHp = 0;
let nbAbo = 0;
let nbPrivate = 0;
let nbMemb = 0;
let nbSoinAutre = 0;

function totalCaIc() {
    let caIcSpa = +document.getElementById("idCaIcSpa").value;
    let caIcWeb = +document.getElementById("idCaIcWeb").value;
    let caIcAutre = +document.getElementById("idCaIcAutre").value;
    let sum = caIcSpa + caIcWeb + caIcAutre;
    document.getElementById("idCaIcTotal").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let caSoinSp = +document.getElementById("idCaSoinSp").value;
    let caSoinHp = +document.getElementById("idCaSoinHp").value;
    let caAbo = +document.getElementById("idCaAbo").value;
    let caPrivate = +document.getElementById("idCaPrivate").value;
    let caMemb = +document.getElementById("idCaMemb").value;
    let caSoinAutre = +document.getElementById("idCaSoinAutre").value;
    let sum2 = caIcSpa + caIcWeb + caIcAutre + caSoinSp + caSoinHp + caAbo + caPrivate + caMemb + caSoinAutre;
    document.getElementById("idCaSoinTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalNbIc() {
    let nbIcSpa = +document.getElementById("idNbIcSpa").value;
    let nbIcWeb = +document.getElementById("idNbIcWeb").value;
    let nbIcAutre = +document.getElementById("idNbIcAutre").value;
    let sum = nbIcSpa + nbIcWeb + nbIcAutre;
    document.getElementById("idNbIcTotal").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let nbSoinSp = +document.getElementById("idNbSoinSp").value;
    let nbSoinHp = +document.getElementById("idNbSoinHp").value;
    let nbAbo = +document.getElementById("idNbAbo").value;
    let nbPrivate = +document.getElementById("idNbPrivate").value;
    let nbMemb = +document.getElementById("idNbMemb").value;
    let nbSoinAutre = +document.getElementById("idNbSoinAutre").value;
    let sum2 = nbIcSpa + nbIcWeb + nbIcAutre + nbSoinSp + nbSoinHp + nbAbo + nbPrivate + nbMemb + nbSoinAutre;
    document.getElementById("idNbSoinTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalCaSoinHorsIc() {
    let caSoinSp = +document.getElementById("idCaSoinSp").value;
    let caSoinHp = +document.getElementById("idCaSoinHp").value;
    let caAbo = +document.getElementById("idCaAbo").value;
    let caPrivate = +document.getElementById("idCaPrivate").value;
    let caMemb = +document.getElementById("idCaMemb").value;
    let caSoinAutre = +document.getElementById("idCaSoinAutre").value;
    let sum = caSoinSp + caSoinHp + caAbo + caPrivate + caMemb + caSoinAutre;
    document.getElementById("idCaSoinNoIcTotal").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let caIcSpa = +document.getElementById("idCaIcSpa").value;
    let caIcWeb = +document.getElementById("idCaIcWeb").value;
    let caIcAutre = +document.getElementById("idCaIcAutre").value;
    let sum2 = caIcSpa + caIcWeb + caIcAutre + caSoinSp + caSoinHp + caAbo + caPrivate + caMemb + caSoinAutre;
    document.getElementById("idCaSoinTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalNbSoinHorsIc() {
    let nbSoinSp = +document.getElementById("idNbSoinSp").value;
    let nbSoinHp = +document.getElementById("idNbSoinHp").value;
    let nbAbo = +document.getElementById("idNbAbo").value;
    let nbPrivate = +document.getElementById("idNbPrivate").value;
    let nbMemb = +document.getElementById("idNbMemb").value;
    let nbSoinAutre = +document.getElementById("idNbSoinAutre").value;
    let sum = nbSoinSp + nbSoinHp + nbAbo + nbPrivate + nbMemb + nbSoinAutre;
    document.getElementById("idNbSoinNoIcTotal").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let nbIcSpa = +document.getElementById("idNbIcSpa").value;
    let nbIcWeb = +document.getElementById("idNbIcWeb").value;
    let nbIcAutre = +document.getElementById("idNbIcAutre").value;
    let sum2 = nbIcSpa + nbIcWeb + nbIcAutre + nbSoinSp + nbSoinHp + nbAbo + nbPrivate + nbMemb + nbSoinAutre;
    document.getElementById("idNbSoinTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

let caPdtVisNet = 0;
let caPdtVisJeu = 0;
let caPdtVisSpe = 0;

let nbPdtVisNet = 0;
let nbPdtVisJeu = 0;
let nbPdtVisSpe = 0;

let caPdtCorGom = 0;
let caPdtCorHyd = 0;
let caPdtCorMin = 0;
let caPdtCorHam = 0;
let caPdtCorEau = 0;
let caPdtCorAro = 0;
let caPdtCorHair = 0;
let caPdtAutre = 0;

let nbPdtCorGom = 0;
let nbPdtCorHyd = 0;
let nbPdtCorMin = 0;
let nbPdtCorHam = 0;
let nbPdtCorEau = 0;
let nbPdtCorAro = 0;
let nbPdtCorHair = 0;
let nbPdtAutre = 0;

function totalCaPdtVis() {
    let caPdtVisNet = +document.getElementById("idCaPdtVisNet").value;
    let caPdtVisJeu = +document.getElementById("idCaPdtVisJeu").value;
    let caPdtVisSpe = +document.getElementById("idCaPdtVisSpe").value;
    let sum = caPdtVisNet + caPdtVisJeu + caPdtVisSpe;
    document.getElementById("idCaPdtVis").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let caPdtCorGom = +document.getElementById("idCaPdtCorGom").value;
    let caPdtCorHyd = +document.getElementById("idCaPdtCorHyd").value;
    let caPdtCorMin = +document.getElementById("idCaPdtCorMin").value;
    let caPdtCorHam = +document.getElementById("idCaPdtCorHam").value;
    let caPdtCorEau = +document.getElementById("idCaPdtCorEau").value;
    let caPdtCorAro = +document.getElementById("idCaPdtCorAro").value;
    let caPdtCorHair = +document.getElementById("idCaPdtCorHair").value;
    let caPdtAutre = +document.getElementById("idCaPdtAutre").value;
    let sum2 = caPdtVisNet + caPdtVisJeu + caPdtVisSpe + caPdtCorGom + caPdtCorHyd + caPdtCorMin + caPdtCorHam + caPdtCorEau + caPdtCorAro + caPdtCorHair + caPdtAutre;
    document.getElementById("idCaPdtTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalNbPdtVis() {
    let nbPdtVisNet = +document.getElementById("idNbPdtVisNet").value;
    let nbPdtVisJeu = +document.getElementById("idNbPdtVisJeu").value;
    let nbPdtVisSpe = +document.getElementById("idNbPdtVisSpe").value;
    let sum = nbPdtVisNet + nbPdtVisJeu + nbPdtVisSpe;
    document.getElementById("idNbPdtVis").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let nbPdtCorGom = +document.getElementById("idNbPdtCorGom").value;
    let nbPdtCorHyd = +document.getElementById("idNbPdtCorHyd").value;
    let nbPdtCorMin = +document.getElementById("idNbPdtCorMin").value;
    let nbPdtCorHam = +document.getElementById("idNbPdtCorHam").value;
    let nbPdtCorEau = +document.getElementById("idNbPdtCorEau").value;
    let nbPdtCorAro = +document.getElementById("idNbPdtCorAro").value;
    let nbPdtCorHair = +document.getElementById("idNbPdtCorHair").value;
    let nbPdtAutre = +document.getElementById("idNbPdtAutre").value;
    let sum2 = nbPdtVisNet + nbPdtVisJeu + nbPdtVisSpe + nbPdtCorGom + nbPdtCorHyd + nbPdtCorMin + nbPdtCorHam + nbPdtCorEau + nbPdtCorAro + nbPdtCorHair + nbPdtAutre;
    document.getElementById("idNbPdtTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalCaPdtCor() {
    let caPdtCorGom = +document.getElementById("idCaPdtCorGom").value;
    let caPdtCorHyd = +document.getElementById("idCaPdtCorHyd").value;
    let caPdtCorMin = +document.getElementById("idCaPdtCorMin").value;
    let caPdtCorHam = +document.getElementById("idCaPdtCorHam").value;
    let caPdtCorEau = +document.getElementById("idCaPdtCorEau").value;
    let caPdtCorAro = +document.getElementById("idCaPdtCorAro").value;
    let caPdtCorHair = +document.getElementById("idCaPdtCorHair").value;
    let sum = caPdtCorGom + caPdtCorHyd + caPdtCorMin + caPdtCorHam + caPdtCorEau + caPdtCorAro + caPdtCorHair;
    document.getElementById("idCaPdtCor").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let caPdtVisNet = +document.getElementById("idCaPdtVisNet").value;
    let caPdtVisJeu = +document.getElementById("idCaPdtVisJeu").value;
    let caPdtVisSpe = +document.getElementById("idCaPdtVisSpe").value;
    let caPdtAutre = +document.getElementById("idCaPdtAutre").value;
    let sum2 = caPdtVisNet + caPdtVisJeu + caPdtVisSpe + caPdtCorGom + caPdtCorHyd + caPdtCorMin + caPdtCorHam + caPdtCorEau + caPdtCorAro + caPdtCorHair + caPdtAutre;
    document.getElementById("idCaPdtTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}

function totalNbPdtCor() {
    let nbPdtCorGom = +document.getElementById("idNbPdtCorGom").value;
    let nbPdtCorHyd = +document.getElementById("idNbPdtCorHyd").value;
    let nbPdtCorMin = +document.getElementById("idNbPdtCorMin").value;
    let nbPdtCorHam = +document.getElementById("idNbPdtCorHam").value;
    let nbPdtCorEau = +document.getElementById("idNbPdtCorEau").value;
    let nbPdtCorAro = +document.getElementById("idNbPdtCorAro").value;
    let nbPdtCorHair = +document.getElementById("idNbPdtCorHair").value;
    let sum = nbPdtCorGom + nbPdtCorHyd + nbPdtCorMin + nbPdtCorHam + nbPdtCorEau + nbPdtCorAro + nbPdtCorHair;
    document.getElementById("idNbPdtCor").innerHTML = sum;
    if (isNaN(sum)) {
        alert(dataError)
    };
    let nbPdtVisNet = +document.getElementById("idNbPdtVisNet").value;
    let nbPdtVisJeu = +document.getElementById("idNbPdtVisJeu").value;
    let nbPdtVisSpe = +document.getElementById("idNbPdtVisSpe").value;
    let nbPdtAutre = +document.getElementById("idNbPdtAutre").value;
    let sum2 = nbPdtVisNet + nbPdtVisJeu + nbPdtVisSpe + nbPdtCorGom + nbPdtCorHyd + nbPdtCorMin + nbPdtCorHam + nbPdtCorEau + nbPdtCorAro + nbPdtCorHair + nbPdtAutre;
    document.getElementById("idNbPdtTotal").innerHTML = sum2;
    if (isNaN(sum2)) {
        alert(dataError)
    };
}