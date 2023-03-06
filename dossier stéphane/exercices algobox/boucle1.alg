<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;Affichez un nombre entre 1 et 3 &quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#N" algoitem="N EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Affichez un nombre entre 1 et 3 #0" algoitem="AFFICHER &quot;Affichez un nombre entre 1 et 3 &quot;"/>
        <item code="2#N#pasliste" algoitem="LIRE N"/>
        <item code="15#N&lt;1 OU N>3" algoitem="TANT_QUE (N&lt;1 OU N>3) FAIRE">
            <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
            <item code="4#Réponse incorrect #1" algoitem="AFFICHER &quot;Réponse incorrect &quot;"/>
            <item code="4#Affichez un nombre entre 1 et 3 #1" algoitem="AFFICHER &quot;Affichez un nombre entre 1 et 3 &quot;"/>
            <item code="2#N#pasliste" algoitem="LIRE N"/>
            <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
        </item>
        <item code="4#Réponse correct #0" algoitem="AFFICHER &quot;Réponse correct &quot;"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
