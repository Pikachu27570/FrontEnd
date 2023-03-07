<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER sum"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2lignes="" F2para="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalAffichages="1000" maxBoucle="500000" epaisseurLigne="2" totalBoucles="5000000" arrondiAuto="vrai" epaisseurPoint="2" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="tab EST_DU_TYPE LISTE" code="1#LISTE#tab"/>
        <item algoitem="sum EST_DU_TYPE NOMBRE" code="1#NOMBRE#sum"/>
        <item algoitem="i EST_DU_TYPE NOMBRE" code="1#NOMBRE#i"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="tab[1] PREND_LA_VALEUR 2" code="5#tab#2#1"/>
        <item algoitem="tab[2] PREND_LA_VALEUR 5" code="5#tab#5#2"/>
        <item algoitem="tab[3] PREND_LA_VALEUR 7" code="5#tab#7#3"/>
        <item algoitem="tab[4] PREND_LA_VALEUR 9" code="5#tab#9#4"/>
        <item algoitem="sum PREND_LA_VALEUR 0" code="5#sum#0#pasliste"/>
        <item algoitem="POUR i ALLANT_DE 1 A 4" code="12#i#1#4">
            <item algoitem="DEBUT_POUR" code="13#debutpour"/>
            <item algoitem="sum PREND_LA_VALEUR sum + tab[i]" code="5#sum#sum + tab[i]#pasliste"/>
            <item algoitem="FIN_POUR" code="14#finpour"/>
        </item>
        <item algoitem="AFFICHER &quot;La somme des valeurs du tableaus est :&quot;" code="4#La somme des valeurs du tableaus est :#1"/>
        <item algoitem="AFFICHER sum" code="3#sum#1#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
