<pre><code class="language-python">
# Basisklasse Musikinstrument
class Musikinstrument:
    # Attribute mit Datenkapselung
    __modell = ""
    __hersteller = ""
    __preis = 0.0

    # Konstruktor
    def __init__(self, modell='unbekannt', hersteller='unbekannt', preis=0.0):
        self.__modell = modell
        self.__hersteller = hersteller
        self.__preis = preis

    # Setter- und Getter-Methoden
    def setModell(self, value):
        self.__modell = value

    def getModell(self):
        return self.__modell

    def setHersteller(self, value):
        self.__hersteller = value

    def getHersteller(self):
        return self.__hersteller

    def setPreis(self, value):
        self.__preis = value

    def getPreis(self):
        return self.__preis

    # Eine Methode, die alle Attribute zusammenlegt
    def getDaten(self):
        return (self.__modell, self.__hersteller, self.__preis)

</code></pre>