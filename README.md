<h2>Esercizio di oggi: <strong>Intro ORM, Model e Eloquent</strong></h2>
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

<hr>

<h2>Esercizio di oggi: <strong>Laravel CRUD parte 1</strong></h2>
<h3>Descrizione (scegliere un tipo di entità che più preferite ed eseguire le operazioni CRUD viste stamattina in lezione):</h3>
<ul>
   <li>
      Gestite la migration per la tabella dell’entità che avete scelto
   </li>
   <li>
      Gestire il model per l’entità (ricordate $fillable)
   </li>
   <li>
      Definite una Route::resource() per la vostra entità
   </li>
   <li>
      Definite un Resource Controller con --resource
   </li>
   <li>
      Creare una index per la vostra entità
   </li>
   <li>
      Creare una create per la vostra entità
   </li>
   <li>
      Gestire lo store della vostra entità
   </li>
   <li>
      Creare la show per la vostra entità
   </li>
</ul>

<hr>

<h2>Esercizio di oggi: <strong>Laravel CRUD parte 2</strong></h2>
<h3>Descrizione (continuare a lavorare sull’esercizio di ieri completando le operazioni di CRUD):</h3>
<ul>
   <li>
      Edit
   </li>
   <li>
      Update
   </li>
   <li>
      Delete
   </li>
</ul>

<hr>

<h2>Esercizio di oggi: <strong>Laravel Seeders</strong></h2>
<h3>Descrizione:</h3>
<ul>
   <li>
      Scegliete due nuove entità DB, create le opportune migrazioni per queste due entità e dopo di che provate a creare i seeders per popolare con dati fake, come fatto questa mattina in classe.
   </li>
</ul>