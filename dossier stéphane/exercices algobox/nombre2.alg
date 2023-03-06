<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2etat="inactif" F2defaut="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" nbDecimales="8" epaisseurPoint="2" arrondiAuto="vrai"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="nombr1 EST_DU_TYPE NOMBRE" code="1#NOMBRE#nombr1"/>
        <item algoitem="nombr2 EST_DU_TYPE NOMBRE" code="1#NOMBRE#nombr2"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Quel est le 1er nombre ? &quot;" code="4#Quel est le 1er nombre ? #0"/>
        <item algoitem="LIRE nombr1" code="2#nombr1#pasliste"/>
        <item algoitem="SI (nombr1>0) ALORS" code="6#nombr1>0">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Posiitif&quot;" code="4#Posiitif#0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
            <item algoitem="SINON" code="9#sinon">
                <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                <item algoitem="AFFICHER &quot;Négatif&quot;" code="4#Négatif#0"/>
                <item algoitem="FIN_SINON" code="11#finsinon"/>
            </item>
        </item>
        <item algoitem="" code="103#commentaire"/>
        <item algoitem="AFFICHER &quot;Quel est le second nombre ?&quot;" code="4#Quel est le second nombre ?#0"/>
        <item algoitem="LIRE nombr2" code="2#nombr2#pasliste"/>
        <item algoitem="SI (nombr2&lt;5) ALORS" code="6#nombr2&lt;5">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Positif &quot;" code="4#Positif #0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
            <item algoitem="SINON" code="9#sinon">
                <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                <item algoitem="AFFICHER &quot;Négatif &quot;" code="4#Négatif #0"/>
                <item algoitem="FIN_SINON" code="11#finsinon"/>
            </item>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
