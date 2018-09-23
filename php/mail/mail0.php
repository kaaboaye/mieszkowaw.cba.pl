<form action="mail.php" method="post">
    <fieldset>
    <legend>Formularz kontaktowy</legend>
                
        <label for="imie">Imię/nick:</label>
        <input type="text" id="imie" name="imie"/>
                    
        <label for="mail">Twój e-mail:</label>
        <input type="text" id="mail" name="mail"/>
                    
        <label for="temat">Temat: </label>
        <input type="text" id="temat" name="temat"/>
                    
        <label for="wiadomosc">Wiadomość:</label>
        <textarea id="wiadomosc" name="wiadomosc" cols="40" rows="10"></textarea>
                    
        <input type="submit" value="Wyślij" id="send" name="send" />
    </fieldset>
</form>