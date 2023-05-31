<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER sum" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" totalBoucles="5000000" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" totalAffichages="1000" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#LISTE#tab2" algoitem="tab2 EST_DU_TYPE LISTE"/>
        <item code="1#NOMBRE#i" algoitem="i EST_DU_TYPE NOMBRE"/>
        <item code="1#LISTE#tab" algoitem="tab EST_DU_TYPE LISTE"/>
        <item code="1#NOMBRE#sum" algoitem="sum EST_DU_TYPE NOMBRE"/>
        <item code="1#LISTE#tab3" algoitem="tab3 EST_DU_TYPE LISTE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="12#i#0#7" algoitem="POUR i ALLANT_DE 0 A 7">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="5#tab# ALGOBOX_ALEA_ENT(1,10)#i" algoitem="tab[i] PREND_LA_VALEUR  ALGOBOX_ALEA_ENT(1,10)"/>
            <item code="3#tab#1#i" algoitem="AFFICHER tab[i]"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="12#i#0#7" algoitem="POUR i ALLANT_DE 0 A 7">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="5#tab2#ALGOBOX_ALEA_ENT(1,10)#i" algoitem="tab2[i] PREND_LA_VALEUR ALGOBOX_ALEA_ENT(1,10)"/>
            <item code="3#tab2#1#i" algoitem="AFFICHER tab2[i]"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="12#i#0#7" algoitem="POUR i ALLANT_DE 0 A 7">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="5#sum#sum + tab[1] + tab2[i]#pasliste" algoitem="sum PREND_LA_VALEUR sum + tab[1] + tab2[i]"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="3#sum#1#pasliste" algoitem="AFFICHER sum"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
