LOKA SRL — SITO WEB DIMOSTRATIVO v1.1
Realizzazione prototipo: Thread Group | 19 ottobre 2026
================================================

STATO: PRIMA BOZZA COMPLETA, NON PRONTA ALLA PUBBLICAZIONE PUBBLICA.

1. Cosa è incluso
- Homepage, Chi siamo, Servizi, Portfolio, Galleria fotografica con ingrandimento,
  Contatti e sopralluogo gratuito, Privacy policy, Cookie policy.
- Design responsive per desktop/tablet/mobile, SEO base, favicon e anteprima social.
- Modulo contatti PHP con validazione server e invio tramite mail() di Aruba.
- Immagini concettuali SVG LOCALI: non sono fotografie né lavori LOKA.
- Nessun database, WordPress, analytics o libreria esterna necessaria.

2. Informazioni DA CONFERMARE prima di procedere
- Il cliente ha confermato che si tratta di LOKA SRL, Campogalliano (MO),
  operante nel settore pavimenti e rivestimenti (attività ATECO 43.33).
- Logo ufficiale, palette preferita, contatti verificati, ragione sociale completa,
  numero di Partita IVA, sede legale, telefono e area geografica di attività.
- Dati pubblici preliminari, da convalidare con l’azienda: sede legale Via Aldo Moro 27,
  41011 Campogalliano (MO); P. IVA/C.F. 04168140368; REA MO-448629.
  Fonti: ufficiocamerale.it/5054/loka-srl e registroaziende.it/azienda/loka-srl-campogalliano
- Elenco reale dei servizi, storia aziendale, testi e autorizzazione delle foto.
- Informativa privacy e cookie policy da completare/validare professionalmente.
- Disponibilità e titolarità del dominio lokasrl.com (NON verificata mediante registrar).

3. Hosting Aruba consigliato
- Hosting Linux Basic con dominio .com + opzione Caselle Email Illimitate.
- PHP 8.2 o successiva con estensione mbstring attiva.
- Caselle consigliate: info@lokasrl.com, amministrazione@lokasrl.com,
  preventivi@lokasrl.com. Attivazione dal pannello Aruba, NON automatica.
- Ogni casella standard Aruba illimitata per numero ma con 1 GB di spazio:
  aggiungere SpazioMail o GigaMail se il volume di posta è elevato.

4. Come verificare il sito in locale
- Apri index.html nel browser per vedere tutte le pagine.
- Per simulare i percorsi HTTP: nella cartella esegui python -m http.server 8000
  e apri http://localhost:8000
- Il MODULO NON INVIA EMAIL con file:// o con il server HTTP Python.

5. Come pubblicare su Aruba
- Completa dati/immagini e documenti legali PRIMA di pubblicare.
- Carica i file nella cartella web principale del piano Linux via FTP/File Manager.
- Crea le email su Aruba e verifica DNS MX/SPF/DKIM e accesso Webmail.
- Abilita PHP e controlla tramite Strumenti Aruba > Test PHP mail().
- Fai test end-to-end di invio e ricezione form a info@lokasrl.com.
  mail() che ritorna true non garantisce la consegna in casella.
- Dopo approvazione definitiva, RIMUOVI il banner "ANTEPRIMA" e gli avvisi demo,
  sostituisci TUTTE le scene-*.svg con foto vere e aggiorna i testi del portfolio.
- Imposta robots.txt a "Allow: /" e rimuovi <meta name="robots" content="noindex,nofollow">
  da tutte le pagine. Verifica canonical e sitemap prima di indicizzare Google.
- Collega Google Search Console e invia sitemap.xml.

6. Modifica rapida contenuti
- Tutte le pagine sono HTML indipendenti.
- CSS: assets/css/style.css | JS: assets/js/main.js.
- Immagini dimostrative: assets/img/scene-01.svg ... scene-06.svg.
- Il logo "LOKA." è provvisorio e tipografico; sostituire quando arriva l'originale.
- Per cambiare casella di ricezione del form: modifica $to nel file invia-richiesta.php.
- Aggiornare il mittente "no-reply" e autenticazione quando si configura Aruba.

7. Sicurezza e note legali
- Non ospita dati in DB: mail inviata all'azienda.
- Script PHP include anti-spam honeypot, limiti di input, un cooldown di sessione.
- È utile aggiungere un antispam più forte se il form attira spam.
- Privacy/cookie policy sono BOZZE TECNICHE, non pareri legali.
- Verificare conformità dei testi e mantenere aggiornata l'informativa sui trattamenti.
- Inserire i dati obbligatori SRL nel footer prima della pubblicazione.

8. Prezzo di riferimento del preventivo collegato
- Realizzazione: EUR 1.200 una tantum.
- Canone annuale completo: EUR 250/anno, prima annualità addebitata all'avvio.
- Totale primo anno: EUR 1.450, al netto di IVA ove applicabile.
- Comprende primo piano hosting concordato e rinnovo, fino a 4 interventi minori
  all'anno, ma NON nuove pagine o modifiche strutturali senza preventivo.

La distribuzione di questa bozza non costituisce un sito pubblicato o un account attivato.
Il sopralluogo gratuito va confermato da LOKA come politica commerciale.
I servizi specifici mostrati sono proposte editoriali, non un elenco certificato delle lavorazioni.
