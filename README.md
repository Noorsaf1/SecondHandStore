Projekt: Second Hand Store (PHP)
Second Hand Store är ett webbprojekt utvecklat med PHP. Det är en onlinebutik där användare kan köpa och sälja begagnade varor. Webbsidan erbjuder en intuitiv och användarvänlig plattform för att underlätta köp och försäljning av begagnade saker.

Installation och konfiguration
Förutsättningar
För att köra Second Hand Store-projektet på din lokala maskin behöver du följande förinstallerat:

PHP (version 7.4 eller högre)
MySQL (version 5.7 eller högre)
Composer
Apache server
Steg för att installera
Klona detta repositorium till din lokala maskin eller ladda ner zip-filen.

git clone https://github.com/nooranisafir/second-hand-store.git
Navigera till projektmappen.

cd second-hand-store
Installera alla beroenden med Composer.

composer install
Kopiera .env.example till .env och uppdatera databasinställningarna enligt din MySQL-konfiguration.

cp .env.example .env
Skapa en databas i MySQL och utför migrationerna.

php artisan migrate
Starta servern.


php artisan serve
Nu kan du öppna webbläsaren och gå till http://localhost:8000 för att se din Second Hand Store webbapplikation.

Funktioner
Produktlistning: Användare kan bläddra bland tillgängliga produkter.
Lägga upp produkter till försäljning: Användare kan lägga upp sina egna produkter till försäljning.
Köpfunktion: Användare kan köpa produkter direkt från webbplatsen.
Testning
För att köra tester, använd följande kommando:



php artisan test

Bidra
Om du vill bidra, var god att skicka in en pull request.

Licens
Detta projekt är licensierat under MIT-licensen.