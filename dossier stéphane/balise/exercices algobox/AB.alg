<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="B PREND_LA_VALEUR B-1" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#B" algoitem="B EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#A#1#pasliste" algoitem="A PREND_LA_VALEUR 1"/>
        <item code="5#B#3#pasliste" algoitem="B PREND_LA_VALEUR 3"/>
        <item code="6#A+1" algoitem="SI (A+1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#A#A+1#pasliste" algoitem="A PREND_LA_VALEUR A+1"/>
            <item code="6#(B>4)" algoitem="SI ((B>4)) ALORS">
                <item code="7#debutsi" algoitem="DEBUT_SI"/>
                <item code="5#B#B-1#pasliste" algoitem="B PREND_LA_VALEUR B-1"/>
                <item code="8#finsi" algoitem="FIN_SI"/>
            </item>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
