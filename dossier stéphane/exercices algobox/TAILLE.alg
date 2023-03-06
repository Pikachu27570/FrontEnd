<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (Taille >=120 Et Taille &lt;=200) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2defaut="" F2para="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2" nbDecimales="8" totalAffichages="1000" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#Taille" algoitem="Taille EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrez la taille #0" algoitem="AFFICHER &quot;Entrez la taille &quot;"/>
        <item code="2#Taille#pasliste" algoitem="LIRE Taille"/>
        <item code="6#Taille >=120 Et Taille &lt;=200" algoitem="SI (Taille >=120 Et Taille &lt;=200) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Accès autorisé ! #0" algoitem="AFFICHER &quot;Accès autorisé ! &quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Accès refusé ! #0" algoitem="AFFICHER &quot;Accès refusé ! &quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="103#commentaire" algoitem=""/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
