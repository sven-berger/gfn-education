<pre><code class="language-python">

# Abgeleitete Klasse
from Musikinstrument import Musikinstrument

class Gitarre(Musikinstrument):

    # Attribut
    __grösse = ''

    # Methoden
    # Konstruktor
    def __init__(self, modell='unbekannt', hersteller='unbekannt',
                 preis=0.0, grösse='unbekannt'):
        # Aufruf des Konstruktors in der Basisklasse
        super().__init__(modell, hersteller, preis)
        self.__grösse = grösse

    def getGrösse(self):
        return self.__grösse

    def setGrösse(self, value):
        self.__grösse = value

    # Überschreiben der Methode getDaten() override
    def getDaten(self):
        # Zugriff auf die Methode gleichen Namens in der Basisklasse
        daten = super().getDaten() + (self.__grösse,)
        return daten   

</code></pre>