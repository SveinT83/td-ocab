# td-ocab - TaskHub Module for Damage Assessment and Repairs

## 📌 1. Purpose
**td-ocab** is a module in TaskHub designed to handle the reception, assessment, testing, technical cleaning, and potential repair of equipment received from insurance company partners like Ocab AS. The module ensures a structured and efficient process from registration to case closure.

Each project (case) can contain multiple devices.
Devices are individually assessed, but approval and invoicing are handled at the project level.

### **Key Features**
- **Receiving and registering equipment** linked to a reference number (customer project number).
- **Documenting damages** with images.
- **Automated evaluation** of the need for technical cleaning.
- **Testing and troubleshooting** of the equipment.
- **Creating repair offers** if the device can be repaired.
- **Approval and reporting** of assessments and repairs.
- **Generating PDF reports** for the customer.
- **Invoicing and closing** of projects.

---

## 🛠 2. Workflow - Process Flow
### 🔹 **Step 1: Receiving Equipment**
- A **new project** is registered in the system.
- The **customer's project number** is entered as a reference.
- Equipment is registered under this project.
- Each device gets a **unique ID number** and is linked to a customer and project.

### 🔹 **Step 2: Damage Assessment**
- The technician registers the **damage type** (water damage, fire damage, other) using a dropdown field.
- The technician can **add images** for documentation.
- It is determined whether the device can be tested immediately or needs **technical cleaning**.
- If technical cleaning is not required, the technician can skip it but must provide a reason.

### 🔹 **Step 3: Technical Cleaning** *(If Necessary)*
- Automatically performed if:
  - The device has a value of **500,- or more** and cannot be tested before cleaning.
  - The technician has marked that cleaning is required.
- The technician logs that technical cleaning has been performed.

### 🔹 **Step 4: Testing and Troubleshooting**
- The technician receives a **"Proceed with Caution" notice** before testing with power.
- If the device is functional: ✅ **Marked as "OK"** and sent for approval.
- If the device **does not work**:
  - The technician determines if it can be repaired.
  - If the device **cannot be repaired**, the technician must specify a reason.

### 🔹 **Step 5: Repair Offer**
- If the device can be repaired:
  - The technician fills out a form with a **cost estimate**.
  - If the repair must be done by an external workshop, the provider's name and estimated cost are specified.
  - The customer receives an offer and can approve or decline.

### 🔹 **Step 6: Approval of Assessment**
- Once all devices in a project have been assessed, an **email is sent to the supervisor**.
- The supervisor reviews and approves the case.
- After approval, **PDF reports are generated per device**.
- Reports are sent as **email attachments** to the customer.

### 🔹 **Step 7: Repair Process (If Approved)**
- The system creates a **repair case**.
- The technician checks whether spare parts are available.
- Once the parts are in stock, the repair is performed.
- When the technician marks the device as repaired and tested, **the supervisor must approve it**.
- After approval, a message is sent to the customer.

### 🔹 **Step 8: Project Closure and Invoicing**
- When the customer has picked up the device or the case is closed, the project is marked as **completed**.
- The system sends an email to the finance department with the invoice details, including the reference to Ocab’s project number.
- The project is archived.

---

## 🔄 3. Project Status Flow
Each device and project can have the following statuses:
1. **Received** - The device has been registered in the system.
2. **Under Assessment** - A technician is evaluating damages.
3. **Pending Approval** - The technician has completed the assessment, and a supervisor must approve it.
4. **Repair in Progress** - The device has been approved for repair and is awaiting spare parts or repair execution.
5. **Completed & Ready for Pickup** - The device has been repaired and tested.
6. **Closed** - The project is completed and archived.

---

## 👥 4. Roles and Access Control
| Role | Access Level |
|-------|-------------|
| **Technician** | Register equipment, perform assessments, testing, technical cleaning, and create repair offers. |
| **Supervisor** | Approve assessments, approve repairs, and generate reports. |
| **Finance** | Receives invoice details and handles invoicing. |
| **Customer** | Receives PDF reports and repair offers. |

---

**Future Improvements and Enhancements:**
- **Inventory Management**: Can be implemented later and integrated with Tripletex.
- **Tripletex Integration**: Possibility to export invoice details.
- **Audit Log**: Full tracking of status changes.

---

## 📞 Contact
For questions or suggestions for improvements, please contact the **TaskHub development team**.


#Norwegian
# td-ocab - TaskHub-modul for skadevurdering og reparasjon

## 📌 1. Formål
**td-ocab** er en modul i TaskHub som håndterer mottak, vurdering, testing, teknisk rens og eventuell reparasjon av utstyr levert inn av forsikringsselskapenes partnere, som Ocab AS. Modulen sikrer en oversiktlig og strømlinjeformet prosess fra registrering til avsluttet sak.
Hvert prosjekt (sak) kan inneholde flere enheter.
Enheter vurderes individuelt, men godkjenning og fakturering håndteres på prosjektnivå.

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
