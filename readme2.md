Thema Online Kunst Shop für Acrylgemälde, Zeichnungen und Street-art
erstelle so ausführlich wie möglich:

1. zuerst ein Entity-Relationship-Diagram und
2. anschließend ein Relationales Schema.
3. UML Use Case Diagramm
4. UML Activity Diagramm
5. UML Class Diagramm
6. UML Sequence
7. sql der notwendigen tabellen
8. Entity-Relationship-Diagramm (ERD)

    ## Ein Entity-Relationship-Diagramm (ERD) für einen Online Kunst Shop für Acrylgemälde, Zeichnungen und Street-art könnte wie folgt aussehen:

    javascript

[Kunde] ---< gibt auf >--- [Bestellung]
[Bestellung] ---< enthält >--- [Bestellungsdetails]
[Bestellungsdetails] ---< bezieht sich auf >--- [Produkt]
[Produkt] ---< gehört zu >--- [Kategorie]
[Künstler] ---< erstellt >--- [Produkt]

## 2. Relationales Schema

Das relationale Schema für das oben beschriebene ERD könnte wie folgt aussehen:

Kunde (KundeID, Name, Email, Adresse, Telefonnummer)

Bestellung (BestellungID, KundeID, Bestelldatum, Gesamtpreis)

Bestellungsdetails (BestellungsdetailsID, BestellungID, ProduktID, Menge, Einzelpreis)

Produkt (ProduktID, Name, Beschreibung, Preis, KategorieID, KünstlerID)

Kategorie (KategorieID, Name)

Künstler (KünstlerID, Name, Biografie) 3. UML Use Case Diagramm

Ein UML Use Case Diagramm zeigt die Interaktionen zwischen Benutzern und dem System. Für einen Online Kunst Shop könnte es wie folgt aussehen:
javascript

[ Kunde ] --- (Produkt durchsuchen)
[ Kunde ] --- (Produkt in Warenkorb legen)
[ Kunde ] --- (Bestellung aufgeben)
[ Kunde ] --- (Bestellung bezahlen)
[ Künstler ] --- (Produkt hinzufügen)
[ Künstler ] --- (Produkt bearbeiten)
[ Administrator ] --- (Kategorie verwalten) 4. UML Activity Diagramm

Ein UML Activity Diagramm zeigt den Ablauf von Aktivitäten. Für das Aufgeben einer Bestellung könnte es wie folgt aussehen:
javascript

Start -> [Kunde durchsucht Produkte] -> [Kunde legt Produkt in Warenkorb] -> [Kunde gibt Bestellung auf] -> [Bestellung wird gespeichert] -> [Kunde bezahlt Bestellung] -> Ende

5. UML Class Diagramm

Ein UML Class Diagramm zeigt die Klassen und ihre Beziehungen. Für einen Online Kunst Shop könnte es wie folgt aussehen:
javascript

+----------------+ +----------------+
| Kunde | | Bestellung |
+----------------+ +----------------+
| - KundeID | | - BestellungID |
| - Name | | - KundeID |
| - Email | | - Bestelldatum |
| - Adresse | | - Gesamtpreis |
| - Telefonnummer| +----------------+
+----------------+ | + enthält Bestellungsdetails |
| + gibt Bestellung auf +----------------+
+----------------+
+----------------+
+----------------+ | Bestellungsdetails |
| Künstler | +----------------+
+----------------+ | - BestellungsdetailsID |
| - KünstlerID | | - BestellungID |
| - Name | | - ProduktID |
| - Biografie | | - Menge |
+----------------+ | - Einzelpreis |
| + erstellt Produkt +----------------+
+----------------+
+----------------+
+----------------+ | Produkt |
| Kategorie | +----------------+
+----------------+ | - ProduktID |
| - KategorieID | | - Name |
| - Name | | - Beschreibung |
+----------------+ | - Preis |
| + enthält Produkte | - KategorieID |
+----------------+ | - KünstlerID |
+----------------+
| + gehört zu Kategorie |
| + erstellt von Künstler |
+----------------+

6. UML Sequence Diagramm

ein UML Sequence Diagramm zeigt die Interaktion zwischen Objekten in einer bestimmten Reihenfolge. Für das Aufgeben einer Bestellung könnte es wie folgt aussehen:
javascript

Kunde -> System: durchsucht Produkte
Kunde -> System: legt Produkt in Warenkorb
Kunde -> System: gibt Bestellung auf
System -> Datenbank: speichert Bestellung
System -> Kunde: bestätigt Bestellung
Kunde -> System: bezahlt Bestellung

7. SQL der notwendigen Tabellen

Hier ist das SQL-Skript zur Erstellung der notwendigen Tabellen:
sql

CREATE TABLE Kunde (
KundeID INT PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(100),
Email VARCHAR(100),
Adresse VARCHAR(255),
Telefonnummer VARCHAR(20)
);

CREATE TABLE Künstler (
KünstlerID INT PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(100),
Biografie TEXT
);

CREATE TABLE Kategorie (
KategorieID INT PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(100)
);

CREATE TABLE Produkt (
ProduktID INT PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(100),
Beschreibung TEXT,
Preis DECIMAL(10, 2),
KategorieID INT,
KünstlerID INT,
FOREIGN KEY (KategorieID) REFERENCES Kategorie(KategorieID),
FOREIGN KEY (KünstlerID) REFERENCES Künstler(KünstlerID)
);

CREATE TABLE Bestellung (
BestellungID INT PRIMARY KEY AUTO_INCREMENT,
KundeID INT,
Bestelldatum DATETIME,
Gesamtpreis DECIMAL(10, 2),
FOREIGN KEY (KundeID) REFERENCES Kunde(KundeID)
);

CREATE TABLE Bestellungsdetails (
BestellungsdetailsID INT PRIMARY KEY AUTO_INCREMENT,
BestellungID INT,
ProduktID INT,
Menge INT,
Einzelpreis DECIMAL(10, 2),
FOREIGN KEY (BestellungID) REFERENCES Bestellung(BestellungID),
FOREIGN KEY (ProduktID) REFERENCES Produkt(ProduktID)
);

Diese Diagramme und das SQL-Skript bieten eine umfassende Darstellung der Struktur und Interaktionen in einem Online Kunst Shop für Acrylgemälde, Zeichnungen und Street-art.
