# Z1: Web node + DB + Stats

Zadanie wykonane w grupie dwóch osób na zajęcia z przedmiotu Administracja systemami komputerowymi.

# setup.yml

Jest to kod implementujący instalację następujących aplikacji: wordpress, telegraf, graphana
Wykorzystywane są trzy różne maszyny wirtualne. 

# Instalacja

Przed uruchomieniem należy utworzyć maszyny i zmienić IP w pliku hosts.ini na odpowiadające dla wybranych maszyn.
Konieczne również jest zmienienie prywatnych adresów ip w pliku setup.yml na odpowiadające dla wybranych maszyn.

# Uruchomienie

Prawidłowe uruchomienie kodu powinno zainstalować wordpressa na jednej z maszyn przypisanej do web_nodes w pliku hosts.ini oraz zainstalowanie graphany na maszynie przypisanej do stats_nodes w pliku hosts.ini.
Połączenie z maszyną z zaimplementowaną graphana wykonywane było przy użyciu portu 3000.

# Rezultat

Po uruchomieniu za pomocą ansible pliku setup.yml powinniśmy otrzymać maszynę z działającym wordpressem oraz kolejna maszyne z telegrafem i graphaną. Póki co niektórych funkcji nie udało się jeszcze uruchomić poprawnie przez to brakuje wykresów, które miały być stworzonena podstawie zebranych statystyk z serwera. 

# Autorzy

Paweł Lubecki nr albumu 187249
Kamil Michalik nr albumu 187439
