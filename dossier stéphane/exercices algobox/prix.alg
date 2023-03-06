<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;Le prix TTC est de &quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2lignes="" F2defaut="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalBoucles="5000000" nbDecimales="8" maxBoucle="500000" epaisseurLigne="2" totalAffichages="1000" epaisseurPoint="2" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#hors_taxte" algoitem="hors_taxte EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#Quantité" algoitem="Quantité EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#TVA" algoitem="TVA EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prix_ttc" algoitem="prix_ttc EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#hors_taxte#pasliste" algoitem="LIRE hors_taxte"/>
        <item code="2#Quantité#pasliste" algoitem="LIRE Quantité"/>
        <item code="2#TVA#pasliste" algoitem="LIRE TVA"/>
        <item code="4#Le prix TTC est de #0" algoitem="AFFICHER &quot;Le prix TTC est de &quot;"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
