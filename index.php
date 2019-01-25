<?php

require "form.php";



$form = new Form();



?>



<?php

//Document form

echo $form->create('#'); // ouverture du formulaire
echo $form->inputText('text', 'ChaineCaractère'); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->selectOpen('genre'); // créer un select de type texte avec comme valeur les choix
echo $form->option('Homme'); // création des options 1
echo $form->option('Femme'); // création des options 2
echo $form->textarea('Question:' , '10', '50'); // créer un champ de texte pour une question
echo $form->inputRadio('1'); // liste radio
echo $form->inputRadio('2'); // liste radio
echo $form->inputCheckbox('A'); // liste Checkbox
echo $form->inputCheckbox('B'); // Liste checkbox
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier




?>

