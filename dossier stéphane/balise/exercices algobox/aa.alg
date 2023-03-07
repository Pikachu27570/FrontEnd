<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="DEBUT_ALGORITHME" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#a#pasliste" algoitem="LIRE a"/>
        <item code="6#A%2==0" algoitem="SI (A%2==0) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#pair#0" algoitem="AFFICHER &quot;pair&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="103#commentaire" algoitem=""/>
        <item code="6#a%2==0" algoitem="SI (a%2==0) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="" algoitem=""/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="" algoitem=""/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
