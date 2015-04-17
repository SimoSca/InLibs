InLibs
======

Semplice raccolta di classi php che mi potrebbero tornare utili.

Tutto viene salvato tramite composer: vedere **composer.json** .




Package Composer
================
come implementare e sviluppare questo package tramite composer.

0. creo l'ambiente di lavoro in cui sviluppare il package, pertanto creo una directory, ad esempio `PackageMy`
1. in `PackageMy` creo la directory del PACKAGE (chiamiamola `<root>`) in cui inseriro' il `composer.json` contenente per lo meno `name` e `version`.
2. per convenzione dentro la root posso inserire la directory `src` che conterra' le classi e verra' impiegata per l'autoload
3. in `<root>` lancio i comandi per creare il primo commit di git, e successivamente pusharlo in github, in questo caso:

    git init
    git add README.md
    git commit -m "first commit"
    git remote add origin https://github.com/SimoSca/InLibs.git
    git push -u origin master

Fatto questo, ora creo l'ambiente di lavoro in cui sviluppare il package,
pertanto creo una directory, ad esempio `PackageMy`, ed in questa inserisco un file `composer.json`
