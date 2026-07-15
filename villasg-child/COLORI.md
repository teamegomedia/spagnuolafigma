# I colori del tema — come funzionano

Guida semplice per capire dove nascono i colori del sito e come si usano.

## 1. Dove sono definiti

I colori "ufficiali" del sito sono scritti **una sola volta** nel file
[`theme.json`](theme.json), sotto `settings.color.palette`.

Ogni colore ha tre informazioni:

| Campo    | Esempio      | A cosa serve                          |
|----------|--------------|---------------------------------------|
| `slug`   | `seablue1`   | il "nome tecnico" usato dal codice    |
| `name`   | `Sea Blue 1` | l'etichetta leggibile (nell'editor)   |
| `color`  | `#005d72`    | il valore reale (HEX)                 |

Questa palette corrisponde **esattamente** a quella del file Figma
(`Villa SG WEBSITE`, frame "COLORI"). Sono 11 colori.

## 2. Da colore a variabile CSS

WordPress prende ogni colore della palette e crea in automatico una
**variabile CSS** usabile ovunque, con questo schema:

```
--wp--preset--color--<slug>
```

Esempio: lo slug `bg` (#f8f6f4) diventa la variabile
`--wp--preset--color--bg`.

Queste variabili NON stanno in un file `.css`: WordPress le scrive
direttamente nella pagina, dentro `<style id="global-styles-inline-css">`.

## 3. Attenzione: il trattino nei nomi con numero

C'è una regola di WordPress da ricordare: se lo slug contiene
**una lettera seguita da un numero**, nella variabile CSS viene aggiunto
un **trattino**.

| Slug in theme.json | Variabile CSS generata          |
|--------------------|---------------------------------|
| `seablue1`         | `--wp--preset--color--seablue-1` |
| `seablue2`         | `--wp--preset--color--seablue-2` |
| `seablue3`         | `--wp--preset--color--seablue-3` |
| `bg`               | `--wp--preset--color--bg` (invariato) |
| `sand-dark`        | `--wp--preset--color--sand-dark` (invariato) |

Quindi nel nostro CSS custom scriviamo sempre `seablue-1`, non `seablue1`.

## 4. Come si usano i colori

Ci sono due modi, entrambi validi:

**A) Nell'editor a blocchi** (pagine, pattern)
Quando scegli un colore, WordPress aggiunge una classe tipo
`has-inverse-background-color` o `has-seablue-1-color`. Non devi fare nulla:
la classe è collegata da sola alla variabile giusta.

**B) Nel CSS del tema** ([`assets/css/theme.css`](assets/css/theme.css))
Richiamiamo la variabile con un valore di scorta (fallback):

```css
color: var(--wp--preset--color--seablue-1, #005d72);
```

Il fallback (`#005d72`) serve solo se la variabile non fosse disponibile.
Deve sempre coincidere col valore in `theme.json`.

## 5. Regola d'oro: modificare i colori dal file

Per cambiare un colore, modifica **`theme.json`** — non l'Editor Stili di
WordPress.

Perché? Se cambi la palette dall'Editor Stili, WordPress **non** aggiorna
`theme.json`: salva una copia nel database (record `wp_global_styles`) che
**scavalca** il file e può creare incoerenze difficili da trovare.

## In breve

```
theme.json (palette)  ->  variabili CSS  ->  classi dei blocchi / theme.css
   (la fonte)              (--wp--...)         (dove si vede il colore)
```

- I colori nascono in `theme.json`.
- Diventano variabili `--wp--preset--color--<slug>` (occhio al trattino
  quando c'è un numero).
- Si usano con le classi dei blocchi o con `var(...)` nel CSS del tema.
- Si modificano **solo** dal file, mai dall'Editor Stili.
