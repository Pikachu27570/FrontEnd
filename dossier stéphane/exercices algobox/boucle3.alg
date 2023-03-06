<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL N+A" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2defaut="" F2para="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalAffichages="1000" totalBoucles="5000000" epaisseurPoint="2" maxBoucle="500000" nbDecimales="8" epaisseurLigne="2" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#N" algoitem="N EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#A#1#pasliste" algoitem="A PREND_LA_VALEUR 1"/>
        <item code="4#Entrez un nombre #0" algoitem="AFFICHER &quot;Entrez un nombre &quot;"/>
        <item code="2#N#pasliste" algoitem="LIRE N"/>
        <item code="4#Les dix nombres suivants sont : #1" algoitem="AFFICHER &quot;Les dix nombres suivants sont : &quot;"/>
        <item code="12#N#17#27" algoitem="POUR N ALLANT_DE 17 A 27">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="5#N#N+1#pasliste" algoitem="N PREND_LA_VALEUR N+1"/>
            <item code="3#N#1#pasliste" algoitem="AFFICHER N"/>
            <item code="20#N+A#1" algoitem="AFFICHERCALCUL N+A"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="19#Je pense que c'est ok" algoitem="//Je pense que c'est ok"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
