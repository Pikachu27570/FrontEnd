<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#N" algoitem="N EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#x" algoitem="x EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrez un nombre #0" algoitem="AFFICHER &quot;Entrez un nombre &quot;"/>
        <item code="2#N#pasliste" algoitem="LIRE N"/>
        <item code="4#La table de multiplication de ce nombre est : #0" algoitem="AFFICHER &quot;La table de multiplication de ce nombre est : &quot;"/>
        <item code="12#A#1#10" algoitem="POUR A ALLANT_DE 1 A 10">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="3#N#0#pasliste" algoitem="AFFICHER N"/>
            <item code="12#A#1#10" algoitem="POUR A ALLANT_DE 1 A 10">
                <item code="13#debutpour" algoitem="DEBUT_POUR"/>
                <item code="3#N#0#pasliste" algoitem="AFFICHER N"/>
                <item code="4#*#0" algoitem="AFFICHER &quot;*&quot;"/>
                <item code="3#A#1#pasliste" algoitem="AFFICHER A"/>
                <item code="14#finpour" algoitem="FIN_POUR"/>
            </item>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="103#commentaire" algoitem=""/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
