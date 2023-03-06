<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (num > 0 ET num != 0 ) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2lignes="" F2para="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalAffichages="1000" maxBoucle="500000" epaisseurLigne="2" totalBoucles="5000000" arrondiAuto="vrai" epaisseurPoint="2" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="tab EST_DU_TYPE LISTE" code="1#LISTE#tab"/>
        <item algoitem="num EST_DU_TYPE NOMBRE" code="1#NOMBRE#num"/>
        <item algoitem="i EST_DU_TYPE NOMBRE" code="1#NOMBRE#i"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Entrer un numero&quot;" code="4#Entrer un numero#1"/>
        <item algoitem="LIRE num" code="2#num#pasliste"/>
        <item algoitem="POUR i ALLANT_DE 0 A 0" code="12#i#0#0">
            <item algoitem="DEBUT_POUR" code="13#debutpour"/>
            <item algoitem="SI (num > 0 ET num != 0 ) ALORS" code="6#num > 0 ET num != 0 ">
                <item algoitem="DEBUT_SI" code="7#debutsi"/>
                <item algoitem="AFFICHER &quot;le numero est positif&quot;" code="4#le numero est positif#1"/>
                <item algoitem="FIN_SI" code="8#finsi"/>
                <item algoitem="SINON" code="9#sinon">
                    <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                    <item algoitem="AFFICHER &quot;le numero est negatif&quot;" code="4#le numero est negatif#1"/>
                    <item algoitem="FIN_SINON" code="11#finsinon"/>
                </item>
            </item>
            <item algoitem="FIN_POUR" code="14#finpour"/>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
