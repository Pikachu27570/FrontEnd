<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="SI (Catégorie) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2lignes="" F2para="" F2defaut="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" totalBoucles="5000000" epaisseurLigne="2" maxBoucle="500000" nbDecimales="8" totalAffichages="1000" epaisseurPoint="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="AGE EST_DU_TYPE CHAINE" code="1#CHAINE#AGE"/>
        <item algoitem="Catégorie EST_DU_TYPE CHAINE" code="1#CHAINE#Catégorie"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Quel age as tu ? &quot;" code="4#Quel age as tu ? #0"/>
        <item algoitem="LIRE AGE" code="2#AGE#pasliste"/>
        <item algoitem="SI (Catégorie) ALORS" code="6#Catégorie">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Poussin de 6 à 7 ans&quot;" code="4#Poussin de 6 à 7 ans#1"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (Catégorie &lt;8) ALORS" code="6#Catégorie &lt;8">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Pupille de 8 à 9 ans&quot;" code="4#Pupille de 8 à 9 ans#1"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (Catégorie &lt;10) ALORS" code="6#Catégorie &lt;10">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Minime de 10 à 11 ans &quot;" code="4#Minime de 10 à 11 ans #1"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (Catégorie &lt;12) ALORS" code="6#Catégorie &lt;12">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;Cadet après 12 ans&quot;" code="4#Cadet après 12 ans#1"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
