<h1>Esercizio di oggi: <strong>Intro ORM, Model e Eloquent</strong></h1>
<h3>Descrizione:</h3>
<ul>
   <li>
      Impostare la connessione al database (creato da voi in phpMyAdmin) attraverso il file .env (ricordatevi di far ripartire il serve in caso di modifiche al .env se state già servendo l’applicazione)
   </li>
   <li>
      Creazione di un model ‘Student’, che utilizzerete poi per fare le queries al db ( Ricordate il nome del model al singolare)
   </li>
   <li>
      Creazione della struttura di una tabella ‘studenti’ utilizzando le migrations (sperimentate con migrate, rollback, reset e refresh)
   </li>
   <li>
      Non complicatevi per ora la vita con la creazione di troppe colonne: bastano una colonna ‘name’ e una ‘description’ come fatto insieme in lezione
   </li>
   <li>
      Una volta creata la struttura definitiva della tabella inserite alcuni studenti con dati di esempio usando phpMyAdmin
   </li>
   <li>
      Provate poi a fare le queries al DB usando Eloquent e il model Student all’interno di un controller creato da voi, sperimentando all(), where(), OrderBy(), get(), limit(), first(), find()
   </li>
</ul>