<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER nom"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2defaut="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="nom EST_DU_TYPE CHAINE" code="1#CHAINE#nom"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Quel est votre nom ?&quot;" code="4#Quel est votre nom ?#0"/>
        <item algoitem="LIRE nom" code="2#nom#pasliste"/>
        <item algoitem="AFFICHER &quot;Bonjour &quot;" code="4#Bonjour #0"/>
        <item algoitem="AFFICHER nom" code="3#nom#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
