<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="LIRE nom3" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2etat="inactif" F2defaut="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" nbDecimales="8" epaisseurPoint="2" arrondiAuto="vrai"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="nom1 EST_DU_TYPE CHAINE" code="1#CHAINE#nom1"/>
        <item algoitem="nom2 EST_DU_TYPE CHAINE" code="1#CHAINE#nom2"/>
        <item algoitem="nom3 EST_DU_TYPE CHAINE" code="1#CHAINE#nom3"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Quel es votre nom ? &quot;" code="4#Quel es votre nom ? #1"/>
        <item algoitem="LIRE nom1" code="2#nom1#pasliste"/>
        <item algoitem="AFFICHER &quot;Quel est votre nom2&quot;" code="4#Quel est votre nom2#1"/>
        <item algoitem="LIRE nom2" code="2#nom2#pasliste"/>
        <item algoitem="AFFICHER &quot;Quel est votre nom3 ?&quot;" code="4#Quel est votre nom3 ?#1"/>
        <item algoitem="LIRE nom3" code="2#nom3#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
