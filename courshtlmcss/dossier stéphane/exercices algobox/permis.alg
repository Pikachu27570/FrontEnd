<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (apermis='o' Et nbanneeexp>=6) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param arrondiAuto="vrai" epaisseurLigne="2" epaisseurPoint="2" nbDecimales="8" maxBoucle="500000" totalAffichages="1000" totalBoucles="5000000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#apermis" algoitem="apermis EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#nbanneeexp" algoitem="nbanneeexp EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Possède le permis (O/N) : #0" algoitem="AFFICHER &quot;Possède le permis (O/N) : &quot;"/>
        <item code="2#apermis#pasliste" algoitem="LIRE apermis"/>
        <item code="4#Nombre d'années d'expérience :#0" algoitem="AFFICHER &quot;Nombre d'années d'expérience :&quot;"/>
        <item code="2#nbanneeexp#pasliste" algoitem="LIRE nbanneeexp"/>
        <item code="6#apermis='o' Et nbanneeexp>=6" algoitem="SI (apermis='o' Et nbanneeexp>=6) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Embauche autorisée ! #0" algoitem="AFFICHER &quot;Embauche autorisée ! &quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Embauche impossible ! #0" algoitem="AFFICHER &quot;Embauche impossible ! &quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
