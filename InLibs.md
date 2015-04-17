InLibs
======

Semplice raccolta di classi php che mi potrebbero tornare utili.

Tutto viene salvato tramite composer: vedere **composer.json** .




Package Composer
================
come implementare e sviluppare questo package tramite composer.

0. creo l'ambiente di lavoro in cui sviluppare il package, pertanto creo una directory, ad esempio `PackageMy`

1. in `PackageMy` creo la directory del PACKAGE (chiamiamola `<root>`) in cui inseriro' il `composer.json` contenente per lo meno `name` e `version`. 
 
````
{
    "name": "IlNullatore/InLibs",
    "description": "Test composer",
    "version": "dev-master",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "Simo Sca",
            "email": "impetus_deep@ymail.com",
            "homepage": "http://example.com"
        }
    ],
    "require": {
        "php": ">=5.3.0",
        "psr/log": "~1.0",
        "monolog/monolog" : "*"
    },
    "require-dev": {  },
    "autoload": {
            "psr-4": {"HW\\": "src/HelloWorld"}
        },
    "suggest": { },
    "autoload": { },
    "provide": { }
}
````
L'esempio di cui sopra fara' in modo di installare il package in `vendor/IlNullatore/InLibs` quando il package verra' installato mediante **composer**.

Inoltre provvedera' a far installare le due dipendenze *monolog* e *psr*.

In ultimo implementera' l'autoload specifico del mio pacchetto (*psr-4* in questo caso).

2. per convenzione dentro la root posso inserire la directory `src` che conterra' le classi e verra' impiegata per l'autoload

3. in `<root>` lancio i comandi per creare il primo commit di git, e successivamente pusharlo in github, in questo caso:

    git init
    git add README.md
    git commit -m "first commit"
    git remote add origin https://github.com/SimoSca/InLibs.git
    git push -u origin master

4. in `PackageMy` aggiungo un file `composer.json` per scaricare via composer e inserire il package in `vendor`. Dato che non sono interessato a inserire il pacchetto in **Packagist**, ovvero nei repo di composer, mi limito a scaricarlo direttamente da github. Il file composer.json di `PackageMy` e':

````
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/SimoSca/InLibs.git"
        }
    ],
    "require":
        {
            "ilnullatore/inlibs" : "dev-master"
        }
}
````

5. sempre da `PackageMy` runnare
````
composer install
````

ed a questo punto dovrebbe aver caricato il pacchetto, le sue dipendenze e il relativo autoload.

### Step Successivi

a questo punto non e' piu' necessario, ne pratico, tenere la `<root>` del package, pertanto posso cancellarla.

Dato che la directory `MyPackage` e' un ambiente di lavoro creato per testare e sviluppare il package (*InLibs* in questo caso), tutti i cambiamenti, i commit e i rispettivi push andranno fatti in `vendor/IlNullatore/InLibs`.

#####NOTA BENE
e' importante notare che il comando 
````
composer update
````

aggiorna composer rispetto alle versioni in `Packagist` per i repo ufficiali di composer, e rispetto alla versione remota di git, in questo caso "https://github.com/SimoSca/InLibs.git": e' da li che composer va a pescare le informazioni (o meglio, dal `composer.json` remoto).

Questo vuol dire che se svolgo un cambiamento locale nella directory `InLibs`, col comando `composer update` in `PackageMy`, non ottengo alcun aggiornamento!

##### Esempio:
1. in `vendor/IlNullatore/InLibs/composer.json` tra i **require** aggiungo `"raven/raven": "~0.5"`
2. da `PackageMy` lancio `composer update`: in `vendor` non cambia nulla!
3. allora torno dentro a InLibs del punto **1** e pusho i cambiamenti in remoto
4. ancora da `PackageMy` lancio `composer update`: in `vendor` trovo anche il folder `raven`

Tutto questo perche', ripeto, composer i dati li pesca dal repo remoto, che e' aggiornato solamente dopo l'ultimo push!!!

