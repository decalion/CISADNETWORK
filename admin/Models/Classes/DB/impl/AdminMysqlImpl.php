<?php

/**
 * Mysql implement of BD cisadnetwork
 *
 * @author Ismael Caballero
 */
class AdminMysqlImpl extends AbstractDB {

    public function add($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    /**
     * Funcion for close conection
     */
    public function close() {
        $this->conection->closeConection();
    }

    /**
     * Funcion for delete
     * @param type $sql query
     * @return boolean true o false
     */
    public function deleted($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    public function modify($sql) {
        $query = $this->conection->query($sql);
        if ($this->conection->getErrorNum() == 0) {
            return true;
        }
        return false;
    }

    /**
     * GenericSelect
     */
    public function select() {
        
    }

    /**
     * Funcion for get the credencial list
     * @return array with username,password and rol
     */
    public function SelectCredencials() {

        $query = $this->conection->query("SELECT username,password,idroles FROM users");
        $result = array();
        while ($rst = $this->conection->result($query)) {

            $temp = null;
            $user = $rst["username"];
            $pass = $rst["password"];
            $rol = $rst["idroles"];
            $temp = new Login($user, $pass, $rol);
            array_push($result, $temp);
        }

        $this->conection->free($query);
        return $result;
    }

    /**
     * Funcion for get all user data
     * @return array User DTO
     */
    public function selectUserData() {
        $query = $this->conection->query("SELECT * FROM users");
        $result = array();
        while ($rst = $this->conection->result($query)) {

            $temp = new User();
            $temp->setId($rst["idusers"]);
            $temp->setUsername($rst["username"]);
            $temp->setPass($rst["password"]);
            $temp->setName($rst["name"]);
            $temp->setLastname($rst["lastname"]);
            $temp->setEmail($rst["email"]);
            $temp->setAvatarurl($rst["imageurl"]);
            $temp->setIdrol($rst["idroles"]);
            $temp->setRolname($this->selectRolName($rst["idroles"]));
            $temp->setActivemail($rst["activemail"]);
            $temp->setActive($rst["active"]);

            array_push($result, $temp);
        }

        $this->conection->free($query);
        return $result;
    }

    /**
     * Private function for get role name
     * @param type $id of the role
     * @return type string
     */
    private function selectRolName($id) {
        $query = $this->conection->query("SELECT name FROM roles WHERE idroles=$id");

        $rst = $this->conection->result($query);

        //var_dump($rst);

        return $rst['name'];
    }

    /**
     * Select all movie data
     * @return array
     */
    public function selectMoviesData() {
        $query = $this->conection->query("SELECT * FROM  movies");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Movie();
            $temp->setIdmovie($rst['idmovies']);
            $temp->setName($rst['name']);
            $temp->setSinopsi($rst['sinopsi']);
            $temp->setYear($rst['year']);
            $temp->setImage($rst['imageurl']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setActors($this->selectMoviesActors($rst['idmovies']));
            $temp->setDirectors($this->selectDirectorsMovies($rst['idmovies']));

            array_push($result, $temp);
        }
        return $result;
    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectDirectorsMovies($id) {
        $query = $this->conection->query("SELECT iddirectors FROM  directorsmovies WHERE idmovies=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectDirectors($rst['iddirectors']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return \Directors
     */
    private function selectDirectors($id) {
        $query = $this->conection->query("SELECT iddirectors,name,imageurl FROM  directors WHERE iddirectors=$id");
        $rst = $this->conection->result($query);

        $temp = new Directors();
        $temp->setIddirector($rst['iddirectors']);
        $temp->setName($rst['name']);
        $temp->setImageurl($rst['imageurl']);

        return $temp;
    }

    /**
     * Select the actors from the movie
     * @param type $id movie
     * @return array
     */
    private function selectMoviesActors($id) {
        $query = $this->conection->query("SELECT idactors FROM  actorsmovies WHERE idmovies=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectActors($rst['idactors']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * Select all from actor
     * @param type $id actors
     * @return \Actors´
     */
    private function selectActors($id) {
        $query = $this->conection->query("SELECT idactors,name,imageurl FROM  actors WHERE idactors=$id");
        $rst = $this->conection->result($query);

        $temp = new Actors();
        $temp->setIdactors($rst['idactors']);
        $temp->setName($rst['name']);
        $temp->setImage($rst['imageurl']);

        return $temp;
    }

    /**
     * 
     * @param type $sql
     * @return array
     */
    public function selectActorsAdd($sql) {
        $query = $this->conection->query($sql);
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Actors();
            $temp->setIdactors($rst['idactors']);
            $temp->setName($rst['name']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $sql
     * @return array
     */
    public function selectDirectorsAdd($sql) {
        $query = $this->conection->query($sql);
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Directors();
            $temp->setIddirector($rst['iddirectors']);
            $temp->setName($rst['name']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @return array
     */
    public function selectSeriesData() {
        $query = $this->conection->query("SELECT * FROM series");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Series();
            $temp->setIdserie($rst['idseries']);
            $temp->setName($rst['name']);
            $temp->setSinopsi($rst['sinopsi']);
            $temp->setYear($rst['year']);
            $temp->setImageurl($rst['imageurl']);
            $temp->setSeasons($rst['seasons']);
            $temp->setTotalchapters($rst['totalchapters']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setChapters($this->selectChaptersSeries($rst['idseries']));
            $temp->setActors($this->selectSeriesActors($rst['idseries']));
            $temp->setDirectors($this->selectSeriesDirectors($rst['idseries']));

            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectChaptersSeries($id) {
        $query = $this->conection->query("SELECT * FROM chapters WHERE idseries=$id ORDER BY seasonnumber,numberchapter");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Chapters();
            $temp->setName($rst['name']);
            $temp->setNumberchapter($rst['numberchapter']);
            $temp->setSeasonnumber($rst['seasonnumber']);
            $temp->setIdserie($rst['idseries']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectSeriesActors($id) {
        $query = $this->conection->query("SELECT idactors FROM  actorsseries WHERE idseries=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectActors($rst['idactors']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectSeriesDirectors($id) {
        $query = $this->conection->query("SELECT iddirectors FROM  directorsseries WHERE idseries=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectDirectors($rst['iddirectors']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * Select all from Recipes
     * @return array
     */
    public function selectCooksData() {
        $query = $this->conection->query("SELECT * FROM recipes");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Recipes();
            $temp->setIdrecipes($rst['idrecipes']);
            $temp->setName($rst['name']);
            $temp->setImageurl($rst['imageurl']);
            $temp->setDescription($rst['description']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);

            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @return array
     */
    public function selectBooksData() {
        $query = $this->conection->query("SELECT * FROM books");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Books();
            $temp->setIdbooks($rst['idbooks']);
            $temp->setName($rst['name']);
            $temp->setSinopsi($rst['sinopsi']);
            $temp->setYear($rst['year']);
            $temp->setImageurk($rst['imageurl']);
            $temp->setIsbn($rst['isbn']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setAuthors($this->selectBooksAuthors($rst['idbooks']));

            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectBooksAuthors($id) {
        $query = $this->conection->query("SELECT * FROM authorsbooks WHERE idbooks=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectAuthor($rst['idauthors']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @param type $id
     * @return \Author
     */
    private function selectAuthor($id) {
        $query = $this->conection->query("SELECT * FROM authors WHERE idauthors=$id");
        $rst = $this->conection->result($query);
        $temp = new Author();
        $temp->setIdauthor($rst['idauthors']);
        $temp->setName($rst['name']);
        $temp->setImageurl($rst['imageurl']);

        return $temp;
    }

    /**
     * 
     * @param type $sql
     * @return array
     */
    public function selectAuhorsAdd($sql) {
        $query = $this->conection->query($sql);
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Author();
            $temp->setIdauthor($rst['idauthors']);
            $temp->setName($rst['name']);
            array_push($result, $temp);
        }

        return $result;
    }

    /**
     * 
     * @return array
     */
    public function selectNewsData() {
        $query = $this->conection->query("SELECT * FROM news ORDER BY date DESC");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new News();
            $temp->setIdnew($rst['idnews']);
            $temp->setIduser($rst['idusers']);
            $temp->setName($rst['name']);
            $temp->setImageurl($rst['imageurl']);
            $temp->setDescription($rst['description']);
            $temp->setDate($rst['date']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setAuthor($this->selectUserName($rst['idusers']));
            array_push($result, $temp);
        }
        return $result;
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    private function selectUserName($id) {
        $query = $this->conection->query("SELECT name FROM users WHERE idusers=$id");
        $rst = $this->conection->result($query);

        return $rst['name'];
    }

    /**
     * 
     * @return array
     */
    public function selectMusicData() {
        $query = $this->conection->query("SELECT * FROM groups");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = new Group();
            $temp->setIdgroup($rst['idgroups']);
            $temp->setName($rst['name']);
            $temp->setYear($rst['year']);
            $temp->setImageurl($rst['imageurl']);
            $temp->setAverage($rst['average']);
            $temp->setTotalvotes($rst['totalvotes']);
            $temp->setSinger($this->selectGroupsMembers($rst['idgroups']));
            $temp->setCds($this->selectcds($rst['idgroups']));

            array_push($result, $temp);
        }
        return $result;
    }
    
    private function selectcds($id){
        $query = $this->conection->query("SELECT * FROM cds WHERE idgroups=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp=new CDS();
            $temp->setIdcds($rst['idcds']);
            $temp->setName($rst['name']);
            $temp->setYear($rst['year']);
            $temp->setImageurl($rst['imageurl']);
            $temp->setSongs($this->selectCdSongs($id, $rst['idcds']));
            array_push($result, $temp);
            
         }
        return $result;
    }
    
    private function selectCdSongs($idgroup,$idcd){
        $query = $this->conection->query("SELECT idsongs,name FROM songs WHERE idgroups=$idgroup AND idcds=$idcd");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp=new Songs();
            $temp->setIdsongs($rst['idsongs']);
            $temp->setName($rst['name']);
            array_push($result, $temp);
            
         }
        return $result;

    }

    /**
     * 
     * @param type $id
     * @return array
     */
    private function selectGroupsMembers($id) {
        $query = $this->conection->query("SELECT * FROM groupsmembers WHERE idgroups=$id");
        $result = array();
        while ($rst = $this->conection->result($query)) {
            $temp = $this->selectSingers($rst['idsingers']);
            array_push($result, $temp);
        }

        return $result;
    }
    
    
    
   /**
    * 
    * @param type $id
    * @return \Singer
    */
    private function selectSingers($id) {
        $query = $this->conection->query("SELECT * FROM singers WHERE idsingers=$id");
        $rst = $this->conection->result($query);

        $temp = new Singer();
        $temp->setIdsinger($rst['idsingers']);
        $temp->setName($rst['name']);
        $temp->setImageurl($rst['imageurl']);

        return $temp;
    }

}
