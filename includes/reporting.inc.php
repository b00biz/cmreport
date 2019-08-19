<?php

if (isset($_POST['submitReport'])) {

    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['nom_spa']);
    $mois = mysqli_real_escape_string($conn, $_POST['mois']);
    $annee = mysqli_real_escape_string($conn, $_POST['annee']);
    $salles = mysqli_real_escape_string($conn, $_POST['nb_salles']);
    $caIcSpa = mysqli_real_escape_string($conn, $_POST['ca_ic_spa']);
    $nbIcSpa = mysqli_real_escape_string($conn, $_POST['nb_ic_spa']);
    $caIcWeb = mysqli_real_escape_string($conn, $_POST['ca_ic_web']);
    $nbIcWeb = mysqli_real_escape_string($conn, $_POST['nb_ic_web']);
    $caIcAutre = mysqli_real_escape_string($conn, $_POST['ca_ic_autre']);
    $nbIcAutre = mysqli_real_escape_string($conn, $_POST['nb_ic_autre']);
    $caIcTotal = mysqli_real_escape_string($conn, $_POST['ca_ic_total']);
    $nbIcTotal = mysqli_real_escape_string($conn, $_POST['nb_ic_total']);
    $caSoinSp = mysqli_real_escape_string($conn, $_POST['ca_soin_sp']);
    $nbSoinSp = mysqli_real_escape_string($conn, $_POST['nb_soin_sp']);
    $caSoinHp = mysqli_real_escape_string($conn, $_POST['ca_soin_hp']);
    $nbSoinHp = mysqli_real_escape_string($conn, $_POST['nb_soin_hp']);
    $caAbo = mysqli_real_escape_string($conn, $_POST['ca_abo']);
    $nbAbo = mysqli_real_escape_string($conn, $_POST['nb_abo']);
    $caPrivate = mysqli_real_escape_string($conn, $_POST['ca_private']);
    $nbPrivate = mysqli_real_escape_string($conn, $_POST['nb_private']);
    $caMemb = mysqli_real_escape_string($conn, $_POST['ca_memb']);
    $nbMemb = mysqli_real_escape_string($conn, $_POST['nb_memb']);
    $caSoinAutre = mysqli_real_escape_string($conn, $_POST['ca_soin_autre']);
    $nbSoinAutre = mysqli_real_escape_string($conn, $_POST['nb_soin_autre']);
    $caSoinNoIcTotal = mysqli_real_escape_string($conn, $_POST['ca_soin_noIc_total']);
    $nbSoinNoIcTotal = mysqli_real_escape_string($conn, $_POST['nb_soin_noIc_total']);
    $totalCaSoin = mysqli_real_escape_string($conn, $_POST['total_ca_soin']);
    $totalNbSoin = mysqli_real_escape_string($conn, $_POST['total_nb_soin']);
    $caPdtVisNet = mysqli_real_escape_string($conn, $_POST['ca_pdt_vis_net']);
    $nbPdtVisNet = mysqli_real_escape_string($conn, $_POST['nb_pdt_vis_net']);
    $caPdtVisJeu = mysqli_real_escape_string($conn, $_POST['ca_pdt_vis_jeu']);
    $nbPdtVisJeu = mysqli_real_escape_string($conn, $_POST['nb_pdt_vis_jeu']);
    $caPdtVisSpe = mysqli_real_escape_string($conn, $_POST['ca_pdt_vis_spe']);
    $nbPdtVisSpe = mysqli_real_escape_string($conn, $_POST['nb_pdt_vis_spe']);
    $caPdtVis = mysqli_real_escape_string($conn, $_POST['ca_pdt_vis']);
    $nbPdtVis = mysqli_real_escape_string($conn, $_POST['nb_pdt_vis']);
    $caPdtCorGom = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_gom']);
    $nbPdtCorGom = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_gom']);
    $caPdtCorHyd = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_hyd']);
    $nbPdtCorHyd = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_hyd']);
    $caPdtCorMin = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_min']);
    $nbPdtCorMin = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_min']);
    $caPdtCorHam = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_ham']);
    $nbPdtCorHam = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_ham']);
    $caPdtCorEau = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_eau']);
    $nbPdtCorEau = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_eau']);
    $caPdtCorAro = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_aro']);
    $nbPdtCorAro = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_aro']);
    $caPdtCorHair = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor_hair']);
    $nbPdtCorHair = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor_hair']);
    $caPdtCor = mysqli_real_escape_string($conn, $_POST['ca_pdt_cor']);
    $nbPdtCor = mysqli_real_escape_string($conn, $_POST['nb_pdt_cor']);
    $caPdtAutre = mysqli_real_escape_string($conn, $_POST['ca_pdt_autre']);
    $nbPdtAutre = mysqli_real_escape_string($conn, $_POST['nb_pdt_autre']);
    $caPdt = mysqli_real_escape_string($conn, $_POST['ca_pdt']);
    $nbPdt = mysqli_real_escape_string($conn, $_POST['nb_pdt']);

    
    $sql = "SELECT * FROM reporting WHERE nom_spa='$name'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $sql = "INSERT INTO reporting (nom_spa, 
    mois, 
    annee, 
    nb_salles, 
    ca_ic_spa, 
    nb_ic_spa, 
    ca_ic_web, 
    nb_ic_web, 
    ca_ic_autre, 
    nb_ic_autre, 
    ca_ic_total, 
    nb_ic_total, 
    ca_soin_sp, 
    nb_soin_sp, 
    ca_soin_hp, 
    nb_soin_hp, 
    ca_abo, nb_abo, 
    ca_private, 
    nb_private, 
    ca_memb, 
    nb_memb, 
    ca_soin_autre, 
    nb_soin_autre, 
    ca_soin_noIc_total, 
    nb_soin_noIc_total, 
    total_ca_soin, 
    total_nb_soin, 
    ca_pdt_vis_net, 
    nb_pdt_vis_net, 
    ca_pdt_vis_jeu, 
    nb_pdt_vis_jeu,
    ca_pdt_vis_spe, 
    nb_pdt_vis_spe, 
    ca_pdt_vis, 
    nb_pdt_vis, 
    ca_pdt_cor_gom, 
    nb_pdt_cor_gom, 
    ca_pdt_cor_hyd, 
    nb_pdt_cor_hyd, 
    ca_pdt_cor_min, 
    nb_pdt_cor_min, 
    ca_pdt_cor_ham, 
    nb_pdt_cor_ham, 
    ca_pdt_cor_eau, 
    nb_pdt_cor_eau, 
    ca_pdt_cor_aro, 
    nb_pdt_cor_aro, 
    ca_pdt_cor_hair, 
    nb_pdt_cor_hair, 
    ca_pdt_cor, 
    nb_pdt_cor, 
    ca_pdt_autre, 
    nb_pdt_autre, 
    ca_pdt, 
    nb_pdt) VALUES ('$name', 
    '$mois', 
    '$annee', 
    '$salles', 
    '$caIcSpa', 
    '$nbIcSpa', 
    '$caIcWeb', 
    '$nbIcWeb', 
    '$caIcAutre', 
    '$nbIcAutre', 
    '$caIcTotal', 
    '$nbIcTotal', 
    '$caSoinSp', 
    '$nbSoinSp', 
    '$caSoinHp', 
    '$nbSoinHp', 
    '$caAbo', 
    '$nbAbo', 
    '$caPrivate', 
    '$nbPrivate', 
    '$caMemb', 
    '$nbMemb', 
    '$caSoinAutre', 
    '$nbSoinAutre', 
    '$caSoinNoIcTotal', 
    '$nbSoinNoIcTotal', 
    '$totalCaSoin', 
    '$totalNbSoin', 
    '$caPdtVisNet', 
    '$nbPdtVisNet', 
    '$caPdtVisJeu', 
    '$nbPdtVisJeu', 
    '$caPdtVisSpe', 
    '$nbPdtVisSpe', 
    '$caPdtVis', 
    '$nbPdtVis', 
    '$caPdtCorGom', 
    '$nbPdtCorGom', 
    '$caPdtCorHyd', 
    '$nbPdtCorHyd', 
    '$caPdtCorMin', 
    '$nbPdtCorMin', 
    '$caPdtCorHam', 
    '$nbPdtCorHam', 
    '$caPdtCorEau', 
    '$nbPdtCorEau', 
    '$caPdtCorAro', 
    '$nbPdtCorAro', 
    '$caPdtCorHair', 
    '$nbPdtCorHair', 
    '$caPdtCor', 
    '$nbPdtCor', 
    '$caPdtAutre', 
    '$nbPdtAutre', 
    '$caPdt', 
    '$nbPdt');";
    mysqli_query($conn, $sql);
        header("Location: ../done.php?reporting=success");
        exit();
}