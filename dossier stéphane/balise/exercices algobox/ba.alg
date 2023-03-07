<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="c PREND_LA_VALEUR a + b"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2defaut="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="a EST_DU_TYPE NOMBRE" code="1#NOMBRE#a"/>
        <item algoitem="b EST_DU_TYPE NOMBRE" code="1#NOMBRE#b"/>
        <item algoitem="c EST_DU_TYPE NOMBRE" code="1#NOMBRE#c"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="a PREND_LA_VALEUR 3" code="5#a#3#pasliste"/>
        <item algoitem="b PREND_LA_VALEUR 10" code="5#b#10#pasliste"/>
        <item algoitem="c PREND_LA_VALEUR a + b" code="5#c#a + b#pasliste"/>
        <item algoitem="b PREND_LA_VALEUR a + b" code="5#b#a + b#pasliste"/>
        <item algoitem="a PREND_LA_VALEUR c" code="5#a#c#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
