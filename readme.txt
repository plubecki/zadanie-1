Praca wykonana przez studentów kierunku Informatyka Stosowana: 

Pawe³ Lubecki nr albumu 187249
Kamil Michalik nr albumu 187439

Jest to kod implementuj¹cy instalacjê nastêpuj¹cych aplikacji: wordpress, telegraf, graphana
Wykorzystywane s¹ trzy ró¿ne maszyny wirtualne. Przed kompilacj¹ nale¿y utworzyæ maszyny i zmieniæ IP w pliku hosts.ini na odpowiadaj¹ce dla wybranych maszyn.
Konieczne równie¿ jest zmienienie prywatnych adresów ip w pliku setup.yml na odpowiadaj¹ce dla wybranych maszyn.

Prawid³owe uruchomienie kodu powinno zainstalowaæ wordpressa na jednej z maszyn przypisanej do web_nodes w pliku hosts.ini oraz zainstalowanie graphany na maszynie
przypisanej do stats_nodes w pliku hosts.ini.
Po³¹czenie z maszyn¹ z zaimplementowan¹ graphana wykonywane by³o przy u¿yciu portu 3000.

Póki co niektórych funkcji nie uda³o siê jeszcze uruchomiæ poprawnie przez to brakuje wykresów, które mia³y byæ stworzone
na podstawie zebranych statystyk z serwera.    
