Praca wykonana przez studentów kierunku Informatyka Stosowana: 

Paweł Lubecki nr albumu 187249
Kamil Michalik nr albumu 187439

Jest to kod implementujący instalację następujących aplikacji: wordpress, telegraf, graphana
Wykorzystywane są trzy różne maszyny wirtualne. Przed kompilacją należy utworzyć maszyny i zmienić IP w pliku hosts.ini na odpowiadające dla wybranych maszyn.
Konieczne również jest zmienienie prywatnych adresów ip w pliku setup.yml na odpowiadające dla wybranych maszyn.

Prawidłowe uruchomienie kodu powinno zainstalować wordpressa na jednej z maszyn przypisanej do web_nodes w pliku hosts.ini oraz zainstalowanie graphany na maszynie
przypisanej do stats_nodes w pliku hosts.ini.
Połączenie z maszyną z zaimplementowaną graphana wykonywane było przy użyciu portu 3000.

Póki co niektórych funkcji nie udało się jeszcze uruchomić poprawnie przez to brakuje wykresów, które miały być stworzone
na podstawie zebranych statystyk z serwera.    
