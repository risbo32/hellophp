<?php

include "etudiant.php";

class EtudiantManager {

  public function addStudent(Etudiant $etudiant ){

    if ($etudiant == null){
        throw new Exception ("Je ne peux pas sauvegarder un etudiant qui n'existe pas");

      else {
            //Sauvegarder etudiant

      } 
      
      
    }
  }


  public function findStudent(Etudiant $etudiant){
        echo ("Je trouve un etudiant \n");
  }


  public function deleteStudent (Etudiant $etudiant){
      echo "J'efface une entree d'etudiant \n";
  }

}