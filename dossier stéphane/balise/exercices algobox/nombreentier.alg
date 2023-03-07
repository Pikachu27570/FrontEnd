<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;Positif &quot;"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2defaut="" F2para="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2" nbDecimales="8" totalAffichages="1000" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#Ent1" algoitem="Ent1 EST_DU_TYPE CHAINE"/>
        <item code="1#NOMBRE#Ent2" algoitem="Ent2 EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrez première valeur : #0" algoitem="AFFICHER &quot;Entrez première valeur : &quot;"/>
        <item code="2#Ent1#pasliste" algoitem="LIRE Ent1"/>
        <item code="4#Entrez deuxième valeur : #0" algoitem="AFFICHER &quot;Entrez deuxième valeur : &quot;"/>
        <item code="2#Ent2#pasliste" algoitem="LIRE Ent2"/>
        <item code="6#Ent1 =0 Ou Ent2 =0 ent1 >0 Et Ent2 >0 Ou Ent1 &lt;0 Et Ent2 &lt;0" algoitem="SI (Ent1 =0 Ou Ent2 =0 ent1 >0 Et Ent2 >0 Ou Ent1 &lt;0 Et Ent2 &lt;0) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Le produit est nul#0" algoitem="AFFICHER &quot;Le produit est nul&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Positif #0" algoitem="AFFICHER &quot;Positif &quot;"/>
                <item code="4#Négatif #0" algoitem="AFFICHER &quot;Négatif &quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
