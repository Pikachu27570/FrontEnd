<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER n" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#n" algoitem="n EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#n#1#pasliste" algoitem="n PREND_LA_VALEUR 1"/>
        <item code="15#pow(2,n)" algoitem="TANT_QUE (pow(2,n)) FAIRE">
            <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
            <item code="5#n#n+1#pasliste" algoitem="n PREND_LA_VALEUR n+1"/>
            <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
        </item>
        <item code="3#n#1#pasliste" algoitem="AFFICHER n"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
