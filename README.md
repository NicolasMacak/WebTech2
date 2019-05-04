# WebTech2
Skúškové zadanie

Toto su moje poznámky k zadaniu(Nicolas). Možno môžu niekomu helpnúť, alebo zistíte, že som si niečo zle vyložil. zatiaľ je tam sú tam iba všeobecné veci a úloha 2.

technicka dokumentacia
podstranka uvadzajuca rozdelenie uloh pomedzi clenov a link na technicku spravu

----

funkcionalita
Stranka s ucelom bodoveho rozdelenia a prehliadania pre predmet
stranka musi byt responzivna a prisposobena pre tlac

Pre vybraty skolsky rok:

zobrazit ziskane body
rozdelit body clenom pri timovom zadani
Generovat hesla pre studentov a rozposlat ich

----

po prihlaseni len relevantne udaje pre prihlaseneho
Administrator sa prihlasuje heslom, co vygenerovala stranka
Stranka je dvojjazycna

-- databaza
import csv udajov do databazy
Zapezpecit pridanie stlpcov a riadkov to tabulky
Zabezpecit ze v pripade duplicitnych udajov sa zaznamy refreshuju

poznamky
povolene pouzitie php frameworku (zakazane CMS systemu)
v prostredi by sa malo dat lahko orientovat
Stranka by mala byt zabezpecena


uloha 2

----- Prihlasenie Admina
Zadava studentov do systemu 
Zadava timom celkove body
Ma celkovy prehlad o vsetkych timoch a bodovom rozdeleni

Studenti budu zadavany do aplikacie prostrednictov formularu s parametrami
skolsky rok
nazov predmetu
csv subor s vysledkami
oddelovac, ktory je pouzity v csv medzi jednotlivy stlpcami v riadku

Heslo
Ak sa nachadza v csv subore 
Tak sa student prihlasuje pomocou AIS loginu a daneho hesla
Ak sa nenachadza
tak cez ldap. 

Toto spracovava aplikacia. Nie admin, alebo prihlasujuci.

Po pridani studentov mozu aplikaciu pouzivat kapitani a nekapitani.

--- Po rozdeleni a odsuhlaseni bodov studentami bude admin vidiet
	-celkovy pocet udelovanych bodov
	- zoznam studentov spolu s bodmi a stavom suhlasu
	- tlacidla suhlasim/nesuhlasim, ktorymi potvrdi alebo zamietne rozdelenie bodov

toto by sa mohlo spravit ako rollovacia table(Zadanie7/ rozbalovacia tabulka s poctom pristupov z miest krajin)

------ Prihlasenie kapitana
Zobrazi sa mu
pocet bodov na prerozdelenie udelenych administratorom 
ludia ktorym treba body prerozdelit

------- Prihlasenie nekapitana
Zobrazia sa mu      
               - body prerozdelene kapitanom
               - tlacidla suhlasim/nesuhlasim

Po kliknuti na jedno z nich sa vyziada potvrdenie ci je to nazaj jeho finalne rozhodnutie.
Po potvrdeni je stav nemenny.
Po ukonceni bodovania

-- umoznenii export do csv suboru
ID studenta
meno studenta
body studenta

Student sa moze v priebehu semestra nachadzat v roznych predmetoch(tym padom v roznych timoch). Bude mozne preklikavat sa medzi predmetmi.

taktiez do grafov vypisat statistiky
graf  pocet studentov v predmete
pocet suhlasiacich studentov
pocet nesuhlasiacich studentov
pocet studentov, ktory sa nevyjadrili

2. graf pocet timov
pocet uzavretych timov
pocet timov, ku ktorym sa je treba vyjadrit
pocet timov s nevyjadrenymi studentami


Vyzva:
stranky sa aktualizuju pre vestkych ucastnikov v realnom case bez nutnosti refreshu
(Zrejme nieco podobne ako zadanie 5 kresliaca verzia)
