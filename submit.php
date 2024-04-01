<?php
                // Uzimamo dostavljene inpute i deklarisemo ih kao varijable
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
            

                // Ovdje kreiramo file 
                $filename = "Poruka.txt";

                // Otvaramo fajl i upisujemo podatke koje smo dobili
                $file = fopen($filename, "w") or die("Unable to open file!");
                fwrite($file, "Ime: $name\n");
                fwrite($file, "Email: $email\n");
                fwrite($file, "Poruka:\n$message");
                fclose($file);


                // Ovdje dajemo korisnku povratnu informaciju 
                echo "<p style='color: green;'>Poruku možete preuzeti ispod.</p>";
                echo "<p><a href='$filename' download>Preuzmi poruku kao .txt datoteku</a></p>";
?>