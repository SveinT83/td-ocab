# td-ocab - TaskHub-modul for skadevurdering og reparasjon

## 📌 1. Formål
**td-ocab** er en modul i TaskHub som håndterer mottak, vurdering, testing, teknisk rens og eventuell reparasjon av utstyr levert inn av forsikringsselskapenes partnere, som Ocab AS. Modulen sikrer en oversiktlig og strømlinjeformet prosess fra registrering til avsluttet sak.

### **Hovedfunksjoner**
- **Mottak og registrering** av utstyr knyttet til et referansenummer (kundens prosjektnummer).
- **Dokumentasjon av skader** med bilder.
- **Automatisk vurdering** av behov for teknisk rens.
- **Testing og feilsøking** av utstyret.
- **Opprettelse av reparasjonstilbud** dersom enheten kan repareres.
- **Godkjenning og rapportering** av vurderinger og reparasjoner.
- **Utsendelse av PDF-rapporter** til kunde.
- **Fakturering og avslutning** av prosjekter.

---

## 🛠 2. Workflow - Prosessflyt
### 🔹 **Steg 1: Mottak av utstyr**
- Brukeren registrerer **et nytt prosjekt** i systemet.
- Kunden sitt **prosjektnummer** legges inn som referanse.
- Utstyr registreres under dette prosjektet.
- Hver enhet får et **unikt ID-nummer** og tilknyttes en kunde og prosjekt.

### 🔹 **Steg 2: Skadevurdering**
- Tekniker registrerer **skadetype** (vannskade, brannskade, annet) via et dropdown-felt.
- Tekniker kan **legge til bilder** som dokumentasjon.
- Det vurderes om enheten kan testes umiddelbart eller om den må gjennom **teknisk rens**.
- Hvis teknisk rens ikke er nødvendig, kan tekniker hoppe over, men må skrive en begrunnelse.

### 🔹 **Steg 3: Teknisk rens** *(Hvis nødvendig)*
- Utføres automatisk dersom:
  - Enheten har en verdi over **500,-** og ikke kan testes før rens.
  - Teknikeren har merket av for behov for rens.
- Teknikeren registrerer at teknisk rens er utført.

### 🔹 **Steg 4: Testing og feilsøking**
- Tekniker får opp en **"Vær varsom"-plakat** før testing med strøm.
- Hvis enheten fungerer: ✅ **Markeres som "OK"** og sendes til godkjenning.
- Hvis enheten **ikke fungerer**:
  - Teknikeren vurderer om den kan repareres.
  - Teknikeren angir en årsak hvis enheten **ikke kan repareres**.

### 🔹 **Steg 5: Reparasjonstilbud**
- Hvis enheten kan repareres:
  - Teknikeren fyller ut et skjema med **kostnadsestimat**.
  - Hvis reparasjonen må utføres av eksternt verksted, angis navn på leverandør og estimerte kostnader.
  - Kunde får tilbud og kan godkjenne eller avvise.

### 🔹 **Steg 6: Godkjenning av vurdering**
- Når alle enheter i prosjektet er ferdig vurdert, sendes en **epost til overhode**.
- Overhode kan gjennomgå saken og godkjenne.
- Etter godkjenning genereres **PDF-rapporter per enhet**.
- Rapportene sendes som e-postvedlegg til kunden.

### 🔹 **Steg 7: Reparasjon (Hvis godkjent)**
- Systemet oppretter en **reparasjonssak**.
- Teknikeren sjekker om reservedeler er tilgjengelig.
- Når delene er på lager, utføres reparasjonen.
- Når tekniker markerer enheten som reparert og testet, må **overhode godkjenne**.
- Etter godkjenning sendes melding til kunden.

### 🔹 **Steg 8: Avslutning og fakturering**
- Når kunden har hentet utstyret eller saken er avsluttet, markeres prosjektet som **ferdig**.
- Systemet sender ut en epost til økonomiavdelingen med fakturagrunnlag, inkludert referansen til Ocab sitt prosjektnummer.
- Prosjektet arkiveres.

---

## 🔄 3. Statusflyt for et prosjekt
Hver enhet og hvert prosjekt kan ha følgende statuser:
1. **Mottatt** - Enheten er registrert i systemet.
2. **Under vurdering** - Tekniker er i gang med å vurdere skader.
3. **Venter på godkjenning** - Tekniker har ferdigstilt vurdering, og overhode må godkjenne.
4. **Reparasjon pågår** - Enheten er godkjent for reparasjon og venter på reservedeler eller utføring.
5. **Ferdig & klar for henting** - Enheten er reparert og testet.
6. **Avsluttet** - Prosjektet er ferdig og arkivert.

---

## 👥 4. Roller og tilgang
| Rolle | Tilgangsnivå |
|-------|-------------|
| **Tekniker** | Registrere utstyr, utføre vurderinger, testing, teknisk rens, og opprette reparasjonstilbud. |
| **Overhode** | Godkjenne vurderinger, godkjenne reparasjoner, og generere rapporter. |
| **Økonomi** | Mottar fakturagrunnlag og håndterer fakturering. |
| **Kunde** | Får tilsendt PDF-rapporter og tilbud på reparasjon. |

---

**Forbedringer og videre utvikling:**
- **Lagerstyring**: Kan implementeres senere og integreres med Tripletex.
- **Tripletex-integrasjon**: Mulighet for eksport av fakturagrunnlag.
- **Revisjonslogg**: Full historikk for statusendringer.

---

## 📞 Kontakt
Hvis du har spørsmål eller ønsker forbedringer til systemet, ta kontakt med utviklerteamet i **TaskHub**.
