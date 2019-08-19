<?php
include_once 'header.php';
?>
<br><br><br>
<div class="reporting-wrapper">
    <form class="post-report" action="includes/reporting.inc.php" method="POST">
        <h3 class="reporting-title">Nom du Spa / <i>Name of Spa</i></h3>
        <select type="text" name="nom_spa" placeholder="select">
            <option value="null">...</option>
            <option value="Cinq Mondes Paris">Cinq Mondes Paris</option>
            <option value="Cinq Mondes Lyon">Cinq Mondes Lyon</option>
            <option value="Cinq Mondes Marrakech">Cinq Mondes Marrakech</option>
            <option value="Cinq Mondes Albion">Cinq Mondes Albion</option>
            <option value="Cinq Mondes Nantes">Cinq Mondes Nantes</option>
            <option value="Cinq Mondes Marseille">Cinq Mondes Marseille</option>
            <option value="Cinq Mondes Carmel">Cinq Mondes Carmel</option>
            <option value="Cinq Mondes Beau Rivage Palace">Cinq Mondes Beau Rivage Palace</option>
            <option value="Cinq Mondes Monte Carlo Bay">Cinq Mondes Monte Carlo Bay</option>
            <option value="Cinq Mondes Dolce La Hulpe">Cinq Mondes Dolce La Hulpe</option>
            <option value="Cinq Mondes Kempinski Emerald Palace">Cinq Mondes Kempinski Emerald Palace</option>
            <option value="Cinq Mondes Wyndham Doha">Cinq Mondes Wyndham Doha</option>
        </select>
        <br><br>
        <h3 class="reporting-title">Nombre de salles de soin / <i>Number of treatment rooms:</i></h3>
            <table class="salles">
                <tr>
                    <td class="none">Salles Simples<br><i>Single Rooms</i></td>
                    <td class="none">Salles Doubles<br><i>Double Rooms</i></td>
                    <td class="none">Tables Gommage<br><i>Scrub Tables</i></td>
                    <td class="none">Bains<br><i>Baths</i></td>
                    <td class="none">Palapas & autres<br><i>Palapas & other</i></td>
                </tr>    
                <tr>
                    <td><input id="salle_simple" class="rep-num" oninput="totalSalles()"></td>
                    <td><input id="salle_double" class="rep-num" oninput="totalSalles()"></td>
                    <td><input id="salle_gommage" class="rep-num" oninput="totalSalles()"></td>
                    <td><input id="salle_bain" class="rep-num" oninput="totalSalles()"></td>
                    <td><input id="salle_palapa" class="rep-num" oninput="totalSalles()"></td>
                </tr> 
                <tr>
                    <td style="border:none; background-color:rgb(220, 220, 220);"></td>
                    <td style="border:none; background-color:rgb(220, 220, 220);"></td>
                    <td style="border:none; background-color:rgb(220, 220, 220);"></td>
                    <td style="background-color:rgb(144,20,59); color:white;">Total:</td>
                    <td style="background-color:rgb(144,20,59);"><textarea readonly class="resulTotal" name="nb_salles" id="idTotalSalle"></textarea></td>
                </tr>
            </table>    

        <br><br>
        <h3 class="reporting-title">Mois / <i>Month:</i></h3>
        <select type="text" name="mois" placeholder="select" style="width:100px;">
            <option value="null">...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br>
        <h3 class="reporting-title">Année / <i>Year:</i></h3>
        <select type="text" name="annee" placeholder="select" style="width:100px;">
            <option value="null">...</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
        </select>    

        <br><br><br>
        <h3 class="reporting-title">Encaissements / <i>Revenue</i></h3>
        <div class="sub-report">

            <table>
                <tr class="nope">
                    <td class="none2"></td>
                    <td class="none">CA - <i>Revenue</i></td>
                    <td class="none">Qté - <i>Qty</i></td>
                </tr>   
                <tr>
                    <td><label>Invitations Cadeaux vendues au Spa / <i>Gift Certificates sold in Spa</i>:</label></td>
                    <td><input id="idCaIcSpa"  class="rep-num" type="number" name="ca_ic_spa" placeholder="CA / REV.." oninput="totalCaIc()"></td>
                    <td><input id="idNbIcSpa" class="rep-num" type="number" name="nb_ic_spa" placeholder="QTE / QTY..." oninput="totalNbIc()"></td>
                </tr>
                <tr>
                    <td><label>Invitations Cadeaux vendues sur Internet / <i>Gift Certificates sold on the Web</i>:</label></td>
                    <td><input id="idCaIcWeb" class="rep-num" type="number" name="ca_ic_web" placeholder="CA / REV.." oninput="totalCaIc()"></td>
                    <td><input id ="idNbIcWeb" class="rep-num" type="number" name="nb_ic_web" placeholder="QTE / QTY..." oninput="totalNbIc()"></td>
                </tr>
                <tr>
                    <td><label>Invitations Cadeaux via partenaires / <i>Other types of Gift Certificates</i>:</label></td>
                    <td><input id="idCaIcAutre" class="rep-num" type="number" name="ca_ic_autre" placeholder="CA / REV.." oninput="totalCaIc()"></td>
                    <td><input id="idNbIcAutre" class="rep-num" type="number" name="nb_ic_autre" placeholder="QTE / QTY..." oninput="totalNbIc()"></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(144,20,59); color:white;">Sous-total Invitations Cadeaux / <i>Sub-total Gift Certificates</i>:</td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="ca_ic_total" id="idCaIcTotal"></textarea></td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="nb_ic_total" id="idNbIcTotal"></textarea></td>
                </tr>
                
            </table> 
            <br><br>
            <table>
                <tr class="nope">
                    <td class="none2"></td>
                    <td class="none">CA - <i>Revenue</i></td>
                    <td class="none">Qté - <i>Qty</i></td>
                </tr>
                <tr>
                    <td><label>Soins à la carte sur place / <i>A la carte treatments sold on site</i>:</label></td>
                    <td><input id="idCaSoinSp"  class="rep-num" type="number" name="ca_soin_sp" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbSoinSp" class="rep-num" type="number" name="nb_soin_sp" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr>
                <tr>
                    <td><label>Soins à la carte hors place / <i>A la carte packages</i>:</label></td>
                    <td><input id="idCaSoinHp"  class="rep-num" type="number" name="ca_soin_hp" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbSoinHp" class="rep-num" type="number" name="nb_soin_hp" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr> 
                <tr>
                    <td><label>Abonnements / <i>Subscriptions</i>:</label></td>
                    <td><input id="idCaAbo"  class="rep-num" type="number" name="ca_abo" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbAbo" class="rep-num" type="number" name="nb_abo" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr>
                <tr>
                    <td><label>Privatisations:</label></td>
                    <td><input id="idCaPrivate"  class="rep-num" type="number" name="ca_private" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbPrivate" class="rep-num" type="number" name="nb_private" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr>    
                <tr>
                    <td><label>Membership</i>:</label></td>
                    <td><input id="idCaMemb"  class="rep-num" type="number" name="ca_memb" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbMemb" class="rep-num" type="number" name="nb_memb" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr>
                <tr>
                    <td><label>Autres types de prestations / <i>Other types of services</i>:</label></td>
                    <td><input id="idCaSoinAutre"  class="rep-num" type="number" name="ca_soin_autre" placeholder="CA / REV.." oninput="totalCaSoinHorsIc()"></td>
                    <td><input id="idNbSoinAutre" class="rep-num" type="number" name="nb_soin_autre" placeholder="QTE / QTY..." oninput="totalNbSoinHorsIc()"></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(144,20,59); color:white;">Sous-total autres soins encaissés / <i>Sub-total other services revenue</i>:</td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="ca_soin_noIc_total" id="idCaSoinNoIcTotal"></textarea></td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="nb_soin_noIc_total" id="idNbSoinNoIcTotal"></textarea></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(102,14,41); color:white;">TOTAL SOINS ENCAISSES / <i>TOTAL TREATMENT REVENUE</i>:</td>
                    <td class="tdTotal" style="background-color:rgb(102,14,41);"><textarea style="background-color:rgb(102,14,41);" readonly class="resulTotal" name="total_ca_soin" id="idCaSoinTotal"></textarea></td>
                    <td class="tdTotal" style="background-color:rgb(102,14,41);"><textarea style="background-color:rgb(102,14,41);" readonly class="resulTotal" name="total_nb_soin" id="idNbSoinTotal"></textarea></td>
                </tr>
            </table>
            <br><br>
            <table>
                <tr class="nope">
                    <td class="none2"></td>
                    <td class="none">CA - <i>Revenue</i></td>
                    <td class="none">Qté - <i>Qty</i></td>
                </tr>
                <tr>
                    <td><label>Produits vendus VISAGE - nettoyants / <i>Retail FACE - cleansers </i>:</label></td>
                    <td><input id="idCaPdtVisNet"  class="rep-num" type="number" name="ca_pdt_vis_net" placeholder="CA / REV.." oninput="totalCaPdtVis()" ></td>
                    <td><input id="idNbPdtVisNet" class="rep-num" type="number" name="nb_pdt_vis_net" placeholder="QTE / QTY..." oninput="totalNbPdtVis()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus VISAGE - jeunesse / <i>Retail FACE - youth </i>:</label></td>
                    <td><input id="idCaPdtVisJeu"  class="rep-num" type="number" name="ca_pdt_vis_jeu" placeholder="CA / REV.." oninput="totalCaPdtVis()" ></td>
                    <td><input id="idNbPdtVisJeu" class="rep-num" type="number" name="nb_pdt_vis_jeu" placeholder="QTE / QTY..." oninput="totalNbPdtVis()"></td>
                </tr>
                <tr>
                    <td><label>Produits vendus VISAGE - spécifiques / <i>Retail FACE - specific </i>:</label></td>
                    <td><input id="idCaPdtVisSpe"  class="rep-num" type="number" name="ca_pdt_vis_spe" placeholder="CA / REV.." oninput="totalCaPdtVis()" ></td>
                    <td><input id="idNbPdtVisSpe" class="rep-num" type="number" name="nb_pdt_vis_spe" placeholder="QTE / QTY..." oninput="totalNbPdtVis()"></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(144,20,59); color:white;">Sous-total produits VISAGE / <i>Sub-total retail FACE </i>:</td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="ca_pdt_vis" id="idCaPdtVis"></textarea></td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="nb_pdt_vis" id="idNbPdtVis"></textarea></td>
                </tr>
            </table>
            <br><br>
            <table>
                <tr class="nope">
                    <td class="none2"></td>
                    <td class="none">CA - <i>Revenue</i></td>
                    <td class="none">Qté - <i>Qty</i></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - gommages / <i>Retail BODY - scrubs </i>:</label></td>
                    <td><input id="idCaPdtCorGom"  class="rep-num" type="number" name="ca_pdt_cor_gom" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorGom" class="rep-num" type="number" name="nb_pdt_cor_gom" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - hydratants / <i>Retail BODY - moisturizers </i>:</label></td>
                    <td><input id="idCaPdtCorHyd"  class="rep-num" type="number" name="ca_pdt_cor_hyd" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorHyd" class="rep-num" type="number" name="nb_pdt_cor_hyd" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - minceur / <i>Retail BODY - slimming </i>:</label></td>
                    <td><input id="idCaPdtCorMin"  class="rep-num" type="number" name="ca_pdt_cor_min" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorMin" class="rep-num" type="number" name="nb_pdt_cor_min" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - hammam / <i>Retail BODY - hammam </i>:</label></td>
                    <td><input id="idCaPdtCorHam"  class="rep-num" type="number" name="ca_pdt_cor_ham" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorHam" class="rep-num" type="number" name="nb_pdt_cor_ham" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - eaux fraîches / <i>Retail BODY - mists </i>:</label></td>
                    <td><input id="idCaPdtCorEau"  class="rep-num" type="number" name="ca_pdt_cor_eau" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorEau" class="rep-num" type="number" name="nb_pdt_cor_eau" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - aromacologie / <i>Retail BODY - aromacology </i>:</label></td>
                    <td><input id="idCaPdtCorAro"  class="rep-num" type="number" name="ca_pdt_cor_aro" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorAro" class="rep-num" type="number" name="nb_pdt_cor_aro" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr>
                    <td><label>Produits vendus CORPS - cheveux / <i>Retail BODY - hair </i>:</label></td>
                    <td><input id="idCaPdtCorHair"  class="rep-num" type="number" name="ca_pdt_cor_hair" placeholder="CA / REV.." oninput="totalCaPdtCor()" ></td>
                    <td><input id="idNbPdtCorHair" class="rep-num" type="number" name="nb_pdt_cor_hair" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(144,20,59); color:white;">Sous-total produits CORPS / <i>Sub-total retail BODY </i>:</td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="ca_pdt_cor" id="idCaPdtCor"></textarea></td>
                    <td class="tdTotal"><textarea readonly class="resulTotal" name="nb_pdt_cor" id="idNbPdtCor"></textarea></td>
                </tr>
            </table> 
            <br><br>
            <table>
                <tr class="nope">
                    <td class="none2"></td>
                    <td class="none">CA - <i>Revenue</i></td>
                    <td class="none">Qté - <i>Qty</i></td>
                </tr>
                <tr>
                    <td><label>Autres types de produits / <i>Other types of products </i>:</label></td>
                    <td><input id="idCaPdtAutre"  class="rep-num" type="number" name="ca_pdt_autre" placeholder="CA / REV.." oninput="totalCaPdtCor()"></td>
                    <td><input id="idNbPdtAutre" class="rep-num" type="number" name="nb_pdt_autre" placeholder="QTE / QTY..." oninput="totalNbPdtCor()" ></td>
                </tr>
                <tr style="background-color:rgb(220,220,220); border:none;">
                    <td style="background-color:rgb(220,220,220); border:none; height:20px;"></td>
                    <td style="background-color:rgb(220,220,220); border:none; height:20px;"></td>
                    <td style="background-color:rgb(220,220,220); border:none; height:20px;"></td>
                </tr>
                <tr class="nope">
                    <td style="text-align:right; background-color:rgb(102,14,41); color:white;">TOTAL PRODUITS ENCAISSES / <i>TOTAL RETAIL</i>:</td>
                    <td class="tdTotal" style="background-color:rgb(102,14,41);"><textarea style="background-color:rgb(102,14,41);" readonly class="resulTotal" name="ca_pdt" id="idCaPdtTotal"></textarea></td>
                    <td class="tdTotal" style="background-color:rgb(102,14,41);"><textarea style="background-color:rgb(102,14,41);" readonly class="resulTotal" name="nb_pdt" id="idNbPdtTotal"></textarea></td>
                </tr>  
            </table>     

            <button class="report-ok" type="submit" name="submitReport">Envoyer / <i>Send</i></button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </form>
</div>

<script src="js/calcul.js"></script>

<?php
include_once 'footer.php';
?>

<div class="bottom">
   <p> Ce site est réservé à l'usage exclusif des Spas Cinq Mondes en propre, franchise et management contract.<br><br><i>The website is reserved for the exclusive use of Cinq Mondes owned Spas, franchised Spas and Spas under management contract.</i></p>
</div>   