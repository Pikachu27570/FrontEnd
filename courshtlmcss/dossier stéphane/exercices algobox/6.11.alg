<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER tab2[i]"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" epaisseurLigne="2" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="tab2 EST_DU_TYPE LISTE" code="1#LISTE#tab2"/>
        <item algoitem="i EST_DU_TYPE NOMBRE" code="1#NOMBRE#i"/>
        <item algoitem="tab EST_DU_TYPE LISTE" code="1#LISTE#tab"/>
        <item algoitem="sum EST_DU_TYPE NOMBRE" code="1#NOMBRE#sum"/>
        <item algoitem="o EST_DU_TYPE NOMBRE" code="1#NOMBRE#o"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="POUR i ALLANT_DE 0 A 7" code="12#i#0#7">
            <item algoitem="DEBUT_POUR" code="13#debutpour"/>
            <item algoitem="tab[i] PREND_LA_VALEUR ALGOBOX_ALEA_ENT(1,10)" code="5#tab#ALGOBOX_ALEA_ENT(1,10)#i"/>
            <item algoitem="AFFICHER tab[i]" code="3#tab#1#i"/>
            <item algoitem="FIN_POUR" code="14#finpour"/>
        </item>
        <item algoitem="POUR i ALLANT_DE 0 A 7" code="12#i#0#7">
            <item algoitem="DEBUT_POUR" code="13#debutpour"/>
            <item algoitem="tab2[i] PREND_LA_VALEUR ALGOBOX_ALEA_ENT(1,10)" code="5#tab2#ALGOBOX_ALEA_ENT(1,10)#i"/>
            <item algoitem="i PREND_LA_VALEUR tab[i] * tab2[i]" code="5#i#tab[i] * tab2[i]#pasliste"/>
            <item algoitem="AFFICHER tab2[i]" code="3#tab2#1#i"/>
            <item algoitem="FIN_POUR" code="14#finpour"/>
        </item>
        <item algoitem="POUR i ALLANT_DE 0 A 7" code="12#i#0#7">
            <item algoitem="DEBUT_POUR" code="13#debutpour"/>
            <item algoitem="LIRE tab2[i]" code="2#tab2#i"/>
            <item algoitem="POUR i ALLANT_DE 0 A 7" code="12#i#0#7">
                <item algoitem="DEBUT_POUR" code="13#debutpour"/>
                <item algoitem="o PREND_LA_VALEUR tab[i] * tab2[i]" code="5#o#tab[i] * tab2[i]#pasliste"/>
                <item algoitem="FIN_POUR" code="14#finpour"/>
            </item>
            <item algoitem="FIN_POUR" code="14#finpour"/>
        </item>
        <item algoitem="AFFICHER o" code="3#o#1#pasliste"/>
        <item algoitem="AFFICHER sum" code="3#sum#1#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
