Praca wykonana przez student�w kierunku Informatyka Stosowana: 

Pawe� Lubecki nr albumu 187249
Kamil Michalik nr albumu 187439

Jest to kod implementuj�cy instalacj� nast�puj�cych aplikacji: wordpress, telegraf, graphana
Wykorzystywane s� trzy r�ne maszyny wirtualne. Przed kompilacj� nale�y utworzy� maszyny i zmieni� IP w pliku hosts.ini na odpowiadaj�ce dla wybranych maszyn.
Konieczne r�wnie� jest zmienienie prywatnych adres�w ip w pliku setup.yml na odpowiadaj�ce dla wybranych maszyn.

Prawid�owe uruchomienie kodu powinno zainstalowa� wordpressa na jednej z maszyn przypisanej do web_nodes w pliku hosts.ini oraz zainstalowanie graphany na maszynie
przypisanej do stats_nodes w pliku hosts.ini.
Po��czenie z maszyn� z zaimplementowan� graphana wykonywane by�o przy u�yciu portu 3000.

P�ki co niekt�rych funkcji nie uda�o si� jeszcze uruchomi� poprawnie przez to brakuje wykres�w, kt�re mia�y by� stworzone
na podstawie zebranych statystyk z serwera.    
