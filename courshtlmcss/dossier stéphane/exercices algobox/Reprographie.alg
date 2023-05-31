<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SI" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" epaisseurLigne="2" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#nombres" algoitem="nombres EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prix" algoitem="prix EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Nombre de photocopies: #0" algoitem="AFFICHER &quot;Nombre de photocopies: &quot;"/>
        <item code="2#nombres#pasliste" algoitem="LIRE nombres"/>
        <item code="6#nombres==10" algoitem="SI (nombres==10) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#prix#nombres*0.1#pasliste" algoitem="prix PREND_LA_VALEUR nombres*0.1"/>
            <item code="6#nombres==30" algoitem="SI (nombres==30) ALORS">
                <item code="7#debutsi" algoitem="DEBUT_SI"/>
                <item code="5#prix#nombres-10*0.09+1#pasliste" algoitem="prix PREND_LA_VALEUR nombres-10*0.09+1"/>
                <item code="8#finsi" algoitem="FIN_SI"/>
                <item code="9#sinon" algoitem="SINON">
                    <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                    <item code="5#prix#nombres-30*0.08+2.8#pasliste" algoitem="prix PREND_LA_VALEUR nombres-30*0.08+2.8"/>
                    <item code="11#finsinon" algoitem="FIN_SINON"/>
                </item>
            </item>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="4#Le prix total est:prixeuros(s)#0" algoitem="AFFICHER &quot;Le prix total est:prixeuros(s)&quot;"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
