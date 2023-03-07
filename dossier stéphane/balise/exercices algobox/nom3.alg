<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (NOM1&lt;NOM2 ET NOM2&lt;NOM3 ) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2etat="inactif" F2defaut="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" totalAffichages="1000" epaisseurPoint="2" nbDecimales="8" totalBoucles="5000000" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#NOM1" algoitem="NOM1 EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#NOM2" algoitem="NOM2 EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#NOM3" algoitem="NOM3 EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#NOM1#pasliste" algoitem="LIRE NOM1"/>
        <item code="2#NOM2#pasliste" algoitem="LIRE NOM2"/>
        <item code="2#NOM3#pasliste" algoitem="LIRE NOM3"/>
        <item code="6#NOM1&lt;NOM2 ET NOM2&lt;NOM3 " algoitem="SI (NOM1&lt;NOM2 ET NOM2&lt;NOM3 ) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Rangez alphabétique#1" algoitem="AFFICHER &quot;Rangez alphabétique&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Déclassement alphabétique#1" algoitem="AFFICHER &quot;Déclassement alphabétique&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
