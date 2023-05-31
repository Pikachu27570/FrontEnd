<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;Les dix nombres suivants sont : &quot;"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2lignes="" F2etat="inactif" F2defaut=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param nbDecimales="8" totalBoucles="5000000" maxBoucle="500000" totalAffichages="1000" epaisseurLigne="2" arrondiAuto="vrai" epaisseurPoint="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="N EST_DU_TYPE NOMBRE" code="1#NOMBRE#N"/>
        <item algoitem="A EST_DU_TYPE NOMBRE" code="1#NOMBRE#A"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Entrez un nombre &quot;" code="4#Entrez un nombre #0"/>
        <item algoitem="LIRE N" code="2#N#pasliste"/>
        <item algoitem="A PREND_LA_VALEUR 0" code="5#A#0#pasliste"/>
        <item algoitem="AFFICHER &quot;Les dix nombres suivants sont : &quot;" code="4#Les dix nombres suivants sont : #1"/>
        <item algoitem="TANT_QUE (A &lt;10) FAIRE" code="15#A &lt;10">
            <item algoitem="DEBUT_TANT_QUE" code="16#debuttantque"/>
            <item algoitem="A PREND_LA_VALEUR A+1" code="5#A#A+1#pasliste"/>
            <item algoitem="AFFICHERCALCUL  N+A" code="20# N+A#0"/>
            <item algoitem="FIN_TANT_QUE" code="17#fintantque"/>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
