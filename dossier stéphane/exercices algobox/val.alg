<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER Val" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2para="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param nbDecimales="8" epaisseurLigne="2" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2" maxBoucle="500000" totalBoucles="5000000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#Val" algoitem="Val EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#double" algoitem="double EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="3#Val#0#pasliste" algoitem="AFFICHER Val"/>
        <item code="5#Val#231#pasliste" algoitem="Val PREND_LA_VALEUR 231"/>
        <item code="3#double#1#pasliste" algoitem="AFFICHER double"/>
        <item code="5#double#Val*2#pasliste" algoitem="double PREND_LA_VALEUR Val*2"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
