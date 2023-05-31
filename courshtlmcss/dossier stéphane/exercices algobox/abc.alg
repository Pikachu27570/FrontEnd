<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="A PREND_LA_VALEUR C"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2etat="inactif" F2para="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" epaisseurLigne="2" maxBoucle="500000" epaisseurPoint="2" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="A EST_DU_TYPE NOMBRE" code="1#NOMBRE#A"/>
        <item algoitem="B EST_DU_TYPE NOMBRE" code="1#NOMBRE#B"/>
        <item algoitem="C EST_DU_TYPE NOMBRE" code="1#NOMBRE#C"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="A PREND_LA_VALEUR 5" code="5#A#5#pasliste"/>
        <item algoitem="B PREND_LA_VALEUR 3" code="5#B#3#pasliste"/>
        <item algoitem="C PREND_LA_VALEUR A+B" code="5#C#A+B#pasliste"/>
        <item algoitem="B PREND_LA_VALEUR B+A" code="5#B#B+A#pasliste"/>
        <item algoitem="A PREND_LA_VALEUR C" code="5#A#C#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
