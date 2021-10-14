<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php 
$paragrafo = "È considerato uno dei migliori piloti di tutti i tempi.[1] Insieme a Lewis Hamilton è il più vincente nella storia della Formula 1 con 7 titoli mondiali, i primi due con la Benetton (1994 e 1995) e successivamente cinque consecutivi con la Ferrari (2000, 2001, 2002, 2003 e 2004).

Soprannominato Kaiser,[2][3] Schumacher detiene alcuni record della Formula 1 avendo conseguito, oltre ai titoli iridati, anche il maggior numero di giri veloci in gara e di hat trick, ovvero pole position, vittoria e giro più veloce nello stesso Gran Premio. Fino al 13 ottobre 2013 ha detenuto anche il record assoluto di punti in carriera, superato in quell'occasione da Fernando Alonso e in seguito da altri quattro piloti.[4] È al secondo posto all time per numero di gare vinte (91), podi (155) e di pole position (68), in tutti e tre i primati dietro al solo Hamilton.[5]

Esempio di pilota capace di migliorarsi costantemente nel corso degli anni, all'innato talento naturale ha unito progressivi affinamenti capaci di farlo eccellere nella condotta di gara, adattando il suo stile di guida al mutare delle condizioni e pianificando in anticipo ogni eventualità, il tutto mantenendo sempre una guida al limite; ciò anche grazie al duro allenamento a cui sottoponeva il proprio corpo, ben superiore ai colleghi della sua generazione.[6] A questo ha aggiunto una spiccata sensibilità per i propri limiti nonché per quelli delle sue monoposto, aspetto che ne ha fatto un pilota raramente caduto in errori oltreché capace di indirizzare al meglio, attraverso i suoi riscontri e giudizi, il lavoro degli uomini della squadra;[6] ingegneri in primis, a cominciare da Ross Brawn col quale ha instaurato un duraturo sodalizio tecnico protrattosi pressoché per l'intera carriera.[6]

Oltre che essere un pilota completo in ogni aspetto, ebbe anche grandi doti da collaudatore in grado di far crescere le proprie vetture. Inoltre, Schumacher è stato il primo tedesco a laurearsi campione del mondo di Formula 1:[N 1] È stato l'icona più popolare nella Formula 1 fino al 2006, secondo un sondaggio della FIA.[7]

Nel mondiale 2002 si è laureato campione del mondo con sei Gran Premi di anticipo (record assoluto), diventando poi anche l'unico pilota della storia a essere salito sul podio in tutte le gare di una stagione in programma, 17 in quell'anno.[8] Il 12 ottobre 2003, vincendo il suo sesto mondiale, è diventato il più titolato pilota di Formula 1, superando il record di Juan Manuel Fangio, e nel 2004 ha marcato un ulteriore primato vincendo, con 13 successi su 18 gare, il quinto titolo iridato consecutivo oltreché settimo della carriera.[6] Ritiratosi una prima volta alla fine del 2006, ha deciso di tornare a correre nella stagione 2010, a 41 anni, con la Mercedes, per poi ritirarsi definitivamente alla fine del 2012." ; 

$paragrafiDivisi = explode(".", $paragrafo);

?>

<ol>
    <?php foreach ($paragrafiDivisi as $Singoliparagrafi) { ?>
        <li>
           <?php echo $Singoliparagrafi ?>
        </li>
    <?php } ?>
    
</ol>


<?php echo $paragrafo; ?>
