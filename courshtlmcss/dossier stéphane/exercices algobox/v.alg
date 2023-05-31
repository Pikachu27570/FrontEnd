<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER aire"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2para="" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" epaisseurLigne="2" arrondiAuto="vrai" maxBoucle="500000" epaisseurPoint="2" totalBoucles="5000000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="larg EST_DU_TYPE NOMBRE" code="1#NOMBRE#larg"/>
        <item algoitem="long EST_DU_TYPE NOMBRE" code="1#NOMBRE#long"/>
        <item algoitem="aire EST_DU_TYPE NOMBRE" code="1#NOMBRE#aire"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE larg" code="2#larg#pasliste"/>
        <item algoitem="LIRE long" code="2#long#pasliste"/>
        <item algoitem="aire PREND_LA_VALEUR larg*long" code="5#aire#larg*long#pasliste"/>
        <item algoitem="AFFICHER aire" code="3#aire#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
