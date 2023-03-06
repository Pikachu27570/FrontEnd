<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2lignes="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalBoucles="5000000" totalAffichages="1000" nbDecimales="8" arrondiAuto="vrai" maxBoucle="500000" epaisseurPoint="2" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#M" algoitem="M EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#N" algoitem="N EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrez deux nombres :#1" algoitem="AFFICHER &quot;Entrez deux nombres :&quot;"/>
        <item code="2#M#pasliste" algoitem="LIRE M"/>
        <item code="2#N#pasliste" algoitem="LIRE N"/>
        <item code="6#M >0 ET N >0 OU M &lt;0 ET N &lt;0" algoitem="SI (M >0 ET N >0 OU M &lt;0 ET N &lt;0) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Positif#1" algoitem="AFFICHER &quot;Positif&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Négatif#1" algoitem="AFFICHER &quot;Négatif&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="6#M&lt;0 ET N&lt;0" algoitem="SI (M&lt;0 ET N&lt;0) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="" algoitem=""/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
