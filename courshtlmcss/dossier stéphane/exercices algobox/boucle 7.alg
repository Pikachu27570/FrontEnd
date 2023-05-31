<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="SI (nb>1) ALORS" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2lignes="" F2para="" F2defaut=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" nbDecimales="8" totalBoucles="5000000" epaisseurPoint="2" totalAffichages="1000" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#nb" algoitem="nb EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#i" algoitem="i EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#nbgrand" algoitem="nbgrand EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#pose" algoitem="pose EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#i#1#pasliste" algoitem="i PREND_LA_VALEUR 1"/>
        <item code="4#Entrez un nombre#1" algoitem="AFFICHER &quot;Entrez un nombre&quot;"/>
        <item code="3#i#1#pasliste" algoitem="AFFICHER i"/>
        <item code="2#nb#pasliste" algoitem="LIRE nb"/>
        <item code="15#nb!=0" algoitem="TANT_QUE (nb!=0) FAIRE">
            <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
            <item code="5#i#nb#pasliste" algoitem="i PREND_LA_VALEUR nb"/>
            <item code="2#nb#pasliste" algoitem="LIRE nb"/>
            <item code="4#Entrez un nombre#1" algoitem="AFFICHER &quot;Entrez un nombre&quot;"/>
            <item code="3#i#1#pasliste" algoitem="AFFICHER i"/>
            <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
        </item>
        <item code="2#nb#pasliste" algoitem="LIRE nb"/>
        <item code="6#nb>1" algoitem="SI (nb>1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#pose#nb#pasliste" algoitem="pose PREND_LA_VALEUR nb"/>
            <item code="5#pose#i#pasliste" algoitem="pose PREND_LA_VALEUR i"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
