<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (AGE >=50) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2defaut="" F2para="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2" nbDecimales="8" totalAffichages="1000" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#AGE" algoitem="AGE EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Quel age avez-vous ? #1" algoitem="AFFICHER &quot;Quel age avez-vous ? &quot;"/>
        <item code="2#AGE#pasliste" algoitem="LIRE AGE"/>
        <item code="6#AGE >=50" algoitem="SI (AGE >=50) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Ok on continue ! #0" algoitem="AFFICHER &quot;Ok on continue ! &quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Désolé, vous êtes trop jeune ! #0" algoitem="AFFICHER &quot;Désolé, vous êtes trop jeune ! &quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
